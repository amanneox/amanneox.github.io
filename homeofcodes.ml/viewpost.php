<?php require('includes/config.php');

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
		<title>HomeofCodes</title>
		<link rel="icon" href="favicon.png">
		<link href='fonts/pacifico.css' rel='stylesheet' type='text/css'>
		<link href="fonts/bitnami.css" rel="stylesheet">

		<!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Resource style -->
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="icon.css" />
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		<script src="js/materialize.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/app.js"></script>
<link rel='stylesheet' href='css/loading-bar.min.css' type='text/css' media='all' />
<script type='text/javascript' src='js/loading-bar.min.js'></script>
<link rel="stylesheet" href="css/atom-one-dark.css">
<script src="js/highlight.pack.js"></script>

    <title>Blog - <?php echo $row['postTitle'];?></title>
</head>
<body>
	 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59d27a189ac91079"></script>
<?php require 'includes/navbar.php'; ?>



		<?php

  echo'<div class="row">';
      echo'<div class="col s12 m12">';
        echo'<div id="article" class="card-panel article">';
				echo '<div class="row">';
				echo '<a id="article-top" href="index.php"><i class="icon-home"></i>Home</a>';
						echo '<a onClick="window.print()" id="article-top" href="#!"><i class="icon-download"></i>Download</a>';

				echo '</div>';
				echo ' <div class="addthis_inline_share_toolbox_et5b"></div>';
				echo '<div class="row">';

					echo '<h1 >'.$row['postTitle'].'</h1>';
					echo '<span>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</span>';
					echo '<div class row>';
					echo '<span id="text">'.$row['postCont'].'</span>';
					echo '</div>';
				echo '</div>';
        echo'  </span>';
      echo'  </div>';
    echo'  </div>';



		?>

	</div>
	<div class="row">
<div class="col s12 m6">
	<div class="card-panel">
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="css/skin.css" />
 <script type="text/javascript" id="hcb">if(!window.hcb_user){
	 hcb_user={};
}
(function(){
var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");
s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24e6lBsHtxIQrLquKClH0Si0"+"&opts=16860&num=10&ts=1506964509705");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
</div>
</div>
</div>
<script>
  $(".button-collapse").sideNav();
	hljs.initHighlightingOnLoad();
</script>
</body>
</html>
