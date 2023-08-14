

function adicionarMinutos() {
    var dataAtual = new Date();
    var minutos = prompt("Quantos minutos gostaria de adicionar a data atual?");
    var dataAdicionada = new Date(dataAtual.getTime() + minutos * 60000);

    // Exibir as datas no HTML
    document.getElementById("dataAtual").textContent = dataAtual;
    document.getElementById("dataAdicionada").textContent = dataAdicionada;
  }

  // Chamar a função ao carregar a página
  adicionarMinutos();