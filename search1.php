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
    

    <?php
        session_start();
        $usname=$_SESSION['p1'];
        
        ?> 

    <nav id="mainav" class="fl_right">
    	<div float="right"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME<b>&nbsp;<?php echo $usname;?></div>
      <ul class="clear">
        <li class="active"><a href="home.html">HOME</a></li>
        <li class="active"><a href="mybooking.php">MY BOOKINGS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
     <!--   <li class="active"><a href="register.php">REGISTER</a></li>-->
        <li class="active"><a href="contact.php">FEEDBACK</a></li>
        
        </ul>
        </nav>
        </header>
        </div>       
<script type="text/javascript">
        function display() {
			document.getElementById("datepicker1").style.display='block';
			document.getElementById("label1").style.display='block';
        }
		function hide() {
		document.getElementById("datepicker1").style.display='none';
		document.getElementById("label1").style.display='none';
		}
</script><div>
 

				    	<div class="widget" style="float:left;">	
						<h2><i style="color:#A1C6D9">Search for Flights</i></h2>
						<div class="inner">
						<form action="searching.php" method="post">
						<input type="radio" value="1" name="radio" checked="checked" id="radio1" onclick="display()" style="display: inline"></input>
						<label for="radio1" style="display: inline">round trip</label>
						<input type="radio" value="2" name="radio" id="radio2" onclick="hide()" style="display: inline" ></input>
						<label for="radio2" style="display: inline">one way</label><br>
						<div style="display: inline;">
					
							<select id="cmbMake" name="Make"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" style="display: inline;">
									<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
									<option value="1">Delhi</option>
									<option value="2">Bangalore</option>
									<option value="3">Hydrebad</option>
									<option value="4">Chennai</option>
									<option value="5">Agra</option>
									<option value="6">Mumbai</option>
									<option value="7">Pune</option>
									<option value="8">Kolkatta</option>

							</select>&nbsp;
							<select id="cmbMake" name="Make1"   style="display: inline;"  onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
									<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
									<option value="1">Delhi</option>
									<option value="2">Bangalore</option>
									<option value="3">Hydrebad</option>
									<option value="4">Chennai</option>
									<option value="5">Agra</option>
									<option value="6">Mumbai</option>
									<option value="7">Pune</option>
									<option value="8">Kolkatta</option>

									
							</select>
						
						</div>
						
						<p><label style="display:block" id="label0">Depart date:</label>
						<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date" /></p>
						<p><label style="display:block" id="label1">Return date:</label>
						 <input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" /></p>
						<div style="display: inline">
							<select id="cmbMake" name="adult" onchange="document.getElementById('selected_text2').value=this.options[this.selectedIndex].text" style="display: inline" >
										<option value="0" disabled="disabled" selected="selected" id="place">Adult</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										
							</select>&nbsp;&nbsp;
							<select id="cmbMake" name="children" onchange="document.getElementById('selected_text3').value=this.options[this.selectedIndex].text" style="display:inline;">
										<option value="0" disabled="disabled" selected="selected" id="place1">Children</option>
										<option value="1">1</option>
										<option value="1">2</option>
										<option value="1">3</option>
										<option value="1">4</option>
										<option value="1">5</option>
										
							</select>
						<br><br>
						</div><br>
						<input type="hidden" name="selected_text" id="selected_text" value="" />
						<input type="hidden" name="selected_text1" id="selected_text1" value="" />
						<input type="hidden" name="selected_text2" id="selected_text2" value="" />
						<input type="hidden" name="selected_text3" id="selected_text3" value="" />
					
						<input type="submit" name="search" value="SEARCH" class="btnSearch"/>
						
						</form>
						</div>
					   </div>
			<div style="float:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="w3-content w3-section" style="width:30%;height:400px;border-radius:15px;size:50px;float:left;padding: 10px;margin:55px;background-color:#1F618D;overflow-wrap: break-word;"><div><i style="color:#A1C6D9;font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECENT UPDATES</i></div>
<?php
include 'db1.php';
echo "<table>";
$result=mysql_query("SELECT * FROM updates");
echo "<div style='overflow-wrap: break-word;'>
";
echo "<marquee scrolldelay='125' direction='up' style='height:350px;'>";

			while($test = mysql_fetch_array($result))
			{
			echo"<font color='#A1C6D9' size='5px;'>".$test['title1']."</font><br>";                                                          
           echo"<font color='white'>".$test['info']."</font><br><br>";
          
		}
			echo "</marquee>";

?>
</div>