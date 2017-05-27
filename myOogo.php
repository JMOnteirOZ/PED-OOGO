<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>My OoGo</title>

        <!--Metadata-->
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffffff" />
        <meta name="Robots" ontent="NoIndex, NoFollow" />
        <meta name="revised" content="Joel Monteiro, 19/05/2017" />
        <meta name="keywords" content="HTML, CSS, JS, PHP, BootStrap, Ajax, jQuery" />
        <meta name="author" content="Joel Monteiro, José Ruivo, Diogo Delgado, João Santos, André Brito" />
        <meta name="description" content="Página da plataforma OoGo. Esta página contem várias informações acerca da plataforma" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--Icons-->
        <link rel="manifest" href="assets/icon/manifest.json" />
        <link rel="mask-icon" href="assets/icon/safari-pinned-tab.svg" color="#5bbad5" />
        <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" href="assets/icon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/icon/favicon-16x16.png" sizes="16x16" />

		<!--Styles
        <link rel="stylesheet" href="css/base/normalize.css" />
        <link rel="stylesheet" href="css/base/main-scheme.css" />
        <link rel="stylesheet" href="css/base/font-scheme.css" />
        <link rel="stylesheet" href="css/base/color-scheme.css" />
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
        <link rel="stylesheet" href="css/vendor/font.css" />
        <link rel="stylesheet" href="css/vendor/font-icons.css" />
        -->



		<!--Styles-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/colors/green.css" id="color-skins" />

        <style>
            .col-half-offset {
                margin-left: 3%;
            }

            @media ((min-width: 768px) and (max-width: 992px) {
                .col-half-offset {
                    margin-left: 3%;
                }
            }
        </style>

		<!--Scripts-->
	</head>

    <body>

        <!--Header-->
        <header>
            <nav class="navbar navbar-default navbar-alt" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" rel="home" href="index.php"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-big"></a>
                    </div>
                    <span class="navbar-header"><a class="navbar-brand" rel="home" href="index.php"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-small"></a></span>
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav navbar-right">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-half-offset">
                                            E-mail
                                        </div>
                                        <div class="col-md-4 col-half-offset">
                                            Password
                                        </div>
                                    </div>
                                    <form class="form-signin" method="post" action=".php" name="loginform" id="loginform">
                                        <div class="row">
                                            <fieldset>
                                                <div class="col-md-4 col-sm-4 col-half-offset">
                                                    <input name="email" type="email" id="email" class="form-control" placeholder="Email" required autofocus />
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-half-offset">
                                                    <input name="password" type="password" id="password" class="form-control" placeholder="Password" required />
                                                </div>
                                            
                                                <div class="col-md-2 col-sm-2 col-half-offset">
                                                    <input type="submit" class="btn btn-primary btn-scroll" id="submit" value="Login" />
                                                </div>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </ul>
                        </div>
                </div>
            </nav>
        </header>

        <!--Slider-->
        <section id="home-revolution-slider">
            <div class="hero">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <li>
                                <img src="img/backgrounds/bg-3.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                                
                                <div class="tp-caption sft"
                                    data-x="center"
                                    data-y="260"
                                    style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <h2 class="home-heading op-3">Registo</h2>
                                </div>

                                <div class="tp-caption home-subheading sft"
                                    data-x="center"
                                    data-y="360"
                                    style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                    <div class="row">
                                            <form method="post" action=".php" class="signupform" name="signupform" id="signupform">
                                                <fieldset>
                                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                                        <input name="email" type="email" id="email" class="form-control" placeholder="E-Mail" required autofocus/>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                                        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required/>
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <div class="col-md-12 col-sm-12 col-half-offset">
                                                    <input type="submit" class="btn btn-primary btn-scroll" id="submit" value="Registar" />
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>	
                    </div>
                </div>
            </div>
        </section>


        <!--Wrapper-->
        <div class="site-wrapper content">

            <!--Footer-->
            <footer id="footer">
                <div class="footer-widgets">
                    <div class="container"> 
                            
                            <div class="col-md-3 col-sm-6 col-twitter">
                                <h4>Brevemente!</h4>
                                <div class="tweet"></div> 
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-footer">
                                <div class="subscription">
                                    <h4>Newsletter</h4>
                                    <p>Subscreva para receber noticias!</p> 
                                    
                                    <form action="php/subscribe-mailchimp.php" method="post" id="subscribe-form" role="form">
                                        <div class="form-validation alert"></div>
                                        <div class="form-group subscribe-form-input">
                                            <input type="email" name="email" id="subscribe-form-email" class="footer-subscribe-input" placeholder="Endereço e-mail" autocomplete="off" />      
                                            <button class="subscribe-form-submit btn-primary-full" data-loading-text="Loading...">Subscrever</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div> 
                            
                            <div class="col-md-3 col-sm-6 col-footer">
                                <div class="contact">
                                    <h4>Visite-nos!</h4>
                                    <ul class="contact-details">
                                        <li><p><i class="icon ion-ios-location-outline highlight"></i> 259 W 95th St(Coords), Lisboa, Portugal</p></li>
                                        <li><p><i class="icon ion-ios-telephone highlight"></i> +(351) 912 345 678</p></li>
                                        <li><p><i class="icon ion-android-mail highlight"></i> <a href="oogo@gmail.com">oogo@gmail.com</a></p></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-footer">
                                <h4><b style="color: #1aa99d;">O</b><b style="color: #17ad91;">o</b><b style="color: #27b578;">G</b><b style="color: #28b576;">o</b></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in euismod nisi.</p>
                                <p>Cras at ultrices erat, sed vulputate eros. Nunc at augue gravida est fermentum vulputate. Pellentesque et ipsum in dui malesuada tempus. Donec pellentesque.</p>
                            </div>
                             
                    </div>
                </div>
                
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
								
							<div class="col-md-6 col-sm-12">
								<p>Copyright © 2017 OoGo. Made by<a href="#team"> OoGo Team</a> with <i class="icon-heart"></i></p>
							</div>
							<div class="col-md-6 col-sm-12">
				                <ul id="social-icons">
						            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li> 	
                                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>  
                                    <li><a href="#"><i class="icon ion-social-skype"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-dropbox"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-vimeo"></i></a></li> 
                                    <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
                
			</footer>
            
        </div><!--End Wrapper-->

        <!-- jQuery -->
        <script src="js/plugins/jquery.min.js"></script>
        <script src="js/plugins/moderniz.min.js"></script>
        <script src="js/plugins/smoothscroll.min.js"></script>
        <script src="js/plugins/revslider.min.js"></script> 
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/waypoints.min.js"></script>
        <script src="js/plugins/parallax.min.js"></script>
        <script src="js/plugins/easign1.3.min.js"></script> 
        <script src="js/plugins/cubeportfolio.min.js"></script>
        <script src="js/plugins/owlcarousel.min.js"></script>
        <script src="js/plugins/tweetie.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="js/plugins/gmap3.min.js"></script>
        <script src="js/plugins/wow.min.js"></script>
        <script src="js/plugins/counterup.min.js"></script> 
		<script src="js/scripts.js"></script>  
    </body>
</html>