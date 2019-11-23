<?php
 $id = trim($_POST['id']);
 $nome = trim($_POST['txtNome']);
 $idade = trim($_POST['txtIdade']);
 $forma= trim($_POST['txtForma']);

 if(!empty($nome && !empty($idade) && !empty($forma)) ){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE pesquisador SET nome=?, idade=?,  formado=?  WHERE id=? ;";
   // $sql = $sql + "WHERE id=? ;" ;
    $q = $pdo->prepare($sql); 
    $q->execute(array($nome, $idade, $forma,$id));
    Banco::desconectar();            
 }
 header("location: listPesquisador.php");