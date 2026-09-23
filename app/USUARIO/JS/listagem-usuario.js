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
                            <button onclick="deletarUsuario(${usuario.id_usuario}, this)">EXCLUIR</button>
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

async function deletarUsuario(id, botao) {
  if (!confirm("Tem certeza que deseja excluir este usuário?")) {
    return; 
  }

  try {
    
    const resposta = await fetch(`../actions/deletar-usuario.php?id=${id}`);
    const resultado = await resposta.json();

    if (resultado.sucesso) {
      
      const linha = botao.closest('tr');
      linha.remove();
      alert("Usuário excluído com sucesso!");
    } else {
      alert("Erro ao excluir: " + resultado.erro);
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    alert("Erro de comunicação com o servidor.");
  }
}

window.addEventListener("DOMContentLoaded", listagemUsuario);