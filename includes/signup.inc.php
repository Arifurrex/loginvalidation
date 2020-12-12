<?php

   if(isset($_POST['submit']))
    {
         $name=$_POST['name'];  
         $username=$_POST['username'];    
         $email=$_POST['email'];
         $pas= md5($_POST['password']);
         $repassword= md5($_POST['repassword']);
         
         require_once './db.inc.php'; 
       if(empty($name)||empty($email)||empty($username)||empty($pas)||empty($repassword)){
        header('location:../index.php?error=pleasefillintheblank');
        exit();
       } 
       invalidname($name);
       invalidemail($email);
       passwordnomach($pas,$repassword);
        header('location:../index.php?error=congra');
        $query="INSERT INTO `users`(`name`, `email`, `username`, `password`, `repassword`) VALUES ('$name','$email','$username','$pas','$repassword')";
        mysqli_query($link,$query );

    }else{
        header('location:../index.php?error=someerror');
      exit();
    };

function invalidname($name){
        $pattern='/^[a-zA-Z0-9]*$/';
        $x=preg_match($pattern, $name);
        if($x==false){
        header('location:../index.php?error=invalidname');
        exit();
      }
    };
    function invalidemail($email){
        $x=filter_var($email,FILTER_VALIDATE_EMAIL);
        if($x==false){
        header('location:../index.php?error=invalidemail');
        exit();
      }
    };
    function passwordnomach($pas,$repassword){
        if($pas !== $repassword){
        header('location:../index.php?error=passwordnomach');
        exit();
      }
    };