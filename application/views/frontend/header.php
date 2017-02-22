<?php
   $check = $this->session->userdata('user_loged');
 ?>
<div class="container">
  <div class="row">
    <section class="header">
      <header class="header-wrapper">
        <div class="header-top">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="logo">
                        <a title="fontanero" href="<?php echo base_url();?>">
                            <!-- <img src="<?php echo base_url();?>assets/front/img/logo.png" alt="fontanero"> -->
                            <h3>S@H</h3>
                        </a>
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs col-sm-6">
              <div class="header-connection">
                <ul class="header-social social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p>Call Us: <strong>(345) 345-3456</strong></p>
              </div>
                  </div>
        </div>
        <!-- .header-top-->
          <div class="main-nav-bar">
            <div class="col-md-12">
                      <div class="navbar-header navbar-right pull-left">
                          <!-- offcanvas-trigger-effects -->
                          <div id="offcanvas-trigger-effects" class="offcanvas">
                              <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas"
                                      data-target=".navbar-collapse" data-placement="left" data-effect="offcanvas-effect">
                                  <i class="fa fa-bars"></i>
                              </button>
                          </div>
                          <!-- offcanvas-trigger-effects -->
                      </div>

                      <!-- navbar-collapse -->
                      <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                 <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>">About Us</a></li>
                    <li class="dropdown"><a href="<?php echo base_url();?>">Services</a>
                        <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url();?>">Water Heater</a></li>
                      <li><a href="<?php echo base_url();?>">Bathroom</a></li>
                      <li><a href="<?php echo base_url();?>">Toilet</a></li>
                      <li><a href="<?php echo base_url();?>">Tube and Shower</a></li>
                      <li><a href="<?php echo base_url();?>">Pipes and sweres</a></li>
                      <li><a href="<?php echo base_url();?>">Drainage</a></li>
                    </ul>
                  </li>

                    <li><a href="<?php echo base_url();?>">Contact Us</a></li>
                    <?php
                         if ($check==1) {

                         }else{?>
                           <li><a  data-toggle="modal" href="#myModal">Login</a></li>
                      <?php   }
                     ?>

                    <li><a href="<?php echo base_url('user/user');?>">Registration</a></li>


                  </ul>
                          <!-- /navbar-nav -->

                      <div class="nav navbar-nav navbar-right" id="header-right">

                  <div class="header-right">
                    <?php


                    if ($check==1) {?>

                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                              </li>
                              <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url('user/user/userlogout')?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                              </li>
                          </ul>
                          <!-- /.dropdown-user -->
                      </li>
                  <?php  }

                    ?>


                  </div>
                    </div>
                      </nav>
                      <!-- /navbar-collapse -->
                  </div>
          </div>
          <!-- .main-nav-bar -->
      </header>
      <!-- .header-wrapper-->
    </section>
    <!--End .header -->
  </div>
  <!-- .row-->
</div>
