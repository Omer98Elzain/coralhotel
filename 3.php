<?php
$username=$_POST["username"];
$pass=$_POST["pass"];
$age=$_POST["age"];
$sql=mysqli_connect ('localhost','root','','faron_pro');
if( mysqli_connect_errno()){

echo"filed to connect". mysqli_connect();
}
$result ="insert into faron1(username,pass,age) values('$username','$pass','$age')" ;

if ($sql->query ($result)===true)
{
echo "you have been added";
include("1.html");
}
else
{
echo "error".$result.$sql->error;

}

?>