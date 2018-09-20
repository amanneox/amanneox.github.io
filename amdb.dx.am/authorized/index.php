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
         ?>
      <div class="container">
         <div class="columns">
            <div class="column is-3">
               <?php include 'aside.php'; ?>
            </div>
            <div style="padding-left:2em;" class="column is-9">
               <section class="hero is-info welcome is-small">
                  <div class="hero-body">
                     <div class="container">
                        <h1 class="title">
                           Hello, <?php echo $_SESSION['login_user'] ?>.
                        </h1>
                        <h2 class="subtitle">
                           I hope you are having a great day!
                        </h2>
                     </div>
                  </div>
               </section>
               <section class="info-tiles">
                  <div class="tile is-ancestor has-text-centered">
                     <?php
                        $user=$_SESSION['login_user'];
                        $sql="SELECT * FROM oauth_users WHERE username='$user'";
                        $result=$conn->query($sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                         ?>
                     <div class="tile is-parent">
                        <article class="tile is-child box">
                           <p class="title"><?php echo $row['rank']; ?></p>
                        </article>
                     </div>
                     <div class="tile is-parent">
                        <article class="tile is-child box">
                           <p class="title"><?php echo $row['first_name']; ?></p>
                        </article>
                     </div>
                  </div>
               </section>
               <div style="padding-left:1em;" class="columns">
                  <div class="column is-6">
                     <div class="card events-card">
                        <header class="card-header">
                           <p class="card-header-title">
                              Add A Movie
                           </p>
                           <a href="#" class="card-header-icon" aria-label="more options">
                           <span class="icon">
                           <i class="fa fa-angle-down" aria-hidden="true"></i>
                           </span>
                           </a>
                        </header>
                        <div class="card-table">
                           <div class="content">
                              <form action="" method="post">
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="column is-fourth-fifths">
                                    <div class="field">
                                       <label class="label">Name</label>
                                       <div class="control">
                                          <input name="name" class="input" type="text" placeholder="Name" required>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <input type="submit" value="Under Progress" style="min-width:100%;" class="button is-link">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
