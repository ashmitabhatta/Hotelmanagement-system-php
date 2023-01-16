<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$troom=$_POST["troom"];
$bed=$_POST["bed"];
$nroom=$_POST["nroom"];
$meal=$_POST["meal"];
$cin=$_POST["cin"];
$cout=$_POST["cout"];
$servername="localhost";
$username="root";
$password="";
$dbname="hotel";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Mysql connection failed :".mysqli_connect_error());
}
else{
    //echo"connection successful"."<br>";
}
$sql = "INSERT INTO roombook(fname,lname,email, country,phone,troom,bed,nroom,meal,cin,cout)
VALUES('$fname','$lname','$email','$country','$phone','$troom','$bed','$nroom','$meal','$cin','$cout')";
if(mysqli_query($conn, $sql)){
    //echo"New customer information saved successfully";
}
else{
    echo"Error:" .$sql."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reservation detail</title>
    </head>
    <body style:"">
    <div class="logo">
    <img src="image/logo" alt="" width="65" height="50">
        </div>
        <div>
        <h6 style>Phone Numbers:982345665</h6>
                       <h6>Email:Sunshinehotel@gmail.com</h6>
        </div>
        <?php 
        echo "<b> Dear, $fname $lname,</b>"."<br>";
        echo "This is to confirm your reservation request for $nroom room of type $troom in our
        hotel. We are ready to serve you with all our efficirncy. The hygine"."<br>"."standards you asked for
        is what we assure and confirm to provide with a perfectly sanitized environment."."<br>"."<br>";
        
        echo "We are glad to let you know that the $nroom you asked for and the exact $troom have been taken care of and we 
        are allocating that room for you."."<br>";
        ?>
        <p>We assure to provide you with every comfort you need.</p>
        <br>
        <br>
        <br>

        <p style="font-size:14px"><b>Best Regards</b> </p>
        <p style="font-size:14px"><b>Sunshine hotel</b></p>
    </body>
</html>


