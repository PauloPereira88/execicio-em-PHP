<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Edição de Usuario</title>
</head>
<body>

    <h1>Editar Usuario</h1>

    <div class="formulario">
        <form id="formEdicaoUsuario" action="#" method="POST">
            <input type="hidden" name="id_usuario" id="id_usuario">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome Usuario">

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Cidade do Usuario">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Telefone do Usuario">

            <div class="butons">
                <button type="submit" id="salvar" name="salvar">SALVAR</button>
                <button class="listar">
                    <a href="../tela-listar.php">LISTAR</a>
                </button>
            </div>

        </form>
    </div>
    
    <script src="../JS/editar-usuario.js"></script>
    <script src="../JS/mascara-usuario.js"></script>
</body>
</html>