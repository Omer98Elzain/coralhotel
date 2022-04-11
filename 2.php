<?php
$username=$_POST["username"];
$pass =$_POST["pass"];
$con=mysql_connect ('localhost','root','','faron_pro');
if (!$con)
{
die('could not connect:' .mysqql_error());
}
Mysql_select_db("faron_pro" ,$con);
$result =mysql_query("select* from faron1 where username='$username' and pass='$pass' ");
if (mysql_num_rows($result) >0)
{
$row =mysql_fetch_row($result);
if($row[3]=='admin'){
include ("31.html");
}
else{
include ("hmoe.html");
}
}
else
{
echo("sorry invalid user try again *******************************************************************************************************************");
include ("1.html");
}


?>