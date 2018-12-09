<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin PasangIklan.com </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/nprogress.js"></script>
  
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
  <div class="container body">


    <div class="main_container">

      <?php include('leftmenu.php'); ?>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
		  
		  <br><br>
			  <h1>Semua Pembayaran</h1>
			  <hr>
              <table id="table" class="display" cellspacing="0" width="100%">
              <thead>
                    <tr><th>ID Pembayaran</th><th>Nama Customer</th><th>Pengirim</th><th>Nomer Rekening</th><th>Jumlah Kirim</th><th>Harga</th></tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            
        <script type="text/javascript">

            var save_method; //for save method string
            var table;

            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "bSort": true,
             "scrollY": 100,
             "scrollX": true,
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo site_url('Admin/laporbayar/json'); ?>',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": '0',width:50},
                        {"data": "1",width:100},
                        {"data": "2",width:100},
                        {"data": "3",width:100},
                        {"data": "4",width:100},
                        {"data": "5",width:100},
            
                    ],

                });

            });
        </script>


        <div class="col-md-9 col-sm-9 col-xs-12" style="valign:top;">
           <div class="x_content">
           <?php echo form_open('Admin/Laporbayar/detail'); ?>
                  <br />
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal  <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-16">
                        dari 
                      <select name="tgl1">
                                <?php 
                        for($i = 1 ; $i < 32; $i++){
                                echo "<option>$i</option>";
                                }
                                ?>
                    </select>
                     
                    sampai
                      <select name="tgl2">
                                <?php 
                        for($i = 1 ; $i < 32; $i++){
                                echo "<option>$i</option>";
                                }
                                ?>
                    </select>
                      </div>
                    </div><br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bulan  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="bulan">
                                <?php 
                        for($i = 01 ; $i < 13; $i++){
                                echo "<option>$i</option>";
                                }
                                ?>
                    </select>
                      </div>
                    </div><br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="tahun">
                                <?php 
                        for($i = 1998 ; $i < date('Y'); $i++){
                                echo "<option>$i</option>";
                                }
                                ?>
                    </select>
                      </div>
                    </div>
                    

                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    
                        <button type="submit"  class="btn btn-success"><i class="fa fa-edit m-right-xs"> Submit</i></button>
                      </div>
                    </div>

                 <?php echo form_close();?>
                </div>

<br><br>
		
			
        </div>

        <!-- footer content -->

       
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url() ?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url() ?>assets/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="<?php echo base_url() ?>assets/js/chartjs/chart.min.js"></script>

  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>
 
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
