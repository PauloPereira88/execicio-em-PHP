async function carregarDadosUsuario(id_usuario) {
    try {
        const resposta = await fetch('../actions/editar-usuario.php?id='+id_usuario);
        const usuario = await resposta.json();

        if(usuario.status == 200)
        {
            document.getElementById("id_usuario").value = usuario.data.id_usuario;
            document.getElementById("nome").value = usuario.data.nome;
            document.getElementById("cidade").value = usuario.data.cidade;
            document.getElementById("telefone").value = usuario.data.telefone;
        }
        else {
            alert(usuario.msg);
            window.location.href = './listagem-usuario.php';
        }
    } catch (error) {
        console.log("Erro ao Carregar Lista:", error);
    }
}

window.addEventListener("DOMContentLoaded", function() {
    const parametros = new URLSearchParams(this.window.location.search);

    const id_usuario = parametros.get("id");

    carregarDadosUsuario(id_usuario);
});