<?php
    include 'banco.php';
     $id = trim($_GET['id']);
     $pdo = Banco::conectar();
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM produtos WHERE id=?";
     $q =$pdo->prepare($sql);
     $q->execute (array($id));
     $data = $q->fetch(PDO::FETCH_ASSOC);
     $desc = $data['descricao'];
     $qtde = $data['quatidade'];
     $val = $data['valor'];
     Banco::desconectar();
?>
<html>
  <head>
  <style>
   body{
    background color: blue;

   }
   </style>
   <meta charset="UTF-8">
   <title>Remoçaõ de Produtos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body class="container">
      <h2>Remover Produto</h2>
      <form id="frmRemPro" name="frmRemPro" method="POST" action="remPro.php">
          <div class="form-group">
              <label for="lblTd"></label>
              <span class="textBold">ID: </span>
              <span class="textNormal"><?php echo $id?> </span>
              </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
            </div>
            <div class="form-group">
              <label for="lblDesc">
                 <span class="textBold">Descrição:</span>
                 <span class="textNormal"><?php echo $desc?> </span>
               </label>  
            </div><div class="form-group">
              <label for="lblQtde">
                 <span class="textBold">Quantidade:</span>
                 <span class="textNormal"><?php echo $qtde?> </span>
               </label>  
            </div>
            <div class="form-group">
              <label for="lblVal">
                 <span class="textBold">Valor: </span>
                 <span class="textNormal"><?php echo $val?> </span>
               </label>  
            </div>
            <input type="submit" name="btRem" id="btRem" class="btn btn-danger"
            value="Remover"/>
            <input type="button" name="btVoltar" id="btVoltar" class="btn btn-info"
            value="Voltar" onclick="javascript: location.href='listProd.php'">
    </form>
</body>
</html>
