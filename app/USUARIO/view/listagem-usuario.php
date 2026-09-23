<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/listagem-usuario.css">
    <title>LISTA DE USUARIO</title>
</head>
<body>

    <h1>Lista de Usuarios</h1>

    <section class="header">
        <form action="" method="GET">
            <div class="pesquisa">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="pesquisa">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">
            </div>
            <div class="filtrar">
                <button type="submit">
                    Filtrar
                </button>
            </div>
            <div class="novo">
                <a href="./cadastro-usuario.php">Novo Usuario</a>
            </div>
        </form>
    </section>

    <section class="principal">
        <div class="menu">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
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

    <script src="../JS/listagem-usuario.js"></script>
    
</body>
</html>