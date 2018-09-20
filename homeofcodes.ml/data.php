<?php require('includes/config.php'); ?>
<?php
   try {
     if (isset($_GET['type'])) {
$type=$_GET['type'];
}
else {
  $type="java";
}
   $i=1;
    $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts WHERE postType="'.$type.'" ORDER BY postID DESC');

         echo '<div class="row">';
    while($row = $stmt->fetch()){
   if ($i%2==0) {
   echo '<div class="row">';
   }


$p=0;

        echo    '<div class="col s12 m6">';
            echo ' <div id="content" class="card-panel ">';
              echo '<div class="row">';
           echo'<div class="col s6 m6">';
          echo'<img src="https://api.adorable.io/avatars/251/'.$row['postID'].'" alt="poster"></img>';

          echo' </div>';
           echo'<div class="col s6 m6">';
            echo' <div class="row">';

               echo'<span>'.$row['postTitle'].'</spam>';
            echo' </div>';
            echo' <div class="row">';
              echo' <div class="col sm4 m4">';
                echo' <span>'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</span>';
              echo' </div>';
            echo   '<div class="col sm4 m4">';
                echo' <span>'.$row['postID'].'</span>';
               echo'</div>';
              echo' <div class="col sm4 m4">';
                echo' <span>Profile</span>';
               echo'</div>';
            echo'</div>';
             echo'<hr>';
             echo'<div class="row">';
              echo' <span>'.$row['postDesc'].'</span>';
            echo' </div>';
            echo' <div  class="row">';
          echo'<a href="viewpost.php?id='.$row['postID'].'" class="waves-effect waves-light btn">View</a>';
             echo'</div>';
           echo'</div>';
          echo'</div>';
            echo'  </div>';
        echo'  </div>';

   if ($i%2==0) {
    echo '</div>';
   }

   ++$i;
    }

   } catch(PDOException $e) {
       echo $e->getMessage();
   }
   ?>
