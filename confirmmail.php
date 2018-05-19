<?php
include'db1.php';
$e_id=$_REQUEST['id'];
$s1=$_REQUEST['serial'];
$r=$_REQUEST['s'];
mysql_query("UPDATE leave_request SET status='$r'");
$q=mysql_query("SELECT * FROM employee WHERE eid='$e_id'");
while($row=mysql_fetch_array($q)){
	$toEmail=$row['email'];
}
$q1=mysql_query("SELECT * FROM leave_request WHERE sno='$s1'");
while($test=mysql_fetch_array($q1)){
	$l=$test['leave_from'];
	$f=$test['leave_to'];
    $r1=$test['requested_on'];
    $n=$test['employee_name'];
}
 
        $subject = "LEAVE APRROVAL";
        $content = "Dear".$n."\n\nYour request for leave from\t".$l."to\t".$f."requested on\t".$r1."has been".$r."ed";
        $mailHeaders = "From: Admin\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {

          echo'<script type="text/javascript">window.alert("Leave approval is notified through mail");</script>';
         }
        unset($_POST);
       // header('Location:manageleave.php');
?>

