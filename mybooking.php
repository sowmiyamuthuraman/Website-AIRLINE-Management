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
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>
    </div>
    <?php
        ?> 

    <nav id="mainav" class="fl_right">
    	
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
      <!--  <li class="active"><a href="mybookings.php">MY BOOKINGS</a></li>-->
        <li class="active"><a href="logout.php">LOGOUT</a></li>
     <!--   <li class="active"><a href="register.php">REGISTER</a></li>-->
        <li class="active"><a href="contact.php">FEEDBACK</a></li>
        
        </ul>
        </nav>
        </header>
        </div>
        <div>&nbsp;&nbsp;&nbsp;</div>
        <table border="1" id="customers">
            <tr>
                <th>PASSENGER ID</th>
                <th>FROM</th>
                <th>TO</th>
                <th>DATE</th>
                <th>GRAND FARE</th>
                <th>TICKET</th>
    
            <?php
            include("db1.php");
             session_start();
             $usname=$_SESSION['p1'];
        
       
                
            $result=mysql_query("SELECT * FROM $usname");
            
            while($test = mysql_fetch_array($result))
            {
            
                echo "<tr align='center'>"; 
                $id=$test['passenger_id'];
                echo"<td><font color='black'>" .$test['passenger_id']."</font></td>";
                echo"<td><font color='black'>". $test['leaving_from']. "</font></td>";
                echo"<td><font color='black'>". $test['going_to']. "</font></td>";
                echo"<td><font color='black'>". $test['depart_date']. "</font></td>";
                echo"<td><font color='black'>". $test['grand_fare']. "</font></td>";
                echo"<td> <a href ='myticketviewer.php?id=$id'>DOWNLOAD TICKET</a>";
                //echo"<td> <a href ='del1.php?id=$id'><center>Delete</center></a>";
                                
                echo "</tr>";
            }
            mysql_close($conn);
            ?>
</table>



 