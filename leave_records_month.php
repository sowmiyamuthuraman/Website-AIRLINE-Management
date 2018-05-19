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
		
.dropbtn {
    background-color: inherit;
    color:#A1C6D9 ;
    padding: inherit;
    font-size: inherit;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
     z-index:500; float: right; 

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#1F618D ;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #1F618D;
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
        <li class="active"><a href="manage.html">HOME</a></li>
      <li class="active">
      <div class="dropdown">
  <button class="dropbtn">RECORDS</button>
  <div class="dropdown-content">
    <a href="leave_records_year.php">YEARLY</a>
    <a href="leave_records_month.php">MONTHLY</a>
    <a href="leave_records_date.php">DAILY</a>
  </div>
</div>

        <li class="active"><a href="logout.php">LOGOUT</a></li>
        

        </ul>
        </nav>
        </header>
        </div>

<form style="display:inline;" method="post">&nbsp;
<div align="center" style="padding: 5px;">
<select name="month1" style="display:inline;"  >
<option>MONTH</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option></select>&nbsp;&nbsp;

<input name="year1" style="display:inline;" type="text" placeholder="year" >&nbsp;&nbsp;
<input type="submit" name="pup" class="btnSearch" style="display:inline;">&nbsp;&nbsp;</div>

<?php

       if(isset($_POST['pup'])){
		include 'db1.php';
			
				//echo $c;
		$a=$_POST['year1'];
	    $b=$_POST['month1'];
			$result=mysql_query("SELECT * FROM leave_request where  YEAR(leave_from)='$a' AND MONTH(leave_from)='$b' OR MONTH(leave_to)='$b' AND status='active'");
			if( mysql_num_rows($result)>0){
				echo "<table id='customers'>";
			echo "<th>EMPLOYEE_ID</th>";
			echo "<th>EMPLOYEE_NAME</th>";
			echo "<th>LEAVE_FROM</th>";
			echo "<th>LEAVE_TO</th>";
			echo "<th>REASON</th>";

				while($test=mysql_fetch_array($result)){

					echo "<tr align='center'>";	
		       echo"<td><font color='black'>" .$test['employee_id']."</font></td>";
				echo"<td><font color='black'>". $test['employee_name']. "</font></td>";
			    
			    
				echo"<td><font color='black'>" .$test['leave_from']."</font></td>";
				echo"<td><font color='black'>". $test['leave_to']. "</font></td>";
			    echo"<td><font color='black'>". $test['reason_type']. "</font></td>";

			    

				}

			}
			else
			{
				echo "<div style='background-color:#A1C6D9;' align='center'>NO RECORDS FOR THE REQUESTED DATA</div>";
			}
		}

			?>
			</form>








