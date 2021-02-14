<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Cep</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/cep.js"></script>
</head>
<body>
<h1>Faça aqui a consulta do seu CEP</h1>

<!-- Exemplo criado para consultar cep via JavaScript puro -->
<fieldset name="consulta_js">
<legend>Consulta Via JavaScript</legend>
    <form action="" method="POST">
        <label for="cep">Consulte Seu Cep :</label>
        <input type="text" maxlength="8" id="cep" name="cep" placeholder="Digite seu Cep"><br>
    </form>
    <button onclick="consultarCep()">Consultar</button>

</fieldset>

<fieldset>
<legend>Resposta</legend>
        <label for="meu_cep">Cep :</label>
        <input type="text" id="meu_cep" name="meu_cep" readonly>

        <label for="logradouro">Logradouro :</label>
        <input type="text" id="logradouro" name="logradouro" readonly>

        <label for="complemento">Complemento :</label>
        <input type="text" id="complemento" name="complemento" readonly>

        <label for="bairro">Bairro :</label>
        <input type="text" id="bairro" name="bairro" readonly>

        <label for="localidade">Localidade :</label>
        <input type="text" id="localidade" name="localidade" readonly>

        <label for="uf">Uf :</label>
        <input type="text" id="uf" name="uf" readonly>

        <label for="ibge">Ibge :</label>
        <input type="text" id="ibge" name="ibge" readonly>

        <label for="ibge">Gia :</label>
        <input type="text" id="gia" name="gia" readonly>

        <label for="ddd">DDD :</label>
        <input type="text" id="ddd" name="ddd" readonly>

        <label for="siafi">Siafi :</label>
        <input type="text" id="siafi" name="siafi" readonly>
        
</fieldset>


<footer>Desenvolvido por : <b>Ricardo Ferreira</b> - 02/2020</footer>
</body>
</html>