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
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="viewfeed.php">FEEDBACK</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>

<h2><i>Ticket cancellation</i></h2>
<form action="" method="post">
		<ul>

		<li>
	   FLIGHT NAME:<br>
		<input type="text" name="fname">
		</li>
     
    <li>
     FROM:<br>
    <input type="text" name="from1">
    </li>
    <li>
    TO:<br>
    <input type="text" name="To1">
    </li>
  <li>
     DEPARTURE DATE:<br>
    <input type="text" name="ddate1">
    </li>
    <li>
     ARRIVAL TIME:<br>
    <input type="text" name="atime1">
    </li>

		<li>
		<input type="submit" name="cancel" value="Proceed">
		</li>
		</ul>
</form>
<?php
if (isset($_POST['cancel'])) {
	include('db1.php');

            $a=$_POST['fname'];
           // $b=$_POST['mail1'];
            $c=$_POST['from1'];
            $d=$_POST['To1'];
            $e=$_POST['ddate1'];
            $f=$_POST['atime1'];

	$query = "SELECT * FROM passengers WHERE  `leaving_from`='$c' AND `going_to`='$d' AND `depart_date`='$e' AND `arrival_time`='$f' ";
    $result = mysql_query($query);
echo "Ticket has been cancelled!";


while($row = mysql_fetch_array($result)){ 
 $deduce= ($row['fare'] + $row['grand_fare']) -(($row['fare'] + $row['grand_fare'])*0.23);
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=";
        $toEmail = $row['email'];
        $subject = "Ticket cancelled";
        $content = "Dear".$row['first_name']."Your Ticket for the travel from".$c."to".$d."on".$e."at".$f."has been cancelled!!"."As per the term and conditions 23% amount will be deducted from the paid amount and you will be paid with RS.".$deduce;
        $mailHeaders = "From: Admin\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {

          echo'<script type="text/javascript">window.alert("respetive passengers are informed about the cancellation through mail");</script>';
         }
        unset($_POST);



}
echo "&nbsp;<br> Dear&nbsp;";
echo '<b>';
echo "Hello!!!";
echo '</b>';
echo "! &nbsp;<BR>As per the <b>term and conditions </b> 23% amount will be deducted from the paid amount and you will be paid with RS.";

echo ($row['fare'] + $row['grand_fare']) -(($row['fare'] + $row['grand_fare'])*0.23);
echo '<br>';

mysql_query("DELETE FROM `passengers` WHERE  `leaving_from`='$c' AND `going_to`='$d' AND `depart_date`='$e' AND `arrival_time`='$f' "); //or die(mysql_error());
	

	
	}
	?>

