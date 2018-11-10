<!DOCTYPE html>
<html>
<head>
<title>Privacy Policy | Kripik Tempe Sanan</title>
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
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="cari produk yang anda inginkan..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cari produk yang anda inginkan...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Lihat Keranjang" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="<?php echo base_url() ?>index.php/home/login">Login</a></li> 
								<li><a href="<?php echo base_url() ?>index.php/home/login">Daftar</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href=""><span>Sanan</span> Tempe</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="<?php echo base_url() ?>index.php/home/tentang">Tentang Kami</a><i>/</i></li>
					<li><a href="<?php echo base_url() ?>index.php/home/email">Hubungi Kami</a><i>/</i></li>
					<li><a href="<?php echo base_url() ?>index.php/home/layanan">Layanan</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:sanan@gmail.com">sanan@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/home">Home</a><span>|</span></li>
				<li>Ketentuan & Privasi</li>
			</ul>
		</div>
	</div>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="<?php echo base_url() ?>index.php/home/produk">Kripik Tempe</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="<?php echo base_url() ?>index.php/home/produk">Contoh Produk</a></li>
										<li><a href="<?php echo base_url() ?>index.php/home/produk2">Contoh Produk 2</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- privacy -->
		<div class="privacy">
			<div class="privacy1">
				<h3>Privacy Policy</h3>
				<div class="banner-bottom-grid1 privacy1-grid">
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
						<li>Profile <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-search" aria-hidden="true"></i></li>
						<li>Search <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
						<li>News Feed <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i></li>
						<li>Applications <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
				</div>
			</div>
			<div class="privacy1">
				<h3>Terms of Use</h3>
				<div class="banner-bottom-grid1 privacy2-grid">
					<div class="privacy2-grid1">
						<h4>deserunt mollit anim id est laborum?</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<div class="privacy2-grid1-sub">
							<h5>1. sint occaecat cupidatat non proident, sunt</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>2.perspiciatis unde omnis iste natus error</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>3. natus error sit voluptatem accusant</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>4. occaecat cupidatat non proident, sunt in</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>5. deserunt mollit anim id est laborum</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
<!-- 	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 w3_footer_grid">
				<h3>Informasi</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo base_url() ?>index.php/home/email">Hubungi Kami</a></li>
					<li><a href="<?php echo base_url() ?>index.php/home/tentang">Tentang Kami</a></li>
					<li><a href="<?php echo base_url() ?>index.php/home/produk">Produk Kami</a></li>
					<li><a href="<?php echo base_url() ?>index.php/home/layanan">Layanan</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3_footer_grid">
				<h3>Ketentuan Privasi</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo base_url() ?>index.php/home/faqs">FAQ</a></li>
					<li><a href="<?php echo base_url() ?>index.php/home/privacy">privacy policy</a></li>
					<li><a href="<?php echo base_url() ?>index.php/home/privacy">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3_footer_grid agile_footer_grids_w3_footer">
				<h3>Layanan</h3>
				<ul class="w3_footer_grid_list">
					<div class="w3_footer_grid_bottom">
						<h4>Pembayaran 100% Aman</h4>
						<img src="<?php echo base_url() ?>assets/images/card.png" alt=" " class="img-responsive" />
					</div>
				</ul>
				<div class="w3_footer_grid_bottom">
						<br>
						<h5>Sosial Media Kami</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-4 w3_footer_grid agile_footer_grids_w3_footer">
					
				</div>
				<div class="col-md-4 w3_footer_grid agile_footer_grids_w3_footer">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Kripik Tempe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
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