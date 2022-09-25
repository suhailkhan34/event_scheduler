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
<link rel="stylesheet" href="ganesa.css?<?php echo time(); ?>">


	</head>
	<body style="background-image: url(images/bg_1.jpg);" >
	<section class="ftco-section img bg-hero" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section" style="color:white"  >Registered</h1>
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
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<center>
<div class="z2">
<p style="color:black;font-size:30px"  >New EVENT successfully registered!!!!</p>
							<?php
						
            echo "<a href=\"home_page.php\"> Home</a>";
                          ?></div></center>




	</body>
</html>