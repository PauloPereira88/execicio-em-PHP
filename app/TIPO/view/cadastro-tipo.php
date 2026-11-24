<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Cadastro do Tipo de Veiculo</title>
</head>
<body>

    <h1>Cadastro de Veiculos PESADOS</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="../MOTO/index1.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="cadastro-tipo.php"><span>Tipo</span></a>
        </div>
        <div class="usuario">
            <a href="../USUARIO/index3.php"><span>Usuario</span></a>
        </div>
        <div class="animal">
            <a href="../ANIMAL/index4.php"><span>Animal</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Veiculo" required>

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" placeholder="Marca do veiculo" required>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo do veiculo" required>

            <label for="lugares">Lugares:</label>
            <input type="number" id="lugares" name="lugares" min="1" placeholder="Quantidade de Lugares" required>

            <div class="butons">
                <div class="listar">
                    <a href="./listagem-tipo.php">LISTAR</a>
                </div>
                <button type="reset">LIMPAR</button>
                <button type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
    
    <script src="../JS/cadastro-tipo.js"></script>
</body>
</html>