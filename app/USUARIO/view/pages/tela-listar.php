<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE USUARIO</title>
</head>
<body>

    <section>
        <form action="" method="GET">
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">
            </div>
            <div>
                <button type="submit">
                    <i class="bi bi-search"></i>
                    Filtrar
                </button>
            </div>
        </form>
    </section>
    <section>
        <h1>Lista de Usuarios</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="bodyTable">
                    <!-- O Conteudo da Lista Esta Sendo Feita pelo JS  -->
                </tbody>
            </table>
        </div>
    </section>

    <script src="../../JS/carregar-Listagem.js"></script>
    
</body>
</html>