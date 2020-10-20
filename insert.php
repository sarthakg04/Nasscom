<?php
include('connect.php');
$name=$_POST['user'];
$pwd1=$_POST['password1'];
$pwd2=$_POST['password2'];
$email=$_POST['email'];
$cmd="insert into login(user,password1,password2,email) values('$name','$pwd1','$pwd2','$email')";
if(mysqli_query($link,$cmd))
{
    echo "success";
}
else
{
    echo "fail";
}

?>