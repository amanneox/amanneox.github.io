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
        <div style="padding-left: 1.5em;width:100%;" class="coloum is-9">
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
    Contact Me
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fa fa fa-check" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <div class="content">
      <form method="post"  action="mailto:amanadhikari2@gmail.com">
      <div class="field">
        <label class="label">Name</label>
  <div class="control">
    <input name="name" class="input is-medium" type="text" placeholder="Name">
  </div>
</div>
<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input name="email" class="input is-medium" type="text" placeholder="Email">
  </div>
</div>
<div class="field">
  <label class="label">Subject</label>
  <div class="control">
    <input name="subject" class="input is-medium" type="text" placeholder="Subject">
  </div>
</div>
<label class="label">Message</label>
<textarea name="message" class="textarea" placeholder="e.g. Hello world"></textarea>
<br>

<input style="min-width:100%;" type="submit" value="Submit" name="submit" class="button is-danger is-outlined">
</form>
</div>
</div>
</div>
        </div>
      </div>
    </div>
  </body>
</html>
