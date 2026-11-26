async function listagemMoto() {
  try {
    const resposta = await fetch('../actions/listagem-moto.php');
    const motos = await resposta.json();

    const bodyTable = document.getElementById("bodyTable");
    bodyTable.innerHTML = "";

    motos.forEach((moto) => {
      const tr = document.createElement("tr");

      tr.innerHTML = `
        <td nowrap>${moto.id_moto}</td>
        <td nowrap>${moto.marca ?? ""}</td>
        <td nowrap>${moto.modelo ?? ""}</td>
        <td nowrap>${moto.placa ?? ""}</td>
        <td>
            <div class="buttons">
                <div class="verde">
                  <a href="../view/editar-moto.php?id=${moto.id_moto}">EDITAR</a>
                </div>
                <div class="vermelho">
                  <button onclick="deletarMoto(${moto.id_moto}, this)">EXCLUIR</button>
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

async function deletarMoto(id, botao) {
  if (!confirm("Tem certeza que deseja excluir esta Moto?")) {
    return; 
  }

  try {
    
    const resposta = await fetch(`../actions/deletar-moto.php?id=${id}`);
    const resultado = await resposta.json();

    if (resultado.sucesso) {
      
      const linha = botao.closest('tr');
      linha.remove();
      alert("Moto excluída com sucesso!");
    } else {
      alert("Erro ao excluir: " + resultado.erro);
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    alert("Erro de comunicação com o servidor.");
  }
}

window.addEventListener("DOMContentLoaded", listagemMoto);