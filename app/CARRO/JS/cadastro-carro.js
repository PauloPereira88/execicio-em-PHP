document.getElementById("FormCadastro").addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch('../actions/cadastro-carro.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await response.json();
        alert(resultado.message);
        window.location.href = './listagem-carro.php';

    } catch (error) {
        console.error("Erro na Requisição:", error);
        alert("Erro na Requisição. Verifique a conexão com o servidor.");
    }
});