function verificarAno() {
    var anoInput = document.getElementById("anoInput").value;
    var resultado = document.getElementById("resultado");
  
    if (isLeapYear(anoInput)) {
      resultado.textContent = anoInput + " é um ano bissexto!";
      resultado.style.color = "green";
    } else {
      resultado.textContent = anoInput + " não é um ano bissexto.";
      resultado.style.color = "red";
    }
  
    return false; // Impede que o formulário seja enviado
  }
  
  function isLeapYear(year) {
    // Implementação da lógica de verificação do ano bissexto
  
    // Exemplo de implementação simplificada:
    return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
  }