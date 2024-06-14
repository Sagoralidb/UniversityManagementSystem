<?php 
session_start();// session managed

include"connect.php";
//এডমিশন ফর্ম এর ডাটা কনেকশন টেবিল : admissionForm.php file

if(isset($_POST['sent']) ){

    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];

    $sql="INSERT INTO admission(name,email,phone,message)values('$data_name','$data_email','$data_phone','$data_message')";
    $result=mysqli_query($data,$sql);

    if($result){
        $_SESSION['message']="Thenk you for contact us !";
        header("location:admissionForm.php");
    }else{
        echo"Sent Failed !";
    }
}



 ?>