<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    


    <style>
body {
    font-family: "Lato", sans-serif;
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


<h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></h2>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script></html>
<?php  session_start();
 include 'db1.php';
?>
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
			
	</script>
<form action=" " method="POST" onsubmit="return check(this)">
<div style="background-color:#1F618D;width:60%;margin-left:auto;margin-right:auto;height:50%;">
<table  id='customers' style="width:60%;margin-left:auto;margin-right:auto;">
<tr><td style="background-color:#f2f2f2"><textarea rows="1" cols="30" name="head" placeholder="TAGS"></textarea><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td><textarea rows="5" cols="60" name="ta" placeholder="YOUR QUESTION" ></textarea><span id='b' style="color: red;"></span></td></tr><br/>
<tr><td style="background-color: #f2f2f2"><div style="float:left"><input type="submit" name="addq" value="Post" style="background-color:#1F618D "></div>&nbsp;<div style="float:left"><input type="reset" value="Clear" style="background-color:#1F618D "></div></td></tr>
</table></div>
<?php
if(isset($_POST['addq'])){
include 'db1.php';

$ta = $_POST['ta'];
$hd=$_POST['head'];
$u = $_SESSION["u1"];
$s=mysql_query("SELECT * FROM employee WHERE ename='$u'");
	while($test=mysql_fetch_array($s))
	{
		$e=$test['eid'];
	}

if(mysql_query("INSERT INTO `question` ( heading ,question_detail , employee_id) VALUES ( '$hd','$ta', '$e');")){
echo "<Script type='text/javascript'>window.alert('Posted Successfully');</script>";
}
//$result=ExecuteNonquery($sql);
}
?>

</form>


