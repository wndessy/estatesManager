<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'egertonhousing');
define('DB_USER', 'root');
define('DB_PASSWORD', 'w1nn1e');

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo 'Successfully  to your databas';
}

function NewUser() {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $mstatus = $_POST['Mstatus'];
    $phone = $_POST['phone'];
    $IdOrPassport = $_POST['Id'];
    //job
    $PayrolNumber = $_POST['PayrolNumber'];
    $Designation = $_POST['Designation'];
    $CommencementOfDuty = $_POST['CommencementOfDuty'];
    $Departme = $_POST['Department'];
    $Grade = $_POST['Grade'];

    $HeadOfDepartment = $_POST['HeadOfDepartment'];
    //child
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Dob = $_POST['Dob'];
    $cdisabled = $_POST['cdisabled'];
    //login
    $email = $_POST['email'];
    $password = $_POST['password'];




    $query = "INSERT INTO applicantsdetails (FirstName,LastName,Gender,maritalStatus,IdOrPassport,EmailAddress,Password,PayrollNumber,Designation,Grade,CommencementOfDuty,Department,Head Of Department)"
            . "VALUES ('$fname','$lname','$gender','$mstatus','$IdOrPassport','$email','$password','$PayrolNumber','$Designation','$Grade','$CommencementOfDuty','$Departme','$HeadOfDepartment')";
    $data = mysql_query($query)or die(mysql_error());
    if ($data) {
        SignUp();
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
}

function SignUp() {
    if (!empty($_POST['user'])) {   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
        $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

        if (!$row = mysql_fetch_array($query) or die(mysql_error())) {
            newuser();
        } else {
            echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
        }
    }
}

/* if(isset($_POST['submit']))
  {
  SignUp();
  }
 */


SignUp();
?>
