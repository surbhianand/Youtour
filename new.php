<html>
<head>
<style> 
body {
    background-image : url("marinedrive.jpg");
	background-size: 100% 100%;
    background-repeat: no-repeat;
}
#youtour{color:white;
    text-align:center;
    padding:5px;
	background-color:black;
	height:100px;
    width:1000px;
	
	}
	
}
</style>
</head>
<body>
<div id="youtour">
<h3>
<font face="Gabriola" color="green">youtour</font>

</h3>
</div>
<form>
Username: <input type="text" name="username"><br>
Address: <input type="text" name="address"><br>
Password: <input type="text" name="password"><br>
User_id: <input type="text" name="user_id"><br>

</form>
<form name="input" action="demo_form_action.asp" method="get">
<input type="submit" value="Submit">
</form>
	
<?php
$user = 'root';
$pass = '';
$db = 'login';
$db = new mysqli('http://localhost/phpmyadmin/' $user, $pass, $db) or die("Unable to connect");
echo "Hmm";
	$sql = "INSERT INTO `login`.`signup` (`username`, `password`, `user_id`, `address`) VALUES (\'m\', \'n\', \'o\', \'p\');"; 

	mysql_query($strSQL) or die(mysql_error());
	echo "Hello";
/*strSQL = "INSERT INTO signup(username) values('" . $_POST["username"] . "')"
strSQL = "INSERT INTO signup(address) values('" . $_POST["address"] . "')"
strSQL = "INSERT INTO signup(password) values('" . $_POST["password"] . "')"
strSQL = "INSERT INTO signup(user_id) values('" . $_POST["user_id"] . "')"
mysql_query($strSQL) or die (mysql_error());

	// Close the database connection
	mysql_close();*/
?>	

</body>
</html>
