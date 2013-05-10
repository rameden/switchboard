<?php
require_once "passwords.php";
class TDC {

	public function TDCSmarty(){
		
		require_once '/home/PLYMOUTH/tlferm/web/Smarty/Smarty.class.php';

		$tpl = new Smarty();

		$tpl->setTemplateDir('./templates');
		$tpl->setCompileDir('/home/PLYMOUTH/tlferm/web/Smarty/templates_c');
		$tpl->setCacheDir('/home/PLYMOUTH/tlferm/web/Smarty/cache');
		$tpl->setConfigDir('/home/PLYMOUTH/tlferm/web/Smarty/configs');
		
		return $tpl;	
	}

	public function dbug($var){
		new dBug($var);
	}

	public function db($database){
		$username = 'rcameden';
		$password = passwords::db();
		$conn = &ADONewConnection('mysql'); 
		$conn->PConnect('localhost',$username,$password,$database);
		return $conn;
	}

	public function form_names(){
		$type = TDC::db('t2')->GetAll("SELECT * FROM Form_Type");
		foreach ($type as $key => $thing){
			$types[$key] = array('Id' => $thing['Id'], 'Description' => $thing['Description']);
		}
		return $types;
	}

	public function get_users(){
		$users = TDC::db('t2')->GetAll("SELECT * FROM User");
		foreach ($users as $key=>$user){
				$output[$key] = array('Id'=>$user['Id'], 'User_Name' => $user['User_Name'], 'Calendar_Id' => $user['Calendar_Id']);
		}
		return $output;
	}

	public function my_news (){
		$type = TDC::db('t2')->GetAll("Select * FROM News");
		return $type;
	}

	public function area_decs (){
		$type = TDC::db('t2')->GetAll("Select * FROM practice");
		foreach ($type as $thing){
			$key = $thing['Id'];
			$output[$key] = $thing['Long_Desc'];
		}
		return $output;
	}
} // End TDC

	
