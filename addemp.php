<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="style1.css" rel="stylesheet" type="text/css">


<title>flightz</title>

</head>

<body>
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

<form method="post">
<table>

	<tr>
		<td>EMPLOYEE NAME:</td>
		<td><input type="text" name="e_name" class="form-control"/></td>
	</tr>
	<tr>
		<td>EMPLOYEE ID:</td>
		<td><input type="text" name="e_id" class="form-control"/></td>
	</tr>
	<tr>
		<td>PASSWORD:</td>
		<td><input type="text" name="e_pass" class="form-control"/></td>
	</tr>
	<tr>
		<td>DESIGNATION:</td>
		<td><input type="text" name="e_desc" class="form-control"/></td>
	</tr>
	<tr>
		<td>GENDER:</td>
		<td><input type="text" name="gen" class="form-control"/></td>
	</tr>
	<tr>
		<td>MAIL ID:</td>
		<td><input type="text" name="e_mail" class="form-control"/></td>
	</tr>






	<tr>
		<td>CONTACT:</td>
		<td><input type="text" name="e_contact" class="form-control"/></td>
	</tr><tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add" value="add" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<?php
if (isset($_POST['add']))
	{	   
	include 'db1.php';
	
			 		$a=$_POST['e_name'] ;
					$b= $_POST['e_id'] ;
					$c=$_POST['e_pass']	;
					$d=$_POST['e_desc'];
					$e=$_POST['gen'];
					$f=$_POST['e_mail'];
					$g=$_POST['e_contact'];			
	          									
		if( mysql_query("INSERT INTO `employee`(ename,eid,epass,edesc,gender,email,contact) 
		 VALUES ('$a','$b','$c','$d','$e','$f','$g')")){
         mysql_query("CREATE TABLE `flight`.$a(`f_name` VARCHAR(30),`f_day` VARCHAR(20),`f_mon` VARCHAR(20),`f_y` VARCHAR(30),`f_time` VARCHAR(30),`f_date` VARCHAR(30) PRIMARY KEY)ENGINE = InnoDB");
     mysql_query("INSERT INTO $a(edesc) VALUES('$d')");
         	echo '<script type="text/javascript">window.alert("table created successfully");</script>';
         }
     }				
	        
?></form>
<table border="1">
	
			<?php
			include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM employee");
			
			while($test = mysql_fetch_array($result))
			{
				$id=$test['eid'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['eid']."</font></td>";
				echo"<td><font color='black'>" .$test['ename']."</font></td>";
				echo"<td><font color='black'>". $test['epass']. "</font></td>";
				echo"<td><font color='black'>". $test['gender']. "</font></td>";
				echo"<td><font color='black'>". $test['edesc']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";
echo"<td><font color='black'>". $test['contact']. "</font></td>";



 
				
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>


</body></html>
