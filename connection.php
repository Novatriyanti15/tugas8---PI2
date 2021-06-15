<?php 
    class connection {
        private $host = "localhost";
        private $database = "onlineshop";
        private $username = "root";
        private $password = "";

        function connectMysql(){
            mysql_connect($this->$host, $this->$username, $this->$password, $this->$database);
            mysql_connect_db($this->conn) or die ("Database Not Found");
        }
        function tampil_onlineshop(){
            $sql = mysql_query("SELECT * FROM onlineshop ORDER BY id ASC ;");
            while($row=mysql_fetch_array($sql))
                $data[]=$row;
            return $data;
        }
    }