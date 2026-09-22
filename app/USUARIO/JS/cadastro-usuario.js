document.getElementById("formCadastro").addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch('../actions/cadastro-usuario.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await response.json();
        alert(resultado.message);
        window.location.href = './listagem-usuario.php';

    } catch (error) {
        alert("ERRO NA REQUISIÇÃO!");
    }

});