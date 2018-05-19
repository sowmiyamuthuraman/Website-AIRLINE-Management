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
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
      
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        <li class="active"><a href="contact.php">CONTACT</a></li>

        </ul>
        </nav>
        </header>
        </div>
        <h2><i style="color:#A1C6D9">PASSENGERS LIST</i></h2>
<form style="display: inline;" method="post">
<input type="text" name="fid" style="display: inline;" placeholder="FLIGHT ID" >&nbsp;&nbsp;
<select name="from" style="display: inline;">
<option value="bangalore">Bangalore</option>
<option value="chennai">Chennai</option>
</select>&nbsp;&nbsp;
<select name="to" style="display: inline;">
<option value="mumbai">Mumbai</option>
<option value="chennai">Chennai</option>
</select>&nbsp;&nbsp;
<input type="text" name="d" style="display: inline;">
<input type="submit" name="search" class="btnSearch" style="display: inline;" value="SEARCH"></form>
<form  style="display:inline;" action="passenger_list_excel.php">
<input type="submit" name="export" class="btnSearch" style="float:right;display:inline" value="EXPORT"></form>
<?php
if(isset($_POST['search'])){
	$f=$_POST['from'];
	$f1=$_POST['fid'];
	$t=$_POST['to'];
	$ddate=$_POST['d'];
	session_start();
	$_SESSION['a']=$_POST['from'];
	$_SESSION['b']=$_POST['fid'];
	$_SESSION['c']=$_POST['to'];
	$_SESSION['e']=$_POST['d'];

	//echo $f.$f1.$t.$ddate;
include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM passengers WHERE leaving_from='$f' AND going_to='$t' AND flightid='$f1' AND depart_date='$ddate'");
			echo "<table id='customers'>";
			echo "<th>PASSENGER-ID</th>";
			echo "<th>FIRST NAME</th>";
			echo "<th>LAST NAME</th>";
			echo "<th>PASSPORT NUMBER</th>";
			echo "<th>VISA </th>";
			echo "<th>CONTACT</th>";
			while($test = mysql_fetch_array($result))
			{
			
				echo "<tr align='center'>";	
		
				echo"<td><font color='black'>" .$test['passenger_id']."</font></td>";
				echo"<td><font color='black'>". $test['first_name']. "</font></td>";
			    echo"<td><font color='black'>". $test['last_name']. "</font></td>";
			    echo"<td><font color='black'>". $test['passport']. "</font></td>";
			    echo"<td><font color='black'>". $test['visa']. "</font></td>";
			    echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo "</tr>";
			}
			mysql_close($conn);}
			?>
</table>

</table>




</form>
</html>
