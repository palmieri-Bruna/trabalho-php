<html>   
   <head>

      <title>Listar de Insetos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   </head>
   <style>
   body{
    background-image: url("insetos-e1535639853163.jpg");

   }
   </style>
    <body>
       
    <nav class="navbar navbar-dark bg-dark">
                            <a class="text-white py-2 d-none d-md-inline-block"><h1>Lista de insetos s2<h1></a>
                                
                            </nav>
       <div class= "container">
        <br>

         <input type="button" id="btNovo" name="btNovo"
         class="btn btn-warning" value="Adicionar Novo"
         onclick="javascript: location.href='frmInsPro.html'">
      
         <table class='table table-striped table-dark '>
             <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Peso(em gramas)</th>
              
                <th>EDITAR</th>
                <th>Remover</th>
             </tr>
             <?php
              include 'banco.php';
              $pdo = Banco::conectar();
              $sql = 'select * from produtos order by descricao';
              foreach($pdo->query($sql) as $row){       
              ?>
              <tr>
                <td><?php echo $row['id']?> </th>
                <td><?php echo $row['descricao']?> </td>
                <td><?php echo $row['quatidade']?> </td>
                <td><?php echo $row['valor']?> </td>
                <td>
                 <button type="button" class="btn btn-primary"
                 onclick="javascript:location.href='frmEdtPro.php?id='
                 +<?php echo$row['id']?>">
                 Editar</button>
                 <td>
                 <button type="button" class="btn btn-dark"
                 onclick="javascript:location.href='./api/produto.php?id='+
                 <?php echo $row['id']?>">
                  Remover
                 </button>
                </td>
             </tr>
              <?php }?> 

        </table>
              </div>
    </body>
</html>