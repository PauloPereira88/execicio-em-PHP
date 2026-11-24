<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Cadastro de Moto</title>
</head>
<body>

    <h1>Cadastro de MOTO</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="cadastro-moto.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="../ONIBUS/index2.php"><span>Tipo</span></a>
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
            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Marca da Moto">

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" placeholder="Modelo da Moto">

            <label for="placa">Placa:</label>
            <input type="text" name="placa" placeholder="placa da Moto">

            <div class="butons">
                <div class="listar">
                    <a href="./listagem-moto.php">LISTAR</a>
                </div>
                <button type="reset">LIMPAR</button>
                <button type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
    
    <script defer src="../JS/cadastro-moto.js"></script>
</body>
</html>