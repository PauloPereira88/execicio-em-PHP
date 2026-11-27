async function carregarDadosCarro(id_carro) {
    try {
        const resposta = await fetch('../actions/editar-carro.php?id=' +(id_carro));
        const carro = await resposta.json();

        if (resposta.ok && carro.status === 200) {
            document.getElementById("id_carro").value = carro.data.id_carro;
            document.getElementById("marca").value = carro.data.marca;
            document.getElementById("modelo").value = carro.data.modelo;
            document.getElementById("placa").value = carro.data.placa;
        } else {
            alert(carro.msg || "Não foi possível carregar os dados do Carro.");
            window.location.href = './listagem-carro.php';
        }
    } catch (error) {
        console.error("Erro ao carregar dados do Carro:", error);
    }
}

window.addEventListener("DOMContentLoaded", function() {
    const parametros = new URLSearchParams(window.location.search);

    const id_carro = parametros.get("id");

    carregarDadosCarro(id_carro);
});

let formulario = document.getElementById("formEdicaoCarro");

formulario.addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(formulario);

    try {
        let response = await fetch('../actions/editar-carro.php', {
            method: 'POST',
            body: formData
        });

        let result = await response.json();

        if (response.status == 400) {
            alert(result.msg);
        } else {
            alert(result.msg);
            window.location.href = './listagem-carro.php';
        }
    } catch (error) {
        console.log(error);
    }
})