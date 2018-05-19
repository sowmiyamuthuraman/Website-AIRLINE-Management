<html>
<head>
<title>flightZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row1" style="background-color:#1F618D">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"  >
<table>
    <tr><td><div style="width: 30%;height: 50%"><img src="ss.jpg"></div></td><td><h1 id="mainav"><i style="color:#A1C6D9">AIR-LINE RESERVATION</i></h1></td></tr>
      <!--<h1><div align="center" style="width:30%;height:50%;float: right;"><a href="index.html"> <i style="color:#A1C6D9">AIR-LINES</i></a></div> </h1>-->
</table>
    </div>
    
    <nav id="mainav" class="fl_right">

      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="flight.html">FLIGHT</a></li>
        <li class="active"><a href="logout.php">LOGIN</a></li>
     <!--   <li class="active"><a href="register.php">REGISTER</a></li>-->
    <!--    <li class="active"><a href="feedback.html">FEEDBACK</a></li>-->
        </ul>
        </nav>
        </header>
        </div>
        <div>
        <table style="float:left">
<tr><td><div id="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2312417704443!2d77.48509699999998!3d13.084525999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae236e37165bc5%3A0x775c53e4d8c418b9!2sACHARYA+INSTITUTES!5e0!3m2!1sen!2sin!4v1438023384037" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div></td>
</tr></table>

<form method="post">

<table style="float:left">
    <tr><td><h2><i style="color:A1C6D9">we value your feedback</i></h2></td></tr>
	<tr>
		<td>NAME:</td></tr>
		<tr><td><input type="text" name="user_name" class="form-control" required/></td>
	</tr>
	<tr>
		<td>EMAIL:</td></tr>
		<tr><td><input type="text" name="mail1" class="form-control" required/></td>
	</tr>
	
	<tr>
		<td>FEEDBACK:</td></tr>
	<tr>	<td><input type="textarea" height=30px width=30px name="password" class="form-control" required /></td>
	</tr>
		
		<td><input type="submit" name="add" value="SEND" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
</form>
</div>

<?php
if (isset($_POST['add']))
	{	   
	include 'db1.php';
	
			 		$username=$_POST['user_name'] ;
					$password= $_POST['password'] ;
					$email=$_POST['mail1'];					
	              								
		if( mysql_query("INSERT INTO `feedback`(name,email,content) 
		 VALUES ('$username','$email','$password')")){
		 echo '<script type="text/javascript"> window.alert(" Thankyou for your feedback!!");</script>';}
		else
		{
			echo'<script type="text/javascript"> window.alert(" Something Wrong!!");</script>';
		}

				
				
	        }
?>
</form></div>
<table border="1">
	
			<?php
			include("db1.php");
			
				
			$result=mysql_query("SELECT * FROM feedback");
			
			while($test = mysql_fetch_array($result))
			{
				
			}
			mysql_close($conn);
			?>
</table>

