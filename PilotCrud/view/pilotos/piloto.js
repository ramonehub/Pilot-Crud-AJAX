function detalhar (idPiloto) {
    //Enviar a requisição AJAX
    var url = "/PilotCrud/api/detalhar_piloto.php?idPiloto=" 
            + idPiloto;
    
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url);

    //Função de callback (será executada quando chegar a resposta da requisição)
    xhttp.onload = function() {
        var json = xhttp.responseText;

        //Criar as options com base na resposta recebida em JSON
        var piloto = JSON.parse(json);
        

        cardNome = document.querySelector("#card_nome");
        cardNome.innerHTML = piloto.nome;

        cardIdade = document.querySelector("#card_idade");
        cardIdade.innerHTML = piloto.idade;

        cardNacionalidade = document.querySelector("#card_nacionalidade");
        cardNacionalidade.innerHTML = piloto.nacionalidade

        cardTitulos = document.querySelector("#card_titulos");
        cardTitulos.innerHTML = piloto.titulos

        cardEquipe = document.querySelector("#card_equipes");
        cardEquipe.innerHTML = piloto.equipe

        cardCategoria = document.querySelector("#card_categoria");
        cardCategoria.innerHTML = piloto.categoria
        
    }

    xhttp.send();
}