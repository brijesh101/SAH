
<div class="breadcrumb-area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title">
										<h2>Contact us</h2>
										<ul class="breadcrumb">
										   <li><a href="<?php echo base_url();?>">Home</a></li>
										   <li class="active">Registration</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- .row-->
						</div>
						<!-- .container-->
					</div>
					<!-- .breadcrumb-area-->

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="map-head">
						    		<h2>Location map</h2>
						    	</div>
							</div>
							<!-- .col-md-12-->
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->

					<div class="map-area">
						<div id="mapCanvas" class="map-canvas"></div>
					</div>
					<!-- .map-area-->

					<div class="container">
						<div class="row">
							<div class="form-section">
								<div class="col-md-8 col-xs-12 col-sm-8">
									<div class="main-contact-form">
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
										<h4>User Registration</h4>
										<p>Please fill all data.</p>
										<?php
												$validation_error = validation_errors();
												if(!empty($validation_error)){
													?>
													<div class="alert alert-danger"><?php echo $validation_error ?></div>
													<?php
												}
											?>
										<form action="<?php echo base_url('user/user');?>" method="post">
											<input type="text" id="full-name" name="name" placeholder="Name">
											<input type="email" id="email" name="email" placeholder="Email">
                      <input type="password" id="password" name="passsword" placeholder="Password">
                      <!-- <input type="password" id="password" name="passsword" placeholder="Confirm Password"> -->
                      <input type="text" id="mobile" name="mobile" placeholder="Mobile No">
											<input type="text" id="city" name="city" placeholder="City">
                      <input type="text" id="state" name="state" placeholder="State">
											<textarea name="message" id="message" cols="30" rows="4" placeholder="Address"></textarea>
											<input type="submit" name="submit" class="btn" value="submit">
										</form>
									</div>
								</div>
								<div class="col-md-4 col-xs-12 col-sm-4">
									<div class="office-location">
										<div class="contact-us head-office">
											<h4>Head Office</h4>
											<address>
												3456 E. Wieding Road <br>Tucson AZ, 3456
											</address>
											<address>
											 	<span>Email :</span>
												<a href="info@fontaneroplumbing.net">info@fontaneroplumbing.net</a>
											</address>
											<address>
											 	<span>Phones :</span>
												Main: (345) 345-3456 <br>
												Fax: (345) 345-3456 <br>
											</address>
										</div>
										<div class="contact-us newyork-office">
											<h4>Newyork Office</h4>
											<address>
												3456 E. Wieding Road <br>Tucson AZ, 3456
											</address>
											<address>
											 	<span>Email :</span>
												<a href="info@fontaneroplumbing.net">info@fontaneroplumbing.net</a>
											</address>
											<address>
											 	<span>Phones :</span>
												Main: (345) 345-3456 <br>
												Fax: (345) 345-3456 <br>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
