
<?php
date_default_timezone_set('Asia/kolkata');

$var=date('H:i:s');
echo $var;
?>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style >
	#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 10px;
}
.btnSearch{    
      padding: 5px;
      background: #1F618D;
      border: 0;
      border-radius: 4px;
      margin: 0px 4px;
      color: #FFF;
      width: 100px;
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
        <li class="active"><a href="flight.html">FLIGHT</a></li>
      
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        <li class="active"><a href="contact.php">CONTACT</a></li>

        </ul>
        </nav>
        </header>
        </div>
        




<?php
$output = array();
$output1 = array();
global $count;
global $count1;
global $maker;
global $maker1;
$maker='';
$maker1='';
$count=0;
$count1=0;

?>


<?php //include 'search.php'; ?>				

<?php
if (isset($_POST['search'])) {

	
	
	
	
    $leaving_from = $_POST['Make']; // make value
	
    $going_to = $_POST['Make1'];
	$dd_date = $_POST['depart_date'];
	$rr_date = $_POST['return_date'];
    $maker = mysql_real_escape_string($_POST['selected_text']); // get the selected text
    $maker1 = mysql_real_escape_string($_POST['selected_text1']);
    $d_date = mysql_real_escape_string($_POST['depart_date']);
    $r_date = mysql_real_escape_string($_POST['return_date']);
	$adults = mysql_real_escape_string($_POST['selected_text2']);
	$child = mysql_real_escape_string($_POST['selected_text3']);
	$adult=$adults + $child;

	//session for adult
	session_start();
	$_SESSION['sessionvar'] = $adult;
	
    }
 ?>
 
 <?php
 $value = '';
 if (isset($_POST['search']) ){
    switch($_POST['radio']) {
        case "1":
            $value = "round_trip";
            break;
        case "2":
            $value = "one_way";
            break;
      }
	
 }
?>

<?php

if (isset($_POST['search']) ){
     include 'db1.php';
	
	if ($value == "one_way") {
   
$d_date = date('y-m-d', strtotime($d_date));

	$query = mysql_query("SELECT * FROM `flight` WHERE fromplace='$maker' AND toplace='$maker1' AND date LIKE '%$d_date%' ORDER BY time desc") or die("couldnot search data");
	$count = mysql_num_rows($query);
	//echo $count;
	
	if($count == 0) {
		$output = 'There was no search results!';
	} 
	else {
		
		while($row = mysql_fetch_array($query)) {
			$from1 = $row['fromplace'];
			$to1 = $row['toplace'];
			$flight_id = $row['id'];
			//$flight_name=$row['flightname'];
			$depart_date = $row['date'];
			
			$fare = $row['fee'];
			$time = $row['atime'];
			$dest_time = $row['time'];
			$output[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' '."</br>".' Depart time: '.$dest_time.' '."</br>".' '."</br>".' Arrival time: '.$time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";
			$output2[]="<tr><td>".$from1."</td><td>".$to1."</td><td>".$depart_date."</td><td>".$dest_time."</td><td>".$time."</td><td>".$fare."</td>";		
			$t[]=$dest_time; 
			
		}
		


		
	}
	
}
 
else if ($value = "round_trip") {
	$d_date = date('y-m-d', strtotime($d_date)); //date format

	
	$query = mysql_query("SELECT * FROM `flight` WHERE fromplace='$maker' AND toplace='$maker1' AND date LIKE '%$d_date%' ORDER BY time desc") or die("couldnot search data");
	
	$count = mysql_num_rows($query);
	;
	if($count == 0) {
		$output[] = 'There was no flights while going!';
	}
	else {
		
	
		while($row = mysql_fetch_array($query)) {
			$from1 = $row['fromplace'];
			$to1 = $row['toplace'];
			$flight_id = $row['id'];
			$depart_date = $row['date'];
		   // $flight_name=$row['flightname'];
			$fare = $row['fee'];
			$time = $row['atime'];
			$dest_time = $row['time'];
			
		
			$output[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' '."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";
			$output2[]="<tr><td>".$from1."</td><td>".$to1."</td><td>".$depart_date."</td><td>".$dest_time."</td><td>".$time."</td><td>".$fare."</td>";
			$t[]=$dest_time;	
						
			
		}
	

	}

	
	$r_date = date('y-m-d', strtotime($r_date)); 
	   

	$query = mysql_query("SELECT * FROM `flight` WHERE fromplace='$maker1' AND  toplace='$maker' AND date LIKE '%$r_date%'") or die("couldnot search data");
	$count1 = mysql_num_rows($query);
	if($count1 == 0) {
		$output1[] = 'There was no flights while coming!';
	}
	else {
		
		
		while($row = mysql_fetch_array($query)) {
			$from1 = $row['fromplace'];
			$to1 = $row['toplace'];
			$flight_id = $row['id'];//$flight_name=$row['flightname'];
						$return_date = $row['date'];
			$fare = $row['fee'];
			$dest_time = $row['time'];
			
			$output1[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$return_date.' '."</br>".''."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arrival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";
		 $output3[]="<tr><td>".$from1."</td><td>".$to1."</td><td>".$return_date."</td><td>".$dest_time."</td><td>".$time."</td><td>".$fare."</td>";	
			
		}

	}
	
}
			
else {
	$output[] = '';
	
}
}else{
	$output[] = 'please select the locations!';
}
	


?>


<form action="book2.php" method="post">

<?php

//check
if ($value == "round_trip"){
echo '<h3><i style="color:#A1C6D9">Going flights</i></h3>';
echo "<table id='customers'>";
		echo "<th>FROM</th>";
		echo "<th>TO</th>";
		echo "<th>DEPART DATE</th>";
		echo "<th>DEPART TIME</th>";
		echo "<th>ARRIVALTIME</th>";
		echo "<th>FARE</th>";
		echo "<th>AVAIL</th>";
$i = 0;
if ($count > 0 ) {
	while ($i < $count) {
		
	echo $output2[$i];
	echo '<td><input type="radio" name="hi" checked="checked" value="' . $output[$i] . '" id="but"></td></tr>';

	if($var>$t[$i]){
		//echo $t[$i];
    //echo "success";
	echo "<script type='text/javascript'>
document.getElementById('but').disabled=false;
</script>";

}

	
	echo '</br>';
		$i = $i+1;
	}
	echo "</table>";
}
else{
	echo "No going flights are available...";
}


//returning flights printing
echo '<h3><i style="color:#A1C6D9">Returning flights</i></h3>';
$j = 0;
if ($count1 > 0 ) {
	echo "<table id='customers'>";
		echo "<th>FROM</th>";
		echo "<th>TO</th>";
		echo "<th>DEPART DATE</th>";
		echo "<th>DEPART TIME</th>";
		echo "<th>ARRIVALTIME</th>";
		echo "<th>FARE</th>";
		echo "<th>AVAIL</th>";

	while ($j < $count1) {
		echo $output3[$j];
		echo '<td><input type="radio" name="hii" checked="checked" value="' . $output1[$j] . '" ></td></tr>';
	//echo $output1[$j]; 
	
	echo '</br>';
		$j = $j+1;
	}
	echo "</table>";
}
else{
	echo "No returning flights are available...";
}
}//closing of round_trip
else{
	echo '<h3><i style="color:#A1C6D9">Going flights</i></h3>';
	echo "<table id='customers'>";
		echo "<th>FROM</th>";
		echo "<th>TO</th>";
		echo "<th>DEPART DATE</th>";
		echo "<th>DEPART TIME</th>";
		echo "<th>ARRIVALTIME</th>";
		echo "<th>FARE</th>";
		echo "<th>AVAIL</th>";
		
$i = 0;
if ($count > 0 ) {
	while ($i < $count) {
		//$output[$i];
		echo $output2[$i];
	    echo '<td><input type="radio" name="hi" checked="checked" value="' . $output[$i] . '" id="but"></td></tr>';
if($var>$t[$i]){
	//echo "success";
	//echo $t[$i];
	echo "<script type='text/javascript'>
document.getElementById('but').disabled=false;
</script>";

}
		

	echo '</br>';
		$i = $i+1;
	}
	echo "</table>";
}
else{
	echo "No going flights are available...";
}
}
?>

<br>
<?php
$_SESSION['count']=$count;
$_SESSION['count1']=$count1;
if ($count1 > 0 | $count > 0) {
echo '<input type="submit" value="RESERVE" class="btnSearch"/>';
}
?>
</form>

