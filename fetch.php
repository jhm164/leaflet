<?php
$conn=mysqli_connect("localhost","root","","findme");

if(!$conn){

    echo 'cannot connect';
}

$sql = "select * from location";

$result=mysqli_query($conn,$sql);

$arr=array();
while($row=mysqli_fetch_assoc($result)){

$arr[]=$row;
}

print json_encode($arr);

?>