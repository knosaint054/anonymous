<?php
require_once 'anonyconekt.php';
 
if($conn->connect_error) die("Fatal Error");
if(isset($_POST['username']) && 
isset($_POST['email'])&&
isset($_POST['password'])&&
isset($_POST['cpassword']))
{
 
$username = get_post($conn, 'username');
$email = get_post($conn, 'email');
$password = get_post($conn, 'password');
$cpassword = get_post($conn, 'cpassword');

$check= mysqli_query($conn, "SELECT * FROM users WHERE username= '$username' OR email='$email'");
if(mysqli_num_rows($check)>0){
	echo "Username or Email already exists";
}else{
	if($password == $cpassword){
		$query = "INSERT INTO users VALUES".
"('','$email','$username','$password',NOW(),'','','')";
$result = $conn->query($query);
header('location:signup.php');
if(!$result) echo "INSERT failed!<br /><br />";

echo "<script> alert('Signed Up Successfully');</script>";

	}
	else{
		echo "<script> alert('The passwords don't match');</script>";
	}
}
 
	}
echo <<<_END

 <!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>register</title>
		<link rel="stylesheet" href="display.css">
</head>
<body>
<div class="form-container">
<form action="" method="POST">
<h3>Register here</h3>

 
<input type="text" name="username" required placeholder="Username">
<input type="email" name="email" required placeholder="Email">
<input type="password" name="password" required placeholder="Password">
<input type="password" name="cpassword" required placeholder="Verify password">
 <input type="submit"  name="submit" value=" Register now" class="form-btn">
 <p> With an account?<a href="signin.php">Login now</a></p>
</form>
</div>
</body>
</html>
_END;



function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}

?>