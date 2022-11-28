<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = " ";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// check the user name is empty
	if(empty(trim($_POST['username']))){
		$username_err = "username cannot be blank";
	}	
	else{
		$sql = "SELECT id FROM users WHERE username = ? ";
		$stmt = mysqli_prepare($conn, $sql);
		if ($stmt) {
			mysqli_stmt_bind_param($stmt,"s",$param_username);

			//set the value of param username
			$param_username = trim($_POST['username']);

			//execute this statement

			if (mysqli_stmt_execute($stmt)) 
			{
				mysqli_stmt_store_result($stmt);

				if(mysqli_stmt_num_rows($stmt)){
					$username_err = "this username all ready taken";
				}
				else{
					$username = trim($_POST['username']);
				}
			}
			else{
				echo "somethings went wrongs";
			}
		}
	}
	mysqli_stmt_close($stmt);


//check the password
if (empty(trim($_POST['password']))) {
	$password_err = "password cannot be blank";
}
elseif (strlen(trim($_POST['password'])) < 5) {
	$password_err = "password cannot be less than 5 character";
}
else{
	$password = trim($_POST['password']);
}


//check the confirm password

if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
	$password_err = "password should not be match";
}
elseif (strlen(trim($_POST['password'])) < 5) {
	$password_err = "password cannot be less than 5 character";
}
else{
	$password = trim($_POST['password']);
}

//if there were no error,go ahead and insert into database 

if(empty($username_err) && empty($password_err) && empty($confirm_password)){
	$sql = "INSERT INTO users (username, password) VALUES (?,?)";
	echo $sql;

	$stmt = mysqli_prepare($conn,$sql);

	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "ss" , $param_username , $param_password);

		//set this parameters
		$param_username = $username;
		$param_password = password_hash($username,PASSWORD_DEFAULT);


		//TRY TO EXECUTE QIERY

			if(mysqli_stmt_execute($stmt)){
				header("location:login.php");
			}
			else{
				echo "somethigs went wrongs...can not redirect";
			}
	}
	mysqli_stmt_close($stmt);
}

mysqli_close($conn);
}


?>
