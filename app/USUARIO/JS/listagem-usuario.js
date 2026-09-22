async function listagemUsuario() {
    try {
        const resposta = await fetch('../actions/listagem-usuario.php');
        const usuarios = await resposta.json();

        const bodyTable = document.getElementById("bodyTable");
        bodyTable.innerHTML = "";

        usuarios.forEach((usuario) => {
            const tr = document.createElement("tr");

            tr.innerHTML = `
                <td>${usuario.id_usuario}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.cidade}</td>
                <td>${usuario.telefone}</td>
                <td>
                    <div class="buttons">
                        <div class="verde">
                            <a href="../view/editar-usuario.php?id=${usuario.id_usuario}">EDITAR</a>
                        </div>
                        <div class="vermelho">
                            <a href="excluir-usuario.php?id=${usuario.id_usuario}">EXCLUIR</a>
                        </div>
                    </div>
                </td>
            `;

            bodyTable.appendChild(tr);
        });

    } catch (error) {
        console.error("Erro ao Carregar Lista:", error);
    }
}

window.addEventListener("DOMContentLoaded", listagemUsuario);