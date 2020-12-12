<?php
$host='localhost';
$user='root';
$password='';
$database='login';
$link=mysqli_connect($host, $user, $password, $database);
if(!$link){
    die
    ("con failed:" . mysqli_connect_error());
}