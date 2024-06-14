<?php 
session_start();// session managed
include"connect.php";
?>
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST['username'];
    $pass =$_POST['password'];

     $sql = "select * from user where username='$name' AND password='$pass'";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    
    if($row["usertype"]=="student"){
        $_SESSION['username']=$name;
        $_SESSION['usertype']="student";
        header("location:studnethome.php");
       
        exit;
    }
    elseif($row["usertype"]=="admin"){
            $_SESSION['username']=$name;
            $_SESSION['usertype']="admin";
           header("location:adminhome.php");
        exit;
    }elseif($row["usertype"]=="teacher"){
			$_SESSION['username']=$name;
			$_SESSION['usertype']="teacher"; 
			header("location:teacherhome.php");
			exit;
}elseif($row["usertype"]=="account"){
			$_SESSION['username']=$name;
			$_SESSION['usertype']="account"; 
			header("location:accounthome.php");
			exit;
}	
    else {
        
        $message="Username or password do not match";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
        
    }
    

}
?>

