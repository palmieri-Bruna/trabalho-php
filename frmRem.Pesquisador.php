</head>
  <body class="container">
      <h2>Remover Pesquisador</h2>
      <form id="frmRemPesquisador" name="frmRemPesquisador" method="POST" action="remPesquisador.php">
          <div class="form-group">
              <label for="lblTd"></label>
              <span class="textBold">ID: </span>
              <span class="textNormal"><?php echo $id?> </span>
              </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
            </div>
            <div class="form-group">
              <label for="lblNome">
                 <span class="textBold">Nome:</span>
                 <span class="textNormal"><?php echo $nome?> </span>
               </label>  
            </div><div class="form-group">
              <label for="lblIdade">
                 <span class="textBold">Idade:</span>
                 <span class="textNormal"><?php echo $idade?> </span>
               </label>  
            </div>
            <div class="form-group">
              <label for="lblForma">
                 <span class="textBold">Formação: </span>
                 <span class="textNormal"><?php echo $forma?> </span>
               </label>  
            </div>
            <input type="submit" name="btRem" id="btRem" class="btn btn-danger"
            value="Remover"/>
            <input type="button" name="btVoltar" id="btVoltar" class="btn btn-info"
            value="Voltar" onclick="javascript: location.href='listPesquisador.php'">
    </form>
</body>
</html>
