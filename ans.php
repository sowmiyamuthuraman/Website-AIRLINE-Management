<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="res/style.css" type="text/css" media="screen" />

    <style>
body {
    font-family: "Lato", sans-serif;
    background-color: white;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
        <li class="active"><a href="dashboard.html">DISCUSSIONS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="chart.php">HOME</a>
  <a href="que.php">MY QUERIES</a>
  <a href="ans.php">MY SUGGESTIONS</a>

  <a href="ask.php">ASK QUESTIONS</a>
</div>


<h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MY SOLUTIONS</span></h2>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 











<?php 
include 'db1.php';
	session_start();
	$u=$_SESSION['u1'];

	
	$q=mysql_query("SELECT * FROM employee WHERE ename='$u'");
while($test=mysql_fetch_array($q)){
	$i=$test['eid'];
}
	
?>
<?php
$result=mysql_query("SELECT * FROM  answer,question WHERE answer.employee_id='$i' AND answer.question_id=question.question_id");
$c=mysql_num_rows($result);
//echo $c;
   echo "<div style='width:60%;margin-left:auto;margin-right:auto;border:1px solid black;'>";
		while($row = mysql_fetch_array($result))
		{
		echo "<span class='box2'>";	
		echo "<span class='head' style='background-color:#1F618D;'><a  href='questionview.php?qid=$row[question_id]'><h4 style='color:white;'>$row[question_detail]</h4></a></span>";
		echo "</span>";
		echo  "<br/>";
		
		
		
		echo $row['answer_detail'];
		echo  "<br/>";
		
		
		echo $row['datetime'];
		echo  "<br/>";
		
		}
	echo "</div>";

?>
