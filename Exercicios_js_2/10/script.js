function validarLogin() {
    const USUARIO_CORRETO = "admin";
    const SENHA_CORRETA = "123456";
  
    var usernameInput = document.getElementById("usernameInput");
    var passwordInput = document.getElementById("passwordInput");
    var messageElement = document.getElementById("message");
  
    var username = usernameInput.value.trim();
    var password = passwordInput.value.trim();
  
    if (username === USUARIO_CORRETO && password === SENHA_CORRETA) {
      messageElement.textContent = "Acesso permitido";
      messageElement.className = "success-message";
    } else {
      messageElement.textContent = "Acesso negado";
      messageElement.className = "error-message";
    }
  
    // Limpa os campos de entrada
    usernameInput.value = "";
    passwordInput.value = "";
  }