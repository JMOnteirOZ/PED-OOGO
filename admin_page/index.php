<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>OoGo - Admin</title>

        <!--Metadata-->
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffffff" />
        <meta name="Robots" ontent="NoIndex, NoFollow" />
        <meta name="revised" content="Joel Monteiro, 01/05/2017" />
        <meta name="keywords" content="HTML, CSS, JS, PHP, BootStrap, Ajax, jQuery" />
        <meta name="author" content="Joel Monteiro, José Ruivo, Diogo Delgado, João Santos, André Brito" />
        <meta name="description" content="Página da plataforma para admins da OoGo." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--Icons-->
        <link rel="manifest" href="assets/icon/manifest.json" />
        <link rel="mask-icon" href="assets/icon/safari-pinned-tab.svg" color="#5bbad5" />
        <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" href="assets/icon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/icon/favicon-16x16.png" sizes="16x16" />

		<!--Styles-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" href="../css/colors/green.css" id="color-skins" />

    </head>
    <body>

        <br>        <br>        <br>        <br>        <br>        <br>

        <div class="row">
            <div class="col-md-2"><h1 class="glyphicon glyphicon-record"></h1></div>
            <div class="col-md-8"><h1><a href="porder.php">Ver Pending Orders</a></h1></div>
        </div>

        <div class="row">
            <div class="col-md-2"><h1 class="glyphicon glyphicon-certificate"></h1></div>
            <div class="col-md-8"><h1><a href="ppro.php">Ver Pending Profissionais</a></h1></div>
        </div>

        <div class="row">
            <div class="col-md-2"><h1 class="glyphicon glyphicon-hand-right"></h1></div>
            <div class="col-md-8"><h1><a href="p.php">Ver Pending Block (?)</a></h1></div>
        </div>

        <div class="row">
            <div class="col-md-2"><i></i></div>
            <div class="col-md-8">
                <?php
                    session_start();

                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 1) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Order Aceite!</div>";
                    }
                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 2) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Order Apagada!</div>";
                    }
                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 3) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Profissional Aceite!</div>";
                    }
                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 4) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Profissional Apagado!</div>";
                    }
                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 5) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Order (?) Aceite!</div>";
                    }
                    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 6) {
                        echo "<br><div class=\"alert alert-success\" role=\"alert\">Order (?) Apagado!</div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>