<?php

	class Database{
		
		private $serverName = 'localhost:3306';
		private $userName = 'root';
		private $password = 'panduck27';
		private $queryItem = 'SELECT * FROM STUDENTS WHERE RFID_Number = :number';
		private $conn;
		private $itemStatement;
		
		public function __construct(){
			try {
				$this->conn = new PDO("mysql:host=$this->serverName;dbname=STUDENT", $this->userName, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->itemStatement = $this->conn->prepare($this->queryItem);
				//$this->itemStatement->execute(array('number'=>))
				echo 'Database Connection Success';
			} catch (Exception $e) {
				echo  'ERROR '.$e->getMessage();
			}
		}
		
		public function student($num){
			$this->itemStatement->execute(array('number' => $num));
			$result = $this->itemStatement->fetchAll();
			if(count($result)){
				foreach($result as $row){
					print_r($row);
				}
			}else{
				echo 'No rows returned.';
			}
		}
		
		
		
	}

?>