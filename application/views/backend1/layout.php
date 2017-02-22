<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/backend/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/backend/css/style.css"> <!-- Resource style -->
	<script src="<?php echo base_url();?>assets/backend/js/modernizr.js"></script> <!-- Modernizr -->

	<title>Responsive Sidebar Navigation | CodyHouse</title>
</head>
<body>
	<!--header content-->
       <?php $this->load->view('backend/header'); ?>
  <!--header end -->

	<main class="cd-main-content">
		<!--menu -->
        <?php $this->load->view('backend/sidebar') ?>
    <!-- menu end -->

		<div class="content-wrapper">
			<h1>Responsive Sidebar Navigation brijesh</h1>
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
<script src="<?php echo base_url();?>assets/backend/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
