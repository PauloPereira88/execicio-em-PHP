async function carregarListagem() {
    try {
        const resposta = await fetch('tela-listar.php');
        const usuarios = await resposta.json();

        const bodyTable = document.getElementById('bodyTable');
        bodyTable.innerHTML = "";

        usuarios.forEach((usuario) => {
            const tr = document.createElement("tr");

            tr.innerHTML = `
                <td>${usuario.nome}</td>
                <td>${usuario.cidade}<?td>
                <td>${usuario.telefone}<?td>
                <td>
                    <div>
                        <a href="editar-usuario.php?id=${usuario.id_usuario}">
                            <i class="bi bi-pencil-square"
                            title="Editar"></i>
                        </a>
                    </div>
                </td>
            `;

            bodyTable.appendChild(tr);
        });

    } catch (error) {
        console.error('Erro ao Carregar lista', error);
        document.getElementById('listar-usuarios').innerHTML = 
        '<p>Erro ao carregar usuarios.</p>';
    }
}

window.addEventListener("DOMContentLoaded", carregarListagem)