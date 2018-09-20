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
          <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        Email
      </p>
      <a href="#" class="card-header-icon" aria-label="more options">
        <span class="icon">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </span>
      </a>
    </header>
    <div class="card-content">
      <div class="content">
      <?php echo $row['email']; ?>
      </div>
    </div>
    <footer class="card-footer">
      <a href="#" class="card-footer-item"><span class="icon has-text-warning">
  <i class="fa fa-envelope-o"></i>
</span></a>

    </footer>
  </div>
  <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      API Key
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <div class="content">
    <?php echo $row['key']; ?>
    </div>
  </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item"><span class="icon has-text-danger">
  <i class="fa fa-key"></i>
</span></a>
  </footer>
</div>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      User Details
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <div class="content">
      Username: <?php echo $row['username']; ?><span class="icon has-text-info">
  <i class="fa fa-info-circle"></i>
</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name: <?php echo $row['first_name']  ?>
      <a href="#">@projectname</a>. <span class="icon has-text-success">
  <i class="fa fa-check-square"></i>
</span>
      <br>

    </div>
  </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item"><span class="icon has-text-info">
  <i class="fa fa-user"></i>
</span></a>

  </footer>
</div>



        </div>
                        </div>

               </div>

   </body>
</html>
