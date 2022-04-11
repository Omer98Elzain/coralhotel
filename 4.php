<?php
$incash=$_POST["incash"];
$conn=mysqli_connect ('localhost','root','','faron_pro');
if( mysqli_connect_errno()){

echo"filed to connect". mysqli_connect();
}
$query =mysqli_query($conn,"select *from carency  where incash='$incash');
if (mysqli_num_rows($query)!=0)
{

echo $incash*20;
}
else
{
}
?>


