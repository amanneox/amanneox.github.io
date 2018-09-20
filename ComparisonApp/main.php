<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Title</title>
		<meta name="description" content="Product comparison website for devices by Aman Adhikari." />
		<meta name="keywords" content="devices, compare, product, gadgets, price, products, store, filter, comparison, mobiles" />
		<meta name="author" content="Aman Adhikari" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />
		<!-- Pixel Fabric clothes icons -->
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css" />
		<!-- General demo styles & header -->
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
		<script src="js/modernizr.custom1.js"></script>
	</head>
<?php
try {
		if (isset($_GET['type'])) {
$type=$_GET['type'];
}
if (isset($_GET['type_sub'])) {
$type_sub=$_GET['type_sub'];
}

 echo '
	<body>
		<div class="popBox">
	<div class="btn-close">
	  <button class="close"><i class="icon icon-cross"></i></button>
	</div>
	<div class="popBody">
			<div class="button-container">
			    <div class="button -blue center"><a href="#">Website#1</a></div>
			    <div class="button -salmon center"><a href="#">Website#2</a></div>
			    <div class="button -sun center"><a href="#">Website#3</a></div>
			    <div class="button -flower center"><a href="#">Website#4</a></div>
			  </div>
<div class="popFooter">
	<div class="popBar">
		<a><span>BEST PRICE:?</span></a>
	</div>
</div>
	</div>
	  </div>
		<div id="compare" class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>';
	require('search.php');
	echo '
		<!-- Main view -->
		<div id="cView" class="view">
			<!-- Blueprint header -->
			<header class="bp-header cf">

<a class="home" href="index.php"><i class="icon-home"></i></a>
			</header>

			<section class="grid">
';
				$stmt = $db->query('SELECT * FROM items WHERE type_sub="'.$type_sub.'" ORDER BY item_id DESC');

while($row = $stmt->fetch()){

				echo'<div class="product">
					<div class="product__info">
						<img class="product__image" src="'.$row['item_url'].'" alt="Product 1" />
						<h3 class="product__title">'.$row['item_name'].'</h3>
						<span class="product__year extra highlight">'.$row['item_date'].'</span>
						<span class="product__region extra highlight">'.$row['item_sub'].'</span>
						<span class="product__varietal extra highlight">'.$row['item_des'].'</span>
						<span class="product__alcohol extra highlight">'.$row['item_pop'].'</span>
						<span class="product__price highlight">'.$row['item_price'].'</span>
						<button class="action action--button action--buy"><i class="icon-cart"></i><span class="action__text">Buy Now</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>';
}
echo'
			</section>
		</div>
	
		<section class="compare">
			<button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>

	<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/main1.js"></script>

		<section>
		<nav role="navigation">
				<ul class="cd-pagination animated-buttons custom-icons">
					<li class="button"><a href="#0"><i>Prev</i></a></li>
					<li class="button"><a href="#0"><i>Next</i></a></li>
				</ul>
			</nav> <!-- cd-pagination-wrapper -->
</section>
	</body>
	';
}
	catch(PDOException $e) {
	       echo $e->getMessage();
	   }
	?>

	<script>

		(function() {
			var orig_height = $('#morphsearch').height();
			var morphSearch = document.getElementById( 'morphsearch' ),
				input = morphSearch.querySelector( 'input.morphsearch-input' ),
				ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
				isOpen = isAnimating = false,
				// show/hide search area
				toggleSearch = function(evt) {
					// return if open and the input gets focused
					if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

					var offsets = morphsearch.getBoundingClientRect();
					if( isOpen ) {
						classie.remove( morphSearch, 'open' );

						// trick to hide input text once the search overlay closes
						// todo: hardcoded times, should be done after transition ends
						if( input.value !== '' ) {
							setTimeout(function() {
								classie.add( morphSearch, 'hideInput' );
								setTimeout(function() {
									classie.remove( morphSearch, 'hideInput' );
									input.value = '';
								}, 300 );
							}, 500);
						}
//$('html').css("overflow-y","auto");
						input.blur();
					}
					else {

						classie.add( morphSearch, 'open' );
					}

					isOpen = !isOpen;
				};

			// events
			input.addEventListener( 'focus', toggleSearch );
			ctrlClose.addEventListener( 'click', toggleSearch );

			// esc key closes search overlay
			// keyboard navigation events
			document.addEventListener( 'keydown', function( ev ) {
				var keyCode = ev.keyCode || ev.which;
				if( keyCode === 27 && isOpen ) {
					toggleSearch(ev);
				}
			} );


			/***** for demo purposes only: don't allow to submit the form *****/
			morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
		})();

	</script>
<script>

$(document).ready(function(){
	window.setInterval(function(){
		if($('#compare').hasClass('compare-basket--active')){
			$('#searhbox').hide();
		}
		else {
			$('#searhbox').show();
		}
}, 1);

	$('.action--compare-add').click(function() {
		if($('#compare').hasClass('compare-basket--active')){
			$('#searhbox').hide();
		}
		else {
			$('#searhbox').show();
		}
	});



	$('.btn-close').click(function() {
			$('.popBox').toggle();
	});

$('.action--buy').click(function() {

	$('.popBox').toggle();
});

});

</script>
</html>
