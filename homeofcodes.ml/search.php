<?php require 'includes/config.php';
 @mysql_connect("fdb15.awardspace.net", "2444255_blog", "7u#311298") or die("Error connecting to database: ".mysql_error());
 mysql_select_db("2444255_blog") or die(mysql_error());
?>
<head>
  <title>HomeofCodes</title>
  <link rel="icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href='fonts/pacifico.css' rel='stylesheet' type='text/css'>
    <link href="fonts/bitnami.css" rel="stylesheet">
<style>
#box{
  margin-top: .5rem;
}
</style>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="icon.css" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/angular-route.js"></script>
  <script src="js/app.js"></script>
  <link rel='stylesheet' href='css/loading-bar.min.css' type='text/css' media='all' />
  <script type='text/javascript' src='js/loading-bar.min.js'></script>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
<?php
    $query = $_GET['query'];


    $min_length = 3;


    if(strlen($query) >= $min_length){

        $query = htmlspecialchars($query);


        $query = mysql_real_escape_string($query);

        $raw_results = mysql_query("SELECT * FROM blog_posts
            WHERE (`postTitle` LIKE '%".$query."%') OR (`postDesc` LIKE '%".$query."%')") or die(mysql_error());



        if(mysql_num_rows($raw_results) > 0){
    echo '<div class="row">
    <div class="col sm12 m12">
<div class="card-panel">Total Search Results
'.mysql_num_rows($raw_results).'
</div>
    </div>
    </div>';
            while($results = mysql_fetch_array($raw_results)){


              echo " <div class='row'>";
                echo "<div class='col s12 m12'>";
                    echo"<div class='card-panel'>";
                    echo "<p><h3>".$results['postTitle']."</h3>".$results['postDesc']."</p>";
                        echo'<a href="viewpost.php?id='.$results['postID'].'" class="waves-effect waves-light btn">View</a>';
                    echo"</div>";
                  echo"</div>";
              echo "</div>";


            }

        }
        else{
            echo '<div class="row">
<div class="col sm12 m12">
<span id="noresult" >Sorry No Results....</span>
</div>
            </div>';
        }

    }
    else{
      echo '<div class="row">
<div class="col sm12 m12">
<span id="noresult">Minimum length is '.$min_length.'</span>
</div>
      </div>';

    }
?>
<script>
      $(".button-collapse").sideNav();
</script>
</body>
</html>
