<?php
include 'db1.php';
$sql=array('0');
$words=array("sowntharya","muthuraman","sowmiya");
foreach($words as $word){
	$sql[]='user_name LIKE \'%'.$word.'%\'';
}
$res=mysql_query("SELECT * FROM registered_users WHERE".implode("OR",$sql));
while($test=mysql_fetch_array($res)){
	echo $test['user_name'];
}