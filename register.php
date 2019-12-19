<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$host="localhost";
$user="root";
$password="";
$db="se";
$con=new mysqli($host,$user,$password,$db);
$name=$_POST['name'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$age=$_POST['age'];
$allergy=$_POST['allergy'];
$blood_group=$_POST['blood'];
$disease=$_POST['disease'];
$heart=$_POST['heart'];
$email=$_POST['email'];
$password=$_POST['password'];
 
//Execute the query
 
$sq="INSERT INTO client(name,age,city,zip_code,Allergies,blood_group,Disease_history,Heart_problems,email,password)
				VALUES('$name','$age','$city','$zip','$allergy','$blood_group','$disease','$heart','$email','$password')";
if ($con->query($sq) === TRUE) {
    echo "<script>alert('New account created successfully !!');</script>";
    echo "<script>
window.location.href='login.html';
</script>";

    
} else {
    echo "<script>alert('Email id already registered !!');</script>";
    echo "<script>
window.location.href='register.html';
</script>";
}

$con->close();




?>

</body>
</html>