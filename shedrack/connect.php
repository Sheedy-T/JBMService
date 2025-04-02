<?php
$firstname = $_POST['first name'];
$lastname = $_POST['last name'];
$gender = $_POST['gender'];
$phoneno = $_POST['phoneno'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$Address = $_POST['Address'];
$SOR = $_POST['SOR'];
$LGA = $_POST['LGA'];
$refereename = $_POST['refereename'];
$refereeno = $_POST['refereeno'];
$COF = $_POST['COF'];

// DATA CONNECTION
$conn = new mysqli(firstname,lastname,gender,phoneno,DOB,email,Address,SOR,LGA,refereename,refereeno,COF);
if($conn->connect_error){
      die('connection failed :'$conn -> connect_error);
}else{
    $stmt = $conn ->prepare("insert into form(firstname,lastname,gender,phoneno,DOB,email,Address,SOR,LGA,refereename,refereeno,COF)
    values(?????????????)");
    $stmt->bind_param("ssssssssssssi",firstname,lastname,gender,phoneno,DOB,email,Address,SOR,LGA,refereename,refereeno,COF);
    $stmt->execute();
    echo "registration sucessful"
    $stmt->close();
    $conn->close();
}






?>