const d = new Date();
document.getElementById('demo').innerHTML = 'Copyright ' + d.getFullYear();

function mascaraPhone(i) {
    const v = i.value;

    if (isNaN(v[v.length - 1])) {
        // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "15");
    if (v.length == 1)
        i.value = "(" + i.value;
    if (v.length == 3)
        i.value += ") ";
    if (v.length == 10)
        i.value += "-";
}
function validar() {
    var name = formuser.nome.value;
    var telefone = formuser.telefone.value;
    
    if (name == "" || name.length <= 5) {
        alert("Informe o nome completo");
        formuser.nome.focus();
        return false;
    }
    if (telefone === "" || telefone.length <= 14) {
        alert("Informe um numero de telefone correto");
        formuser.telefone.focus();
        return false;
    }
}
