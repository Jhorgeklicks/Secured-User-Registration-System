<?php 
    session_start();
    include 'classes/config.php';
    spl_autoload_register(function($className){
        include "classes/$className.php";
    });


    function getError($btn, $call){
        if(isset($_POST[$btn])){
            if($call){
                return $call;
            }
        }
    }

    function borderRed($btn, $call){
        if(isset($_POST[$btn])){
            if($call){
                echo 'border-red';
            }
        }
    }

    function showValue($btn, $filename){
        if(isset($_POST[$btn])){
            return $_POST[$filename];
        }
    }
?>