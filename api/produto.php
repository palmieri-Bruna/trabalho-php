<?php
 $id = trim($_GET['id']);
 //$desc = trim($_POST['txtDesc']);
 //$qtd = trim($_POST['txtQtde']);
 //$val= trim($_POST['txtVal']);

 if($id ){ // variaveis super globais
    include '../banco.php'; // ../ voltar um diretorio
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM produtos WHERE id=?;";
    $q = $pdo->prepare($sql); 
    $q->execute(array($id));
    Banco::desconectar();            
 }
 header("location: ../listProd.php");
?>