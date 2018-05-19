<head>
<title>flightZ</title>
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
    <tr><td><div style="width: 30%;height: 50%"><img src="glo.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="login.html">LOGIN</a></li>
        <li class="active"><a href="register.php">REGISTER</a></li>
        <li class="active"><a href="admin.html">ADMIN</a></li>
        </ul>
        </nav>
        </header>
        </div>
       








<?php
require("db1.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM flight WHERE id  = '$id' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$identity=$test['id'] ;
				$name= $test['flightname'] ;
				$leaving=$test['fromplace'];
				$going=$test['toplace'];
				$ddate=$test['date'];
				$dtime=$test['time'];
				$atime=$test['atime'];
				$fees=$test['fee'];					
				
	

if(isset($_POST['save']))
{	
	$title_save = $_POST['f_id'];
	$author_save = $_POST['f_name'];
	$f=$_POST['from_place'];
	$t=$_POST['to_place'];
	$s=$_POST['d_date'];
	$r=$_POST['d_time'];
	$u=$_POST['a_time'];
	$v=$_POST['f_fee'];


	

	mysql_query("UPDATE flight SET id ='$title_save', flightname ='$author_save',fromplace='$f',toplace='$t',date='$s',time='$r',atime='$u',fee='$v'
		  WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: updateflight.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>phptaab.blogspot.in</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>FLIGHT ID:</td>
		<td><input type="text" name="f_id" value="<?php echo $identity ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>FLIGHT NAME:</td>
		<td><input type="text" name="f_name" value="<?php echo $name ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>LEAVING FROM:</td>
		<td><input type="text" name="from_place" value="<?php echo $leaving ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>GOING TO:</td>
		<td><input type="text" name="to_place"  value="<?php echo $going ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>DEPARTURE DATE:</td>
		<td><input type="DATE" name="d_date" value="<?php echo $ddate ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>DEPARTURE TIME:</td>
		<td><input type="TIME" name="d_time" value="<?php echo $dtime ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>ARRIVAL TIME:</td>
		<td><input type="TIME" name="a_time" value="<?php echo $atime ?>" class="form-control" required/></td>
	</tr>
	
	
	
	<tr>
	<tr>
		<td>FEES:</td>
		<td><input type="text" name="f_fee" value="<?php echo $fees ?>" required/></td>
	</tr>
<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
