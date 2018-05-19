<html>
<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="flight"; // Database name 
$tbl_name="registered_users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database".$tbl_name."<br />";
$username=$_POST['user_name']; 
$password=$_POST['password'];

$sql="SELECT * FROM $tbl_name WHERE user_name='$username'";
$result=mysql_query($sql);
echo $result;
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysql_fetch_assoc($result);
echo $row['password'];
echo $password;
    if ($password == $row['password']){
        session_start();
       // $_SESSION['u1']=$_POST['user_name'];
       $_SESSION['p1']=$username; 
        header('Location:search1.php');

        echo "Login Successful";
        return true;
    }
    else {
        echo "Wrong Username or Password";
        return false;
    }
}
else{
    echo "Wrong Username or Password";
    return false;
}
?>
</html>



