<?php

    class db{
        protected $conn;

        public function __construct()
        {
            $this->connectDb();
        }

        private function connectDb(){
            try{
                $this->conn = new PDO("mysql:host=". HOST .";dbname=". DBNAME , NAME, PASSWORD);
                // echo 'IS connected';
            }catch(PDOException $e){
                echo "Connection Failed :" . $e->getMessage();
            }
        }
    }

?>