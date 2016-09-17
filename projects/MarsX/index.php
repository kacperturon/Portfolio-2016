<!DOCTYPE html>
<html lang="en">
<?php include("php/mars_data.php"); 
 ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mars press">
    <meta name="author" content="Kacper Turon, Moe Hydar, Stephen Conyers">

	
    <title>MarsX</title>
	<link rel="icon" type="image/ico" href="img/ssmk_logo.ico"/>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.logo{
				margin-top: -11px;
				height: 40px;
				width: 45px;
			}
		.text_logo{
			margin: -5px 0 0 10px;
		}
		
	@media(max-width:767px){
		.text_logo{
			display: none;
		}
	}
	</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <!--  <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap -->
					  <p class="navbar-right text_logo">MarsX</p><img class="logo" src="img/ssmk_logo.png"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#weather">Weather</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#estate">Estate Agent</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#stocks">Stocks</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="#about">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Mars<font color="#9F1B07">X</font></h1>
                        <p class="intro-text">A free, up-to-date, Mars online newspaper.<br>Created by SSMK.</p>
                        <a href="#weather" class="btn btn-circle page-scroll btn-circle-custom">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Weather Section -->
    <section id="weather" class="container content-section">
		<!--
			//$mars_temperature = new MaasApi();

			//$data=$mars_temperature->getLatest();	
			
			//Maas API no longer works as of 16.09.2016
		-->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Latest weather conditions</h2>
				<h3>Mars time: <div class="mtc"></div></h3>
				
				<img src="img/sunny.png" class="img-responsive" style="float:left;">
				
			
				<div class="content-heading" style="padding-top: 5px;">
					<h1><font size="300%">-37
					</font>&deg;C<br>
					<p>Temperatures range from -70&deg;C up to -4&deg;C</p></h1>
					
				</div>
				<div class="row">
					<div class="col-md-6"><h4>Date of measurements: <small><?php echo $data->terrestrial_date;?></small></h4> </div>
					<div class="col-md-6"><h4>Pressure: <small>865 pascals</small></h4> </div>
					
				</div>
				
				<div class="row">
					<div class="col-md-6"><h4>Solar longitude: <small><?php echo $data->ls;?></small></h4> </div>
					<div class="col-md-6"><h4>Season: <small><?php echo $data->season;?> </small></h4> </div>
					
				</div>

            </div>
        </div>
    </section>

    <!-- Estate Section -->
    <section id="estate" class="content-section" style="padding-top:100px;">
        
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="text-center">Estate Agent</h2>
                    <div class="row">
						<div class="col-md-8"><img src="img/mars-house.jpg" class="img-responsive"> </div>
						<div class="col-md-4">
						<h2>SMALL SIZED CAPSULES</h2>
						<h3>PRICE: <small>£400,000</small>
						<h3>FURNISHED: <small>NO</small>
						
						</div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="col-md-8" ><img src="img/mars-house-2.jpg" class="img-responsive"> </div>
						<div class="col-md-4">
						<h2>MEDIUM SIZED CAPSULES</h2>
						<h3>PRICE: <small>£600,000</small>
						<h3>FURNISHED: <small>YES</small></div>
						
					</div>
					
                </div>
            </div>
        
    </section>

    <!-- Stocks Section -->
    <section id="stocks" class="container content-section text-center" style="padding-top: 50px;">
        <div class="mars-section">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Stocks for <small><?php date_default_timezone_set('UTC'); echo date("F j, Y, g:i a"); ?></small></h2>
				<div class="row">
					<h3>Astrotech Corp</h3>
					<img src="http://markets.money.cnn.com/services/api/chart/snapshot_chart_api.asp?symb=ASTC" class="img-responsive center-block">
				</div>
			</div>
        </div>
    </section>
	

  
	 <!-- About Us Section -->
    <section id="about" class="container content-section text-center" style="padding-top:50px;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>We are SSMK</h2>
				<div class="col-md-12"><img src="img/kacper.png" class="img-responsive"></div>
                <p>Feel free to email us to provide some feedback on our website</p>
				
				  <form name="sentMessage" class="well" id="contactForm"  novalidate>
			   <legend>Contact us!</legend>
			 <div class="control-group">
						<div class="controls">
				<input type="text" class="form-control" 
					   placeholder="Full Name" id="name" required
						   data-validation-required-message="Please enter your name" />
				  <p class="help-block"></p>
			   </div>
				 </div> 	
					<div class="control-group">
					  <div class="controls">
				<input type="email" class="form-control" placeholder="Email" 
								id="email" required
						   data-validation-required-message="Please enter your email" />
			</div>
			</div> 	
				  
				   <div class="control-group">
					 <div class="controls">
					 <textarea rows="10" cols="100" class="form-control" 
						   placeholder="Message" id="message" required
				   data-validation-required-message="Please enter your message" minlength="5" 
						   data-validation-minlength-message="Min 5 characters" 
							maxlength="999" style="resize:none"></textarea>
			</div>
				   </div> 		 
			 <div id="success"> </div> <!-- For success/fail messages -->
			<button type="submit" class="btn btn-primary pull-right">Send</button><br />
			  </form>
					
				 
				</div>
			</div>
    </section>
	
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright <br>SSMK 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/contact_me.js"></script>
	<script src="./js/jqBootstrapValidation.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	<!-- Mars clock -->
	<script type="text/javascript">
		function h_to_hms(h) {
                var x = h * 3600;
                var hh = Math.floor(x / 3600);
                if (hh < 10) hh = "0" + hh;
                var y = x % 3600;
                var mm = Math.floor(y / 60);
                if (mm < 10) mm = "0" + mm;
                var ss = Math.round(y % 60);
                if (ss < 10) ss = "0" + ss;
                return hh + ":" + mm + ":" + ss;
            }
		function update() {
                var input_date = $(".custom-datetime").val();
                if (input_date) {
                    var d = new Date(input_date);
                } else {
                    var d = new Date();
                }
                if (d.getTime()) {
                    $(".manual-input-invalid").hide();
                    $(".date-conversion-results").show();
                } else {
                    $(".manual-input-invalid").show();
                    $(".date-conversion-results").hide();
                }
		var millis = d.getTime();
        var jd_ut = 2440587.5 + (millis / 8.64E7);
        var jd_tt = jd_ut + (35 + 32.184) / 86400;
        var j2000 = jd_tt - 2451545.0
		var msd = (((j2000 - 4.5) / 1.027491252) + 44796.0 - 0.00096);
		var mtc = (24 * msd) % 24;
		$(".mtc").text(h_to_hms(mtc));
		 }
            $(function() {
                update();
				setInterval(update, 10);
			});
	
		
		
		
	</script>
</body>

</html>
