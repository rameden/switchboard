<?php

	require_once '/home/PLYMOUTH/tlferm/web/Smarty/Smarty.class.php';
	class TDCSmarty extends Smarty{
		public function  __construct(){
			parent::__construct();

			$this->setTemplateDir('./templates');
			$this->setCompileDir('/home/PLYMOUTH/tlferm/web/Smarty/templates_c');
			$this->setCacheDir('/home/PLYMOUTH/tlferm/web/Smarty/cache');
			$this->setConfigDir('/home/PLYMOUTH/tlferm/web/Smarty/configs');
			
		}// end construct
	}	// end TSCSmarty
