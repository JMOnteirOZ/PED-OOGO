<?php
    session_start();

    //Se mail está preenchido
    if(isset($_POST['login_mail']) && $_POST['login_mail']!="") {
        //Ligar à bd via PDO
        try{
            $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root', '');
        } catch (Exception $e) {
            die ("Não foi possível ligar ao servidor! " + $e);
        }

        //Passar valor dos campos do formulário
        $mail = $_POST['login_mail'];
        $pass = $_POST['login_pass'];

        //Preparar a query e executar (Ver se o user existe)
        $sql = $db->prepare("SELECT * FROM user WHERE userEmail = ?");
        $sql->execute([$mail]);

        //Se o user existir
        if ($sql->rowCount() == 1) {
            //Preparar a query e executar (Ver se a pass está certa)
            $sql = $db->prepare("SELECT * FROM user WHERE userEmail = ? AND userPassword = ? AND userID NOT IN (SELECT banneduser.userID FROM bannedUser)");
            $sql->execute([$mail, sha1($_POST['login_pass'])]);
            
            //Se estiver tudo bem
            if ($sql->rowCount() == 1) {
                $rs = $sql->fetchAll(PDO::FETCH_ASSOC);

                //Guardar variáveis de sessão:
                //ID && NOME && FOTO && ESTADO DA SESSÃO
                $_SESSION['uid'] = $rs[0]['userID'];
                $_SESSION['uname'] = $rs[0]['userName'];
                $_SESSION['session_status'] = 'on';
                header("location: ../index.php");
            } else {
                header("location: ../login.php");
            }
        } else {
            header("location: ../login.php");
        }
    } else {
        header("location: ../login.php");
    }
?>