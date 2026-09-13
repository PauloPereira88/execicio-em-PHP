async function carregarDadosUsuario(id_usuario) {
    try {
    const resposta = await fetch('../../action/editar-usuario.php?id=' +id_usuario);
    const usuario = await resposta.json();

        // console.log(usuario);
        if(usuario.status == 200) {
            document.getElementById("id_usuario").value = usuario.data.id_usuario;
            document.getElementById("nome").value = usuario.data.nome;
            document.getElementById("cidade").value = usuario.data.cidade;
            document.getElementById("telefone").value = usuario.data.telefone;
        }
        else {
            alert(usuario.msg);
            window.location.href = '../../listagem-usuario.php';
        }

    } catch (error) {
        console.error("ERRO AO CARREGAR LISTA:", error);
    }
}

window.addEventListener("DOMContentLoaded", function() {

    const parametros = new URLSearchParams(window.location.search);

    const id_usuario = parametros.get("id");
    
    carregarDadosUsuario(id_usuario);
});

let formulario = document.getElementById("form_edicao_usuario");

formulario.addEventListener("submit", async function (event) {
    
    event.preventDefault();

    const formData = new FormData(formulario);

    try {
        let response = await fetch('../action/editar-usuario.php' , {
            method : 'POST',
            body : formData
        });

        let result = await response.json();

        if(response.status == 400) {
            alert(result.msg);
        } else {
            alert(result.msg);
            window.location.href = './listagem-usuario.php';
        }
    }
    catch(error) {
        console.log(error);
    }
})