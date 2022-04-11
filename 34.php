<?php


$sql= mysqli_connect('localhost','root','','faron_pro');
if(mysqli_connect_errno())
{
echo "faild to connect".mysqli_connect_error();

}

$result="SELECT * FROM faron1";
$res=$sql ->query($result);
if($res->num_rows >0){
echo "<table border='1px' align='center'>";
echo "<tr>";
echo"<th>id</th>";
echo"<th>username</th>";
echo"<th>pass</th>";
echo"<th>age</th>";
echo"<th>type</th>";
echo"</tr>";

while($row=$res->fetch_assoc()){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['pass']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['type']."</td>";
echo"</tr>";
}
echo"<table/>";
}$result="SELECT * FROM carency";
$res=$sql ->query($result);
if($res->num_rows >0){
echo "<table border='1px' align='center'>";
echo "<tr>";
echo"<th>note</th>";
echo"</tr>";
while($row=$res->fetch_assoc()){
echo"<tr>";
echo"<td>".$row['note']."</td>";
echo"</tr>";
}
echo"<table/>";
}

include"31.html";