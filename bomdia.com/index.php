<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cadastro</title>
</head>
<body class="w3-sand">
  <div class="w3-row ">
    <div class="w3-col m3"><p></p></div>
    <div class="w3-card-4 w3-col m6">
      <div class="w3-container w3-red  w3-center">
        <h2>Formulário de Contato</h2>
      </div>
      <form class="w3-container w3-yellow" action="php/config.php" method="POST">
        <div class="w3-container w3-yellow">     
            <label class="w3-text-brown"><b>Nome</b></label>
            <input class="w3-input w3-border w3-sand" name="nome" type="text" required = "true"></p>
        </div>  
        <div class="w3-container w3-yellow">   
            <div class="w3-container w3-yellow w3-col m10">   
                <label class="w3-text-brown"><b>Endereço</b></label>
                <input class="w3-input w3-border w3-sand" name="endereco" type="text" required = "true"></p>
            </div> 
            <div class="w3-container w3-yellow w3-col m2">     
                <label class="w3-text-brown"><b>Número</b></label>
                <input class="w3-input w3-border w3-sand" name="numero" type="text" required = "true"></p>
            </div> 
        <div class="w3-container w3-yellow">
            <label class="w3-text-brown"><b>Observações</b></label>
            <textarea class="w3-input w3-border w3-sand" name="observacao" type="text" required = "true"></textarea></p>
        </div>
        <div class="w3-container w3-yellow">
            <label class="w3-text-brown" for="imagem"><b>Imagem</b></label>
            <input type="file" id="imagem" name="imagem" />
        </div>
        <div class="w3-container w3-yellow w3-center">
            <button class="w3-btn w3-brown w3-center" name="enviar">Enviar</button></p>
        </div>
      </form>
    </div>
    <div class="w3-col m3"><p></p></div>
</div>
</body>
</html>
