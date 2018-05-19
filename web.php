<head>
<title>flightz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="style1.css" rel="stylesheet" type="text/css">
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
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="passenger_list.php">FLIGHT</a></li>
        <li class="active"><a href="viewfeed.php">FEEDBACK</a></li>
    
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
    
<table align=center>
    <form method="POST" method="post"> 
    <tr>   
        <td> <textarea name="t1" cols="50" rows="2" style="min-height:5px;min-width:5px" placeholder="TITLE"></textarea></td></tr><tr>
     <td> <textarea name="title" cols="50" rows="2" style="min-height:10px;min-width:10px" placeholder="CONTENT"></textarea></td> </tr>   
             
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" class="btnSearch" name="go" value="ADD" align=center></td>
    </tr>
    </form>
    
</div>
<?php
if (isset($_POST['go']))
  {    
  include 'db1.php';
  
          $username=$_POST['title'] ;
          $s=$_POST['t1'];
                        
     mysql_query("INSERT INTO `updates`(`title1`,`info`) 
     VALUES ('$s','$username')"); 
        
        
          }
?>
</form>
<table border="1" align=center cellpadding="20px" style="column-span: 2" id="customers">
 <tr><th>TITLE</th><th>CONTENT</th><th>OPERATIONS</th></tr> 
      <?php
      include("db1.php");
      
        
      $result=mysql_query("SELECT * FROM updates");
      
      while($test = mysql_fetch_array($result))
      {
        $id=$test['id'];
        echo "<tr align='center' style='column-span:2'>"; 
            echo"<td><font color='black'>" .$test['title1']."</font></td>";

        echo"<td><font color='black'>" .$test['info']."</font></td>";
                echo"<td> <a href ='editInfo.php?id=$id' style='color:#45484c'><b>Edit</b></a>
        <a href ='delinfo.php?id=$id' style='color:#45484c'><b>&nbsp;&nbsp;Delete</b></a></td>";

        
        
        echo "</tr>";
      }
      mysql_close($conn);
      ?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

