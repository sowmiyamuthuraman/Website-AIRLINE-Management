<!DOCTYPE html>
<html>
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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

<body>
<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
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
      <!--  <li class="active"><a href="admin.html">ADMIN</a></li>-->
        </ul>
        </nav>
        </header>
        </div>

<form method="post">
<table>

	<tr>
		<td>FLIGHT ID:</td>
		<td><input type="text" name="fid" class="form-control" /></td>
	</tr>
	<tr>
		<td>FLIGHT NAME:</td>
		<td><input type="text" name="air" class="form-control" required/></td>
	</tr>
	<tr>
		<td>LEAVING FROM:</td>
		<td><input type="text" name="lplace" class="form-control" required/></td>
	</tr>
	<tr>
		<td>GOING TO:</td>
		<td><input type="text" name="gplace" class="form-control" required/></td>
	</tr>
	<tr>
		<td>DEPARTURE DATE:</td>
		<td><input type="text" name="ddate" class="form-control" placeholder="yyyy-mm-dd" required/></td>
	</tr>
	<tr>
		<td>DEPARTURE TIME:</td>
		<td><input type="TIME" name="dtime" class="form-control" required/></td>
	</tr>
	<tr>
		<td>ARRIVAL TIME:</td>
		<td><input type="TIME" name="atime" class="form-control" required/></td>
	</tr>
	
	
	
	<tr>
		<td>FEES:</td>
		<td><input type="text" name="ffee" class="form-control" required/></td>
	</tr><td>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db1.php';
	
			 		$a=$_POST['fid'] ;
					$n= $_POST['air'] ;	
					$m=$_POST['lplace'];
					$o=$_POST['gplace'];
					$p=$_POST['ddate'];
					$q=$_POST['dtime'];
					$r=$_POST['atime'];
					$s=$_POST['ffee'];
								
	
												
		 mysql_query("INSERT INTO `flight`(id,flightname,fromplace,toplace,date,time,atime,fee) 
		 VALUES ('$a','$n','$m','$o','$p','$q','$r','$s')"); 
				
				
	        }
?>
</form>
<table id ="customers" border="1">
<tr>
<th>FLIGHT ID</th>
<th>FLIGHT NAME</th>
<th>FROM</th>
<th>TO</th>
<th>DATE</th>
<th>DEPART TIME</th>
<th>ARRIVAL TIME</th>
<th>FEE</th>
<th colspan="3">OPERATIONS</th>
</tr>
	
			<?php
			include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM flight");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";

				echo"<td><font color='black'>" .$test['flightname']."</font></td>";
				echo"<td><font color='black'>" .$test['fromplace']."</font></td>";
				echo"<td><font color='black'>" .$test['toplace']."</font></td>";
				echo"<td><font color='black'>" .$test['date']."</font></td>";
				echo"<td><font color='black'>" .$test['time']."</font></td>";
				echo"<td><font color='black'>" .$test['atime']."</font></td>";
				echo"<td><font color='black'>" .$test['fee']."</font></td>";
				
                 echo"<td> <a href ='alterflight.php?id=$id'>Edit</a>";
				echo"<td> <a href ='delflight.php?id=$id'><center>Delete</center></a>";
				echo"<td> <a href ='assignemp.php?id=$id'>Assign</a>";
				
				
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
