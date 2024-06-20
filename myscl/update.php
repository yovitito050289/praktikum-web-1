<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$reg_date = $_POST['reg_date'];
 
// update data ke database
mysqli_query($koneksi,"update myguests set firstname='$firstname', lastname='$lastname', email='$email', reg_date='$reg_date' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>