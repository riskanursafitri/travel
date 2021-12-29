<?php 

class database{

	public $_host = "10.0.0.190";
		public $_username = "admin";
		public $_password = "4*4Samadengan16";
		public $_database = "tour";
		public $_connection;

	
		public function getConnection() {
			$this->_connection = new mysqli($this->_host, $this->_username, 
											$this->_password, $this->_database);
			if ($this->_connection->connect_errno) {
				return $this->_connection->connect_errno;
			}
				return $this->_connection;
		}

	}

	


?>