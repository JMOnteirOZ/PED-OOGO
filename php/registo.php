<?php
    //Ligar à bd via PDO
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root','');
    } catch (Exception $e) {
        die ("Não foi possível ligar ao servidor! " . $e);
    }

    //Passar valor dos campos do formulário
    $name = $_POST['reg_name'];
    $mail = $_POST['reg_mail'];
    $pass = $_POST['reg_pass'];
    $pass2 = $_POST['reg_pass2'];
    $addr = $_POST['reg_addr'];
    $contact = $_POST['reg_contact'];

    //Preparar url e copiar a foto para a directoria
    if (isset($_FILES['reg_pic']['name'])) {
        $uploadPicDir = '../img/images/user/';
        $uploadPic = $uploadPicDir.basename($_FILES['reg_pic']['name']);
        move_uploaded_file($_FILES['reg_pic']['tmp_name'], $uploadPic);
    }

    //Se for pro então passa os valores dos pros também
    if (isset($_POST['reg_pro'])) {
        $category = $_POST['reg_category'];
        $description = $_POST['reg_description'];

        //Preparar url e copiar o ficheiro para a directoria
        if (isset($_FILES['reg_file'])) {
            $uploadFileDir = '../img/images/pro/';
            $uploadFile = $uploadFileDir.basename($_FILES['reg_file']['name']);

            move_uploaded_file($_FILES['reg_file']['tmp_name'], $uploadFile);
        }
    }

    //Preparar a query e executar (Inserir user)
    $sql = $db->prepare("INSERT INTO user (userName, userEmail, userPassword, userAddress, userContact, userPhoto) VALUES (?,?,?,?,?,?)");
    $sql->execute([$name, $mail, sha1($_POST['reg_pass']), $addr, $contact, $uploadPic]);

    if (isset($_POST['reg_pro'])) {
        //Preparar a query e executar (Seleccionar o ID da categoria)
        $sql = $db->prepare("SELECT categoryID FROM category WHERE categoryName = ?");
        $sql->execute([$category]);
        $rs = $sql->fetchAll(PDO::FETCH_ASSOC);
        $num_category = $rs[0]['categoryID'];
        
        //Preparar a query e executar (Seleccionar o ID do user inserido)
        $sql = $db->prepare("SELECT userID FROM user WHERE userName = ?");
        $sql->execute([$name]);
        $rs = $sql->fetchAll(PDO::FETCH_ASSOC);
        $num_user = $rs[0]['userID'];

        //Preparar a query e executar (Inserir pending profissional)
        $sql = $db->prepare("INSERT INTO pendingpro (pendingCategoryID, pendingDescription, userID, pendingFile) VALUES (?,?,?,?)");
        $sql->execute([$num_category, $description, $num_user, $uploadFile]);
    }
    
    header("location: ../login.php");
?>