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
        <li class="active"><a href="chart.php">HOME</a></li>
       <!-- <li class="active"><a href="flight.html">FLIGHT</a></li>-->
        
        <li class="active"><a href="logout.php">LOGOUT</a></li>
      <!--  <li class="active"><a href="contact.php">CONTACT</a></li>-->

        </ul>
        </nav>
        </header>

        </div>
        <h2><i style="color:#A1C6D9">MY LEAVE</i></h2>
        <a href="apply_leave.php">APPLY LEAVE</a>
<?php
include("db1.php");
			
				session_start();
				$c=$_SESSION['u1'];
				//echo $c;
			$result=mysql_query("SELECT * FROM leave_request where employee_name='$c'");
			echo "<table id='customers'>";
			echo "<th>LEAVE_FROM</th>";
			echo "<th>LEAVE_TO</th>";
			echo "<th>REQUESTED DATE</th>";
			echo "<th>REASON-TYPE</th>";
			echo "<th>REASON </th>";
			echo "<th>STATUS</th>";
			while($test = mysql_fetch_array($result))
			{
			
				echo "<tr align='center'>";	
		
				echo"<td><font color='black'>" .$test['leave_from']."</font></td>";
				echo"<td><font color='black'>". $test['leave_to']. "</font></td>";
			    echo"<td><font color='black'>". $test['requested_on']. "</font></td>";
			    echo"<td><font color='black'>". $test['reason_type']. "</font></td>";
			    echo"<td><font color='black'>". $test['leave_reason']. "</font></td>";
			    echo"<td><font color='black'>". $test['status']. "</font></td>";
				echo "</tr>";
			}
			
			?>



</form>
</html>
