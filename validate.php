<?php
$servername="localhost";
$username="root";
$password="";
$db="ip3";

$u=$_POST["username"];
$p=$_POST["pwd"];
 
$conn=mysqli_connect($servername,$username,$password,$db);

if(mysqli_connect_errno())
{
    die("Connection Falied:".mysqli_connect_error());
}
else{
    $sql="SELECT * FROM new_user WHERE username='$u' AND password='$p' ";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header("location:home.html");
    }
    else
    {
        header("location:login.html");
        
    }
}

?>