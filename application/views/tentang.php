<!DOCTYPE html>
<html>
<head>
<title>Tentang | Kripik Tempe Sanan</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kripik Tempe Sanan, Kripik Tempe Malang, Kripik Tempe Sanan Malang" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<?php include 'header.php' ?>
<!-- //header -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/home">Home</a><span>|</span></li>
				<li>Tentang Kami</li>
			</ul>
		</div>
	</div>
<!-- banner -->
	<div class="banner">
		<?php include 'leftmenu.php' ?>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>Tentang Kami</h3>
			<p class="animi">Malang memang terkenal akan produk tempe yang berkualitas tinggi, dan keripik tempe jadi salah satu bentuk olahan yang paling disukai. Keripik Tempe Malang yang ada di Sentra Industri Tempe Sanan sejak dulu dirintis oleh para Penduduk Sanan sendiri dengan mendapat bimbingan dari Dinas Perindustrian Malang</p>
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right">
					<img src="<?php echo base_url() ?>assets/images/back_sanan2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 agile_about_grid_left">
					Anda bisa langsung berbelanja aneka olahan tempe. Diantaranya ada brownies tempe dan tempe bacem. Tak perlu khawatir tentang pilihan, karena banyak toko maupun tempat produksi di rumah-rumah warga yang bisa anda kunjungi. Tak hanya itu, disini anda juga bisa langsung menemui para pemilik usaha keripik tempe sanan.  Tentu layaknya kawasan industri lain, jika anda membeli di dalam kampung Sanan alias setelah memasuki gerbang kampung, anda akan mendapatkan harga yang lebih miring daripada di luaran sana.
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php include 'footer.php' ?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url() ?>assets/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>