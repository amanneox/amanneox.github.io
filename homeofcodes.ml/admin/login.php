<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <title>Admin Login</title>
      <link rel="stylesheet" href="../css/materialize.min.css">

  <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<div style="" class="row" id="login">

	<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($user->login($username,$password)){

			//logged in return to index page
			header('Location: index.php');
			exit;


		} else {
			$message = '<div class="col sm6 m6 offset-m3"><span class="error">Wrong username or password</span></div>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>
  <div  id="form" class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card-panel ">
          <form action="" method="post">
        	<p><label>Username</label><input type="text" name="username" value=""  /></p>
        	<p><label>Password</label><input type="password" name="password" value=""  /></p>
        	<p><label></label><input class="waves-effect waves-light btn red lighten-1" type="submit" name="submit" value="Login"  /></p>
        	</form>
        </div>
      </div>
    </div>


</div>
<style>
#login{margin-top: 5rem;}
</style>
</body>
</html>
