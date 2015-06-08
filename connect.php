
<?php
$database="youtour";
$con= mysql_connect("localhost","root","") or die("Unable to connect");
echo "connected to mysql";
$db = mysql_select_db($database, $con) or die("Unable to connect");
echo "connected to database";
$user=$_POST['post_username'];
$add= $_POST['post_address'];
$email= $_POST['post_email_id'];
$pass = $_POST['post_password'];
$query ="INSERT INTO login (username, address, email_id, password) VALUES ('$user', '$add' , '$email',' $pass')";
$result= mysql_query($query);
if($result)
	{
	    echo "Successfully updated database";
	}
	else
	{
	 die('Error: '.mysql_error($con));
	}
	mysql_close($con);
?>