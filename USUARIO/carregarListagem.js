async function carregarListagem() {
    try {
        const resposta = await fetch('listar-usuario.php');
        const usuarios = await resposta.json();

        const container = document.getElementById('listar-usuarios');
        container.innerHTML = '';

        if(usuarios.length === 0){
            container.innerHTML = '<p>Nenhum Usuario Cadastrado!</p>';
            return;
        }

        const ul = document.createElement('ul');
        ul.style.listStyle = 'none';

        usuarios.forEach((usuario) => {
            const li = document.createElement('li');
            li.innerHTML = `<h1>${usuario.nome}</h1>`;

            ul.appendChild(li);
        });

        container.appendChild(ul);

    } catch (error) {
        console.error('Erro ao Carregar lista', error);
        document.getElementById('listar-usuarios').innerHTML = 
        '<p>Erro ao carregar usuarios.</p>';
    }
}