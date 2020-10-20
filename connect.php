<?php

$link=mysqli_connect("localhost","root","","anjali");
if($link)
{
    echo "Connect";
}
else
{
    echo "Not Connected";
}
?>