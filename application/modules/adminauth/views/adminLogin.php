<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css1">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="loading">
  <div>
    <?php
    $error = $this->session->flashdata('error');
    //$message = $this->session->flashdata('message');
    if(!empty($error)){
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
    // if(!empty($message)){
    //   echo '<div class="alert alert-info">'.$message.'</div>';
    // }
  ?>
  </div>
  <!-- <div class="circle dark"></div>
  <div class="branding"></div> -->
</div>

<div class="login">
  <form method="post" action="<?php echo base_url('adminauth/login_admin');?>">
    <input type="email" name="email" placeholder="Email Id" required="required" />
    <input type="password" name="password" placeholder="Password" required="required" />
    <button type="submit" id="loginbtn" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>


</body>
</html>
