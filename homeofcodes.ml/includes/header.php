
<?php require 'includes/navbar.php';
@mysql_connect("fdb15.awardspace.net", "2444255_blog", "7u#311298") or die("Error connecting to database: ".mysql_error());
mysql_select_db("2444255_blog") or die(mysql_error());
  $stmt = $db->query('SELECT * FROM blog_posts  ORDER BY postID DESC LIMIT 5 ');
  ?>
  <div class="carousel">
  <?php
  while($row = $stmt->fetch()){
  echo'<div class="card-panel carousel-item ">';
    echo'<div class="row">';
        echo'<img  class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="'.$row['postTitle'].'" src="https://api.adorable.io/avatars/251/'.$row['postID'].'" alt="poster"></img>';
         echo'<a class="share-icon" href="viewpost.php?id='.$row['postID'].'"><i class="icon-arrow"></i></a>';
      echo'</div>';
   echo'</div>';
}
?>
</div>
<div id="tabs" class="row">
   <div class="col s12">
      <ul class="tabs">
         <li class="tab col s3"><a href="#!java" data-target="#">Java</a></li>
         <li class="tab col s3"><a href="#!python" data-target="#">Python</a></li>
         <li class="tab col s3"><a href="#!c" data-target="#">C/C++</a></li>
         <li class="tab col s3"><a href="#!script" data-target="#">Jquery</a></li>
      </ul>
   </div>
</div>
