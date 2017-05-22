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

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <a href="index.php">Home</a>
                <hr>
                <br>
                <br>
                <h4>Lista de Pending Profissionais</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Utilizador</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Ficheiros</th>
                        <th>Data</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        try {
                            $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root','');
                        } catch (Exception $e) {
                            die ("Não foi possível ligar ao servidor! " . $e);
                        }
            
                        // preparar a query
                        $sql = $db->prepare("SELECT * FROM `pendingorder`");

                        // executar a query
                        $sql->execute();
                        $rs = $sql->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($rs as $c) {
                            echo "<tr>";
                            echo "<td>".$c['userID']."</td>";
                            echo "<td>".$c['pendingCategoryID']."</td>";
                            echo "<td>".$c['pendingDescription']."</td>";
                            echo "<td>".$c['pendingFiles']."</td>";
                            echo "<td>".$c['pendingDate']."</td>";
                            echo "<td><a href='ver.php?id=".$c['id']."'><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></a></td>";
                            echo "<td><a href='apagar.php?id=".$c['id']."'><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    </body>
</html>