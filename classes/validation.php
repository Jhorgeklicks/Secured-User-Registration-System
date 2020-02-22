<?php

    class validation extends Queries{

        public $error=[];

        public function input($fieldname){
            if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post" ){

                return strip_tags(trim($_POST[$fieldname]));

            }elseif($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get" ){

                return strip_tags(trim($_GET[$fieldname]));

            }
        }

        public function validate($fieldname,$label, $validation_rule){
            $allRules = explode('|', $validation_rule);
            $value = $this->input($fieldname);
            $pattern = "/^[a-zA-Z ]+$/";
            if(in_array('required',$allRules)){

                if(empty($value)){
                    return $this->error[$fieldname] = $label . ' is required';
                }
            }

            // checking for the alphabetic rules
            if(in_array('alphabetic', $allRules)){

                if(!preg_match($pattern, $value)){
                    return $this->error[$fieldname] = $label . ' must not include interger value';
                }

            }

            // checking for min length
            if(in_array('min_len', $allRules)){

               $index_of_minlen = array_search('min_len', $allRules);
               $index_of_minlen_value = $index_of_minlen + 1;
                $value_index = $allRules[$index_of_minlen_value];

                if(strlen($value) < $value_index){
                    return $this->error[$fieldname] = $label . ' Must be ' .$value_index .' or more characters' ;
                }

            }

            // check for email validation
            if(in_array('uniqueEmail', $allRules)){
                $uniqueEmail = array_search('uniqueEmail', $allRules);
                $emailIndex = $uniqueEmail + 1 ;
                $tableName =  $allRules[$emailIndex];

                if($this->query("SELECT * FROM $tableName WHERE $fieldname = ? ",[$value])){
                   if($this->rowCount() > 0){
                    return $this->error[$fieldname] = $label . ' Already Exist' ;
                   }
                }
            }
        }

        public function runSuccess(){
            if(empty($this->error)){
                return true;
            }else{
                return false;
            }
        }

        public function setValue($fieldname){
            if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post" ){
                    echo $_POST[$fieldname];
                
            }elseif($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get" ){
                if(isset($_GET[$fieldname])){
                    echo $_GET[$fieldname];
                }
            }
        }
    }
?>