document.getElementById("FormCadastro").addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch('../actions/cadastro-moto.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await response.json();
        alert(resultado.message);
        window.location.href = './listagem-moto.php';

    } catch (error) {
        alert ("Erro na Requisicao");
    }
});