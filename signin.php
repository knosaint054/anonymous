<?php
require_once 'anonyconekt.php';
 
 
if($conn->connect_error) die("Fatal Error");
if( isset($_POST['submit'])&&
    isset($_POST['username']) && 
isset($_POST['password']))
{
 
 
$username = get_post($conn, 'username');
$password = get_post($conn, 'password');
$check= mysqli_query($conn, "SELECT * FROM user WHERE UserName= '$username' OR Email='$username'");
 $row= mysqli_fetch_assoc($check);
if(mysqli_num_rows($check)>0){
 if($password==$row["PassWord"]){
   
    $url = "dashboard.php?username=" . $username;
    header('location:' . $url);
 }
 else{
    
    echo   "<script> alert('incorrect password');</script>"; }
	}else{
        echo   "<script> alert('the user is not registered');</script>";
    }
}
echo <<<_END

<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="display.css">
</head>
<body>
<div class="form-container">
<form action="" method="POST">
<h3>Login here</h3>
<input type="text" name="username" required placeholder="Username/email">
<input type="password" name="password" required placeholder="Password">
 <input type="submit"  name="submit" value="Login now" class="form-btn">
 <p>Without an account?<a href="register.php">Register now</a></p>
</form>
</div>
</body>
</html>
_END;



function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}

?>