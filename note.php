<?php

$note=$_POST["note"];
$sql=mysqli_connect ('localhost','root','','faron_pro');
if( mysqli_connect_errno()){

echo"filed to connect". mysqli_connect();
}
$result ="insert into carency(note) values('$note')" ;

if ($sql->query ($result)===true)
{
echo "send";
include("about.html");
}
else
{
echo "error".$result.$sql->error;

}

?>