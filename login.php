<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="interface.css">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Frijole|Gloria+Hallelujah|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<body>

<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="se";
$con=mysqli_connect($host,$user,$password,$db);
/*
$_SESSION['variable_name_1'] = $_POST['email']; // or $_POST['accountno_1'];
$_SESSION['variable_name_2'] = $_POST['password'];
*/

$email=$_POST['email'];
$password=$_POST['password'];


//Execute the query

$result=mysqli_query($con,"select * from client where email='$email' and password='$password'");

$count  = mysqli_num_rows($result);





if($count>0)
{
while($row = $result->fetch_assoc()) {

        //echo "Hi, "  .$row["name"]. "<br>";
//echo $row["email"];

$_SESSION['name']=$row['name'];
$_SESSION['city']=$row['city'];
$_SESSION['zip']=$row['zip_code'];
$_SESSION['age']=$row['age'];
$_SESSION['allergy']=$row['Allergies'];
$_SESSION['blood_group']=$row['blood_group'];
$_SESSION['disease']=$row['Disease_history'];
$_SESSION['heart']=$row['Heart_problems'];
$_SESSION['email']=$row['email'];
$_SESSION['password']=$row['password'];


}
}
else {
    echo "<script>
alert('Wrong email or password'); </script>";

echo "<script>
window.location.href='login.html';
</script>";
}

?>
<div class="container">
<div class="row">
<div class="col-md-5"></div>
<div class="col-md-4">
<p class="kd text-center">Women Health Care</p></div>
<div class="col-md-3"></div></div>
<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<p class="1"><a target="_blank" href="view-profile.php">&nbsp &nbsp View Profile</a></p>
<p class="2"><a target="_blank" href="FindDiseases.php">&nbsp &nbsp Symptom Checker</a></p>
<p class="3" onclick="openNav1()">&nbsp &nbsp Best Cancer Doctors</p>
<p class="4" onclick="openNav2()">&nbsp &nbsp Best Heart Doctors</p>

</div>
 <div id="p1" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
<p class="a">&nbsp 1. Dr. Radha Shankar<br>MBBS,DNB,MD <br>25 Years Experience<br>Fortis Malar Hospital,Chennai</p>
<a class="book" href="book.php?dname=Dr. Radha Shankar" target="_blank">Click here to book the appointment</a>
<p class="b">&nbsp 2. Dr. N. Rangarajan<br>MBBS,MD,MCh <br>23 Years Experience<br>Medanta,Gurgaon</p>
<a class="book" href="book.php?dname=Dr. N. Rangarajan" target="_blank">Click here to book the appointment</a>
<p class="c">&nbsp 3. Dr. Mimansa Singh<br>MBBS,MD <br>27 Years Experience<br>Fortis,Gurgaon</p>
<a class="book" href="book.php?dname=Dr. Mimansa Singh" target="_blank">Click here to book the appointment</a>
</div>

<div id="p2" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

<p class="d">&nbsp 1. Dr. Shrinivas Reddy<br>MBBS,MD <br>25 Years Experience<br>Apollo Hospital,Bengaluru</p>
<a class="book" href="book.php?dname=Dr. Shrinivas Reddy" target="_blank">Click here to book the appointment</a>
<p class="e">&nbsp 2. Dr. Jyoti Kapoor<br>MBBS,MD,DM <br>22 Years Experience<br>Paras Hopital,Gurgaon</p>
<a class="book" href="book.php?dname=Dr. Jyoti Kapoor" target="_blank">Click here to book the appointment</a>
<p class="f">&nbsp 3. Dr. Sunny Joseph<br>MBBS,MD,MS <br>28 Years Experience<br>Manipal Hospital,Bengaluru</p>
<a class="book" href="book.php?dname=Dr. Sunny Joseph" target="_blank">Click here to book the appointment</a>


</div>

<div id="p3" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>



</div>
<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementB
yId("main").style.marginLeft= "0";
}
function openNav1() {
    document.getElementById("p1").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
}

function closeNav1() {
    document.getElementById("p1").style.width = "0";
    document.getElementB
yId("main").style.marginLeft= "0";
}
function openNav2() {
    document.getElementById("p2").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
}

function closeNav2() {
    document.getElementById("p2").style.width = "0";
    document.getElementB
yId("main").style.marginLeft= "0";
}

function openNav3() {
    document.getElementById("p3").style.width = "650px";
    document.getElementById("main").style.marginLeft = "0px";
}

function closeNav3() {
    document.getElementById("p3").style.width = "0";
    document.getElementB
yId("main").style.marginLeft= "0";
}

function func1()
{

alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}

function func2()
{

alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}

function func3()
{
alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}

function func4()
{
alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}

function func5()
{
alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}

function func6()
{

alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ");
}
/*
function d1() {
  var javascriptVariable = "Dr. Radha Shankar";
  window.location.href ="book.php?dname=" + javascriptVariable;

}
function d2() {
  var javascriptVariable = "Dr. N. ";
  window.location.href = "book.php?dname=" + javascriptVariable;
}
function d3() {
  var javascriptVariable = "Dr. Mimansa Singh";
  window.location.href = "book.php?dname=" + javascriptVariable;
}
function d4() {
  var javascriptVariable = "Dr. Shrinivas Reddy";
  window.location.href = "book.php?dname=" + javascriptVariable;
}
function d5() {
  var javascriptVariable = "Dr. Jyoti Kapoor";
  window.location.href = "book.php?dname=" + javascriptVariable;
}
function d6() {
  var javascriptVariable = "Dr. Sunny Joseph";
  window.location.href = "book.php?dname=" + javascriptVariable;
}
*/
</script>
<div class="container">
<div class="row">
<div class="col-md-5">
</div>
<div class="col-md-4">
<img style="border:5px solid black;margin-left:70px;" src="image/women.jpg" class="img-circle"   width="200px" height="200px">
</div>
<div class="col-md-3">
</div>
</div>
<br>
<div class="row">
<div class="col-md-5">
</div>
<div class="col-md-4">
<p class="bkc text-center">Five Shocking Facts About Women's Health</p>
<ul>
<li>Only 1 in 10 women can get enough vegetable and fruits</li>
<li>High Bmi in women can cause diabates</li>
<li>Breast cancer percentage is incresing in women day by day</li>
<li>Women's bone are 20% more weaker than man</li>
<li>Depression is found more in women than men</li>
</ul>
</div>
<div class="col-md-3">
</div>
</div></div>
<br>
<a href="navone.html"><p class="homepage">Go to the Home Page</p></a>

</body>
</html>