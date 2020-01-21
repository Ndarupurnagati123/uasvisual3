<?php
// include database koneksi file
include"koneksi.php";

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM tb_mahasiswa WHERE id=$id");

// After delete redirect to HOME, so that latest user list will be displayed
header("location:index.php");
?>