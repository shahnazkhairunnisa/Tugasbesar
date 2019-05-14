<?php
include 'koneksi.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$usia = $_POST['usia'];
   $biografi = $_POST['biografi'];
   $gender = $_POST['gender'];
   $website = $_POST['website'];
   $email = $_POST['email'];
   $level=$_POST['level'];


$result=mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$usia','$biografi','$gender','$website','$email','$level')");


if(!$username || !$password ||!$usia || !$biografi || !$gender || !$website || !$email || !$level) {
	echo "maaf kamu belum beruntung silakan coba lagi";
	echo "<a href='formregister.php'>        -login kembali</a>";
       } else if($result){
	echo "SELAMAT ANDA BERHASIL REGISTRASI";
	echo "<a href='register.php'>        -regis kembali</a>";
}
?>
