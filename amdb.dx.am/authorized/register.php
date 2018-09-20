<?php include 'include/config.php';?>
<?php

if (isset($_REQUEST['email'])&& isset($_REQUEST['agree'])) {

$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$username=$_REQUEST['username'];
$myusername = mysqli_real_escape_string($conn,$_REQUEST['username']);


$sql = "SELECT id FROM oauth_users WHERE username = '$username'";
$result =$conn->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count>=1) {
$error= ' <p class="help is-danger">Same Username Already Exist</p>';
}
else {


$sql="INSERT INTO oauth_users (`username`,`password`,`email`,`first_name`) VALUES ('$username','$password','$email','$name')";
$conn->query($sql);
if ($conn->error) {
echo ' <p class="help is-danger">Something Went Wrong</p>';
}
else {
session_start();
  $_SESSION['login_user'] = $username;
     header("location: index.php");

}
}
}
 ?>

<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  <title>Your Project</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  href='css/bulma.css' rel='stylesheet'>
  <link  href='css/login.css' rel='stylesheet'>

  <meta content="Your Project" property="og:title">
  <meta content="Your Project description goes here." name="description">
</head>

<body>
  <?php include 'include/menu.php';
   ?>
       <div class="container">
<div class="card">
<form method="post">
 <div class="column is-two-fifths">
         <div class="field">
           <label class="label">Name</label>
           <div class="control">
             <input name="name" class="input" type="text" placeholder="Name" required>
           </div>
         </div>
</div>
 <div class="column is-two-fifths">
         <div class="field">
           <label class="label">Username</label>
           <div class="control has-icons-left has-icons-right">
             <input name="username" class="input is-success" type="text" placeholder="Username" value="" required>
             <span class="icon is-small is-left">
               <i class="fa fa-user"></i>
             </span>
             <span class="icon is-small is-right">
               <i class="fa fa-check"></i>
             </span>
           </div>
<?php if (isset($error)): ?>
  <?php echo $error ?>
<?php endif; ?>
         </div>
       </div>

 <div class="column is-two-fifths">
         <div class="field">
           <label class="label">Email</label>
           <div class="control has-icons-left has-icons-right">
             <input id="email" name="email" class="input" type="email" placeholder="Email" value="" required>
             <span class="icon is-small is-left">
               <i class="fa fa-envelope"></i>
             </span>
             <span class="icon is-small is-right">
               <i class="fa fa-warning"></i>
             </span>
           </div>
         </div>
</div>
<div class="column is-two-fifths">
        <div class="field">
          <label class="label">Password</label>
          <div class="control has-icons-left has-icons-right">
            <input name="password" class="input is-danger" type="text" placeholder="Password" value="" required>
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span>
          </div>

        </div>
      </div>
 <div class="column is-two-fifths">
         <div class="field">
           <label class="label">Subject</label>
           <div class="control">
             <div class="select">
               <select>
                 <option>Select dropdown</option>
                 <option>Movie API</option>
               </select>
             </div>
           </div>
         </div>
</div>

 <div class="column is-two-fifths">
         <div class="field">
           <div class="control">
             <label class="checkbox">
               <input name="agree" type="checkbox" required>
               I agree to the <a href="#">terms and conditions</a>
             </label>
           </div>
         </div>
</div>

 <div class="column is-two-fifths">
         <div class="field is-grouped">
           <div class="control">
             <input type="submit" value="Submit" class="button is-link">
           </div>
           <div class="control">
           <a href="index.php" class="button is-text">Cancel</a>
           </div>
         </div>

       </div>
     </form>
     </div>


</div>
</body>

</html>
