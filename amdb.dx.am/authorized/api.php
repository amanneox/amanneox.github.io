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
          <?php if ($row['key']==NULL): ?>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Generate Key
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fa fa fa-warning" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <form method="post" action="">
  <div class="card-content">
    <div class="content">
      <strong>
  You need a API key to access the API to generate a API key click below</strong><br><br>
  <input name="generate" type="submit" value="Generate" class="button is-danger is-outlined ">


    </div>
  </div>
</form>
</div>

          <?php endif; ?>
  <?php if (!$row['key']==NULL): ?>
    <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        Api Key
      </p>
      <a href="#" class="card-header-icon" aria-label="more options">
        <span class="icon">
          <i class="fa fa-check" aria-hidden="true"></i>
        </span>
      </a>
    </header>
    <div class="card-content">
      <div class="content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur metus id viverra feugiat.<br><br><pre><code>
      <?php echo $row['key']; ?></code></pre>
      </div>
    </div>

  </div>
  <?php endif; ?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php if (isset($_REQUEST['generate'])){
  $user=$_SESSION['login_user'];
  $sql="SELECT * FROM oauth_clients WHERE client_id='$user'";
  $result=$conn->query($sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $client_id = $row['client_id'];
  $redirect_uri = $row['redirect_uri'];
  $client_secret = $row['client_secret'];

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "token.php");



  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


  curl_setopt($ch, CURLOPT_POSTFIELDS, array(
  'client_id' => $client_id,
  'client_secret' => $client_secret,
  'redirect_uri' => $redirect_uri,
  'grant_type' => "client_credentials"
  ));

  $data = curl_exec($ch);

  var_dump($data);
}
 ?>
