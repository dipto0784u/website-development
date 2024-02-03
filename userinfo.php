<?php

$con = mysqli_connect('localhost' , 'root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'userdata');

$user = $_POST['user'];
$email= $_POST['email'];

$comment=$_POST['comment'];

$query= "insert into  userinfodata  (user,email,comment)
values('$user' , '$email'  ,'$comment')";

echo "$query";
header('location:index.php');



?>