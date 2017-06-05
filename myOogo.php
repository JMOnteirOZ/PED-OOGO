<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>my-OoGo</title>

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

		<!--Styles-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
  		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="css/main-scheme.css" type="text/css" />
        <link rel="stylesheet" href="css/colors/green.css" id="color-skins" />

        <style>
            .years {
                font-size: 21px;
                fill: #aaa;
            }

            .tooltip {
                position: absolute;
                top: 100px;
                left: 100px;
                -moz-border-radius:5px;
                border-radius: 5px;
                border: 2px solid #000;
                /* background: #222222; */
                background: #fff;
                opacity: .9;
                /* color: #eeeeee; */
                color: black;
                padding: 10px;
                width: 300px;
                font-size: 12px;
                z-index: 10;
            }

            .tooltip .title {
                font-size: 13px;
            }

            .tooltip .name {
                font-weight:bold;
            }
        </style>
		
        <!--Scripts-->
        <script src="js/d3/libs/modernizr-2.0.6.min.js"></script>
        
	</head>

    <body>
        
        <!--Header-->
        <header>
            <nav class="navbar navbar-default navbar-alt" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle Activation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand to-top" rel="home" href="index.php"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-big"></a>
                    </div>
                    <span class="navbar-header"><a class="navbar-brand to-top" rel="home" href="index.php"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-small"></a></span>
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav navbar-right">

                                <li class="to-section"><a href="index.php#">Home</a></li>
                                <li class="to-section"><a href="index.php#about">Sobre</a></li>

                                <li class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown">Pedidos<b class="caret"></b></span>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="consult_order.php">Consultar Pedido</a></li>
                                        <li><a href="perform_order.php">Efectuar Pedido</a></li>
                                    </ul>
                                </li>

                                <li class="to-section"><a href="consult_professional.php">Profissionais</a></li>
                                <li class="to-section"><a href="index.php#contact">Contactos</a></li>
                                
                                <?php
                                    if (isset($_SESSION['uname'])) {
                                        echo '<li class="to-section"><a href="myoogo.php">A minha conta</a></li>';
                                        echo '<li class="to-section"><a href="php/logout.php"><img src="assets/image/logout.png"></a></li>';
                                    } else {
                                        echo '<li class="to-section"><a href="login.php">Login/Registo</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                </div>
            </nav>
        </header>

        <!-- Start Page Top -->  
        <section id="page-top" style="height:400px">
            <div class="hero">
            
                <img src="img/backgrounds/bg-myoogo.jpg" alt="hero">

                <div class="page-top-title text-center">
                    <h2 class="white op-1"><?php echo "" .$_SESSION['uname']; ?></h2>
                </div>
                
            </div>
        </section>

        <!--Wrapper-->
        <div class="site-wrapper content">

            <!--Blog Theme Classic-->
            <section id="blog">
                <div id="container" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="main" role="main">
                                <div id="vis"></div>
                                <div>
                                    <p style="color: #28b576;">Pedidos Aceites</p>
                                    <p style="color: #1aa99d;">Pedidos Feitos por mim</p>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <hr>
                </div>
            </section>
            <!-- End Blog Classic -->

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
                                
                                <!-- Ainda não foi feito o subscribe mail -->
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
                                    <li><p><i class="icon ion-ios-location-outline highlight"></i> Lisboa, Portugal</p></li>
                                    <li><p><i class="icon ion-ios-telephone highlight"></i> +(351) 912 345 678</p></li>
                                    <li><p><i class="icon ion-android-mail highlight"></i> <a href="oogopt@gmail.com">oogopt@gmail.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-footer">
                            <h4><center><b style="color: #1aa99d;">O</b><b style="color: #17ad91;">o</b><b style="color: #27b578;">G</b><b style="color: #28b576;">o</b></center></h4>
                            <div class="img">
                                <center><img src="assets/image/oogo_about.png" alt="Oogers" /></center>
                            </div>
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
						            <li><a href="http://www.twitter.com"><i class="icon ion-social-twitter"></i></a></li> 	
                                    <li><a href="http://www.facebook.com/oogopt/"><i class="icon ion-social-facebook"></i></a></li> 
                                    <li><a href="http://www.googleplus.com"><i class="icon ion-social-googleplus"></i></a></li> 
                                    <li><a href="http://www.instagram.com"><i class="icon ion-social-instagram-outline"></i></a></li> 
                                    <li><a href="http://www.pinterest.com"><i class="icon ion-social-pinterest"></i></a></li>  
                                    <li><a href="http://www.skype.com"><i class="icon ion-social-skype"></i></a></li> 
                                    <li><a href="http://www.linkedin.com"><i class="icon ion-social-linkedin"></i></a></li> 
                                    <li><a href="http://www.dropbox.com"><i class="icon ion-social-dropbox"></i></a></li> 
                                    <li><a href="http://www.vimeo.com"><i class="icon ion-social-vimeo"></i></a></li> 
                                    <li><a href="https://www.youtube.com/channel/UCHRkDjznYG1AjQhicBBebcw"><i class="icon ion-social-youtube"></i></a></li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
                
			</footer>
            
            <!--Back To Top-->
            <a id="back-to-top"><i class="icon ion-chevron-up"></i></a>

        </div><!--End Wrapper-->

        <!-- jQuery -->
        <script src="js/plugins/jquery.min.js"></script>
        <script src="js/plugins/smoothscroll.min.js"></script>
        <script src="js/plugins/revslider.min.js"></script> 
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/waypoints.min.js"></script>
        <script src="js/plugins/parallax.min.js"></script>
        <script src="js/plugins/easign1.3.min.js"></script>
        <script src="js/plugins/moderniz.min.js"></script>
        <script src="js/plugins/cubeportfolio.min.js"></script>
        <script src="js/plugins/owlcarousel.min.js"></script>
        <script src="js/plugins/tweetie.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="js/plugins/gmap3.min.js"></script>
        <script src="js/plugins/wow.min.js"></script>
        <script src="js/plugins/counterup.min.js"></script>  
		<script src="js/plugins/masonry.js"></script>   
        <script src="js/scripts.js"></script> 

        <script>window.jQuery || document.write('<script src="js/d3/libs/jquery-1.6.2.min.js"><\/script>')</script>
        <script defer src="js/d3/plugins.js"></script>
        <script defer src="js/d3/script.js"></script>
        <script src="js/d3/CustomTooltip.js"></script>
        <script src="js/d3/libs/d3.js"></script>
        <script src="js/d3/vis.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).ready(function() {
                    $('#view_selection a').click(function() {
                        var view_type = $(this).attr('id');
                        $('#view_selection a').removeClass('active');
                        $(this).toggleClass('active');
                        toggle_view(view_type);
                        return false;
                    });
                });
            });
        </script>

    </body>
</html>