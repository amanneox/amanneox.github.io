<?php
   include("include/config.php");

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {


      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT id FROM oauth_users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);



      if($count == 1) {

         $_SESSION['login_user'] = $myusername;

         header("location: index.php");
      }else {
         $error = '<p class="help is-danger">Your Login Name or Password is invalid</p>';
      }
   }
?>
<!doctype html>
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
  <style media="screen">
  html,body {
  font-weight: 700;

  }
  </style>
</head>

<body>
  <?php include 'include/menu.php';
   ?>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<section class="hero is-success is-fullheight">
   <div class="hero-body">
     <div class="container has-text-centered">
       <div class="column is-4 is-offset-4">
         <h3 class="title has-text-grey">Login</h3>
         <p class="subtitle has-text-grey">Please Login To Proceed.</p>
         <div class="box">
           <figure class="avatar">
             <img style="max-width:128px;" src="img/man.png">
           </figure>
           <form method="post" action="">
             <div class="field">
               <div class="control">
                 <input name="username" class="input is-large" type="text" placeholder="Your Username" autofocus="">
               </div>
             </div>

             <div class="field">
               <div class="control">
                 <input name="password" class="input is-large" type="password" placeholder="Your Password">
               </div>
             </div>
             <?php if (isset($error)): ?>
               <?php echo $error ?>
             <?php endif; ?>
             <div class="field">
               <label class="checkbox">
                 <input type="checkbox">
                 Remember me
               </label>
             </div>
             <input id="login" style="min-width:100%;  background: #36D1DC !important;
               background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC) !important;
               background: linear-gradient(to right, #5B86E5, #36D1DC) !important;" type="submit" value="Login" class="button is-block is-info is-large">
           </form>
         </div>
         <p class="has-text-grey">
           <a href="register.php">Sign Up</a> &nbsp;·&nbsp;
           <a href="../">Forgot Password</a> &nbsp;·&nbsp;
           <a href="../">Need Help?</a>
         </p>
       </div>
     </div>
   </div>
 </section>
</body>

</html>
