<?php
$username=$_POST["username"];
$pass=$_POST["pass"];
$age=$_POST["age"];
$id=$_POST["id"];
$conn=new mysqli ('localhost','root','','faron_pro');

if($conn->connect_errno){
die("filed to connect". $conn->connect_error);
}
$sql="UPDATE `faron_pro`.`faron1` SET `username` = '$username', `pass`='$pass',`age` = '$age'  WHERE `faron1`.`id`='$id'";

if (!$conn->query ($sql))
{
die(mysqli_error($conn));
echo 'error';
}
else
{
echo 'you have update it';

}
$conn->close();
?>