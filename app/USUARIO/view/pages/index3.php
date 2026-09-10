<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Cadastro de Veiculo</title>
</head>
<body>

    <h1>Cadastro de USUARIOS</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="../MOTO/index1.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="../ONIBUS/index2.php"><span>Tipo</span></a>
        </div>
        <div class="usuario">
            <a href="index3.php"><span>Usuario</span></a>
        </div>
        <div class="animal">
            <a href="../ANIMAL/index4.php"><span>Animal</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">

            <label for="marca">Nome:</label>
            <input type="text" name="nome" placeholder="Nome Usuario">

            <label for="modelo">Cidade:</label>
            <input type="text" name="cidade" placeholder="Cidade do Usuario">

            <label for="lugares">Telefone:</label>
            <input type="text" name="telefone" placeholder="Telefone do Usuario">

            <div class="butons">
                <button name="REQUEST_METHOD" type="submit">ENVIAR</button>
                <button type="reset">LIMPAR</button>
                <div>
                    <a href="./tela-listar.php">LISTAR</a>
                </div>
            </div>

        </form>
    </div>
    
    <script src="../../JS/cadastro.js"></script>
</body>
</html>