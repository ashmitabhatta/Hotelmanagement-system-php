<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$tellus=$_POST['tell-us'];
$servername="localhost";
$username="root";
$password="";
$dbname="hotel";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Mysql connection failed :".mysqli_connect_error());
}
$sql="insert into contactus(fullname,email,tellus)values('$fullname','$email','$tellus')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}
else{
    echo"Error:".$sql. "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>
