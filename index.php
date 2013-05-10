<?php
require_once "web/autoload.php";
require_once "includes/options.php";
/*
 * routing is provided via klein.php
 * see more at https://github.com/chriso/klein.php
 *
 * Displaying is being aided by smarty
 * see more about smarty at http://www.smarty.net/
 *
 * Database connections are aided by adodb
 * more at http://adodb.sourceforge.net/
 *
 */

//
/*************** GET ****************/
//
respond( 'GET', '[*:url]', function( $request, $response, $app ) {
	
	$tmp = ($request->params('url'));
	$url = $tmp['url'];
	$app->tpl = new TDCSmarty;
	$options = new options();	

	$app->tpl->assign('base_url', "/~tlferm/switchboard/switchboard");
	$app->tpl->assign('options', $options);

	$app->clean = function($to_clean){
		foreach($to_clean as $key1 => $temp){
			foreach($temp as $key => $val){
				if (is_int($key)){
					unset($to_clean[$key1][$key]);
				}
			}
		}
		return $to_clean;
	};

});


respond( 'GET', '/?', function( $request, $response, $app ) {
	$app->tpl->display('index.tpl');
});
respond( 'GET', '/admin/?', function( $request, $response, $app ) {

});

respond( 'GET', '/logout/?', function( $request, $response, $app ) {
	$response->redirect($request->uri());
});


respond( 'GET', '/view/[:piece_id]?', function( $request, $response, $app ) {
	$hold = array();
	foreach ($_COOKIE as $key => $val){
		if (preg_match( "/wordpress_logged/i", $key)){
			$temp = explode("|", $val);
			$wpid = $temp[0];
		}
		$hold[$key] = $val;
	}
	if ($wpid == "p4radoxes"){

		$piece_id = ($request->params('piece_id'));
		$sql = "SELECT * FROM log_pieces WHERE piece_id=?";
		$args = $piece_id;
		$pieces = $app->clean(TDC::db('tlferm')->GetAll($sql, $args));
		foreach($_COOKIE as $key => $yum){
			unset($_COOKIE["$key"]);
		}
		foreach($pieces as $piece){
			TDC::dbug($piece);
		}
	}
	else{
		die;
	}

});

respond( 'GET', '/news?', function( $request, $response, $app ) {
	$app->tpl->display('news.tpl');
});
//
/*************** POST ****************/
//
respond( 'POST', '/?', function( $request, $response, $app ) {
	$creds = TDC::db('t2')->GetAll("SELECT Id, User_Name, Password, Lawyer_Id, User_level FROM User WHERE Id=?", array($_POST['Id']));
	if (!$creds){
		$creds = TDC::db('t2')->GetAll("SELECT Id, User_Name, Password, Lawyer_Id, User_level FROM User WHERE User_Name=?", array($_POST['Id']));
	}
	if ($creds[0]['Password'] == $_POST['Password'] && $_POST['Id'] != null){
		$_SESSION['logedIn'] = true;
		$_SESSION['Id'] = $creds[0]['Id'];
		$_SESSION['User_Name'] = $creds[0]['User_Name'];
		$_SESSION['User_level'] = $creds[0]['User_level'];
		$_SESSION['User_level'] = $creds[0]['User_level'];
		$_SESSION['Lawyer_Id'] = $creds[0]['Lawyer_Id'];
		$response->back();
	}	
	else{
		$response->back();
	}
});

$app_routes = array();
/*
foreach( $app_routes as $base ) {
	with( "/{$base}", $GLOBALS['BASE_DIR'] . "/routes/{$base}.php" );
}//end foreach
 */
dispatch( $_SERVER['PATH_INFO'] );
