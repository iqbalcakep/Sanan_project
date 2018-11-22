<!DOCTYPE html>
<html>
<head>
<title>Setting Akun | Kripik Tempe Sanan</title>
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
				<li>Settings</li>
			</ul>
		</div>
	</div>
<!-- banner -->
	<div class="banner">
		<?php include 'leftmenu.php' ?>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>Detail Informasi</h3>
			<br>
			<h4 style="text-align:left;">Informasi Umum
				<div style="float: right; margin: 0; padding: 0; position: relative;">
				<?php foreach($pembeli as $r ){ ?>
				<a href="#pesan<?php echo $r->id_pembeli?>" class="btn btn-primary" data-toggle="modal" data-target="">
			        <span class="glyphicon glyphicon-edit"></span>
			        <span><strong>Edit</strong></span>            
	    		</a>
				<div id="pesan<?php echo $r->id_pembeli?>" class="modal fade" role="dialog">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				        <div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal">&times;</button>
				          	<h4 class="modal-title">Edit Informasi Akun</h4>
				        </div>
				        <div class="modal-body">
				        <?php echo form_open_multipart('Settings/update/'.$r->id_pembeli) ?> 
				        
				        <?php echo validation_errors(); ?>
				          <div class="container-fluid"> 
				            <h5>
				              <table class="table table-hover" border="0">
				                <tr>
				                  <td width="1">Nama</td> 
				                  <td width="200"><input type="text" class="form-control" name="nama" required="" value="<?php echo $pembeli[0]->nama_pembeli ?>"></td>
				                </tr>
				                <tr>
				                  <td width="1">Username</td> 
				                  <td width="200"><input type="text" class="form-control" name="username" required="" value="<?php echo $pembeli[0]->username_pembeli ?>"></td>
				                </tr>
				                <tr>
				                  <td width="1">Email</td> 
				                  <td width="200"><input type="text" class="form-control" name="email" required="" value="<?php echo $pembeli[0]->email_pembeli ?>"></td>
				                </tr>
				                <tr>
				                  <td width="1">Jenis Kelamin</td> 
				                  <td width="200">
				                    <select class="form-control" name="jenis_kelamin" id="gender1">
				                      <option value="L">Laki-Laki</option>
				                      <option value="P">Perempuan</option>
				                    </select
				                  </td>
				                </tr>
				                <tr>
				                  <td width="1">Telepon</td> 
				                  <td width="200"><input type="text" class="form-control" name="nomor_telepon" required="" value="<?php echo $pembeli[0]->nomor_telepon_pembeli ?>"></td>
				                </tr>
				              </table>
				            </h5> 
				          </div> 
				        
				        </div>
				        <div class="modal-footer">
				          <button type="submit" class="btn btn-primary">Pesan</button>
				           <!-- <a class="btn btn-success" href="<?php echo base_url() ?>index.php/home/detail/<?php echo $data['id_pembeli']?>">Pesan</a> -->
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				        <?php echo form_close(); ?>
				      </div>
				    </div>
				  </div> 
				</h4>
			<hr>
			<div class="table-responsive">
  			<table class="table table-striped">
			    <tr>
			        <th scope="row">Nama </th>
			        <td>
			            <?php echo $r->nama_pembeli; ?>
			        </td>
			        <th>Jenis Kelamin </th>
			        <?php if($r->jenis_kelamin_pembeli=="L"){
							$kelamin = "Laki-Laki";
						}else{
							$kelamin = "Perempuan";
						} ?>
			            <td>
			                <?php echo $kelamin; ?>
			            </td>
			    </tr>
			    <tr>
			        <th>Username </th>
			        <td>
			            <?php echo $r->username_pembeli; ?>
			        </td>
			        <th>Email </th>
			        <td>
			            <?php echo $r->email_pembeli; ?>
			        </td>
			    </tr>
			    <tr>
			        <th>Telepon </th>
			        <td colspan="3">
			            <?php echo $r->nomor_telepon_pembeli; ?>
			        </td>
			    </tr>
			    <?php } ?>
			</table>
			</div> 
			<br>
			<h4 style="text-align:left;">Alamat Pengiriman
				<div style="float: right; margin: 0; padding: 0; position: relative;">
				<a href="#tambahalamat" class="btn btn-primary" data-toggle="modal" data-target="">  
			        <span class="glyphicon glyphicon-plus"></span>
			        <span><strong>Tambah</strong></span>            
	    		</a>
	    		<div id="tambahalamat" class="modal fade" role="dialog">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Tambah Alamat Pengiriman</h4>
				        </div>
				        <div class="modal-body">
				        <?php echo form_open_multipart('Settings/tambahalamat/') ?> 
				        
				        <?php echo validation_errors(); ?>
				          <div class="container-fluid"> 
				            <h5>
				              <table class="table table-hover" border="0">
				                <tr>
				                  <td width="1">Nama Alamat</td> 
				                  <td width="200"><input type="text" class="form-control" name="nama_alamat" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Provinsi</td> 
				                  <td width="200"><input type="text" class="form-control" name="provinsi" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Kota</td> 
				                  <td width="200"><input type="text" class="form-control" name="kota" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Kecamatan</td> 
				                  <td width="200"><input type="text" class="form-control" name="kecamatan" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Kode Pos</td> 
				                  <td width="200"><input type="text" class="form-control" name="kode_pos" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Alamat Lengkap</td> 
				                  <td width="200">
				                  	<textarea type="text" class="form-control" name="alamat_lengkap" required=""></textarea>
				                  </td>
				                </tr>
				                <tr>
				                  <td width="1">Nama Penerima</td> 
				                  <td width="200"><input type="text" class="form-control" name="nama_penerima" required=""></td>
				                </tr>
				                <tr>
				                  <td width="1">Nomor Telepon Penerima</td> 
				                  <td width="200"><input type="text" class="form-control" name="nomor_telepon_penerima" required=""></td>
				                </tr>
				              </table>
				            </h5> 
				          </div> 
				        
				        </div>
				        <div class="modal-footer">
				          <button type="submit" class="btn btn-primary">Pesan</button>
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				        <?php echo form_close(); ?>
				      </div>
				    </div>
				  </div> 
				</h4>
			<hr>
			<?php foreach($alamat as $r ) { ?>
			<div class="col-md-3 col-sm-3 col-xs-12 card-main-section">
				<div class="row card-part">
					<div class="col-md-12 col-sm-12 col-xs-12 card-title">
						<h4><?= $r->nama_alamat; ?></h4>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 card-description">
						<p><?= $r->alamat_lengkap; ?> - <?= $r->kecamatan.",". $r->kota.".<br>". $r->provinsi; ?> 
						</p>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 card-cart">
						<a href="#detail" class="btn btn-info">DETAIL</a>
						<a href="settings/hapus/<?= $r->id_alamat; ?>" class="btn btn-danger">HAPUS</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
			<br><br>
			<h4 style="text-align:left">Transaksi Terakhir</h4>
			<hr>
			<div class="table-responsive">
  			<table class="table table-striped">
			<tr>
			<th scope="row">Nama </th>
			<td>Muhamamd Iqbal R.r</td>
			<th>Jenis Kelamin </th>
			<td>Muhamamd Iqbal R.r</td>
			</tr>
			<tr>
			<th>Username </th>
			<td>Muhamamd Iqbal R.r</td>
			<th>Email </th>
			<td>Muhamamd Iqbal R.r</td>
			</tr>
			<tr>
			<th>Telepon </th>
			<td>082336472923</td>
			</tr>
  			</table>
			</div> 
			<br>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- team -->
	<div class="team">
		<div class="container">
			<h3>Meet Our Amazing Team</h3>
			<div class="agileits_team_grids">
				<div class="col-md-3 agileits_team_grid">
					<img src="<?php echo base_url() ?>assets/images/32.jpg" alt=" " class="img-responsive" />
					<h4>Martin Paul</h4>
					<p>Manager</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="<?php echo base_url() ?>assets/images/33.jpg" alt=" " class="img-responsive" />
					<h4>Michael Rick</h4>
					<p>Supervisor</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="<?php echo base_url() ?>assets/images/34.jpg" alt=" " class="img-responsive" />
					<h4>Thomas Carl</h4>
					<p>Supervisor</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="<?php echo base_url() ?>assets/images/35.jpg" alt=" " class="img-responsive" />
					<h4>Laura Lee</h4>
					<p>CEO</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
				<div class="w3_testimonials_grids">
					<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Andrew Smith <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Thomson Richard <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Crisp Kale <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>John Paul <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Rosy Carl <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Rockson Doe <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
						</div>
					</div>
					<script src="<?php echo base_url() ?>assets/js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
				</div>
		</div>
	</div>
<!-- //testimonials -->
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