document.getElementById("FormCadastro").addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch('../../action/cadastrarusuario.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await response.json();
        alert(resultado.message);

        if (resultado.status === 'success') {
            this.reset();
        }

    } catch (error) {
        alert ("Erro na Requisicao");
        console.log(error);
    }
});