async function listagemCarro() {
  try {
    const resposta = await fetch('../actions/listagem-carro.php');
    const carros = await resposta.json();

    const bodyTable = document.getElementById("bodyTable");
    bodyTable.innerHTML = "";

    carros.forEach((carro) => {
      const tr = document.createElement("tr");

      tr.innerHTML = `
        <td nowrap>${carro.id_carro}</td>
        <td nowrap>${carro.marca ?? ""}</td>
        <td nowrap>${carro.modelo ?? ""}</td>
        <td nowrap>${carro.placa ?? ""}</td>
        <td>
            <div class="buttons">
                <div class="verde">
                  <a href="../view/editar-carro.php?id=${carro.id_carro}">EDITAR</a>
                </div>
                <div class="vermelho">
                  <button onclick="deletarCarro(${carro.id_carro}, this)">EXCLUIR</button>
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

async function deletarCarro(id, botao) {
  if (!confirm("Tem certeza que deseja excluir este Carro?")) {
    return; 
  }

  try {
    
    const resposta = await fetch(`../actions/deletar-carro.php?id=${id}`);
    const resultado = await resposta.json();

    if (resultado.sucesso) {
      
      const linha = botao.closest('tr');
      linha.remove();
      alert("Carro excluído com sucesso!");
    } else {
      alert("Erro ao excluir: " + resultado.erro);
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    alert("Erro de comunicação com o servidor.");
  }
}

window.addEventListener("DOMContentLoaded", listagemCarro);