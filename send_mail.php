<?php
include 'db1.php';
      $result=mysql_query("SELECT * FROM informmail");
      while($test=mysql_fetch_array($result)){
      	$a=$test['information'];
      	$l=$test['location'];
      	$date=$test['up_to_date'];
      	$i=$test['time_interval'];

      	 while(date("Y-m-d")!=$date){
      	$r=mysql_query("SELECT * FROM passengers WHERE address1 LIKE '%" . $l. "%' ");

      	while($row=mysql_fetch_array($r)){
      		$e=$row['email'];
		$now=time();

$to = $e;
$subject = 'Latest Updates From Flight AirLines....';
$message = $a;
$headers = "From: flightzairlines@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
 echo "SUCCESS";
} else {
 echo "ERROR";
}
sleep($i*60-(time()-$now));
}

      	}

      }?>
