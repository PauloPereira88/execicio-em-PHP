async function listagemUsuario() {
    try {
        const resposta = await fetch('../actions/listagem-usuario.php');
        const usuarios = await resposta.json();

        const bodyTable = document.getElementById("bodyTable");
        bodyTable.innerHTML = "";

        usuarios.forEach((usuario) => {
            const tr = document.createElement("tr");

            tr.innerHTML = `
              <td nowrap>${usuario.id_usuario}</td>
              <td nowrap>${usuario.nome ?? ""}</td>
              <td nowrap>${usuario.cidade ?? ""}</td>
              <td nowrap>${formatarTelefone(usuario.telefone ?? "")}</td>
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

function formatarTelefone(valor) {
  if (!valor) return "";
  const limpo = String(valor).replace(/\D/g, "");

  if (limpo.length === 11) {
    return limpo.replace(/^(\d{2})(\d{5})(\d+)/, '(\$1) \$2-\$3');
  } else if (limpo.length === 10) {
    return limpo.replace(/^(\d{2})(\d{4})(\d+)/, '(\$1) \$2-\$3');
  }
  return valor;
}

window.addEventListener("DOMContentLoaded", listagemUsuario);