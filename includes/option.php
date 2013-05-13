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

		function save($method = "merge"){
			if ($method == "merge"){
				$sql = "UPDATE switchboard_options SET id=?, leading_letter=?, department=?, department_slug=?, phone_number=? WHERE id=?";
				$args = array($this->id, $this->leading_letter, $this->department, $this->department_slug, $this->phone_number, $this->id);	
				$result = TDC::db('rcameden')->Execute($sql, $args);
			}
			else{
				$sql = "INSERT INTO switchboard_options (id,leading_letter,department,department_slug,phone_number) VALUES (?,?,?,?,?)";
				$args = array($this->id, $this->leading_letter, $this->department, $this->department_slug, $this->phone_number);	
				$result = TDC::db('rcameden')->Execute($sql, $args);

				$sql = "SELECT * FROM switchboard_main WHERE leading_letter=? AND deleted IS NULL";
				$args = array($this->leading_letter);
				$result = TDC::db('rcameden')->GetAll($sql, $args);

				if (!$result[0]["leading_letter"]){
					$sql = "SELECT MAX(id) as id FROM switchboard_main WHERE deleted IS NULL";
					$result = TDC::db('rcameden')->GetAll($sql);
					$id = $result[0]["id"] + 1;

					$sql = "INSERT INTO switchboard_main VALUES(?,?)";
					$args = array($id, $this->leading_letter);
					$result = TDC::db('rcameden')->Execute($sql,$args);
				}
			}
		}
	
		function delete(){
			
			$sql = "SELECT MAX(id) as id FROM switchboard_deleted WHERE deleted IS NULL";	
			$result = TDC::db('rcameden')->GetAll($sql);
			if ($result[0]["id"]){
				$deleted_id = $result[0]["id"] + 1;
			}
			else{
				$deleted_id = 1;
			}

			$sql = "UPDATE switchboard_options SET deleted=? WHERE id=?";
			$args = array($deleted_id, $this->id);

		}

		function get($id){
			$sql = "SELECT * from switchboard_options WHERE id=?";
			$args = array($id);
			$result = TDC::db('rcameden')->GetAll($sql, $args);		
			$result = $result[0];
			$args = array("id"=>$result["id"], "leading_letter"=>$result["leading_letter"], "department"=>$result["department"],"department_slug"=>$result["department_slug"],"phone_number"=>$result["phone_number"]);
			$option = new option($args);
			return $option;
		}
	}
