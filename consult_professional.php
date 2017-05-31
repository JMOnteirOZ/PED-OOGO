<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>OoGo - Profissionais</title>

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
            .search[type=text] {
                width: 80%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('assets/image/searchicon.png');
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            .search[type=text]:focus {
                width: 100%;
            }

            .userpic {
                display: inline-block;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
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
            
                <img src="img/backgrounds/bg-pro.jpg" alt="hero">

                <div class="page-top-title text-center">
                    <h2 class="white op-1">Profissionais</h2>
                    <p class="home-subheading op-1">Confira os nossos · Profissionais · </p>
                </div>
                
            </div>
        </section>

        <!--Wrapper-->
        <div class="site-wrapper content">

            <!--Blog Theme Classic-->
            <section id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"> 

                            <div class="blog-post">
                                <div class="search">
                                    <form>
                                        <input class="search" type="text" name="search" id="search" onkeyup="Search()" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                            
                            <div id="pros">
                                <?php
                                    try {
                                        $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root', '');
                                    } catch (Exception $e) {
                                        die ("Não foi possível ligar ao servidor! " + $e);
                                    }
                                    
                                    $sql = $db->prepare("SELECT * FROM pro, user, category WHERE user.userID = pro.userID AND category.categoryID = pro.proCategoryID");
                                    $sql->execute();
                                    $rs = $sql->fetchAll();
                                    foreach($rs as $row) {
                                        $urlF = $row['userPhoto'];
                                        $url = substr($urlF, 3);
                                        echo '<div class="blog-post">';
                                            echo '<h3 class="blog-post-title"><a href="#">'.$row['userName'].'</a></h3>';                        
                                            echo '<ul class="blog-post-info">';
                                                echo '<li><a href="#"><i class="ion-folder"></i> '.$row['categoryName'].'</a></li>';
                                                echo '<li><a href="#"><i class="ion-chatboxes"></i> 0 Reviews</a></li>';
                                            echo '</ul>';
                                            echo '<div class="blog-post-date">';
                                                echo '<div>';
                                                if (isset($row['userPhoto'])) {
                                                    echo '<img src="'.$url.'" class="userpic">';
                                                } else {
                                                    echo '<img src="img/blog/avatar.jpg" class="userpic">';
                                                }
                                                echo '</div>';
                                            echo '</div><br>';
                                            echo '<p>'.$row['proDescription'].'<p>';
                                            if (isset($_SESSION['uname'])) {
                                                echo '<a class="btn btn-primary btn-xs" onclick="Pro()">Requisitar Profissional</a>';
                                            }
                                        echo '</div>';
                                    }
                                ?>
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

        <script>
            function Search() {
                var input, filter, dparent, dchilds, dpro;
                input = document.getElementById("search");
                filter = input.value.toUpperCase();
                dparent = document.getElementById("pros");
                dchilds = dparent.getElementsByClassName("blog-post");
                
                for (i=0; i<dchilds.length; i++) {
                    dpro = dchilds[i].getElementsByTagName("a")[0];
                    if (dpro.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        dchilds[i].style.display = "";
                    } else {
                        dchilds[i].style.display = "none";
                    }
                }
            }
            function Pro() {
                alert("Funcionalidade não está pronta");
            }
        </script>

    </body>
</html>