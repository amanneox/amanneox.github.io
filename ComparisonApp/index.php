<?php require('includes/config.php');
$stmt = $db->query('SELECT * FROM category ORDER BY rand()');

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
	<meta name="description" content="Product comparison website for devices by Aman Adhikari." />
	<meta name="keywords" content="devices, compare, product, gadgets, price, products, store, filter, comparison, mobiles" />
	<meta name="author" content="Aman Adhikari" />
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />


	<link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css" />

	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
			<link rel="stylesheet" type="text/css" href="css/demo2.css" />
			<link rel="stylesheet" type="text/css" href="css/component2.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />


	<link rel="stylesheet" type="text/css" href="css/flickity.css" />

	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>

<?php require 'search.php'; ?>
	<div class="bar">
		<div class="filter">
			<span class="filter__label">Filter: </span>
			<button class="action filter__item filter__item--selected" data-filter="*">All</button>
			<button class="action filter__item" data-filter=".mobiles"><i class="icon-device-tablet"></i><span class="action__text"> Mobiles</span></button>
			<button class="action filter__item" data-filter=".laptop"><i class="icon-device-laptop"></i><span class="action__text"> Laptops</span></button>
			<button class="action filter__item" data-filter=".tv"><i class="icon-device-desktop"></i><span class="action__text"> TV</span></button>
			<button class="action filter__item" data-filter=".devices"><i class="icon-box"></i><span class="action__text"> Devices</span></button>
			<button class="action filter__item" data-filter=".camera"><i class="icon-video-camera"></i><span class="action__text"> Camera</span></button>
		</div>
		<button class="cart">
			<img class="play" src="img/playstore.svg"></img>



		</button>
	</div>
	<!-- Main view -->
	<div class="view">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<span><img class="logo" src="img/logo.svg"></img></span>


		</header>
		<!-- Grid -->
		<section class="grid grid--loading">
			<!-- Loader -->
			<img class="grid__loader" src="images/spin.svg" width="60" alt="Loader image" />
			<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
			<div class="grid__sizer"></div>
			<!-- Grid items -->
			<?php
while($row = $stmt->fetch()){
			 echo '
			<div class="grid__item '.$row['item_type'].'">
				<div class="slider">
					<div class="slider__item"><a href="main.php?type='.$row['item_type'].'&type_sub='.$row['type_sub'].'"><img src="'.$row['item_url'].'" alt="Dummy" /></a>
					</div>
				</div>
				<div class="meta">
					<h3 class="meta__title">'.strtoupper($row['item_type']).'</h3>
					<span class="meta__brand">'.$row['item_name'].'</span>
					<span class="meta__price">'.$row['item_count'].'</span>
				</div>
				<button class="action action--button action--buy"></button>
			</div>';
		}
?>

		</section>

	</div>


	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/classie2.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
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

</body>
</html>
