<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>OoGo - Registo</title>

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
            .rounded-border {
                border-radius:5px;
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
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
                                    <form class="form-signin" method="post" action="php/login.php" name="loginform" id="loginform">
                                        <div class="row">
                                            <fieldset>
                                                <div class="col-md-4 col-sm-4 col-half-offset">
                                                    <input name="login_mail" type="email" id="login_mail" class="form-control rounded-border" placeholder="Email" required autofocus />
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-half-offset">
                                                    <input name="login_pass" type="password" id="login_pass" class="form-control rounded-border" placeholder="Password" required />
                                                </div>
                                            
                                                <div class="col-md-2 col-sm-2 col-half-offset">
                                                    <input type="submit" class="btn btn-primary btn-xs" id="login_submit" value="Login" />
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

        <!-- Start Page Top -->  
        <section id="page-top" style="height:400px">
            <div class="hero">
            
                <img src="img/backgrounds/bg-login.jpg" alt="hero">

                <div class="page-top-title text-center">
                    <h2 class="white op-1">&nbsp&nbsp&nbsp&nbsp&nbsp Registo</h2>
                    <p class="home-subheading op-1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ainda não é um · Ooger · ? </p>
                </div>
                
            </div>
        </section>

        <!--Wrapper-->
        <div class="site-wrapper content">

            <!--Registo-->
            <section id ="blog" class="parallax-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="php/registo.php" class="signupform" name="signupform" id="signupform">
                                <fieldset>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_name" type="text" id="reg_name" class="form-control rounded-border" placeholder="Nome" required />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_mail" type="email" id="reg_mail" class="form-control rounded-border" placeholder="E-Mail" required autofocus />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_pass" type="password" id="reg_pass" class="form-control rounded-border" placeholder="Password" required />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_pass2" type="password" id="reg_pass2" class="form-control rounded-border" placeholder="Reinserir Password" required />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_addr" type="text" id="reg_addr" class="form-control rounded-border" placeholder="Morada" required />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <input name="reg_contact" type="password" id="reg_contact" class="form-control rounded-border" placeholder="Contacto" required />
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-half-offset">
                                        <!-- <input foto /> -->
                                    </div>
                                    <center>
                                        PROFISSIONAL ? <input type="checkbox" name="reg_pro" id="procheck" onclick="showMe('prodiv')">
                                    </center>
                                    <div id="prodiv" style="display:none">
                                        <div class="col-md-12 col-sm-12 col-half-offset">
                                            <select name="reg_category" id="reg_category" class="form-control rounded-border">
                                                <option value="" disabled selected hidden>Categoria</option>
                                                <?php
                                                    try{
                                                        $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root', '');
                                                    } catch (Exception $e) {
                                                        die ("Não foi possível ligar ao servidor! " + $e);
                                                    }
                                                    
                                                    $sql = $db->prepare("SELECT * FROM category");
                                                    $sql->execute();
                                                    $rs = $sql->fetchAll();
                                                    foreach($rs as $row) {
                                                        echo "<option>".$row['categoryName']."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-half-offset border">
                                            <textarea name="reg_description" cols="40" rows="3" id="reg_description" class="form-control rounded-border" placeholder="Descricao"></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-half-offset">
                                            <!-- <input ficheiro /> -->
                                        </div>
                                    </div>
                                </fieldset>
                                <br>
                                <div class="col-md-12 col-sm-12 col-half-offset">
                                    <input type="submit" class="btn btn-primary btn-scroll" id="submit" value="Registar" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

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

        <script>
            function showMe(div) {
                var chkbox = document.getElementById("procheck");
                var property = "none";
                if ($('#procheck').is(':checked')) {
                    property = "block";
                } else {
                    property = "none";
                }
                document.getElementById(div).style.display = property;
            };
        </script>

    </body>
</html>