<?php
include 'koneksi.php';

if(isset($_POST['add'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $reg_date = $_POST['reg_date'];

    mysqli_query($koneksi,"insert into myguests (firstname, lastname, email, reg_date) values('$firstname','$lastname','$email','$reg_date')");
 
}

header("Location: index.php");
?>