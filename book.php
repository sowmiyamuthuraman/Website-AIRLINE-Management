<!DOCTYPE html>
<head>
</head>
			
<?php
global $total;
global $out1;
$total = array();
$out1 = array();
?>
<?php
require('searching.php');
$passengers = $_REQUEST['s1'];
?>
<?php
$_SESSION['booked'] = $_POST['hi'];
$_SESSION['booked1'] = $_POST['hii'];
?>
<?php
$i=1;
echo '<form method="post">';
if($passengers>0){
	
     while($i<=$passenger){
     echo "<h2>please provide the passenger $i details:</h2>";
echo '<table>';

echo'<tr>';
echo'<td>TITLE</td>';
	echo'<td><select>';
		echo '<option>Mr</option>';
		echo'<option>Mrs</option>';
		echo'<option>Ms</option></select></td>';

	echo '</tr>';
	echo '<tr>';
	echo	'<td>FIRSTNAME*</td>';
	echo	'<td><input type="text" name="fname" class="form-control" required/></td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td>LASTNAME*</td>';
		echo '<td><input type="text" name="lname" class="form-control" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>PASSPORT NO</td>';
	echo	'<td><input type="text" name="passno" class="form-control"/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>VISA NO</td>';
	echo	'<td><input type="text" name="visano" class="form-control"/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>COUNTRY</td>';
	echo	'<td><select>';
	echo	'<option>AFGANISTHAN</option>';
	echo	'<option>AFRICA</option>';
	echo	'<option>AMERICA</option>';
	echo	'<option>INDIA</option>';
	echo	'</select></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>ADDRESS1*</td>';
	echo	'<td><input type="text" name="add1" class="form-control" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>ADDRESS2</td>';
	echo	'<td><input type="text" name="add2" class="form-control"/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>EMAIL*</td>';
	echo	'<td><input type="text" name="mail1" class="form-control" required/></td>';
	echo '</tr>';
	
	echo '<tr>';
	echo	'<td>CONTACT*</td>';
	echo	'<td><input type="text" name="contact1" class="form-control" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo	'<td>PIN*</td>';
	echo	'<td><input type="text" name="pin" class="form-control"/></td>';
	echo '</tr>';
	
	$i=$i+1;
	}?>
	
	
	<tr>
		
		<td><input type="checkbox" name="check" class="form-control" required /> I agree to the terms and conditions</td>
	</tr><td>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="continue" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
</form>
<?php
}
else
{
echo"Please select the number passengers while searching the flight.&nbsp;&nbsp;&nbsp;"; 
	echo '<a href="flight.php">Goto flight page&nbsp;&nbsp;>></a>';

}?>
	<?php
	
	$_SESSION['ticket'] = $_POST;
	
	
	?>			
