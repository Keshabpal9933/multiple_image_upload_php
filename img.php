<?php
 $file=$_FILES['image'];
 $count = count($_FILES['image']['name']);

$result=array('jpg','png','gif','bmp');
$path = "upload/" .$_POST['file_up']. "/";

if (!is_dir($path)) {
	mkdir($path, 0777, true);
}

for ($i=0; $i< $count; $i++) {
	if ($file['error'][$i] ==0) {
		if ($file['size'][$i] <=1024000) {

            $ext = pathinfo($file['name'][$i] , PATHINFO_EXTENSION);

               if (in_array($ext, $result)) {
                  $file_name = "Image" .date('Ymdhis').rand(0,999).".".$ext;

                     $return=move_uploaded_file($file['tmp_name'][$i],  $path.$file_name);
						 if ($return) {
						 	   echo "image uploaded";
						         }else{
						      
						 	     echo "error in uploading";
						        }
                       	 	}else{
                       	 		echo "file format is not supported";
                       	 	}
                       	 }else{
                       	 	echo "file size should be less than 1 Mb";
                       	 }
		//echo "File successfully Uploaded";
	}else{
		echo "error !!!";
	}
}

?>