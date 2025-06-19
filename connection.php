<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "sukantahui";
$database = "bait_test_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if(!$conn)
{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql="INSERT INTO registers (`user_name`,`email_id`,`password`) VALUES ('$name','$email','$pass')";
        $result=mysqli_query($conn,$sql);
         
        echo "Record Inserted Successfully...";
    }   
   
}
?>