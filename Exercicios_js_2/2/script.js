function calc(){
    let hora = new Date().toLocaleTimeString();
    let div = document.getElementById("conteiner");
    div.innerHTML += `<p> A hora atual é ${hora}</p>`
}