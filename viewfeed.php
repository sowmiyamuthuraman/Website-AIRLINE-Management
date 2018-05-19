
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
#rcorner{
	border-radius: 25px;
	border :2px solid #1F618D;
	padding:20px;
	min-width:200px;
	min-height:30px;
	display: inline-block;
}

</style>
</head>
<body id="top">
<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"  >
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
     <!--   <li class="active"><a href="register.php">REGISTER</a></li>-->
        <li class="active"><a href="viewfeed.php">FEEDBACK</a></li>
        </ul>
        </nav>
        </header>
        </div>





<?php
			include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM feedback");
			
			while($test = mysql_fetch_array($result))
			{
				echo "<div>";	
				echo "<pre id='rcorner'>";	
				echo"<font color='#1F618D'><b style='text-transform:uppercase'>" .$test['name']."</font></b><br>  ";
				echo"<font color='#A1C6D9'><i>" .$test['email']."</font></i><br>   ";
				echo"<font color='black'>". $test['content']. "</font>";
				echo "</div>";
				
									
				
			}
			mysql_close($conn);
			?>
