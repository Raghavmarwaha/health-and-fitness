 <html>
 <head>
 <link rel="stylesheet" href="disease.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
 <style>
 h3
 {
    margin-left: 480px;
    font-size: 35px;
    color:black;
    text-shadow: 2px 2px lightblue;
    font-family: 'Indie Flower', cursive;
    text-decoration: underline;


 }
 body
 {
    background-image: url("backGround.jpg");
    overflow: hidden;

}
#ab
{
    margin-left: 500px;
}

form
{
font-size: 17px;
color:black;

}
p{
font-size: 16px;
padding-left: 200px;
}
 </style>



<body>

<h3>Symptom Checker</h3><br>
<p>This is the webpage where you find from which disease you are suffering from by clicking on the symptoms.</p>
<br><br>
<form action="#" method="post">
<div class="container">

<div class="row">
<div class="col-md-3">
<input type="checkbox" id="a" name="list[]" value="a">Dehydration</input></div>
<div class="col-md-3">
<input type="checkbox" id="b" name="list[]" value="b">Fever</input></div>
<div class="col-md-3">
<input type="checkbox" id="c" name="list[]" value="c">Bloating</input></div>
<div class="col-md-3">
<input type="checkbox" id="d" name="list[]" value="d">Gas</input></div></div>
<br><br>
<div class="row">
<div class="col-md-3">
<input type="checkbox" id="e" name="list[]" value="e">Indigestion</input></div>
<div class="col-md-3">
<input type="checkbox" id="f" name="list[]" value="f">ChestPain</input></div>
<div class="col-md-3">
<input type="checkbox" id="g" name="list[]" value="g">Cough</input></div>
<div class="col-md-3">
<input type="checkbox"  id="h" name="list[]" value="h">Dizzines</input></div></div>
<br><br>
<div class="row">
<div class="col-md-3">
<input type="checkbox" id="i" name="list[]" value="i">AbdominalPain</input></div>
<div class="col-md-3">
<input type="checkbox" id="j" name="list[]" value="j">DryMouth</input></div>
<div class="col-md-3">
<input type="checkbox"  id="k" name="list[]" value="k">WeakenessInArms+Legs</input></div>
<div class="col-md-3">
<input type="checkbox" id="l" name="list[]" value="l">LowBp</input></div></div>
<br><br>
<div class="row">
<div class="col-md-3">
<input type="checkbox" id="m" name="list[]" value="m">HearthRythmProblem</input></div>
<div class="col-md-3">
<input type="checkbox" id="n" name="list[]" value="n">HighBp</input></div>
<div class="col-md-3">
<input type="checkbox" id="o" name="list[]" value="o">BreastLumps</input></div>
<div class="col-md-3">
<input type="checkbox"  id="p" name="list[]" value="p">BreastSwelling</input></div></div>
<br><br>
<div class="row">
<div class="col-md-3">
<input type="checkbox" id="q"  name="list[]" value="q">ThroatPain</input></div>
<div class="col-md-3">
<input type="checkbox" id="r" name="list[]" value="r">RedRashes</input></div>
<div class="col-md-3">
<input type="checkbox" id="s" name="list[]" value="s">DarkRedSpots</input></div>
<div class="col-md-3">
<input type="checkbox" id="t" name="list[]" value="t">ShortnessOfBreath</input></div></div></div>
<br>
<input type="submit" id="ab" name="submit" value="Submit"/>

<br>
</form>

<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['list']))
		{
			$a=array();
			foreach($_POST['list'] as $selected)
			{

				array_push($a,$selected);
			}

			if (in_array('g', $a))
			{
				echo "<p style='padding-left:470px;color:black;font-size:17px;'>Sore throat or Cold<br>";
			}
			if (in_array('h', $a))
			{
				echo "<p style='padding-left:430px;color:black;font-size:17px;'>Migraine,Cervical or Vertigo<br>";
			}
			if (in_array('k', $a))
			{
				echo "<p style='padding-left:500px;color:black;font-size:17px;'>Joint Pain<br>";
			}
			if (in_array('l', $a))
			{
				echo "<p style='padding-left:460px;color:black;font-size:17px;'>Nausea or fainting<br>";
			}

			if (in_array('t', $a))
			{

						echo "<p style='padding-left:500px;color:black;font-size:17px;'>Asthma<br>";
			}

			if (in_array('f', $a))
			{
				echo "<p style='padding-left:430px;color:black;font-size:17px;'>HeartBurn or Muscle Pull or Nausea or in severe case it is Heart attack<br>";
			}
              if(in_array('a',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Fatigue or anxiety or tiredness<br>";
              }
              if(in_array('b',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Typhoid or Viral or Normal flu<br>";
              }
              if(in_array('c',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Pain and Cramps in stomach<br>";
              }
              if(in_array('d',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Pain and Cramps in stomach<br>";
              }
              if(in_array('e',$a))
              {
                echo"<p style='padding-left:480px;color:black;font-size:17px;'>Nausea and acidity<br>";
              }
              if(in_array('i',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Diarrhea or bloating or constipation<br>";
              }
              if(in_array('j',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Stress or nevousness or aging<br>";
              }
              if(in_array('m',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Heart problem or chest pain or stress or kidney problem<br>";
              }
                   if(in_array('n',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>Heart problem or chest pain or stress or kidney problem<br>";
              }
                  if(in_array('o',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>May be breast cancer but we are not 100% sure<br>";
              }
                 if(in_array('p',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>May be breast cancer but we are not 100% sure<br>";
              }
                  if(in_array('r',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>allery or eczema or itching problem<br>";
              }
                  if(in_array('s',$a))
              {
                echo"<p style='padding-left:430px;color:black;font-size:17px;'>allergy or eczema or itching problem<br>";
              }

              if(in_array('q',$a))
              {
                echo"<p style='padding-left:470px;color:black;font-size:17px;'>Virals or Viruses<br>";
              }
        }
		}


?>


</body>
</html>