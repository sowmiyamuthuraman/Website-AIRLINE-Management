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
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
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


<h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></h2>

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










<?php session_start(); 

include 'db1.php';
?>
<?php 
$upd=mysql_query("update question set views=views+1 where question_id=$_GET[qid]");
	
$str=mysql_query("SELECT * FROM question, employee WHERE  employee.eid=question.employee_id AND question_id=$_GET[qid]");
	
	
	$no_rows = mysql_num_rows($str);
	$head="";
	
	if ($no_rows > 0)

	{	
		echo "<table id='customers' style='width:60%;margin-left:auto;margin-right:auto;'>";

		while($row = mysql_fetch_array($str))
		{
			
			
			$head = $row['heading'];
		
			echo "<span class='box2'>";
			
			
						echo "<tr><th  width='100px'>";
			echo $row['question_detail'] ;echo"<br><br>";	
			echo "<i style='font-size:10px;'>Posted by $row[ename]<br><br>";
			

			echo "<b> Tag:$head</b><br/>";
			echo "$row[datetime]<br/><br/></i>";
			echo "
			<span class='glyphicon glyphicon-comment' style='float:right'>$row[reply]&nbsp;</span> 
			<span style='float:right' class='glyphicon glyphicon-eye-open'>$row[views]&nbsp;</span>
   
</th></tr>";
			
			
			
			
		}
		echo "</table></span></div>";
		
	}
?>

<?php
	$result=mysql_query("select * from answer,employee where question_id=$_GET[qid] and answer.employee_id=employee.eid ORDER BY  datetime desc");

	//$result=ExecuteQuery($sql);
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{	
				echo "<table id='customers' style='width:60%;margin-left:auto;margin-right:auto;'>";

		while($row1 = mysql_fetch_array($result))
		{
			
			
	
						echo "<tr>
			
			<td valign='top'>$row1[answer_detail]<br/><br/><i style='font-size:10px;'>Answered by $row1[ename]<br/>$row1[datetime]<br/><br/></tr>";
			
				
			
		}
		echo "</table></span><div class='h10'></div>";
	}
		
?>

<form  method="post">
<table id="customers" style="width:60%;margin-left:auto;margin-right:auto;">
<th>
<textarea rows=10 cols=70 name="reply" placeholder="Your Answer" required style="color:black"></textarea>
<input type="submit" name="posts" value="POST" align="center">
</th>
</table>
<?php
include 'db1.php';
if(isset($_POST['posts']))
{  $upd=mysql_query("update question set reply=reply+1 where question_id=$_GET[qid]");

	$q=$_GET['qid'];
	$u=$_SESSION['u1'];
	$ata=$_POST['reply'];
	$r=1;
	//echo $q.$u.$ata;
	$s=mysql_query("SELECT * FROM employee WHERE ename='$u'");
	while($test=mysql_fetch_array($s))
	{
		$e=$test['eid'];
	}
  if(mysql_query("INSERT INTO `answer` (question_id,answer_detail,employee_id,replied) VALUES('$q','$ata','$e',$r)")){
  	echo "<script type='text/javascript'>window.alert('Posted successfully');</script>";
  }


}
?>
</form>


