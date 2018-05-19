<!DOCTYPE html> 
<table border=1px width=50%>
<tr><td><h3 align="center">your Ticket as on<?php echo date(y-m-d)?></h3><br><br><br></td>
</tr>
<tr><td>
<h5><p>To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter. <br>
The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. </h5>
</p>
</h5></td></tr>
</table>

<table border="1px" width=50%>
<tr>
<td>FIRST NAME</td>
<td>LAST NAME</td>
<td>PASSPORT </td>
<td>VISA</td>
<td>PIN</td>
</tr>
<?php
session_start();
$i=0;
while($i<=(SESSION_['sessionvar']*5)){
	if($i%5==0)
		echo'<tr>';
	if($i%5==0)
		echo '<tr>';
	echo '<td>';
	print_r(SESSION_[ticket][$i]);
	echo '</td>';
	$i=$i+1;
} echo '</table>';
?>

<table border="1px" width=50%>
<tr>
<td> FROM</td>
<td> TO </td>
<td> DATE </td>
<td> DEPARTURE TIME </td>
<td> ARRIVAL TIME</td>
<td> FARE</td>
</tr>
<?php
echo '<tr>';
echo '<td>';
print_r($SESSION_[ticket1]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket2]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket3]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket4]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket5]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket6]);
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
print_r($SESSION_[ticket11]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket22]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket33]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket44]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket55]);
echo '</td>';
echo '<td>';
print_r($SESSION_[ticket66]);
echo '</td>';
echo '</tr>';
echo '</table>';
?>
<table border="1" style="width=50%">
 <tr>
    <td> Please note:<br></td>
    
  </tr>
  <tr>
    <td> <h6> All Guests, including children and infants, must present valid identification at check-in. </h6> </td>
    </tr>
	
</table>
<a href="generate_ticket.php" target="_blank">Generate ticket</a>

</form>






