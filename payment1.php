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
      width: 150px;
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
    <table>
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    <!--  <h1><a href="index.html"><i style="color:#A1C6D9">flightZ</i></a></h1>-->
    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
       
        
        <li class="active"><a href="contact.php">CONTACT</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>









<?php
?>
 <?php
 session_start();
//echo $usname;

        function register_passenger($register_data2) {
        	include('db1.php');
        	//session_start();
             $usname=$_SESSION['p1'];
             //echo $usname;
	//array_walk($register_data1,'array_sanitize');
	//$register_data['password'] = md5($register_data['password']);
	$fields = '`' . implode('`, `', array_keys($register_data2)) . '`';
	$data = '\'' . implode('\', \'', $register_data2) . '\'';
	if(mysql_query("INSERT INTO `passengers` ($fields) VALUES ($data)"))
		echo '<script> alert("success");</script>';
	if(mysql_query("INSERT INTO `$usname` ($fields) VALUES ($data)"))
		echo '<script> alert("inserted successfully");</script>';
		
}
?>




<?php

$passengers = $_SESSION['sessionvar'];
//$usname=$_SESSION['p1'];
//$ulname=$_SESSION['p1'];


?>
<?php


?>
<?php
$a1=$_SESSION['count'];
$a2=$_SESSION['count1'];
if($a1>0){
$pass = $_SESSION['booked'];
$pieces= explode(" ", $pass);
}
//echo $pieces[17];

if($a2>0){
$pass1 = $_SESSION['booked1'];
$pieces1= explode(" ", $pass1);}
else
{   $data=array();
	$pieces1 = array_pad($data,30,0);


}






/*$grand_total = ($_SESSION['sessionvar']*$pieces[22] + $_SESSION['sessionvar']*$pieces1[21]);*/
$grand=0;
echo '<h3> Make the payment of Rs.</h3>';
	
include 'db1.php';
$result=mysql_query("SELECT * FROM discount_info ORDER BY id DESC LIMIT 1");
while($test=mysql_fetch_array($result)){
	$o=$test['Old'];
	$r=$test['regular_customer'];
	$c=$test['Children'];
	$l=$test['Ladies'];
	//echo $o;

}
$a=0;

if (isset($_POST['continue'])) {
	$j=0;

	while ($j < $passengers)
	{ 
		include 'db1.php';
		$n=implode(',',$_POST['fname']);
		//echo $n;
		$gt=0;
		$result=mysql_query("SELECT * FROM passengers WHERE first_name='$n'");
		while($row=mysql_fetch_array($result)){
			$gt=$gt+$row['grand_fare'];
		}
		$fare=$_POST["age"];
		$gen=$_POST["gender"];
	  
		if($fare>=60){
            if($pieces[22]>0){
			$a=$pieces[22]-($pieces[22]*($o/100));
			echo $a;
			$grand=$grand+$a;}
			if($pieces1[21]>0){
				$a=$pieces1[21]-($pieces1[21]*($o/100));
		echo $a;
			$grand=$grand+$a;
			}
		}
		else if($fare<=5){
            if($pieces[22]>0){
			$a=$pieces[22]-($pieces[22]*($c/100));
			echo $a;
			$grand=$grand+$a;}
			if($pieces1[21]>0){
				$a=$pieces1[21]-($pieces1[21]*($c/100));
		echo $a;
			$grand=$grand+$a;
			}
		}
		else if(strcmp($gen,"Female")==0){
            if($pieces[22]>0){
			$a=$pieces[22]-($pieces[22]*($l/100));
			echo $a;
			$grand=$grand+$a;}
			if($pieces1[21]>0){
				$a=$pieces1[21]-($pieces1[21]*($l/100));
		echo $a;
			$grand=$grand+$a;
			}
		}
		else if($gt>=10000000){
            if($pieces[22]>0){
			$a=$pieces[22]-($pieces[22]*($r/100));
			//echo $a;
			$grand=$grand+$a;}
			if($pieces1[21]>0){
				$a=$pieces1[21]-($pieces1[21]*($r/100));
		//echo $a;
			$grand=$grand+$a;
			}
		}
		else{
			if($pieces[22]>0){
             $grand=$pieces[22];}
             if($pieces1[21]>0){
             	$grand=$pieces1[21];
             }
		}
	

	
$register_data2 = array(
	'first_name'		=> $_POST["fname"][$j],
	'last_name'			=> $_POST["lname"][$j],
	'passport'			=> $_POST["passport"][$j],
	'visa'				=> $_POST["visa"][$j],
	'address1'			=> $_POST["address1"][$j],
	'address2'			=> $_POST["address2"][$j],
	'email'				=> $_POST["email"][$j],
	'contact'    		=> $_POST["contact"][$j],
	'pin'    			=> $_POST["pin"][$j],
	'leaving_from'      => $pieces[0],
	'going_to'      	=> $pieces[2],
	'depart_date'       => $pieces[7],
	'depart_time'       => $pieces[12],
	'arrival_time'      => $pieces[17],
	'grand_fare'      	=> $a,
	'returning_from'    => $pieces1[0],
	'returning_to'      => $pieces1[2],
	'returning_date'    => $pieces1[7],
	'returning_time'    => $pieces1[11],
	'reaching_time'     => $pieces1[16],
	'fare'      		=> $pieces1[21],
	'age'=>$_POST["age"][$j],
	'gender'=>$_POST["gender"][$j],

	);
	//print_r($register_data2);
	//$_SESSION['ticket'][] = $register_data2;

	$_SESSION['ticket'][] = $_POST["fname"][$j];
	$_SESSION['ticket'][] = $_POST["lname"][$j];
	$_SESSION['ticket'][] = $_POST["passport"][$j];
	$_SESSION['ticket'][] = $_POST["visa"][$j];
	$_SESSION['ticket'][] = $_POST["pin"][$j];
	register_passenger($register_data2);
  
	$j = $j+1;
	
}
echo $grand;
	
$_SESSION['ticket1'] = $pieces[0];
$_SESSION['ticket2'] = $pieces[2];
$_SESSION['ticket3'] = $pieces[7];
$_SESSION['ticket4'] = $pieces[12];
$_SESSION['ticket5'] = $pieces[17];
$_SESSION['ticket6'] = $pieces[22];


$_SESSION['ticket11'] = $pieces1[0];
$_SESSION['ticket22'] = $pieces1[2];
$_SESSION['ticket33'] = $pieces1[7];
$_SESSION['ticket44'] = $pieces1[11];
$_SESSION['ticket55'] = $pieces1[16];
$_SESSION['ticket66'] = $pieces1[21];
	
}
?>
<?php
if (isset($_POST['pay'])){
if ($_POST['cash'] != $grand) {
echo "*Pay the given amount!"."<br>";
}
else{
header ('Location: ticket3.php');
}
}
?>
<h2> Select payment method </h2>
<form action="payment1.php" method="post">
<input type="radio" name="payment" id="cash" checked="checked" value="cash" style="display: inline;">
<label for="cash" style="display: inline;"><b>CASH</b></label>
<input type="number" id="cash" name="cash" size="8"><br>


<input type="radio" name="payment" id="card" value="card" style="display: inline;">
<label for="card" style="display: inline;"><b>CARD</b></label>
<select>
<option>Debit card</option>
<option>Credit card</option>
</select>
<br>
<img src="visalogo.png" style="width:200px;height:100px;">
<br><br><br>
<input type="submit" name="pay" value="Make payment" class="btnSearch">
</form>


