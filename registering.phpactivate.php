
<?php

	require_once("dbcontroller.php");
  session_start();
  $un=$_SESSION['uname'];

	$db_handle = new DBController();
	if(!empty($_GET["id"])) {
	$query = "UPDATE registered_users set status = 'active' WHERE id='" . $_GET["id"]. "'";
	$result = $db_handle->updateQuery($query);
		if(!empty($result)) {
			$message = "Your account is activated.";
      //$r="SELECT user_name FROM registered_users WHERE id='" . $_GET["id"]. "'";
      include 'db1.php';
     if(mysql_query("CREATE TABLE `flight`.$un(`passenger_id` int(11),`flightid` varchar(300),`first_name` varchar(300),`last_name` varchar(300),`passport` varchar(15),`visa` varchar(15),`country` varchar(15),`address1` varchar(300),`address2` varchar(300),`email` varchar(32),`contact` varchar(14),`pin` varchar(11),`leaving_from`varchar(32),`going_to` varchar(32),`depart_date` varchar(300),`depart_time` varchar(300),`arrival_time` varchar(300),`grand_fare`int(10),`returning_from` varchar(32),`returning_to` varchar(32),`returning_date` varchar(300),`returning_time` varchar(30),`reaching_time` varchar(300),`fare` int(32))")){
        echo "<script> alert('success');</script>";
      }
		} 
    else {
			$message = "Problem in account activation.";
		}
}
	
?>
<html>
<head>

<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body id=top>
<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"  >
<table>
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>
    </div>
    
    <nav id="mainav" class="fl_right">

      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="login.html">LOGIN</a></li>
     <!--   <li class="active"><a href="register.php">REGISTER</a></li>-->
        <li class="active"><a href="feedback.html">FEEDBACK</a></li>
        </ul>
        </nav>
        </header>
        </div>
       

<?php if(isset($message)) { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>
</body></html>
		