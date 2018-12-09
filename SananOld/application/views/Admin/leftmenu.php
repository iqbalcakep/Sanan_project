<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><span>TempeSanan.Com</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url() ?>assets/images/admin/<?php echo $foto;?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $username; ?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3><?php echo $level;	?></h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo site_url() ?>/Admin/dashboard"><i class="fa fa-home"></i> Beranda </span></a>
                </li>
                <li><a><i class="fa fa-edit"></i> Manajemen <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url() ?>/Admin/Admin">Admin </a>
                    </li>
                    <li><a href="<?php echo site_url() ?>/Admin/Customer">Pembeli </a>
                    </li>
                    <li><a href="<?php echo site_url() ?>/Admin/Produk">Produk </a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url() ?>/Admin/Order">Pemesanan </a>
                    </li>
                    <li><a href="<?php echo site_url() ?>/Admin/Pembayaran">Pembayaran </a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-file"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                  <li><a href="<?php echo site_url() ?>/Admin/Lapororder">Laporan Pemesanan </a>
                    <li><a href="<?php echo site_url() ?>/Admin/Laporbayar">Laporan Pembayaran </a>
                    </li>
                    
                  </ul>
                </li>
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url() ?>assets/images/admin/<?php echo $foto; ?>" alt=""><?php echo $username; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
            
                  <li><a href="<?php echo site_url() ?>/Admin/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>


            </ul>
          </nav>
        </div>

      </div>