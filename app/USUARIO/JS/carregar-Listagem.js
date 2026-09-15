async function carregarListagem() {
    try {
        const resposta = await fetch('../action/listagem-usuario.php');
        const usuarios = await resposta.json();
        // console.log(usuario);

        const bodyTable = document.getElementById("bodyTable");
        bodyTable.innerHTML = "";

        if (usuarios.length === 0) {
            bodyTable.innerHTML = '<p> Nenhum Usuario Cadastrado!</p>';
            return;
        }

        usuarios.forEach((usuario) => {
            const tr = document.createElement("tr");

            tr.innerHTML = `
                <td>${usuario.id}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.cidade}</td>
                <td>${usuario.telefone}</td>
                <td>
                    <div>
                        <a href="../action/editar-usuario.php?id_usuario=${usuario.id}">
                            EDITAR
                        </a>
                        <a href="../action/excluir-usuario.php?id_usuario=${usuario.id}">
                            EXCLUIR
                        </a>
                    </div>
                </td>
            `;

            bodyTable.appendChild(tr);
        });

    } catch (error) {
        // console.error("Erro ao Carregar lista:", error);
        // document.getElementById('listagem-usuario').innerHTML = 
        // '<p>Erro ao carregar usuarios.</p>';
    }
}

window.addEventListener("DOMContentLoaded", carregarListagem);