<?php
    include "date.php";
    session_start();

    //Ligar à bd via PDO
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=oogo-testes;charset=utf8mb4;', 'root','');
    } catch (Exception $e) {
        die ("Não foi possível ligar ao servidor! " . $e);
    }

    //Passar valor dos campos do formulário
    $id = $_SESSION['uid'];
    $title = $_POST['perform_title'];
    $description = $_POST['perform_desc'];
    $category = $_POST['perform_category'];
    $location = $_POST['perform_location'];
    $price = $_POST['perform_price'];
    $dateOpen = new DateTime(date("Y-m-d h:i:s"));
    $dateClose = $_POST['perform_dclose'];
    if (isset($_POST['perform_state'])) {
        $state = 'destaque';
    } else {
        $state = 'NULL';
    }
    
    //Preparar url e copiar a foto para a directoria
    if (isset($_FILES['perform_pic']['name'])) {
        $uploadPicDir = '../img/images/order/';
        $uploadPic = $uploadPicDir.basename($_FILES['perform_pic']['name']);
        move_uploaded_file($_FILES['perform_pic']['tmp_name'], $uploadPic);
    }

    //Sacar as palavras banidas da bd
    $sql = $db->prepare("SELECT * FROM bannedwords");
    $sql->execute();
    $rs = $sql->fetchAll();

    //Mete-las num array
    $bad_words = array();
    foreach($rs as $row) {
        $bad_words[] = $row['bannedWord'];
    }

    //E ver se a descrição contem alguma
    $bool = false;
    foreach ($bad_words as $url) {
        if (strpos($description, $url) !== FALSE) {
            $bool = true;
        }
    }

    //Preparar a query e executar (Seleccionar o ID da categoria)
    $sql = $db->prepare("SELECT categoryID FROM category WHERE categoryName = ?");
    $sql->execute([$category]);
    $rs = $sql->fetchAll(PDO::FETCH_ASSOC);
    $num_category = $rs[0]['categoryID'];

    $dateOpen = $dateOpen->format('Y-m-d h:i:s'); 

    //Preparar a query e executar (Inserir order)
    $sql = $db->prepare("INSERT INTO `order` (orderTitle, orderDescription, categoryID, orderLocation, orderPrice, orderDateOpen, orderDateClose, orderState, userID, orderImage) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $sql->execute([$title, $description, $num_category, $location, $price, $dateOpen, $dateClose, $state, $id, $uploadPic]);

    if ($bool == true) {
        //Preparar a query e executar (Seleccionar o ID da order inserida)
        $sql = $db->prepare("SELECT orderID FROM `order` WHERE orderTitle = ?");
        $sql->execute([$title]);
        $rs = $sql->fetchAll(PDO::FETCH_ASSOC);
        $num_order = $rs[0]['orderID'];

        //Preparar a query e executar (Inserir pending order)
        $sql = $db->prepare("INSERT INTO bannedorder (orderID, bannedReason) VALUES (?,?)");
        $sql->execute([$num_order, "BAD WORD"]);
    }

    header("location: ../consult_order.php");
?>