<style>
#main,td{
	padding-left:15px;
	padding-right:15px;
	border:1px;
}

</style>


<table border="1" style="width:68%">
  <tr>
    <td><h3 align="center">  Your E-Ticket as on <?php echo date("Y/m/d");?> </h3><br></td>
    
  </tr>
  <tr>
    <td><p>
	<h5>
To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter. <br>
The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. </h5>
</p></td>
    
  </tr>
</table>



<?php

echo '<pre> FIRSTNAME    LASTNAME    PASSPORT   PIN  </pre>';

session_start();
$i=0;
while($i<($_SESSION['sessionvar']*5)){

	if($i %5==0)
		echo '<tr>';
	if($i %5==0){
		echo '</tr>';
	}
	echo '<td>';
	
	print_r($_SESSION['ticket'][$i]);
	echo '</td>';
$i = $i +1;
}

?>
echo '<pre >FROM TO DEP_TIME</pre>';

<?php
echo '<div style="word-spacing:20px>FROM TO DEP_TIME</div>';
echo '<table border="1" style="width:68%">';

echo '<tr>';
echo '<td>';
print_r($_SESSION['ticket1']);
echo '</td>';
echo '<td>';
print_r($_SESSION['ticket2']);
echo '</td>';
echo '<td>';
print_r($_SESSION['ticket3']);
echo '</td>';
echo '<td>';
print_r($_SESSION['ticket4']);
echo '</td>';
echo '<td>';
print_r($_SESSION['ticket5']);
echo '</td>';
echo '<td>';
print_r($_SESSION['ticket6']);
echo '</td>';
echo '</tr>';


echo '<tr>';
echo '<td>';
if($_SESSION['ticket11']!=null)
print_r($_SESSION['ticket11']);
echo '</td>';
echo '<td>';
if($_SESSION['ticket22']!=null)
print_r($_SESSION['ticket22']);
echo '</td>';
echo '<td>';
if($_SESSION['ticket33']!=0)
print_r($_SESSION['ticket33']);
echo '</td>';
echo '<td>';
if($_SESSION['ticket44']!=0)
print_r($_SESSION['ticket44']);
echo '</td>';
echo '<td>';
if($_SESSION['ticket55']!=0)
print_r($_SESSION['ticket55']);
echo '</td>';
echo '<td>';
if($_SESSION['ticket66']!=0)
print_r($_SESSION['ticket66']);
echo '</td>';
echo '</tr>';
echo '</table>';
?>

<table border="1" style="width:68%">
  <tr>
    <td> Please note:<br></td>
    
  </tr>
  <tr>
    <td> <h6> All Guests, including children and infants, must present valid identification at check-in. </h6> </td>
    </tr>
	
</table>

