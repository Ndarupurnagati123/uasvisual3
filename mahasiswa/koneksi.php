<?php

 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "uasvisual3";
 
 $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
 
 if(mysqli_connect_errno()){
	 echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>