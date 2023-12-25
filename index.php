<?php
$name=$_REQUEST['name'];
$number=$_REQUEST['number'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if(isset($_POST['button'])){
$host="localhost";
$user ="root";
$password="";
$data="candels";



@$conn =mysqli_connect($host,$user,$password,$data);

$insert="insert into form values('$name','$number','$email','$password')";

mysqli_query($cann,insert);

if ($cann){
    echo("<h1 style='color:green;'> is done</h1>");
}
else{
    echo("<h1 style='color:red;'> is failure</h1>");
}





}
?>