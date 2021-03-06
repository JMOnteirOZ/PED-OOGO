<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>OoGo</title>

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
                        <a class="navbar-brand to-top" rel="home" href="#"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-big"></a>
                    </div>
                    <span class="navbar-header"><a class="navbar-brand to-top" rel="home" href="#"><img src="assets/icon/icon_small.png" alt="OoGo" width="80" height="80" class="logo-small"></a></span>
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav navbar-right">

                                <li><a class="to-top">Home</a></li>
                                <li class="to-section"><a href="#about">Sobre</a></li>

                                <li class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown">Pedidos<b class="caret"></b></span>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="consult_order.php">Consultar Pedido</a></li>
                                        <li><a href="perform_order.php">Efectuar Pedido</a></li>
                                    </ul>
                                </li>

                                <li class="to-section"><a href="consult_professional.php">Profissionais</a></li>
                                <li class="to-section"><a href="#contact">Contactos</a></li>
                                
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

        <!--Slider-->
        <section id="home-revolution-slider">
            <div class="hero">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-1.jpg" data-delay="10000"  data-saveperformance="on" data-title="OoGo">
                                <img src="img/backgrounds/bg-1.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                    <!-- Home Heading -->
                                    <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <h2 class="home-heading op-3">De si, Para si</h2>
                                    </div>
                                    <!-- Home Subheading -->
                                    <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <div class="op-3">A OoGo é a primeira comunidade de venda de favores</div>
                                    </div>
                                    <!-- Home Button -->
                                    <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <div class="op-3"><a href="#video-section" class="btn btn-primary btn-scroll">Veja a Demo da Aplicação</a></div>
                                    </div>
                            </li>
                            

                            <!-- SLIDE 2 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-2.jpg" data-delay="10000"  data-saveperformance="on" data-title="Visão">
                                <img src="img/backgrounds/bg-2.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                    <!-- Home Heading -->
                                    <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <h2 class="home-heading op-2">Visão</h2>
                                    </div>
                                    <!-- Home Subheading -->
                                    <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <div class="op-2">A Oogo pretende que a sua aplicação atinja a marca dos 50.000 Oogers ativos até 2020 em Portugal</div>
                                    </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-3.jpg" data-delay="10000"  data-saveperformance="on" data-title="Missão">
                                <img src="img/backgrounds/bg-3.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                    <!-- Home Heading -->
                                    <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <h2 class="home-heading op-1">Missão</h2>
                                    </div>
                                    <!-- Home Subheading -->
                                    <div class="tp-caption home-subheading sft "
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                                        <div class="op-1">A missão OoGo é devolver ao utilizador o tempo despendido em tarefas do quotidiano para que este possa utilizá-lo da melhor maneira!</div>
                                    </div>
                            </li>

                        </ul>
                        <div class="tp-bannertimer"></div>	
                    </div>

                    <div class="home-bottom">
                        <div class="container text-center">
                            <div class="move bounce">
                                <a href="#features" class="ion-ios-arrow-down btn-scroll"></a>
                            </div>  
                        </div> 
                    </div>

                </div>
            </div>
        </section>

        <!--Wrapper-->
        <div class="site-wrapper content">

            <!--Values-->
            <section id="features">
                <div class="container">                      
                    <div class="row features-row wow fadeInUp">
                        
                        <div class="col-md-4 col-sm-12 feature-column">
                            <div class="feature-icon">
                                <i><img src="assets/image/1-conectividade.png" width="80" alt="Conectividade"/></i>
                            </div>
                            <div class="feature-info">
                                <h4>Conectividade</h4>
                                <p class="feature-description">&nbsp; <i style="color: #1aab99;">Conectividade</i> é regra na sociedade actual.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 feature-column">
                            <div class="feature-icon">
                                <i><img src="assets/image/2-eficiencia.png" width="80" alt="Eficiência"/></i>
                            </div>
                            <div class="feature-info">
                                <h4>Eficiência</h4>
                                <p class="feature-description">&nbsp; Tempo + <i style="color: #1eaf8a;">Eficiência</i> = dinheiro.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 feature-column">
                            <div class="feature-icon">
                                <i><img src="assets/image/3-inovacao.png" width="80" alt="Inovação"/></i>
                            </div>
                            <div class="feature-info">
                                <h4>Inovação</h4>
                                <p class="feature-description">&nbsp; "A necessidade é a mãe da <i style="color: #27b678;">Inovação</i>." - Platão</p>
                            </div>
                        </div>
                                
                    </div>   
                    
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-md-offset-2 col-sm-12 feature-column">
                            <div class="feature-icon">
                                <i><img src="assets/image/4-colaboracao_simplicidade.png" width="80" alt="Colaboração e Simplicidade"/></i>
                            </div>
                            <div class="feature-info">
                                <h4>Colaboração e Simplicidade</h4>
                                <p class="feature-description">&nbsp; Cada vez se valoriza mais a <i style="color: #1aab99;">Simplicidade</i> neste mundo complexo.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-0 col-sm-12 feature-column">
                            <div class="feature-icon">
                                <i><img src="assets/image/5-profissionalismo.png" width="80" alt="Profissionalismo"/></i>
                            </div>
                            <div class="feature-info">
                                <h4>Profissionalismo</h4>
                                <p class="feature-description">&nbsp; <i style="color: #27b678;">Profissionalismo</i> acima de tudo.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--About-->
            <section id="about" class="parallax-section-1">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 text-left about-text">
                            <h2 class="content-title white wow fadeInUp">Sobre nós</h2>
                            <p class="grey wow fadeInUp">A Oogo é constituida por 5 alunos finalistas da licenciatura de Informática e Gestão de Empresas no ISCTE-IUL.</p>
                            <p class="grey wow fadeInUp">No âmbito da unidade curricular de Projecto de Empresa Digital em conjunto com Sistemas Informáticos de Apoio à Decisão II, foi nos pedido que desenvolvêssemos um projecto de uma empresa tecnológica.</p>
                            <p class="grey wow fadeInUp">Assim nasceu a Oogo! Uma empresa que vai ao encontro das necessidades dos seus Oogers permitindo a criação de novas oportunidades e a rentabilização do tempo numa sociedade que cada vez mais se queixa por falta do mesmo.</p>
                        </div>
                        
                        <div class="col-md-6 wow fadeInUp">
                            <div class="video-container" style="margin: 0 auto; width: 700px; height: 370px;">
                                <video style="width: 700px; height: 375px; object-fit: fill;" autoplay controls loop>
                                    <source src="assets/video/about.mp4" type="video/mp4">
                                    <source src="assets/video/about.ogg" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video> 

                            </div>
                        </div>

                	</div>
                </div>
            </section>

            <!--Team-->
            <section id="team">
                <div class="container"> 
                    
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h3 class="section-title">A Equipa</h3> 
                        <p class="subheading">Equipa proactiva cheia de <span class="highlight">ideias</span> que adora <span class="highlight">desafios</span>.</p>
                    </div>
                    
                    <div class="row center">
                        
                        <!--João Santos-->
                        <div class="col-md-2 col-sm-4 col-half-offset team-member">
                            <div class="effect effects wow fadeInUp">
                                <div class="img">
                                    <img src="img/team-JS.png" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info wow fadeInUp">
                                <h4>João Santos</h4>
                                <h5 class="highlight color1"><i style="color: #1aab99;">CEO / Marketing e Comunicação</i></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.</p>
                            </div>
                        </div>            
                        
                        <!--Diogo Delgado-->
                        <div class="col-md-2 col-sm-4 col-half-offset team-member">
                            <div class="effect effects wow fadeInUp">
                                <div class="img">
                                    <img src="img/team-DD.png" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info wow fadeInUp">
                                <h4>Diogo Delgado</h4>
                                <h5 class="highlight color2"><i style="color: #17ad91;">COO / Estratégia e Empreendedorismo</i></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.</p>
                            </div>
                        </div>     

                        <!--André Brito-->
                        <div class="col-md-2 col-sm-4 col-half-offset team-member">
                            <div class="effect effects wow fadeInUp">
                                <div class="img">
                                    <img src="img/team-AB.png" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info wow fadeInUp">
                                <h4>André Brito</h4>
                                <h5 class="highlight color3"><i style="color: #1eb08a;">CFO / Financeiro</i></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.</p>
                            </div>
                        </div>      

                        <!--José Ruivo-->
                        <div class="col-md-2 col-sm-4 col-half-offset team-member">
                            <div class="effect effects wow fadeInUp">
                                <div class="img">
                                    <img src="img/team-JR.png" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info wow fadeInUp">
                                <h4>José Ruivo</h4>
                                <h5 class="highlight color4"><i style="color: #20b284;">CPO / Android Developer</i></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.</p>
                            </div>
                        </div>  
                        
                        <!--Joel Monteiro-->
                        <div class="col-md-2 col-sm-4 col-half-offset team-member">
                            <div class="effect effects wow fadeInUp">
                                <div class="img">
                                    <img src="img/team-JM.png" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info wow fadeInUp">
                                <h4>Joel Monteiro</h4>
                                <h5 class="highlight color5"><i style="color: #27b578;">CTO / Web Developer</i></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa.</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>

            <!--Get Connected-->
            <section id="get-connected" class="parallax-section-4">
                <div class="container"> 
                	
                    <div class="col-md-12 text-center">
                        <h3 class="section-title white wow fadeInUp">Ligue-se a nós</h3> 
                        <p class="subheading grey wow fadeInUp">Siga-nos nas <span class="highlight">redes sociais</span>!</p>
                    </div>
                    
                    <div class="row text-center wow fadeInUp">
                    	<ul class="connected-icons text-center">
                            
 							<li class="connected-icon">
                                <a target="_blank" href="http://www.facebook.com/oogopt/">
                                    <span class="icon icon-social-facebook size-6x" style="color:#1caa9a"></span>
                                    <h4 class="white">Facebook</h4>
                                    <span class="grey">Be Our Friend</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon">
                                <a target="_blank" href="https://www.twitter.com/">
                                    <span class="icon icon-social-twitter size-6x" style="color:#18ac94"></span>
                                    <h4 class="white">Twitter</h4>
                                    <span class="grey">Follow Us</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon">
                                <a target="_blank" href="https://www.youtube.com/channel/UCHRkDjznYG1AjQhicBBebcw">
                                    <span class="icon icon-social-youtube size-6x" style="color:#19ae8e"></span>
                                    <h4 class="white">Youtube</h4>
                                    <span class="grey">Our New Videos</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon">
                                <a target="_blank" href="https://www.instagram.com/">
                                    <span class="icon ion-social-instagram-outline size-6x" style="color:#20b187"></span>
                                    <h4 class="white">Instagram</h4>
                                    <span class="grey">See Our Images</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon">
                                <a target="_blank" href="https://www.pinterest.com/">
                                    <span class="icon ion-social-pinterest-outline size-6x" style="color:#21b380"></span>
                                    <h4 class="white">Pinterest</h4>
                                    <span class="grey">Check Our Identity</span>
                                </a>
                            </li>
                            
                    	</ul>        
                	</div>  
                    
                </div>
            </section>

            <!--Contacts-->
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title wow fadeInUp">Tem Questões?</h2> 
                        </div>
                        
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <div id="message"></div>
                            <!-- Ainda não foi feito o contact form -->
                            <form method="post" action="php/contact-form.php" name="contactform" id="contactform">
                                <fieldset>
                                    <div class="col-md-4 col-sm-2">
                                        <input name="name" type="text" id="name" placeholder="Nome"/>
                                    </div>                                    
                                    <div class="col-md-4 col-sm-2">
                                        <input name="email" type="text" id="email" placeholder="Email"/>
                                    </div>                                    
                                    <div class="col-md-4 col-sm-2">
                                        <input name="subject" type="text" id="subject" placeholder="Título"/>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Mensagem"></textarea>
                                </fieldset>
                                <input type="submit" class="submit" id="submit" value="Enviar Mensagem" />
                            </form>
                        </div>

                    </div>
                </div>
            </section>

            <!--Demo-->     
            <section id="video-section" class="parallax-section-8">
                <div class="container">
                    <div class="row text-center">
                             
                            <div class="col-md-12 text-center">
                                <h3 class="white wow fadeInUp">Demo da aplicação</h3>
                                <p class="subheading grey wow fadeInUp"></p>
                            </div>
                            
                            <div id="video-lightbox" class="col-md-12 text-center">
                                <ul>
                                    <li class="cbp-item">
                                        <a class="cbp-lightbox" href="https://www.youtube.com/watch?v=eFJ5PsVc0YY"><span class="play play-video wow fadeInUp">Play Video</span></a>
                                    </li>
                                </ul>
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