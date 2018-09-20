<?php
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

$stmt = $db->query('SELECT * FROM items');
if(isset($_GET['delete'])){

	$stmt = $db->prepare('DELETE FROM items WHERE item_id = :item_id') ;
	$stmt->execute(array(':item_id' => $_GET['delete']));

	header('Location: index.php?action=deleted');
	exit;
}

 ?>
 <html>
 <head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Title</title>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <script src="../js/jquery-3.2.1.min.js"></script>
 	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
  <script language="JavaScript" type="text/javascript">
  </script>
<?php include 'nav.php'; ?>
  <div class="row">
    <div class="col-sm-12">
  <table class="table">
    <thead>

      <tr>
        <th>item_id</th>
        <th>item_name</th>
        <th>item_price</th>
        <th>item_type</th>

        <th>type_sub</th>
        <th>Delete</th>

      </tr>

    </thead>
    <tbody>
    </div>
  </div>
      <?php
while($row = $stmt->fetch()){
  echo '
      <tr>
        <td>'.$row['item_id'].'</td>
        <td>'.$row['item_name'].'</td>
        <td>'.$row['item_price'].'</td>
        <td>'.$row['item_type'].'</td>

        <td>'.$row['type_sub'].'</td>
        <td><a  href="index.php?delete='.$row['item_id'].'">Delete</a></td>
      </tr>
      ';
    }
      ?>
    </tbody>
  </table>

</body>
</html>
