function consultarCep() {
    // recebe o que foi digitado 
    let cep = document.getElementById('cep').value
    // retira o traço caso tenha
    cep = cep.replace('-', '')

    // verifica a quantidade de digitos
    if (cep === '' || cep === null) {
        alert('CEP não pode ser vazio')
    } else if (cep.length < 8) { // verifica se esta menor que 8
        alert('CEP não pode ser menor que 8')
    } else { // realiza a consulta

        // chama a url passando o cep
        let url = 'https://viacep.com.br/ws/' + cep + '/json/'
        // cria a instancia do request
        let request = new XMLHttpRequest()
        // abre a requisiçao 
        request.open('GET', url, true)
        // captura a resposta da requisiao
        request.onreadystatechange = function () {
            // numero 4 significa a transaçao concluida
            if (request.readyState == 4) {
                // se status 200 significa que deu certo
                if (request.status == 200) {
                    mostrarResultado();
                    esconderConsulta();
                    document.getElementById('titulo').innerHTML = "Resultado"
                    // passa a resposta para a funçao de preencher os campos
                    preencherCampos(JSON.parse(request.responseText))
                    // limpa a campo 
                    document.getElementById('cep').value = ''
                }
            }
        }
        // finaliza a requisiçao
        request.send();

    }
}

 // atualiza a pagina 
 function atualizarPagina() {
    window.location.reload();
}

function mostrarResultado() {
    // Coloca o fieldset como visivel
    var resposta = document.getElementById('resposta');
    var atualizarPagina = document.getElementById('atualizarPagina')
    resposta.style.display = 'block';
    atualizarPagina.style.display = 'block';
}
// esconde o campo de consulta 
function esconderConsulta() {
    var consulta = document.getElementById('consulta')
    consulta.style.display = 'none';
}
// preenche os campos do formulario 
function preencherCampos(cep) {

    document.getElementById('meu_cep').innerHTML = cep.cep
    document.getElementById('logradouro').innerHTML = cep.logradouro
    document.getElementById('complemento').innerHTML = cep.complemento
    document.getElementById('bairro').innerHTML = cep.bairro
    document.getElementById('localidade').innerHTML = cep.localidade
    document.getElementById('uf').innerHTML = cep.uf
    document.getElementById('ibge').innerHTML = cep.ibge
    document.getElementById('gia').innerHTML = cep.gia
    document.getElementById('ddd').innerHTML = cep.ddd
    document.getElementById('siafi').innerHTML = cep.siafi
}