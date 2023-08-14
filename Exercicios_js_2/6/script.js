function mostrarHora() {
    var dataAtual = new Date();
  
    var horas = formatarNumero(dataAtual.getHours());
    var minutos = formatarNumero(dataAtual.getMinutes());
    var segundos = formatarNumero(dataAtual.getSeconds());
  
    var clockElement = document.getElementById("clock");
    clockElement.textContent = horas + ":" + minutos + ":" + segundos;
  }
  
  function formatarNumero(numero) {
    if (numero < 10) {
      return "0" + numero;
    }
    return numero;
  }
  
  // Atualizar o relógio a cada segundo
  setInterval(mostrarHora, 1000);