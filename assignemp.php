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
    <tr><td><div style="width: 30%;height: 50%"><img src="glosys.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>

    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
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
	?>			
	
</table>

		



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
		<td><input type="text" name="d_date" value="<?php echo $ddate ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td>ARRIVAL TIME:</td>
		<td><input type="TIME" name="a_time" value="<?php echo $atime ?>" class="form-control" required/></td>
	</tr>
	<tr>
		<td> EMPLOYEE DESIGNATION:</td>
		<td><input type="text" name="empdes" value="" class="form-control" required/></td>
	</tr>
	
	
	
	<tr>
	
<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="search" value="search" /></td>
	</tr>
</table>
<table id="customers" border="1">
<tr>
<th>NAME</th>
<th>DESIGNATION</th>
<th>SCHEDULE</th>
</tr>
	
			<?php
			if(isset($_POST['search'])){
			include("db1.php");
		    session_start();
		    $_SESSION['fn']=$_POST['f_name'];
		    $_SESSION['fi']=$_POST['d_date'];
		    $_SESSION['fd']=$_POST['a_time'];



			
				//$username=$_POST['user_name'] ;
			    $password= $_POST['empdes'] ;
			    $d=$_POST['d_date'];
			    //echo $d;					
	
			$result=mysql_query("SELECT * FROM employee WHERE edesc='$password'");
			
			while($test = mysql_fetch_array($result))
			{
				
				echo "<tr align='center'>";	
				$r1=$test['ename'];
			

			$q1=mysql_query("SELECT * FROM $r1 WHERE f_date='$d'");
					$count=mysql_num_rows($q1);
					//echo $count;
					if($count == 0){
						$e=$test['ename'];

				echo"<td><font color='black'>" .$test['ename']."</font></td>";
				echo"<td><font color='black'>". $test['edesc']. "</font></td>";
				
				
				echo"<td> <a href ='assign.php?id=$e'>assign</a>";
		
									
				echo "</tr>";
			}
					}
			mysql_close($conn);}
			?>


</body>
</html>
