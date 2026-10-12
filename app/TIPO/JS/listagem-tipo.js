async function listagemTipo() {
    try {
        const resposta = await fetch('../actions/listagem-tipo.php');
        const tipos = await resposta.json();

        const bodyTable = document.getElementById("bodyTable");
        bodyTable.innerHTML = "";

        tipos.forEach((tipo) => {
            const tr = document.createElement("tr");

            tr.innerHTML = `
              <td nowrap>${tipo.id_tipo}</td>
              <td nowrap>${tipo.tipo ?? ""}</td>
              <td nowrap>${tipo.marca ?? ""}</td>
              <td nowrap>${tipo.modelo ?? ""}</td>
              <td nowrap>${tipo.lugares ?? ""}</td>
              <td>
                  <div class="buttons">
                      <div class="verde">
                          <a href="../view/editar-tipo.php?id=${tipo.id_tipo}">EDITAR</a>
                      </div>
                      <div class="vermelho">
                          <button onclick="deletartipo(${tipo.id_tipo}, this)">EXCLUIR</button>
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

async function deletarTipo(id, botao) {
  if (!confirm("Tem certeza que deseja excluir este Veiculo?")) {
    return; 
  }

  try {
    
    const resposta = await fetch(`../actions/deletar-tipo.php?id=${id}`);
    const resultado = await resposta.json();

    if (resultado.sucesso) {
      
      const linha = botao.closest('tr');
      linha.remove();
      alert("Veiculo excluído com sucesso!");
    } else {
      alert("Erro ao excluir: " + resultado.erro);
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    alert("Erro de comunicação com o servidor.");
  }
}

window.addEventListener("DOMContentLoaded", listagemTipo);