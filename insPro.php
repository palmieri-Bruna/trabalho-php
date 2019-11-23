<?php
    $desc = trim($_POST['txtDesc']);
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtVal']);

    if(!empty($desc) && !empty($qtde) && !empty($valor)){
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Insert INTO produtos(descricao,quatidade,valor)
                 values(?, ?, ?);";
        $qry = $pdo->prepare($sql); 
        $qry->execute(array($desc, $qtde, $valor));
        Banco::desconectar();            
     }
     header("location: listProd.php");
?>