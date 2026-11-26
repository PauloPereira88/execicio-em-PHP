document.getElementById("FormCadastro").addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch('../actions/cadastro-tipo.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await response.json();
        alert(resultado.message);

        if (resultado.success) {
            window.location.href = './listagem-tipo.php';
        }

    } catch (error) {
        console.error("Erro na Requisição:", error);
        alert("Erro na Requisição. Verifique a conexão com o servidor.");
    }
});