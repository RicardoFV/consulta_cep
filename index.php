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
    <h1 id="titulo">Realize aqui a consulta do seu CEP</h1>

    <!-- Exemplo criado para consultar cep via JavaScript puro -->
    <fieldset name="consulta_js" id="consulta">

        <legend>Consulta Via JavaScript</legend>
        <form action="" method="POST">
            <label for="cep">Cep :</label>
            <input type="text" maxlength="9" id="cep" name="cep" placeholder="Digite seu Cep">
        </form>
        <button onclick="consultarCep()">Consultar</button>
    </fieldset>

    <fieldset id="resposta">
        <legend>Resposta</legend>
        <label for="meu_cep"><b>Cep :</b></label>
        <span id="meu_cep"></span><br>

        <label for="logradouro"> <b>Logradouro :</b> </label>
        <span id="logradouro"></span><br>

        <label for="complemento"> <b>Complemento :</b></label>
        <span id="complemento"></span><br>

        <label for="bairro"> <b>Bairro :</b></label>
        <span id="bairro"></span><br>

        <label for="localidade"> <b>Localidade :</b></label>
        <span id="localidade"></span><br>

        <label for="uf"> <b>Uf :</b> </label>
        <span id="uf"></span><br>

        <label for="ibge"> <b>Ibge :</b> </label>
        <span id="ibge"></span><br>

        <label for="gia"> <b>Gia :</b> </label>
        <span id="gia"></span><br>

        <label for="ddd"> <b>DDD :</b> </label>
        <span id="ddd"></span><br>

        <label for="siafi"> <b>Siafi :</b> </label>
        <span id="siafi"></span>

    </fieldset>

    <button onclick="atualizarPagina()" id="atualizarPagina">Nova Pesquisa</button>

    <footer>Desenvolvido por : <b>Ricardo Ferreira</b> - 05/2022</footer>
</body>

</html>