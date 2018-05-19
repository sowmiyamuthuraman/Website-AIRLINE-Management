<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
.btnSearch{    
      padding: 5px;
      background: #1F618D;
      border: 0;
      border-radius: 4px;
      margin: 0px 4px;
      color: #FFF;
      width: 100px;
    }

</style>

</head>

<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left" >
      <h1><a href="index.html"><i style="color:#A1C6D9">flightZ</i></a></h1>
    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
      
        <li class="active"><a href="register.php">REGISTER</a></li>
        <li class="active"><a href="admin.html">ADMIN</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
        




<?php

global $total;
global $out1;
$total = array();
$out1 = array();
?>
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
//$counting=$_POST['$count'];
//$counting1=$_POST['$count1'];
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
echo '<form action="payment.php" method="POST"  onsubmit="return checkForm(this);">
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
<input type="text" required name="fname" onkeypress="return onlyAlphabets(event,this);"  placeholder="your firstname here...">
</li>
<li>
Last name*:<br>
<input type="text" required name="lname" onkeypress="return onlyAlphabets(event,this);"  placeholder="your lastname here...">
</li>
<li>
GENDER:
<select name="gender">
<option></option>
<option>Male</option>
<option>Female</option>

</select>
</li>
<li>
AGE:
<select name="age">
<option>0-5</option>
<option>5-10</option>
<option>15-20</option>
<option>20-40</option>
<option>40-60</option>
<option>60 above</option>
</select>
</li>

<li>
Passport No.:<br>
<input type="text" name="passport" placeholder="your passport No."></li>
<li>
Visa No.:<br>
<input type="text" name="visa" placeholder="your Visa No.">
</li>
<li>
Country:
<select name="country">
<option>Afghanistan</option>
<option>Nepal</option>
<option>India</option>
</select>
</li>
<li>
Address1*:<br>
<input type="text" required name="address1" placeholder="Enter your address...">
</li>
<li>
Address2:<br>
<input type="text" name="address2" placeholder="Enter your address2...">
</li>
<li>
Email*:<br>
<input type="text" required  placeholder="example@mail.com" name="email">

</li>
<li>
Contact*:<br>
<input type="number" required  name="contact" placeholder="Enter your contact No...">

</li>
<li>
PIN*:<br>
<input type="text" required name="pin" placeholder="Enter a PIN...">
</li>
 ';

$i = $i + 1;
	}			
?>
<li>
<li>
<input type="checkbox" name="terms" value="terms"> I agree the terms and conditions of your site.<br>
</li>
<input type="submit" value="Continue" class="btnSearch" name="continue">
</li>
</ul>

</form>
<?php

}else{
	echo"Please select the number passengers while searching the flight.&nbsp;&nbsp;&nbsp;"; 
	echo '<a href="search1.php">Goto Search page&nbsp;&nbsp;>></a>';

}

?>



	<?php
	
	$_SESSION['ticket'] = $_POST;
	
	
	?>			
<?php

