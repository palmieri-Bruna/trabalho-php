<html>
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Inserir Novo Presquisador</title>
 </head>
     <body class="container">
      <h1>Cadastar Novo Pesquisador</h1>
       <form id="frmInsPesquisador" name="frmInsPesquisador" method="POST" action="insPesquisador.php">
        <div class="form-group">
           <label for="lblNome">Nome</label>
           <input type="txto" class="form-control" id="txtNome"
            name="txtNome" placeholder="nome do Pesquisador....."></imput>
        </div>
         <div class="form-group">
           <label for="lblIdade">Idade</label>
           <input type="number" class="form-control" id="txtIdade"
           name="txtIdade" placeholder="informe a idade">
         </div>
         <div class="form-group">
           <label for="lblForma">Fomação</label>
           <input type="txto" class="form-control" id="txtForma"
           name="txtForma" placeholder="Informe a formação">
         </div> 
         <input type="submit" id="btGrv" name="btGrv" class="btn btn-success"
         value="Gravar">
         <input type="reset" id="btLimpar" name="btLimpar"
         class="btn btn-danger" value="Limpar">

       </form>
     </body>
</html>