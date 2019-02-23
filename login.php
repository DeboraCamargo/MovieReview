<?php session_start(); ?>
<html>
<head>
	<title>Login </title>
	<link href="main.css" rel="stylesheet" > 
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Muli" rel="stylesheet">
</head>
<body>
<h1>The Movie Review Spot</h1>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error_msg = validate_fields();
	if (count($error_msg) > 0){
		display_error($error_msg);
		form_2($_POST['user_name'], $_POST['email'], $_POST['password']);
	} else {
		save_data();
		display_success();
	}
} else {
	form_2("", "", "");
} ?>

</body>
</html>

<?php function form_2($user_name, $email, $password){ ?>
<div class ="container">
    <form method="POST" action="./main.php" id="form2">
    <h2> Sign Into Your Movie Review Spot Account! </h2>
	    <img src="movie.jpg" alt="Movie Spot Pic">
	    
		<label for="user_name">User Name:</label>
		<input type="text" size="30" maxlength="30" id="user_name2" name="user_name" value="<?php echo $user_name; ?>">
		<br>
        <label for="email">E-Mail:</label>
        <input type="text" size="30" maxlength="130" id="email2" name="email" value="<?php echo $email; ?>">
        <br>
        <label for="password">Password:</label>
        <input type="password" size="30" maxlength="130" id="password2" name="password" value="<?php echo $password; ?>">
        <br>
        <label>
        <input type="checkbox" checked="checked" > Remember Me
        </lable>
        <br>
        <button type="button" class="cancelbtn2">Cancel</button>
        <br><br>
        <input type="submit" class="signInBtn" value="Sign In!" href="main.php" />
	</form>
	</div>
<?php } ?> 

<?php function validate_fields(){
	$error_msg = array();
	if (!isset($_POST['user_name'])){
		$error_msg[] = "User Name field not defined";
	} else if (isset($_POST['user_name'])){
		$user_name = trim($_POST['user_name']);
		if (empty($user_name)){
			$error_msg[] = "The User Name is empty";
		} else {
			if (strlen($user_name) >  100){
              $error_msg[] = "The user Name field contains too many characters";
			}
		}
    }
		
	
    if (!isset($_POST['email'])){
		$error_msg[] = "email field is not defined";
	} else if (isset($_POST['email'])){
		$email = trim($_POST['email']);
		if (empty($email)){
			$error_msg[] = "The E-Mail is empty";
		} else {
			if (strlen($email) >  30){
				$error_msg[] = "The E-Mail field contains too many characters";
			}
		}
	}
	
	 if (!isset($_POST['password'])){
		$error_msg[] = "password field is not defined";
	} else if (isset($_POST['password'])){
		$password = trim($_POST['password']);
		if (empty($password)){
			$error_msg[] = "The password is empty!";
		} else {
			if (strlen($password) >  30){
				$error_msg[] = "The Password field contains too many characters";
			}
		}
	}
	
	return $error_msg;
} ?>

<?php function display_error($error_msg){
	echo "<p>\n";
	foreach($error_msg as $v){
		echo $v."<br>\n";
	}
	echo "</p>\n";
} 
?>
