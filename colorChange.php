<?php
$Username= $_POST['Username'];
$color= $_POST['color'];
$servername = "localhost";
$databse="checkingcolor";
$password="";


$conn = new mysqli('localhost', 'root','', 'checkingcolor' );
if($conn-> connect_error){
  die('Connection Failed: ' .$conn-> connect_error);
}else
{
  $stmt = $conn->prepare("insert into colors(Username, color) values(?,?)");
  $stmt-> bind_param("ss", $Username, $color);
  $stmt-> execute();
  echo "<script>alert('new record inserted')</script>";
  echo "<script>window.open('index.html','_self')</script>";
  $stmt-> close();
  $conn-> close();
}

?>