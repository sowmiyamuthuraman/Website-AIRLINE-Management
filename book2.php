<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>

<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left" >
    <table>
    <tr><td><div style="width: 30%;height: 50%"><img src="glosys.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    <!--  <h1><a href="index.html"><i style="color:#A1C6D9">flightZ</i></a></h1>-->
    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
       
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>











<script type="text/javascript">

  function checkForm(form)
  {
    
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }

</script>

<?php
session_start();
$passengers = $_SESSION['sessionvar'];
?>
<?php
$a1=$_SESSION['count'];
$a2=$_SESSION['count1'];
if($a1>0)

$_SESSION['booked'] = $_POST['hi'];
if($a2>0)
$_SESSION['booked1'] = $_POST['hii'];




?>

<?php
$i=1;
if($passengers >0) {
	while ($i <= $passengers)
	{
		
echo "<h2>Please provide passenger $i details:</h2>";	
echo '<form action="payment1.php" method="POST"  onsubmit="return checkForm(this);">
<ul>
<li>
Title:
<select>
<option>Mr.</option>
<option>Mrs.</option>
<option>Ms.</option>
</select>
</li>
<li>
First name*:<br>
<input type="text" required name="fname[]" onkeypress="return onlyAlphabets(event,this);"  placeholder="your firstname here...">
</li>
<li>
Last name*:<br>
<input type="text" required name="lname[]" onkeypress="return onlyAlphabets(event,this);"  placeholder="your lastname here...">
</li>
<li>
GENDER:
<select name="gender">
<option value="male">Male</option>
<option>Female</option>

</select>
</li>
<li>
AGE:

<input type="text" required name="age"   placeholder="your age here...">

</li>

<li>
Passport No.:<br>
<input type="text" name="passport[]" placeholder="your passport No."></li>
<li>
Visa No.:<br>
<input type="text" name="visa[]" placeholder="your Visa No.">
</li>
<li>
Country:
<select>
<option>Afghanistan</option>
<option>Nepal</option>
<option>India</option>
</select>
</li>
<li>
Address1*:<br>
<input type="text" required name="address1[]" placeholder="Enter your address...">
</li>
<li>
Address2:<br>
<input type="text" name="address2[]" placeholder="Enter your address2...">
</li>
<li>
Email*:<br>
<input type="text" required  placeholder="example@mail.com" name="email[]">

</li>
<li>
Contact*:<br>
<input type="text" required  name=contact[]" placeholder="Enter your contact No...">

</li>
<li>
PIN*:<br>
<input type="text" required name="pin[]" placeholder="Enter a PIN...">
</li>
 ';

//$j= $_POST['fname'].' '.$_POST['lname'];
//echo $j;
//$out1[$i] = $_POST['fname'];


$i = $i + 1;
	}			
?>
<li>
<li>
<input type="checkbox" name="terms" value="terms"> I agree the terms and conditions of your site.<br>
</li>
<input type="submit" value="Continue" name="continue">
</li>
</ul>

</form>
<?php

}else{
	echo"Please select the number passengers while searching the flight.&nbsp;&nbsp;&nbsp;"; 
	echo '<a href="flight.php">Goto flight page&nbsp;&nbsp;>></a>';

}

?>



	<?php
	
	$_SESSION['ticket'] = $_POST;
	
	
	?>		
