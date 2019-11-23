<?php
 $id = trim($_GET['id']);
 
 if($id ){ // variaveis super globais
    include '../banco.php'; // ../ voltar um diretorio
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM pesquisador WHERE id=?;";
    $q = $pdo->prepare($sql); 
    $q->execute(array($id));
    Banco::desconectar();            
 }
 header("location: ../listPesquisador.php");
?>