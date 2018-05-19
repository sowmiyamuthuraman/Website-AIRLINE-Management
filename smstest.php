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

<body><table>
	<form method="post">
		<tr>
    <td>MESSAGE</td>
    <td><input type="text" name="mes" class="form-control"/></td>
  </tr>
  <td>LOCATION</td>
    <td><input type="text" name="loc" class="form-control" placeholder="Enter the location to send to customers in specific location"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="save" class="btnSearch"/></td>
  </tr>
  <?php
/*echo "<tr style='background-color:#A1C6D9><td></td><td></td><td colspan='50'><div style='background-color:#A1C6D9;margin-top:40px;width:100%;' align='center'>hello</div></td></tr>";*/

 if(isset($_POST['save'])){
  $s=" ";
 	$message=$_POST['mes'];
  //echo $message;
 	include 'db1.php';
  if($_POST['loc']==""){
 	$result=mysql_query("SELECT * FROM passengers");}
  else{
    $b=$_POST['loc'];
    $result=mysql_query("SELECT * FROM passengers WHERE address1 LIKE '%" . $b. "%'");
  }
  while($test=mysql_fetch_array($result)){
     $mobile=8778643867;
  $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8778643867&Password=sowmiya21&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=sowmiZf9L4ewYNHXFiDcxrESz2KJUs"),true);
if ($json["status"]==="success") {
    $s="NOTIFIED SUCCESSFULLY";
}
    //your code when send success
else{
    echo $json["msg"];
    //your code when not send
}
}
echo "<tr style='background-color:#A1C6D9;'><td></td><td></td><td colspan='10'><div style='background-color:#A1C6D9;margin-top:40px;' align='center'>$s</div></tr>";
}
?>

 		