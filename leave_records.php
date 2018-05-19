<form method="post">
SEARCH-BY<select type="submit" name="puppy">
<option>SELECT MODE</option>
<option value="1">YEAR</option>
<option value="2">MONTH</option>
<option value="3">DATE</option> 
</select>
<input type="submit" name="pup">
</form>
<?php
		include 'db1.php';
			
				//echo $c;
	
			$result=mysql_query("SELECT * FROM leave_request where  YEAR(leave_from)='2017'");
			echo mysql_num_rows($result);
			?>











