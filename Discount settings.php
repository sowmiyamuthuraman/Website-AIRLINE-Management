<head>
<title>flightZ</title>
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
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        
        </ul>
        </nav>
        </header>
        </div>
      <form method="post">
        <div align="center"><b style="font-size:20px;"> DISCOUNT SETTINGS </b></div>
<table>

  <tr>
    <td>REGULAR CUSTOMER:</td>
    <td><input type="text" name="reg" class="form-control"/></td>
  </tr>
  <tr>
    <td>LADDIES:</td>
    <td><input type="text" name="lad" class="form-control"/></td>
  </tr>
  <tr>
    <td>CHILDREN(Below 5 Years):</td>
    <td><input type="text" name="child" class="form-control"/></td>
  </tr>
  <tr>
    <td>OLD CITIZEN(Above 60 Years):</td>
    <td><input type="text" name="old" class="form-control"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="save" class="btnSearch"/></td>
  </tr>
<?php
if(isset($_POST['save'])){
  include 'db1.php';
  $a=$_POST['reg'];
  $b=$_POST['lad'];
  $c=$_POST['child'];
  $d=$_POST['old'];
  $e=date("Y-m-d");
 if( mysql_query("INSERT INTO `discount_info`(regular_customer,Ladies,Children,Old,d_date) 
     VALUES ('$a','$b','$c','$d','$e')")){
       echo "<div style='background-color:#A1C6D9;' align='center'>CONFIGURED SUCCESSFULLY</div>";}
}



