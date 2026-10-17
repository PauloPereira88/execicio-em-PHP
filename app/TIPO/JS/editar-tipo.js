async function carregarDadosTipo(id_tipo) {
    try {
        const resposta = await fetch('../actions/editar-tipo.php?id='+id_tipo);
        const tipo = await resposta.json();

        if(tipo.status == 200)
        {
            document.getElementById("id_tipo").value = tipo.data.id_tipo;
            document.getElementById("tipo").value = tipo.data.tipo;
            document.getElementById("marca").value = tipo.data.marca;
            document.getElementById("modelo").value = tipo.data.modelo;
            document.getElementById("lugares").value = tipo.data.lugares;
        } else {
            alert(tipo.msg);
            window.location.href = './listagem-tipo.php';
        }
    } catch (error) {
        console.log("Erro ao Carregar Lista:", error);
    }
}

window.addEventListener("DOMContentLoaded", function() {
    const parametros = new URLSearchParams(window.location.search);

    const id_tipo = parametros.get("id");

    carregarDadosTipo(id_tipo);
});

let formulario = document.getElementById("formEdicaoTipo");

formulario.addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(formulario);

    try {
        let response = await fetch('../actions/editar-tipo.php', {
            method : 'POST',
            body : formData
        });

        let result = await response.json();

        if (response.status == 400) {
            alert(result.msg);
        } else {
            alert(result.msg);
            window.location.href = './listagem-tipo.php';
        }
    } catch (error) {
        console.log(error);
    }
})