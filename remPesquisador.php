<?php
 $id = trim($_POST['id']);
 $nome = trim($_POST['txtNome']);
 $idade = trim($_POST['txtIdade']);
 $forma= trim($_POST['txtForma']);

 if(!empty($id) ){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETR FROM pesquisador WHERE id=?;";
    $q = $pdo->prepare($sql); 
    $q->execute(array($nome, $idade, $forma));
    Banco::desconectar();            
 }
 header("location: listPesquisador.php");
?>
