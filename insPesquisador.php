<?php
    $nome = trim($_POST['txtNome']);
    $idade = trim($_POST['txtIdade']);
    $forma = trim($_POST['txtForma']);

    if(!empty($nome) && !empty($idade) && !empty($forma)){
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Insert INTO pesquisador(nome,idade,formado)
                 values(?, ?, ?);";
        $qry = $pdo->prepare($sql); 
        $qry->execute(array($nome, $idade, $forma));
        Banco::desconectar();            
     }
     header("location: listPesquisador.php");
?>