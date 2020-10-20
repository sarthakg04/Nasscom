<?php
include('connect.php');
$user=$_POST['user'];
$pwd1=$_POST['password1'];
$cmd="select * from login";
$check=mysqli_query($link,$cmd);
while($info=mysqli_fetch_array($check)){
if($info['user']==$user && $info['password1']==$pwd1)
{
    echo "Hello Welcome ",$info['user'];
}
}
?>