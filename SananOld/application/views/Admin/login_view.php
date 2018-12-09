
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">TempeSanan.com</a>
      </div>
     
    </div>
  </nav>
  <div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 

<div class="row page-content">
  <div class="col-lg-12">
    <h2>Login Form</h2>
  
        <?php echo validation_errors(); ?>

    <?php echo form_open('Admin/login/cekLogin'); ?>
      <div class="form-group">
         <input type="text" name="username" class="form-control" id="username" placeholder="Username">
      </div>
      <div class="form-group">
         <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>  
      <div class="form-group pull-right">
       <button type="submit" id="login" class="btn btn-primary">Login</button>
    </div>  
    <?php echo form_close(); ?>

 </div>


 
 </div>
</body>
</html>