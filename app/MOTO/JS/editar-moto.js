async function carregarDadosMoto(id_moto) {
    try {
        const resposta = await fetch('../actions/editar-moto.php?id=' +(id_moto));
        const moto = await resposta.json();

        if (resposta.ok && moto.status === 200) {
            document.getElementById("id_moto").value = moto.data.id_moto;
            document.getElementById("marca").value = moto.data.marca;
            document.getElementById("modelo").value = moto.data.modelo;
            document.getElementById("placa").value = moto.data.placa;
        } else {
            alert(moto.msg || "Não foi possível carregar os dados da Moto.");
            window.location.href = './listagem-moto.php';
        }
    } catch (error) {
        console.error("Erro ao carregar dados da Moto:", error);
    }
}

window.addEventListener("DOMContentLoaded", function() {
    const parametros = new URLSearchParams(window.location.search);

    const id_moto = parametros.get("id");

    carregarDadosMoto(id_moto);
});

let formulario = document.getElementById("formEdicaoMoto");

formulario.addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(formulario);

    try {
        let response = await fetch('../actions/editar-moto.php', {
            method: 'POST',
            body: formData
        });

        let result = await response.json();

        if (response.status == 400) {
            alert(result.msg);
        } else {
            alert(result.msg);
            window.location.href = './listagem-moto.php';
        }
    } catch (error) {
        console.log(error);
    }
})