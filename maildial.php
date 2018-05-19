
<head>
<title>flightZ</title>
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
      <table>
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="manage.html">HOME</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
       





	<form method="post">
<table>

	<tr>
		<td>INFORMATION :</td>
		<td><input type="text" name="info"  class="form-control" required/></td>
	</tr>
	<tr>
		<td>INFORM TO </td>
		<td><input type="text" name="to" placeholder="People in the region" class="form-control" required/></td>
	</tr>
		<tr><td>SEND MAIL UPTO</td>
		<td><input type="DATE" name="d_date"  class="form-control" required/></td>
	</tr>
	<tr><td>TIME INTERVAL</td>
		<td><input type="text" name="t" placeholder="Enter value in mintues" class="form-control" required/></td>
	</tr>
	<tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" class="btnSearch" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
<?php

if (isset($_POST['save']))
	{	   
	include 'db1.php';
	
			 		$a=$_POST['info'] ;
					$b= $_POST['to'] ;
					$c=$_POST['d_date']	;
					$d=$_POST['t'];
												
		if( mysql_query("INSERT INTO `informmail`(information,location,up_to_date,time_interval) 
		 VALUES ('$a','$b','$c','$d')")){
       echo "<div style='background-color:#A1C6D9;' align='center'>SCHEDULED SUCCESSFULLY</div>";}
}
?>