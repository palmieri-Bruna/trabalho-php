<?php
    include 'banco.php';
     $id = trim($_GET['id']);
     $pdo = Banco::conectar();
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
     $sql = "Select * from produtos WHERE id=?";
     $q =$pdo->prepare($sql);
     $q->execute (array($id));
     $data = $q->fetch(PDO::FETCH_ASSOC);
     $desc = $data['descricao'];
     $qtd = $data['quatidade'];
     $val = $data['valor'];
     Banco::desconectar();
?>

<html>
  
  <head>
    
   <meta charset="UTF-8">
   <title>Edição de Produtos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body class="conteiner">
     <h2>Alteração de Produto</h2>
     <form id="frmEdtPro" name="frmEdtPro" method="POST" action="edtPro.php">
          
    <div class="form-group">
    <label for="lblId">ID: <?php echo $id?></label>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    </div>

    <div class="form-group">
    <label for="lblDec">Descrição: </label>
    <input type="text" class="form-control" id="txtDesc"
     name="txtDesc" value="<?php echo  $desc ?>">
     </div>  

  <div class="form-group">
<label for="lblQtd">Quantidade </label>
 <input type="number" class="form-control" id="txtQtd"
  name="txtQtd" value="<?php echo $qtd?>">
  
    <div class="form-group">
    <label for="lblVal">Peso(em gramas) </label>
    <input type="text" class="form-control" id="txtVal"
    name="txtVal" value="<?php echo $val ?>">
  </div> 

  <div class="form-group">
 <input type="submit" class="btn btn-success" id="btnGrv"
name='btnGravar'value="Gravar">
 <input type="button" class="btn btn-success" id="btnVol"
 name="btnVol" onclick="javascript:location.href='listProd.php'"
 value="voltar">
 </div>

       </form>
    </div>
  </body>
</html>