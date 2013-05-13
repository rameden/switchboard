<?php
	include_once "option.php";
	class options{
		public $options;
		function __construct(){
			$clean = function($to_clean){
				foreach($to_clean as $key1 => $temp){
					foreach($temp as $key => $val){
						if (is_int($key)){
							unset($to_clean[$key1][$key]);
						}
					}
				}
				return $to_clean;
			};
			$sql = "SELECT * from switchboard_main WHERE deleted IS NULL"; 

			$result = $clean(TDC::db('rcameden')->GetAll("SELECT * FROM switchboard_main WHERE deleted IS NULL"));
			$final = array();
			foreach($result as $option){
				$temp = array();
				$temp["main"] = $option;
				$temp["options"] = array();
				$sql = "SELECT * FROM switchboard_options WHERE leading_letter = ? AND deleted IS NULL";
				$args = array($option["leading_letter"]);
				$result2 = $clean(TDC::db('rcameden')->GetAll($sql, $args));				

				foreach ($result2 as $part){
					$option = new option($part);
					array_push($temp["options"], $option);
				}
				array_push($final, $temp);
			}
			$this->options = $final;
		}
			
	}
