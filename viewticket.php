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

#main,td{
	padding-left:15px;
	padding-right:15px;
	border:1px;

}

</style>
<?php


 echo '<h3 align="center"> E-Ticket </h3><br>';
	echo '<h5>To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter. <br>
The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. </h5>
</p>';



?>

<?php
require("db1.php");
$id =$_REQUEST['id'];
session_start();
$usname=$_SESSION['p1'];
echo "<table>";
$result = mysql_query("SELECT * FROM $usname WHERE passenger_id= '$id' ");
while($test = mysql_fetch_array($result))
            {
                 
                echo "<tr>"; 
                echo "<td>FIRSTNAME</td>
<td>LASTNAME</td>
<td>PASSPORT</td>
<td>VISA</th></td>";
                echo"<tr>";
                echo"<td><font color='black'>" .$test['first_name']."</font></td>";
                echo"<td><font color='black'>". $test['last_name']. "</font></td>";
                echo"<td><font color='black'>". $test['passport']. "</font></td>";
                echo"<td><font color='black'>". $test['visa']. "</font></td>";
                echo"</tr>";
                echo"<tr>";
                echo"<td>FROM </td><td>  TO </td> <td> DEPARTURE-DATE </td>  <td>ARRIVAL-TIME</td><td>  DEPARTURE-TIME<td> FARE</td>";
                echo"</tr>";
                echo "<tr>";
                echo"<td><font color='black'>". $test['leaving_from']. "</font></td>";
                echo"<td><font color='black'>". $test['going_to']. "</font></td>";
                echo"<td><font color='black'>". $test['depart_date']. "</font></td>";
                echo"<td><font color='black'>". $test['arrival_time']. "</font></td>";
                echo"<td><font color='black'>". $test['depart_time']. "</font></td>";
                echo"<td><font color='black'>". $test['fare']. "</font></td>";
                echo "</tr>";}

                echo "</table>";

               // echo"<td> <a href ='viewticket.php?id=$id'>DOWNLOAD TICKET</a>";
             echo   ' <h6>NOTE: All Guests, including children and infants, must present valid identification at check-in. </h6>';
?>