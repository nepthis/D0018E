<?php     
include('connect_to_mysql.php');
if(isset($_REQUEST['submit'])!=''){
	if($_REQUEST['name']=='')
	{
	echo "please fill the empty field.";
	}
	else{
	$sql="insert into user(username, name, surname, country, zipcode, adress, email, password) values('".$_REQUEST['username']."', '".$_REQUEST['name']."', '".$_REQUEST['surname']."', '".$_REQUEST['country']."', '".$_REQUEST['zipcode']."', '".$_REQUEST['adress']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
	$res=mysql_query($sql);
if($res)
	{
	echo "Record successfully inserted";
	}
	else{
		echo "There is some problem in inserting record";
	}

}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
</head>
<body id="body-color">
	<div id="Registration">
		<fieldset style="width:30%"><legend>Registration Form</legend>
		<table border="0">
			<tr>
			<form method="POST" action="register.php">
			<td>Username</td><td> <input type="text" name="username"></td>
			</tr>
			<tr>
			<td>Name</td><td> <input type="text" name="name"></td>
			</tr>
			<tr>
			<td>Surname</td><td> <input type="text" name="surname"></td>
			</tr>
			<tr>
			<td>Country</td><td> <input type="text" name="country"></td>
			</tr>
			<tr>
			<td>Zipcode</td><td><input type="text" name="zipcode"></td>
			</tr>
			<tr>
			<td>Adress</td><td><input type="text" name="adress"></td>
			</tr>
			<tr>
			<td>Email</td><td><input type="text" name="email"></td>
			</tr>
			<tr>
			<td>Password</td><td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td><input id="button" type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
		</table>
		</fieldset>
	</div>
</body>
</html>


