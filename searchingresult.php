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

</style>


<?php
	//$conn = mysqli_connect("localhost", "root", "", "blog_samples");
	include 'db1.php';
	$with_any_one_of = "";
		$advance_search_submit = "";
	$count=0;
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		$count=$count++;
		$advance_search_submit = $_POST["advance_search_submit"];
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of","with_the_exact_of","without","starts_with");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "heading LIKE '" . $wordsAry[$i] . "%' OR question_detail LIKE '" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
								}
			}
		}
	}
	$orderby = " ORDER BY question_id desc"; 
	$sql = "SELECT * FROM question " . $queryCondition;
	$result = mysql_query($sql);

	
?>
<html>
	<head>
	<title>Advanced Search using PHP</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

	<style>
body {
    font-family: "Lato", sans-serif;
}

		.search-box {
			padding: 30px;
			background-color:#C8EEFD;
		}
		.search-label{
			margin:2px;
		}
		.demoInputBox {    
			padding: 10px;
			border: 0;
			border-radius: 4px;
			margin: 0px 5px 15px;
			width: 250px;
		}
		.btnSearch{    
			padding: 10px;
			background: #84D2A7;
			border: 0;
			border-radius: 4px;
			margin: 0px 5px;
			color: #FFF;
			width: 150px;
		}
		#advance_search_link {
			color: #001FFF;
			cursor: pointer;
		}
		.result-description{
			margin: 5px 0px 15px;
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
       <!-- <li class="active"><a href="flight.html">FLIGHT</a></li>-->
        <li class="active"><a href="dashboard.php">DISCUSSIONS</a></li>
        <li class="active"><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
        </header>
        </div>
       


	<script>
	

		function showHideAdvanceSearch() {
			if(document.getElementById("advanced-search-box").style.display=="none") {
				document.getElementById("advanced-search-box").style.display = "block";
				document.getElementById("advance_search_submit").value= "1";
			} else {
				document.getElementById("advanced-search-box").style.display = "none";
				document.getElementById("with_the_exact_of").value= "";
				document.getElementById("without").value= "";
				document.getElementById("starts_with").value= "";
				document.getElementById("search_in").value= "";
				document.getElementById("advance_search_submit").value= "";
			}
		}
	</script>
	</head>
	<body>
		
		<?php
		session_start();
	$a=$_SESSION['same'];	
	?>
    <div>      
			<form name="frmSearch" method="post" action="searchingresult.php">
			<input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
			<div class="search-box">
			<!--	<label class="search-label">With Any One of the Words:</label>-->
				<div>
					<input type="text" name="search[with_any_one_of]" class="demoInputBox" value="<?php  $a;
					 ?>"	/>
				<!--	<span id="advance_search_link" onClick="showHideAdvanceSearch()">Advance Search</span>-->
				</div>	
							
				
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
			</div>
			</form>	
			<?php 
			if(mysql_num_rows($result)>0){
			echo "<table id='customers'>";
      echo "<th>TAGS</th>";
      
     // echo "<th>QUESTIONAIRE</th>";
      echo "<th>QUESTIONS</th>";
      echo "<th>POSTED DATE</th>";
      echo "<th>VIEWS</th>";
      echo "<th>REPLIES</th>";
        
			while($row = mysql_fetch_array($result)) {
			echo "<tr>";
      echo "<td>$row[heading]</a></span>";
      
     // echo "<tr>";
     // echo "<td valign='top' width='100px'>$row[ename]</td>";
              
      echo "<td valign='top'><a href='questionview.php?qid=$row[question_id]' > $row[question_detail]</td>";
     
     echo" <td> $row[datetime]</td>";
      echo"<td>$row[views]</td>";
            echo"<td>$row[reply]</td>";

    echo "</tr>";
      
      }
      echo "</table>";}
      else
      {
      	echo "No such results found.... ";
      }
			 ?>
		</div>
	</body>
</html>