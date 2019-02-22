<?php


if(isset($_GET['name'])&&isset($_GET['message'])&&isset($_GET['langi'])&&isset($_GET['lanti']))
{
    $name=$_GET['name'];
    $message=$_GET['message'];
    $langi=$_GET['langi'];
    $lanti=$_GET['lanti'];

$conn=mysqli_connect("localhost","root","","findme");

if(!$conn){

    echo 'cannot connect';
}

$sql = "INSERT INTO `location` (`id`, `name`, `message`, `langi`, `lanti`) VALUES (NULL, '$name','$message', '$langi', '$lanti');";

if(mysqli_query($conn,$sql)){
    echo "Successfully added !";
}else{
    echo "fail to add !";
}

}else{
    echo "please add all info !";
}

?>