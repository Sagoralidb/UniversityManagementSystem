<?php 

$host="localhost";
$user="mostofad_sagoralibd";
$password="A@714502#";
$db="mostofad_schoolproject";
// সংযোগ পরীক্ষা
$data=mysqli_connect($host,$user,$password,$db);
if ($data===false) {
    die("সংযোগ ব্যর্থ হয়েছেঃ ");
}
?>