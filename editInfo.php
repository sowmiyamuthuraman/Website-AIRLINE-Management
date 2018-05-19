<html>
<head>

<!--<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="a-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="style1.css" rel="stylesheet" type="text/css">
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
        <li class="active"><a href="passenger_list.php">FLIGHT</a></li>
        <li class="active"><a href="viewfeed.php">FEEDBACK</a></li>
    
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
    



<?php
include 'db1.php';
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM updates WHERE id  = '$id' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$username=$test['info'] ;
				//$password= $test['password'] ;					
				echo $username;
	

if(isset($_POST['go']))
{	
	$title_save = $_POST['title'];
	//$author_save = $_POST['password'];

	

	mysql_query("UPDATE updates SET info ='$title_save' 
		  WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: web.php");			
}
mysql_close($conn);
?>
<table>
  <form method="post">
	<tr>   
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;  <textarea name="title" cols=55 rows=2 style="min-height:5px;min-width:5px;" value="<?php echo $username ?>"></textarea></td>    
          </tr><tr>   
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

     <td>  <input type="submit" class="btnSearch" name="go" value="UPDATE!"></td>
     

    </tr>

    </form>
</table>

</body>
</html>
