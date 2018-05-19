<head>
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
      
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
        





<div>
<form method="post">
<input type="text" name="location" placeholder="Location" style="display:inline">
<input type="text" name="gen" placeholder="GENDER" style="display:inline">
<select name="ages" style="display:inline">
	<option>AGE</option>
<option>0-5</option>
<option>5-10</option>
<option>15-20</option>
<option>20-40</option>
<option>40-60</option>
<option>60 above</option>
</select>
<input type="submit" name="go1" class="btnSearch" value="search" style="display:inline">
</form>
&nbsp;&nbsp;&nbsp;
<?php
$id=0;
if(isset($_POST['go1'])){
	include('db1.php');
	$id=1;
	$a=$_POST['location'];
	$b=$_POST['gen'];
	$c=$_POST['ages'];
	//echo "$c";
	$p=explode("-",$c);
		//echo $p[0].$p[1];
	if($c!="AGE"){
		$age1=(int)$p[0];
		$age2=(int)$p[1];}
		
    if($a!="" && $b!="" && $c!="AGE"){
    				$result=mysql_query("SELECT * FROM passengers WHERE gender='$b' AND
    				address1 LIKE '%" . $a. "%' AND age>=$age1 AND age<=$age2");}

	else if($a=="" && $c=="AGE"){
			$result=mysql_query("SELECT * FROM passengers WHERE gender='$b'");}

	else if($a=="" && $b==""){
		//echo "yes";
		$result=mysql_query("SELECT * FROM passengers WHERE age>=$age1 AND age<=$age2");


	}
	else if($b=="" && $a!="" && $c!="AGE"){
$result=mysql_query("SELECT * FROM passengers WHERE address1 LIKE '%" . $a. "%' AND age>=$age1 AND age<=$age2 ");}
 else if($a=="" && $b!="" && $c!="AGE"){
$result=mysql_query("SELECT * FROM passengers WHERE gender='$b' AND age>=$age1 AND age<=$age2 ");}

	


else if($c=="AGE" && $a!="" && $b!=""){
	
	
	$result=mysql_query("SELECT * FROM passengers WHERE address1 LIKE '%" . $a. "%' AND gender='$b'");}
	
    else if($b=="" && $c=="AGE"){
	$result=mysql_query("SELECT * FROM passengers WHERE address1 LIKE '%" . $a. "%'");}
	echo '<table id="customers">';
	echo '<tr>
	<th>PASSENGER_ID</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>CONTACT</th>
	<th>EMAIL</th>
	<th>AGE</th>
	<th>GENDER</th>
	<th>ADDRESS1</th>
	<th>ADDRESS2</th>';

	while($test=mysql_fetch_array($result)){
			echo "<tr align='center'>";	
		
				echo"<td><font color='black'>" .$test['passenger_id']."</font></td>";
				echo"<td><font color='black'>". $test['first_name']. "</font></td>";
				echo"<td><font color='black'>". $test['last_name']. "</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";

				echo"<td><font color='black'>". $test['age']. "</font></td>";
				echo"<td><font color='black'>". $test['gender']. "</font></td>";
				echo"<td><font color='black'>". $test['address1']. "</font></td>";
				echo"<td><font color='black'>". $test['address2']. "</font></td>";
				echo "</tr>";
			}
			mysql_close($conn);
			echo "</table>";
			
	

	}

if($id==0){
	echo '<table id="customers">';
	echo '<tr>
	<th>PASSENGER_ID</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>CONTACT</th>
	<th>EMAIL</th>
	<th>AGE</th>
	<th>GENDER</th>
	<th>ADDRESS1</th>
	<th>ADDRESS2</th>';
	include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM passengers");
			
			while($test = mysql_fetch_array($result))
			{
			
				echo "<tr align='center'>";	
		
				echo"<td><font color='black'>" .$test['passenger_id']."</font></td>";
				echo"<td><font color='black'>". $test['first_name']. "</font></td>";
				echo"<td><font color='black'>". $test['last_name']. "</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";

				echo"<td><font color='black'>". $test['age']. "</font></td>";
				echo"<td><font color='black'>". $test['gender']. "</font></td>";
				echo"<td><font color='black'>". $test['address1']. "</font></td>";
				echo"<td><font color='black'>". $test['address2']. "</font></td>";
				echo "</tr>";
			}
			mysql_close($conn);
			echo "</table>";
			
}