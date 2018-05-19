<?php
include 'db1.php';
  
  session_start();
  $a=$_SESSION['fn'];
  $b=$_SESSION['fi'];
  $c=$_SESSION['fd'];
  $v=$_SESSION['pls'];

	$query = "SELECT * FROM employee WHERE  ename='$v'";
    $result = mysql_query($query);



while($row = mysql_fetch_array($result)){ 
 $deduce= ($row['fare'] + $row['grand_fare']) -(($row['fare'] + $row['grand_fare'])*0.23);
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=";
        $toEmail = $row['email'];
        $subject = "Work Schedule";
        $content = "Dear".$row['first_name']."Your Ticket for the travel from".$c."to".$d."on".$e."at".$f."has been cancelled!!"."As per the term and conditions 23% amount will be deducted from the paid amount and you will be paid with RS.".$deduce;
        $mailHeaders = "From: Admin\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {

          echo'<script type="text/javascript">window.alert("respetive passengers are informed about the cancellation through mail");</script>';
         }
        unset($_POST);



}
