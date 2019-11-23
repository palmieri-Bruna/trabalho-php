<?php
 $id = trim($_POST['id']);
 $desc = trim($_POST['txtDesc']);
 $qtd = trim($_POST['txtQtd']);
 $val= trim($_POST['txtVal']);

 if(!empty($desc && !empty($qtd) && !empty($val)) ){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produtos SET descricao=?, quatidade=?,  valor=?  WHERE id=? ;";
   // $sql = $sql + "WHERE id=? ;" ;
    $q = $pdo->prepare($sql); 
    $q->execute(array($desc, $qtd, $val,$id));
    Banco::desconectar();            
 }
 header("location: listProd.php");
