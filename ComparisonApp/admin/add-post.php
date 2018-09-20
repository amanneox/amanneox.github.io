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
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <script src="../js/jquery-3.2.1.min.js"></script>
 	<script src="../js/bootstrap.min.js"></script>
  <script>

  </script>
</head>
<body>
<?php include 'nav.php'; ?>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($item_name ==''){
			$error[] = 'Please enter the name.';
		}

		if($item_price ==''){
			$error[] = 'Please enter the price.';
		}

		if($item_des ==''){
			$error[] = 'Please enter the des.';
		}
    if($item_url ==''){
      $error[] = 'Please enter the Image.';
    }
    if($type_sub ==''){
      $error[] = 'Please enter the Type.';
    }


		if(!isset($error)){

			try {
				$stmt = $db->prepare('INSERT INTO items (item_name,item_price,item_type,item_url,item_sub,item_des,item_pop,item_date,type_sub) VALUES (:item_name,:item_price,:item_type,:item_url,:item_sub,:item_des,:item_pop,:item_date,:type_sub)') ;
				$stmt->execute(array(
					':item_name' => $item_name,
					':item_price' => $item_price,
					':item_type' => $item_type,
          ':item_url' => $item_url,
          ':item_sub'=>$item_sub,
          ':item_des'=>$item_des,
          ':item_pop'=>$item_pop,
          ':type_sub'=>$type_sub,
					':item_date'=> date('Y-m-d H:i:s')
				));

				//redirect to index page
				header('Location: index.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>
  <div class="container">
<div class="col-md-5">
    <div class="form-area">
        <form method="post" action="" role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">ADD ITEM</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" value="<?php if(isset($error)){ echo $_POST['item_name'];}?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="item_type" name="item_type" placeholder="Item Type" value="<?php if(isset($error)){ echo $_POST['item_type'];}?>" required>
					</div>
          <div class="form-group">
						<input type="text" class="form-control" id="type_sub" name="type_sub" placeholder="Type Sub" value='<?php if(isset($error)){ echo $_POST['type_sub'];}?>' required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="item_price" name="item_price" placeholder="Item Price" value='<?php if(isset($error)){ echo $_POST['item_price'];}?>' required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="item_sub" name="item_sub" placeholder="Item Sub" value='<?php if(isset($error)){ echo $_POST['item_sub'];}?>' required>
					</div>
          <div class="form-group">
            <input type="text" class="form-control" id="item_pop" name="item_pop" placeholder="Item Pop" value='<?php if(isset($error)){ echo $_POST['item_pop'];}?>' required>
          </div>
          <div class="form-group">
						<input type="text" class="form-control" id="item_url" name="item_url" placeholder="Image Url" value='<?php if(isset($error)){ echo $_POST['item_url'];}?>' required>
					</div>
          <div class="form-group">
                   <textarea class="form-control" name="item_des" type="textarea" id="item_des" placeholder="Item Des" maxlength="140" rows="7"><?php if(isset($error)){ echo $_POST['item_des'];}?></textarea>

                   </div>
        <input type="submit" id="submit" name="submit" class="btn btn-primary pull-right"></input>
        </form>
    </div>
</div>
</div>
</div>
