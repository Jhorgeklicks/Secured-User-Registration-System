<?php 

class Queries extends db{
    public $result;

   public function query($sql , $param = []){
        if(empty($param)){
            $this->result = $this->conn->prepare($sql);
           return $this->result->execute();
        }else{
            $this->result = $this->conn->prepare($sql);
           return $this->result->execute($param);
        }
   }

   public function rowCount(){
       return $this->result->rowCount();
   }

   public function fetchSingleRow(){
       return $this->result->fetch(PDO::FETCH_OBJ);
   }

   public function fetchAllRows(){
    return $this->result->fetchAll(PDO::FETCH_OBJ);
}
}

?>