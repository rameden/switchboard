<?php
	class option{
		public $id;
		public $leading_letter;
		public $department;
		public $department_slug;
		public $phone_number;
		function __construct($args){
			foreach($args as $key => $arg){
				$this->$key = $arg;
			}
		}

		function save(){

		}
		
		function get($id){
			
		}
	}
