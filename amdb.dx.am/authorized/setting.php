<!doctype html>
<?php  include('include/session.php');
   ?>
<?php include 'include/config.php';?>
<html>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width">
      <title>Your Project</title>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link  href='css/bulma.css' rel='stylesheet'>
      <link  href='css/admin.css' rel='stylesheet'>
      <meta content="Your Project" property="og:title">
      <meta content="Your Project description goes here." name="description">
   </head>
   <body>
      <?php include 'include/menu1.php';
      $user=$_SESSION['login_user'];
      $sql="SELECT * FROM oauth_users WHERE username='$user'";
      $result=$conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         ?>
      <div class="container">
         <div class="columns">
            <div class="column is-3">
               <?php include 'aside.php'; ?>
            </div>
        <div style="padding-left: 1.5em;" class="coloum is-9">
<h1 class="title has-text-danger">Oops.. Nothing Here</h1>
        </div>
      </div>
    </div>
  </body>
</html>
