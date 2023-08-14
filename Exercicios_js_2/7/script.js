function calcular(operador) {
    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);
    var resultadoElement = document.getElementById("resultado");
  
    var resultado;
  
    switch (operador) {
      case '+':
        resultado = num1 + num2;
        break;
      case '-':
        resultado = num1 - num2;
        break;
      case '*':
        resultado = num1 * num2;
        break;
      case '/':
        resultado = num1 / num2;
        break;
      default:
        resultado = "Operação inválida";
        break;
    }
  
    resultadoElement.textContent = "Resultado: " + resultado;
  }