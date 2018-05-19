<html>
<head>
<link rel="Stylesheet" type="text/css" href="style1.css">

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
      <h1><a href="index.html"><i style="color:#A1C6D9">flightZ</i></a></h1>
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









<form method="post">
<table>

	<tr>
		<td>USERNAME:</td>
		<td><input type="text" name="user_name" class="form-control"/></td>
	</tr>
	<tr>
		<td>EMAIL ID:</td>
		<td><input type="text" name="e1_mail" class="form-control"/></td>
	</tr>
	
	<tr>
		<td>PASSWORD:</td>
		<td><input type="text" name="password" class="form-control"/></td>
	</tr><td>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="register" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db1.php';
	
			 		$username=$_POST['user_name'] ;
					$password= $_POST['password'] ;	
					$num1=$_POST['e1_mail'];				
	
												
		 if(mysql_query("INSERT INTO `registeruser`(first_name,pass,email) 
		 VALUES ('$username','$password','$num1')"))
		 {
		 	echo '<script type="text/javascript"> alert("Registration successful");</script>';

		 }

				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM registeruser");
			
			while($test = mysql_fetch_array($result))
			{
				//$id = $test['id'];	
				///echo "<tr align='center'>";	
				//echo"<td><font color='black'>" .$test['id']."</font></td>";
				//echo"<td><font color='black'>" .$test['first_name']."</font></td>";
				//echo"<td><font color='black'>". $test['pass']. "</font></td>";
				//echo"<td><font color='black'>". $test['email']. "</font></td>";
				

				
									
				echo "</tr>";
			}
						mysql_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
