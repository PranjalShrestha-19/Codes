<?php

$con=new mysqli("localhost","root","","pranjal_db");
if(!$con)
{
    echo "Not connected";
}

$fn=$_POST['firstName'];
$mn=$_POST['middleName'];
$ln=$_POST['lastName'];
$e=$_POST['email'];
$pph=$_POST['phoneNumber'];
$a=$_POST['address'];
$mon=$_POST['motherName'];
$mph=$_POST['motherPhoneNumber'];
$fan=$_POST['fatherName'];
$fph=$_POST['fatherPhoneNumber'];


$info="INSERT INTO sttu_info(first_name,middle_name, last_name, email, personal_number, address, mother_name, mother_number, father_name, father_number)
VALUES ('$fn','$mn','$ln','$e','$pph','$a','$mon','$mph','$fan','$fph')";

if(!$res=$con->query($info))
 {
     echo "<script> alert('not inserted');</script>";
 }
 else
 {
     echo "redirecting";
     header("location:http://localhost/xiid/pranjalshrestha/2dashboard.php");
   
 }

$con->close();
?>