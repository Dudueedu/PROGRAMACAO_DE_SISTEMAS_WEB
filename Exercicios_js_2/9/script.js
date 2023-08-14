function validarFormulario() {
    var nomeInput = document.getElementById("nomeInput");
    var idadeInput = document.getElementById("idadeInput");
    var emailInput = document.getElementById("emailInput");
  
    var nomeError = document.getElementById("nomeError");
    var idadeError = document.getElementById("idadeError");
    var emailError = document.getElementById("emailError");
  
    nomeError.textContent = "";
    idadeError.textContent = "";
    emailError.textContent = "";
  
    var isValid = true;
  
    if (nomeInput.value.trim() === "") {
      nomeError.textContent = "Campo obrigatório";
      isValid = false;
    }
  
    if (idadeInput.value.trim() === "") {
      idadeError.textContent = "Campo obrigatório";
      isValid = false;
    } else if (isNaN(idadeInput.value)) {
      idadeError.textContent = "Informe um valor numérico";
      isValid = false;
    }
  
    if (emailInput.value.trim() === "") {
      emailError.textContent = "Campo obrigatório";
      isValid = false;
    } else if (!isValidEmail(emailInput.value)) {
      emailError.textContent = "E-mail inválido";
      isValid = false;
    }
  
    return isValid;
  }
  
  function isValidEmail(email) {
    // Expressão regular para validar o formato do e-mail
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }