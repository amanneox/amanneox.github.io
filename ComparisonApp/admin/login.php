<?php

require_once('../includes/config.php');

?>
<?php


if(isset($_POST['submit'])){

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if($user->login($username,$password)){

    header('Location: index.php');
    exit;


  } else {
    $message = '<div class="col sm6 m6 offset-m3"><span class="error">Wrong username or password</span></div>';
  }

}//end if submit


	?>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Title</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<script src="../js/bootstrap.min.js"></script>
<div style="margin-top:10em" class="container">
    <div class="row">
		<div class="col-md-6 col-sm-offset-6">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Sign In</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
    <div class="col-sm-6">
      <?php if(isset($message)){ echo $message; } ?>
    </div>
	</div>
</div>
