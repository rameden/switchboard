<?php
require_once "web/autoload.php";
require_once "includes/options.php";
require_once "includes/option.php";
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
respond( '[*:url]', function( $request, $response, $app ) {
	// create slug is from Plymouth State's functions
	 $app->createSlug = function($str){
		$find = array(
			'/[ \/\\\+\=]/',
			'/_+/',
			'/[^a-zA-Z0-9\_\-]/'
		);

		$replace = array(
			'-',
			'_',
			''
		);

		return strtolower(preg_replace($find,$replace,$str));
	};//end createSlug
	
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
	 
	// little bit of a hack for a log in system
		$wpid="";
		foreach ($_COOKIE as $key => $val){
			if (preg_match( "/wordpress_logged/i", $key)){
				$temp = explode("|", $val);
				$wpid = $temp[0];
				break;
			}
		}	

		$sql = "SELECT * FROM switchboard_admin WHERE wpid=? AND deleted IS NULL";
		$args = array($wpid);
		$result = $app->clean(TDC::db('rcameden')->GetAll($sql, $args));


		if ($result[0]["wpid"]){
			$app->admin = true;
		}
		else{
			$app->admin = false;
		}

		$app->admin = true;
	// end log in system	
	
	$tmp = ($request->params('url'));
	$url = $tmp['url'];

	$app->tpl = new TDCSmarty;
	$app->options = new options();	

	$app->tpl->assign('base_url', "/~tlferm/switchboard/switchboard");
	$app->tpl->assign('options', $app->options);
	$app->tpl->assign('admin', $app->admin);


});

respond( 'GET', '/?', function( $request, $response, $app ) {
	$app->tpl->display('index.tpl');
});

respond( 'GET', '/admin/?', function( $request, $response, $app ) {
	if ($app->admin){
		$app->tpl->display('admin.tpl');
	}
	else{
		$response->back();
	}
});

respond( 'GET', '/wpid/?', function( $request, $response, $app ) {
	$wpid="";
	foreach ($_COOKIE as $key => $val){
		if (preg_match( "/wordpress_logged/i", $key)){
			$temp = explode("|", $val);
			$wpid = $temp[0];
		}
	}
	echo 'Your wpid is "' . $wpid . '"<br>' . "If it is blank that is because you aren't loged into the right place";
});
respond( 'GET', '/news?', function( $request, $response, $app ) {
	$app->tpl->display('news.tpl');
});
//
/*************** POST ****************/
//

respond( 'POST', '/admin/add/?', function( $request, $response, $app ) {

	$department = $_POST["department"];
	$phone_number = $_POST["phone_number"];
	$slug = $app->createSlug($department);
	$sql = "SELECT MAX(id) as id FROM switchboard_options WHERE deleted IS NULL";
	$result = $app->clean(TDC::db('rcameden')->GetAll($sql));
	$id = $result[0]["id"] + 1;

	$leading_letter = strtoupper(substr($department,0,1));

	$args = array("id"=>$id,"department"=>$department,"phone_number"=>$phone_number,"department_slug"=>$slug,"leading_letter"=>$leading_letter);

	$option = new option($args);

	$option->save("insert");

	$response->back();

});

respond( 'POST', '/admin/delete/?', function( $request, $response, $app ) {
	$id = $request->data[0];

	$option = option::get($id);

	$option->delete();

});
respond( 'POST', '/admin/?', function( $request, $response, $app ) {
	$id = $request->data[0];
	$department = $request->data[1];
	$phone_number = $request->data[2];
	
	$option = option::get($id);

	$option->department = $department;
	$option->phone_number = $phone_number;

	$option->save();

});

$app_routes = array();
/*
foreach( $app_routes as $base ) {
	with( "/{$base}", $GLOBALS['BASE_DIR'] . "/routes/{$base}.php" );
}//end foreach
 */
dispatch( $_SERVER['PATH_INFO'] );
