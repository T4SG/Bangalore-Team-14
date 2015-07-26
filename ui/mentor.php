<?php

  require('connectme.php');

 // $user=$_SESSION['user']; ?> 

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open

+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" 

alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"></div>
								<div class="site-slogan"></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile 

display -->
										<div class="navbar-header">
											<button type="button" 

class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-

only">Toggle navigation</span>
												<span class="icon-

bar"></span>
												<span class="icon-

bar"></span>
												<span class="icon-

bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and 

other content for toggling -->
										<div class="collapse navbar-collapse 

scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-

right">
												<li class="active"><a 

href="#banner">Home</a></li>
												<li><a 

href="#about"></a></li>
												<li><a 

href="#services">Services</a></li>
												<li><a 

href="#portfolio">Portfolio</a></li>
												<li><a 

href="#clients">Clients</a></li>
												<li><a 

href="#contact">Contact</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
	</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
			<div id="banner">
		<div></div>
			<div>
				<div class="container">
					<div class="row">
					  <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-

effect="fadeIn">
							<h1 class="text-center"> <span>Dream School Foundation</span></h1>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">Mentor</h1>
						
						<div class="space">
						  <div align="center">
						    <table width="340" border="1" cellspacing="5" cellpadding="5">
                              <tr>
                                <td><div align="center"></div>XYZ</td>
                              </tr>
                              <tr>
                                <td></td>
                              </tr>
                              <tr>
                                <td><div align="center"></div>B.E</td>
                              </tr>
                              <tr>
                                <td></td>
                              </tr>
                              <tr>
                                <td><div align="center"></div>Hyderabad</td>
                              </tr>
                                            
                                                      </table>
					      </div>
					  </div>
						<div class="row">
							<p>
  <!--<div class="col-md-6">
								<img src="images/section-image-1.png" alt="">
								<div class="space"></div>
							</div> -->
							  
							  
  </p></p>
							<div align="center">History
								<center>
							  <table width="310" border="1" cellspacing="5" cellpadding="5" >
                                
                                <tr>
                                  <th width="24" scope="col">date</th>
                                  <th width="53" scope="col">location</th>
                                  <th width="24" scope="col">Eagerness</th>
                                  <th width="53" scope="col">Confidence</th>
                                  <th width="175" scope="col">Academics</a> </th>
                                  <th width="175" scope="col"><a>leadership</a> </th>
                                  <th width="175" scope="col"><a>reading skills</a> </th>
                                  <th width="175" scope="col"><a>sports</a> </th>  
                                </tr>
                                
                                <?php $check = mysql_query("SELECT * FROM feedback") or die (mysql_error());

                                      while($row=mysql_fetch_array($check)){?>
                                <tr>
                                  <td style="text-align:center"><?php echo $row['date'];?></td>
                                  <td><?php echo $row['location'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd1'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd2'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd3'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd4'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd5'];?></td>
                                  <td style="text-align:center"><?php echo $row['fd6'];?></td>                                  
                                </tr>
                               <?php }?>
                                
                                                          </table>
                                                      </center>
						  </div>
							<p>&nbsp;</p>
					  </div>
				  </div>
						<div class="space">
						  <p align="center"> Next Schedule 	 <?php $check = mysql_query("SELECT * FROM meeting") or die (mysql_error());

                                      while($row=mysql_fetch_array($check)){ 

                                      echo $row['location']+""+$row['meeting_date'];}  ?> 	</p>
					</div>
						  
						  <div align="center">
						    <table width="343" border="0" cellspacing="5" cellpadding="5">
                              <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                                                      </table>
					      </div>
						  <p>&nbsp; </p>
						  <p>&nbsp;</p>
						  <p>
						  &nbsp;</p>
						</div>
						<h2></h2>
						<div class="row">
						  <div class="col-md-6"></div>
				  </div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <!-- section end -->
        <!-- footer start -->
        <!-- ================ -->
<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
  <div class="footer section"></div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
				  <div class="row"></div>
				</div>
			</div>
			<!-- .subfooter end -->

	</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>