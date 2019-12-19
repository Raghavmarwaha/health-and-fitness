<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<style>
.col-md-4
{
 font-size: 20px;
}
body
{
    background-color:whitesmoke;
}
</style>
</head>
<body>
<div class="container">
<div class="col-md-4">
</div>
<div class="col-md-4">

<?php
session_start();


echo "<h1><u>My Profile-</h1></u>";
echo "<br>";
echo "Name: {$_SESSION['name']}";
echo "<br>";
echo "Email: {$_SESSION['email']}";
echo "<br>";
echo "Lives in: {$_SESSION['city']},  {$_SESSION['zip']}";
echo "<br>";
echo "Age: {$_SESSION['age']}";
echo "<br>";
echo "Any Allergies: {$_SESSION['allergy']}";
echo "<br>";
echo "Blood group: {$_SESSION['blood_group']}";
echo "<br>";
echo "Disease History: {$_SESSION['disease']}";
echo "<br>";
echo "Heart problem: {$_SESSION['heart']}";
echo "<br>";


?>
</div>
<div class="col-md-4"></div>
<script>
onclick="window.history.go(-1); return false;"</script>
</body>
</html>