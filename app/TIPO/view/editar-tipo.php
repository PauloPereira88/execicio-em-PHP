<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Edição de Tipo de Veiculo</title>
</head>
<body>

    <h1>Editar Tipo de Veiculo</h1>

    <div class="formulario">
        <form id="formEdicaoTipo" action="#" method="POST">
            <input type="hidden" name="id_tipo" id="id_tipo">
            
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Veiculo">

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" placeholder="Marca do veiculo">

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo do veiculo">

            <label for="lugares">Lugares:</label>
            <input type="number" id="lugares" name="lugares" placeholder="Quantidade de Lugares">

            <div class="butons">
                <button type="submit" id="salvar" name="salvar">SALVAR</button>
                <button class="listar">
                    <a href="../tela-listar.php">LISTAR</a>
                </button>
            </div>
        </form>
    </div>
    
    <script src="../JS/editar-tipo.js"></script>
</body>
</html>