function calc (){
    let data1 = prompt("Digite uma data(mm dd aaaa): ");
    let data2 = prompt("Digite outra data data(mm dd aaaa): ");

    let diffMs = new Date(data1) - new Date(data2);
    let diff = diffMs / (1000 * 60 * 60 * 24);
    let diffH = diffMs / (1000 * 60 * 60);
    let diffMn = diff / 30;
    let diffYs = diff/365;

    let div = document.getElementById("conteiner");
    div.innerHTML += `<p> A diferença das datas ${data1} e ${data2} é: <br> ${diffH} horas <br> ${diff} dias <br> ${diffMn} mese(s) <br> ${diffYs} ano(s)</p>`;
}