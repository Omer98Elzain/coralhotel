<?php

$id=$_POST["id"];
$sql=mysqli_connect ('localhost','root','','faron_pro');
if( mysqli_connect_errno()){

echo"filed to connect". mysqli_connect();
}
$result ="DELETE FROM `faron1` WHERE `faron1`.`id` = '$id'  " ;

if ($sql->query ($result)===true)
{
echo "you have been remove".$id;
include("31.html");
}
else
{
echo "error".$result.$sql->error;

}

?>