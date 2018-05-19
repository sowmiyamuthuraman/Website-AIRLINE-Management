<html>
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
.btnSearch{    
			padding: 5px;
			background:#1de0bf;
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
      <table>
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="chart.php">HOME</a></li>
        <li class="active"><a href="dashboard.php">DISCUSSIONS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>

<body>
<h2><i> APPLY FOR LEAVE</i></h2>

<table style="width:60%;margin-left:auto;margin-right:auto;background-color:#1680cc;">
<form method="post">
<tr>
<td>EMPLOYEE NAME</td>
<td><input type="text" name="ename"></td></tr>
<tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
<tr><td>EMPLOYEE ID</td>
<td><input type="number" name="eid"></td></tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
<tr><td>LEAVE REQUEST</td>
<td>
<input type="date" name="lfrom" placeholder="FROM" style="display:inline">
<input type="date" name="lto" placeholder="TO" style="display:inline"></td>
</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
<tr><td>REASON TYPE</td>
<td><select name="reason">
<option value="personnal">Personnal</option>
<option value="vacation">Vacation</option>
</select></td></tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
<tr><td>REASON</td>
<td><textarea name="r1" rows="3" cols="30"></textarea></td></tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="submit" class="btnSearch" name="apply" value="APPLY"></td></tr>
</div>
</table>
<?php
if(isset($_POST['apply'])){
	include 'db1.php';
	$a=$_POST['eid'];
	$b=$_POST['ename'];
	$c=$_POST['lfrom'];
	$d=$_POST['lto'];
	$e=$_POST['reason'];
	$f=$_POST['r1'];
	$s="pending";
	$h=date("Y-m-d");
	if(mysql_query("INSERT INTO `leave_request`(`employee_id`, `employee_name`, `leave_from`, `leave_to`, `reason_type`, `leave_reason`, `status`, `requested_on`) 
		 VALUES ('$a','$b','$c','$d','$e','$f','$s','$h')")
				){
		echo "<script type='text/javascript'>window.alert('Applied Successfully...');</script>";
	}
}?>
</form>