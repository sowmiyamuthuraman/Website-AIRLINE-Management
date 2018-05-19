
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>

<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left" >
      <h1><a href="home.html"><i style="color:#A1C6D9">flightZ</i></a></h1>
    </div>
  
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="login.html">LOGIN</a></li>
        <li class="active"><a href="register.php">REGISTER</a></li>
        <li class="active"><a href="admin.html">ADMIN</a></li>
        </ul>
        </nav>
        </header>
        </div>
       



<?php
require("db1.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM admintable WHERE id  = '$id' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$username=$test['uname'] ;
				$password= $test['pass'] ;	
				$mail=$test['email'];				
				
	

if(isset($_POST['save']))
{	
	$title_save = $_POST['user_name'];
	$author_save = $_POST['password'];
	$mail_save=$_POST['e_mail'];

	

	mysql_query("UPDATE admintable SET uname ='$title_save', pass ='$author_save',email='$mail_save'
		  WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: updateadmin.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>flightZ</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>USERNAME:</td>
		<td><input type="text" name="user_name" value="<?php echo $username ?>"/></td>
	</tr>
	<tr>
		<td>EMAIL ID:</td>
		<td><input type="text" name="e_mail" value="<?php echo $username ?>"/></td>
	</tr>
	
	<tr>
		<td>PASSWORD</td>
		<td><input type="text" name="password" value="<?php echo $password ?>"/></td>
	</tr>
<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
