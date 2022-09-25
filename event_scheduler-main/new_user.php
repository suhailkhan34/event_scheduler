<?php
	session_start();
?>
<html>
<head>
  	<title>Event Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap.min.css">


	</head>
	<body style="background-image: url(images/bg_1.jpg);" >
	<section class="ftco-section img bg-hero" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section" style="color:white"  >Create Event</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4" style="color:white"  >Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p style="color:white" ><span style="color:white" >Address:</span> jp nagar bengaluru Karnataka</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span style="color:white" >Phone:</span> <a href="tel://1234567920">0825866879</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span style="color:white" >Email:</span> <a href="mailto:ics@gmail.com.com">ics@gmail.com.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span style="color:white" >Website:</span> <a href="https://icsoln.com">icsoln.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4" style="color:white" >Enter Details</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		
							  <form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="username"  placeholder="FirstName">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="password"  placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email"  placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="phone_no"  placeholder="Phone no">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name"  placeholder="Event Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea type="text" name="address" class="form-control" cols="30" rows="5" placeholder="Event Details"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input  style="font-size:30px" type="submit" value="Submit" name="Submit" >
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>