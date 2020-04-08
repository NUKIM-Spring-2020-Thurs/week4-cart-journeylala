<?php
session_start();
$uid="vvip";
$upwd="0000";



$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
    $_SESSION["memberlogin"]="s";
    header('location:catalog.php');
}
else
{
    $_SESSION["memberlogin"]="f";
    header('location:memberlogin.php');
}

?>