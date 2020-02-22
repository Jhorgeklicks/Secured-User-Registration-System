<?php 

    class uploadImages extends Queries{

        public $imageError = [];
        public function uploadImg($fieldname, $allowedExt){
            $imgname = $_FILES[$fieldname]['name'];
            $temp_name = $_FILES[$fieldname]['tmp_name'];
            $fileError = $_FILES[$fieldname]['error'];
            $imageExtension = pathinfo($imgname,PATHINFO_EXTENSION);
    
            $path ='assets/img/'; 

            if(empty($imgname)){
                return $this->imageError[$fieldname] = "Image is Required";
            }

            if(!in_array($imageExtension, $allowedExt)){
                return $this->imageError[$fieldname] = "Please File with <strong style='color:crimson;'> .$imageExtension </strong> Extension is Not valid";
            }
            if($fileError !== 0){
                return $this->imageError[$fieldname] = "Upload a different picture, this file is corrupted. Thanks";
            }
            // $imgname = pathinfo($imgname,PATHINFO_FILENAME);
            // this will replace all empty spaces in a file's name with '_'
            // $imgname = preg_replace('/\s+/','-',$imgname);
            $newname = date('ymis').".".$imageExtension;
            move_uploaded_file($temp_name, $path.$newname);

            $userId = $_SESSION['id'];
            if($this->query("UPDATE Users SET User_Image = ? WHERE Id = ? LIMIT 1",[$newname, $userId])){
                $_SESSION['ImgUploaded']= "Your Image Has Been Uploaded";
                header("Location: dashboard.php");
            }
        }
    }

?>