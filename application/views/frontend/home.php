<?php
   $check = $this->session->userdata('user_loged');
 ?>

<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>S@H</title>
    <meta name="keywords" content="fontanero, HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Cloud Software Solution Ltd."/>
    <meta name="description" content="fontanero- Responsive HTML5/CSS3 Template"/>

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:600,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <!-- //Fonts -->

    <!-- Owl Carousel CSS -->
    <link href="<?php echo base_url();?>assets/front/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>assets/front/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/offcanvas.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/style.css"/>

</head>
<!-- /head -->


<body>

  <div class="wrapper" id="wrapper">
        <div class="offcanvas-pusher">
          <div class="content-wrapper">
        <!-- header satrt -->
          <?php $this->load->view('frontend/header'); ?>
        <!-- header close-->
        <!-- .container-->
         <?php
           $this->load->view($view);
          ?>
        <!-- .container-->
        <!-- footer start-->
        <?php $this->load->view('frontend/footer'); ?>
        <!-- footer end-->
        <!-- .container-->


      </div>
      <!--content-wrapper-->
    </div>
        <!-- offcanvas-pusher -->

        <div class="offcanvas-menu offcanvas-effect visible-xs">
          <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
          <h1>fontanero sidebar Menu</h1>
          <div>
            <div>
              <ul id="menu">
                <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>">About us</a></li>
            <li><a href="<?php echo base_url();?>">Services</a></li>
            <?php
                 if ($check==1) {

                 }else{?>
                   <li><a  data-toggle="modal" href="#myModal">Login</a></li>
              <?php   }
             ?>
            <li><a href="<?php echo base_url('user/user');?>">Registration</a></li>
            <li><a href="<?php echo base_url();?>">Contact us</a></li>

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
                      <li><a href="<?php echo base_url('adminauth/login_admin/logout')?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
          <?php  }

            ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- offcanvas-menu end -->
        <!-- Login Modal -->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
                    <div id="result"></div>
                    <div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="emailId" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <input type="submit" name="submit" id="sub" class="btn btn-default">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- #wrapper -->
  <!--login pop up-->



  <!-- =========================================
  JAVASCRIPT
  ========================================== -->

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/hippo-off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/script.js"></script>
  <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

  <script>
         $(document).ready(function(){
           $('#sub').click(function(){

            var u_email=$('#emailId').val();
            var u_pass=$('#pwd').val();


               /*$.post("insert.php",{name:u_name,email:u_email,pass:u_pass,mobile:u_mobile},function(data){
                   $('#result').html(data);
               });*/
               $.ajax({
                   url:'http://localhost/homeservice/user/user/userLogin',
                   data:{email:u_email,password:u_pass},
                   type:'post',
                   success:function(data){
                     if (data=="1") {
                        window.location.href = 'http://localhost/homeservice/';
                     }else {
                       $('#result').html(data);
                     }




					// $('#name').val();
                   }

               });

           });
         });
    </script>



</body>
</html>
