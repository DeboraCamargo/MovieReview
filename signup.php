<?php session_start(); ?>
<html>
<head>
	<title>Sign Up </title>
	<link href="css/main.css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<!--<h1>The Movie Review Spot</h1>-->

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error_msg = validate_fields();
	if (count($error_msg) > 0){
		display_error($error_msg);
		form_1($_POST['user_name'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['re_pswd']);
	} else {
		save_data();
	}
} else {
	form_1("", "", "", "", "","");
} ?>

</body>
</html>

<?php function form_1($user_name, $first_name, $last_name, $email, $password, $re_pswd){ ?>
<div class ="container">
    <form method="POST" action=" " id="form1">
    <h2> Create a Free Movie Review Account Today! </h2>
	<!--
		<label for="user_name">User Name</label>
		<input type="text" size="30" maxlength="30" id="user_name" name="user_name" value="<?php echo $user_name; ?>">
		<br>
		<label for="first_name">First Name</label>
		<input type="text" size="30" maxlength="30" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
		<br>
		<label for="last_name">Last Name</label>
		<input type="text" size="30" maxlength="130" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
        <br>
        <label for="email">E-Mail</label>
        <input type="text" size="30" maxlength="130" id="email" name="email" value="<?php echo $email; ?>">
        <br>
        <label for="password">Password</label>
        <input type="password" size="30" maxlength="130" id="password" name="password" value="<?php echo $password; ?>">
        <br>
        <label for="re_pswd">Re-Enter Password</label>
        <input type="password" size="30" maxlength="130" id="re_pswd" name="re_pswd" value="<?php echo $re_pswd; ?>">
        <br>
        <label>
        <input type="checkbox" checked="checked" > Remember Me
        </lable>
        <p>By creating an account you agree  to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>
        <button type="button" class="cancelbtn">Cancel</button>
        <input type="submit" class="signupbtn" value="Sign Up!" />
        -->


        <div class="form-group">
            <label for="user_name">User Name</label>
            <input type="text" class="form-control" maxlength="30" id="user_name" placeholder="User Name" name="user_name" value="<?php echo $user_name; ?>">
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" maxlength="130" id="first_name" placeholder="First Name" name="first_name" value="<?php echo $first_name; ?>">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" maxlength="130" id="last_name" placeholder="Last Name" name="last_name" value="<?php echo $last_name; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control"  maxlength="130" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" maxlength="130" id="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
        </div>

        <div class="form-group">
            <label for="re_pswd">Password</label>
            <input type="password" class="form-control" maxlength="130" id="re_pswd" placeholder="Password" name="re_pswd" value="<?php echo $re_pswd; ?>">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked="checked">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>

        <p>By creating an account you agree  to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>


        <button type="submit" class="btn btn-primary" href="main.php">Sign In</button>
        <button type="submit" class="btn btn-primary">Cancel</button>


    </form>
	</div>
<?php } ?> 

<?php function validate_fields(){
	$error_msg = array();
	if (!isset($_POST['first_name'])){
		$error_msg[] = "First Name field not defined";
	} else if (isset($_POST['first_name'])){
		$first_name = trim($_POST['first_name']);
		if (empty($first_name)){
			$error_msg[] = "The First Name is empty";
		} else {
			if (strlen($first_name) >  100){
              $error_msg[] = "The First Name field contains too many characters";
			}
		}
    }
		
	if (!isset($_POST['user_name'])){
		$error_msg[] = "User Name field not defined";
	} else if (isset($_POST['user_name'])){
		$user_name = trim($_POST['user_name']);
		if (empty($user_name)){
			$error_msg[] = "The User name is empty";
		} else {
			if (strlen($user_name) >  100){
              $error_msg[] = "The User Name field contains too many characters";
		}
    }
}

	
	if (!isset($_POST['last_name'])){
		$error_msg[] = "last Name field not defined";
	} else if (isset($_POST['last_name'])){
		$last_name = trim($_POST['last_name']);
		if (empty($last_name)){
			$error_msg[] = "The Last Name is empty";
		} else {
			if (strlen($last_name) >  100){
              $error_msg[] = "The Last Name field contains too many characters";
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
	
	 if (!isset($_POST['re_pswd'])){
		$error_msg[] = "Re-Enter Password field is not defined";
	} else if (isset($_POST['re_pswd'])){
		$re_pswd = trim($_POST['re_pswd']);
		if (empty($re_pswd)){
			$error_msg[] = "Re-Enter Your Password is empty";
		} else {
			if (strlen($email) >  30){
				$error_msg[] = "Re-Enter field contains too many characters";
			}
		}
	}
	return $error_msg;
} ?>


<?php
function save_data(){
$db_conn = new mysqli('localhost', 'movieUser', 'Test123!', 'moviereviewdb');
if ($db_conn->connect_errno) {
    printf ("Could not connect to database server".$db_host."\n Error: ".$db_conn->connect_errno ."\n Report: ".$db_conn->connect_error."\n");
}
$first_name = $db_conn->real_escape_string($_POST['first_name']);
$last_name = $db_conn->real_escape_string($_POST['last_name']);
$email = $db_conn->real_escape_string($_POST['email']);
$password = $db_conn->real_escape_string($_POST['password']);
$user_name = $db_conn->real_escape_string($_POST['user_name']);

$qry = "INSERT INTO account (first_name, last_name, email, password, user_name) VALUES ('".$first_name."','".$last_name."','".$email."', MD5('".$password."'), '".$user_name."');";

$db_conn->query($qry);
$db_conn->close();
header('Location: mainpage.php');
}

?>
	
