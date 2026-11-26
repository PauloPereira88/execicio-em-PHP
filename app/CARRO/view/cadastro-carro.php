<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Cadastro de Veiculo Leve</title>
</head>
<body>

    <h1>Cadastro de CARRO</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="cadastro-carro.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="../../MOTO/view/cadastro-moto.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="../../TIPO/view/cadastro-tipo.php"><span>Tipo</span></a>
        </div>
        <div class="usuario">
            <a href="../../USUARIO/view/cadastro-usuario.php"><span>Usuario</span></a>
        </div>
        <div class="animal">
            <a href="../../ANIMAL/view/cadastro-animal.php"><span>Animal</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Marca da Moto" required>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" placeholder="Modelo da Moto" required>

            <label for="placa">Placa:</label>
            <input type="text" name="placa" placeholder="placa da Moto" required>

            <div class="butons">
                <div class="listar">
                    <a href="./listagem-carro.php">LISTAR</a>
                </div>
                <button type="reset">LIMPAR</button>
                <button type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
    
    <script src="../JS/cadastro-carro.js"></script>
</body>
</html>