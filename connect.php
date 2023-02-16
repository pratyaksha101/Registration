<?php
include 'DB.php'
ob_start();

echo $fname= $_POST['fname'];
echo $lname= $_POST['lname']; 
echo $DOB= $_POST['DOB']; 
echo $Gender= $_POST['Gender']; 
echo $email= $_POST['email']; 
echo $username= $_POST['username']; 
echo $psw= $_POST['psw']; 


$sql="INSERT INTO customer(Firstname,Lastname,DateofBirth,Gender,Email,UserName,Password) VALUES('$fname','$lname','$DOB','$Gender','$email','$username','$psw')";

if($conn->query($sql))
{
    header("Location: ../register.php");
}
else
{
    echo "Error: " .$sql . "<br>" . $conn->error;
}
    $conn->close();
    ob_flush();
?>
