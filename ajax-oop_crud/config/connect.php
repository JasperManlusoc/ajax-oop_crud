<?php 
    class Database {
        
        public $servername = 'localhost';
        public $username = 'root';
        public $password = '';
        public $db_name = 'ajaxoop';
        
        public function getConn() {
            $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db_name);
            
            if( ! $conn )
                die('Could not connect'.$conn->error);
            
            return $conn;
        } 
    }
?>
