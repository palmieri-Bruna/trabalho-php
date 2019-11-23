<?php
 $id = trim($_POST['id']);
 $desc = trim($_POST['txtDesc']);
 $qtd = trim($_POST['txtQtde']);
 $val= trim($_POST['txtVal']);

 if(!empty($id) ){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETR FROM produtos WHERE id=?;";
    $q = $pdo->prepare($sql); 
    $q->execute(array($desc, $qtd, $val));
    Banco::desconectar();            
 }
 header("location: listProd.php");
?>