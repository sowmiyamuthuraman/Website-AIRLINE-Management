<?php
		   
	include 'db1.php';
	$n=$_REQUEST['id'];
	session_start();
	$a=$_SESSION['fn'];
	$b=$_SESSION['fi'];
	$c=$_SESSION['fd'];
			 		
												
		 $c1=explode('-',$b);
    $year=$c1[0];
    $month=$c1[1];
    $day=$c1[2];
    echo $year;
												
		if(mysql_query("INSERT INTO $n (f_name,f_day,f_mon,f_y,f_time,f_date) 
		VALUES ('$a','$day','$month','$year','$c','$b')")){
		echo '<script type="text/javascript"> window.alert("Assigned Successfully");</script>'; 
		}
		$query = "SELECT * FROM employee WHERE  ename='$n'";
    $result = mysql_query($query);



while($row = mysql_fetch_array($result)){ 
 
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=";
        $toEmail = $row['email'];
        $subject = "Work Schedule";
        $content = "Dear".$n."\n you are scheduled witn the flight".$a."on".$b."\n report at the correct timing \n Thankyou";
        $mailHeaders = "From: Admin\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {

          echo'<script type="text/javascript">window.alert("work schedule is informed through mail");</script>';
         }
        unset($_POST);
     header('Location:updateflight.php');


}

?>		
				
	        
