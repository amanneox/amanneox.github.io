<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Admin - Add Post</title>


  <link rel="stylesheet" href="../style/style.css">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div class="row" id="wrapper">

	<?php include('menu.php');?>
	<p><a href="./">Blog Admin Index</a></p>

	<h2>Add Post</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postDesc ==''){
			$error[] = 'Please enter the description.';
		}

		if($postCont ==''){
			$error[] = 'Please enter the content.';
		}
    if($postImg ==''){
      $error[] = 'Please enter the Image.';
    }
    if($postType ==''){
      $error[] = 'Please enter the Type.';
    }


		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate,imgUrl,postType) VALUES (:postTitle, :postDesc, :postCont, :postDate,:postImg,:postType)') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postDesc' => $postDesc,
					':postCont' => $postCont,
          ':postImg' => $postImg,
          ':postType'=>$postType,
					':postDate' => date('Y-m-d H:i:s')
				));

				//redirect to index page
				header('Location: index.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>
<div class="row">
	<form action='' method='post'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

		<p><label>Description</label><br />
		<textarea name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

		<p><label>Content</label><br />
		<textarea name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea></p>

    		<p><label>Image Url</label><br />
    		<input type='text' name='postImg' value='<?php if(isset($error)){ echo $_POST['postImg'];}?>'></p>
        <p><label>Type</label><br />
    		<input type='text' name='postType' value='<?php if(isset($error)){ echo $_POST['postType'];}?>'></p>

		<p style="margin-left:1em;"><input class="btn red lighten-1" type='submit' name='submit' value='Submit'></p>

	</form>
</div>
</div>
