<html>
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

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
        <li class="active"><a href="chart.php">HOME</a></li>
        <li class="active"><a href="my_leave_requests.php">LEAVE</a></li>
        <li class="active"><a href="discussion.php">DISCUSSIONS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>

<body>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="chart.php">HOME</a>
  <a href="que.php">MY QUERIES</a>
  <a href="ans.php">MY SUGGESTIONS</a>

  <a href="ask.php">ASK QUESTIONS</a>
</div>

<h2></h2>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<form method="post">
<div style="float:right">
      <button type="submit" name="add" class="searchButton" style="height:23px">
        <i class="fa fa-search"></i>
     </button>
   </div>

  <div style="float:right">
   
      <input type="text" name="term" class="searchTerm" placeholder="search" required></div>
      
  
<?php
if(isset($_POST['add'])){
  session_start();
  $_SESSION['same']=$_POST['term'];
  header('Location:searchingresult.php');
}?>
</form>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<?php
 include 'db1.php';
  $result=mysql_query("select * from question,employee where question.employee_id=employee.eid ORDER BY  datetime desc limit 0,5");
  

  
      echo "<table id='customers'>";
      echo "<th>TAGS</th>";
      
      echo "<th>QUESTIONAIRE</th>";
      echo "<th>QUESTIONS</th>";
      echo "<th>POSTED DATE</th>";
      echo "<th>VIEWS</th>";
      echo "<th>REPLIES</th>";

  while($row = mysql_fetch_array($result))
  {
       
      
      echo "<tr>";
      echo "<td>$row[heading]</a></span>";
      
     // echo "<tr>";
      echo "<td valign='top' width='100px'>$row[ename]</td>";
              
      echo "<td valign='top'><a href='questionview.php?qid=$row[question_id]' > $row[question_detail]</td>";
     
     echo" <td> $row[datetime]";
      echo"<td>$row[views]</td>";
            echo"<td>$row[reply]</td>";

    echo "</tr>";
      
      
    }
        echo "</table>";

?>


     
</body>
</html> 

