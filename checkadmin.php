<html>
<?php
ob_start();
$host=""; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="flight"; // Database name 
$tbl_name="admintable"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";
$username=$_POST['user_name']; 
$password=$_POST['password'];

$sql="SELECT * FROM $tbl_name WHERE uname='$username'";
$result=mysql_query($sql);
echo $result;
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysql_fetch_assoc($result);
echo $row['pass'];
echo $password;
    if ($password == $row['pass']){
        header('Location:manage.html');
        $_session['username']=$username;
       $_session['password']=$password;

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



