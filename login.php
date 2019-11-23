<?php
   $usr = trim($_POST['user']);
   $pwd = trim($_POST['pwd']);

  // echo "loguin: " . $usr;
  // echo "<br/>";
  // echo "passowrd: " . $pwd;
  
    include 'banco.php';
    // $id = trim($_GET['id']);
     $pdo = Banco::conectar();
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
     $sql = "Select * from usuarios WHERE user=?";
     $q =$pdo->prepare($sql);
     $q->execute (array($usr));
     $data = $q->fetch(PDO::FETCH_ASSOC);
     $senha =$data['pwd'];
     Banco::desconectar();
     if(md5($pwd)==$senha){
         session_start();
         $_SESSION['user'] = $usr;
         Header("Location: listProd.php");
        //echo "loguin: " . $usr;
       // echo "<br/>";
       // echo "passowrd: " . $passwor;

     }
    //else{ Header("Location: index.html"); }
?>

