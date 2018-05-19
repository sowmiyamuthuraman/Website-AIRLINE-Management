<!DOCTYPE html>
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #1F618D;
    color: white;
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

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="my_leave_requests.php">LEAVE</a></li>
        <li class="active"><a href="dashboard.php">DISCUSSIONS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>

<body>

<?php
include 'db1.php';
session_start();
$u=$_SESSION['u1'];

$q=mysql_query("SELECT * FROM $u WHERE f_mon='11' AND f_y='2017'");
$nov=mysql_num_rows($q);
$q1=mysql_query("SELECT *  FROM $u WHERE f_mon='12' AND f_y='2017'");
$dec=mysql_num_rows($q1);
$q2=mysql_query("SELECT *  FROM $u WHERE f_mon='10' AND f_y='2017'");
$oct=mysql_num_rows($q2);
$q3=mysql_query("SELECT *  FROM $u WHERE f_mon='09' AND f_y='2017'");
$sep=mysql_num_rows($q3);
$q4=mysql_query("SELECT *  FROM $u WHERE f_mon='08' AND f_y='2017'");
$aug=mysql_num_rows($q4);
$q5=mysql_query("SELECT *  FROM $u WHERE f_mon='07' AND f_y='2017'");
$jul=mysql_num_rows($q5);
$q6=mysql_query("SELECT *  FROM $u WHERE f_mon='06' AND f_y='2017'");
$jun=mysql_num_rows($q6);
$q7=mysql_query("SELECT *  FROM $u WHERE f_mon='05' AND f_y='2017'");
$may=mysql_num_rows($q7);
$q8=mysql_query("SELECT *  FROM $u WHERE f_mon='04' AND f_y='2017'");
$apr=mysql_num_rows($q8);
$q9=mysql_query("SELECT *  FROM $u WHERE f_mon='03' AND f_y='2017'");
$mar=mysql_num_rows($q9);
$q10=mysql_query("SELECT *  FROM $u WHERE f_mon='02' AND f_y='2017'");
$feb=mysql_num_rows($q10);
$q11=mysql_query("SELECT *  FROM $u WHERE f_mon='01' AND f_y='2017'");
$jan=mysql_num_rows($q11);
?>
<div><h2><i style="color:#1F618D;font-size:30px;padding-top: 10px;">WORK ANALYSIS</i></h2></div>
	<div id="graphDiv2" style="float:left;"></div>
	<!--[if IE]><script src="excanvas.js"></script><![endif]-->
	<script src="html5-canvas-bar-graph.js"></script>
	<script>(function () {
	
		function createCanvas(divName) {
			
			var div = document.getElementById(divName);
			var canvas = document.createElement('canvas');
			div.appendChild(canvas);
			if (typeof G_vmlCanvasManager != 'undefined') {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}	
			var ctx = canvas.getContext("2d");
			return ctx;
		}
		
		
		var ctx2 = createCanvas("graphDiv2");
		
		var graph2 = new BarGraph(ctx2);
		graph2.margin = 2;
		graph2.width = 450;
		graph2.height = 300;
		var a1='<?php echo $jan;?>';
		var a2='<?php echo $feb;?>';
		var a3='<?php echo $mar;?>';
		var a4='<?php echo $apr;?>';
		var a5='<?php echo $may;?>';
		var a6='<?php echo $jun;?>';
		var a7='<?php echo $jul;?>';
		var a8='<?php echo $aug;?>';
		var a9='<?php echo $sep;?>';
		var a10='<?php echo $oct;?>';
		var a11='<?php echo $nov;?>';
		var a12='<?php echo $dec;?>';
		graph2.xAxisLabelArr = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
		setInterval(function () {
			graph2.update([a1 * 2, a2 * 2, a3 * 2, a4 * 2, a5 * 2, a6 * 2, a7 * 2, a8 * 2, a9 * 2, a10 * 2, a11 * 2, a12 * 2]);
		}, 1500);

	}());</script>
	<?php $a=date('m-d-Y',time());
			$month=date('m');
			$year=date('Y');
			$dt=date("F",mktime(0,0,0,$month,10));
			echo'<div><h2><i style="color:#1F618D;font-size:30px;">SCHEDULE : '.$dt."-".$year.'</i></h2></div>';
?>
	<div style="float:left;width:50%;height:30%;">
	<table id="customers" align="center" style="margin: 0 auto;">
	<tr>
	<th>FLIGHT NAME</th>
	<th>DATE</th>
	<th>TIME</th>
	</tr>
			<?php
			include("db1.php");
			
			
		  
			$result=mysql_query("SELECT * FROM $u WHERE f_mon='$month'");
			
			while($test = mysql_fetch_array($result))
			{
			
				echo "<tr align='center'>";	
		
				echo"<td ><font color='black'>" .$test['f_name']."</font></td>";
				echo"<td ><font color='black'>". $test['f_date']. "</font></td>";
				echo"<td ><font color='black'>". $test['f_time']. "</font></td>";
				
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table></div>

	
</body>
</html>
