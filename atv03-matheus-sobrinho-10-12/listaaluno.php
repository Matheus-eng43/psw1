<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atibidade_03-12</title>
</head>

<body class="container">
    <header>
        <img src="img/logo_if.png" alt="logo do site" id="img1">
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cadaluno.php">Inscrição</a></li>
                <li><a href="listaaluno.php" id="pose">Lista de alunos</a></li>
            </ul>
        </nav>
        <div class="login">
            <img src="img/usuario.png" alt="logo do usuario">
            <h4>Login</h4>
        </div>
    </header>
   
    <?php 
    $nome=$_POST["name"];
    $date=$_POST["date"]
    $cpf=$_POST["cpf"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $endereco=$_POST["end"];
    $telefone=$_POST["tel"];
    $obs=$_POST["obs"];
    ?>
    <h2>Lista de alunos cadastrados</h2>
    <main>
    <table>
        <tr>
            <th>Nome</th>
            <th>Data de nasimento</th>
            <th>CPF</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Observações</th>
        </tr>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $idade; ?></td>
            <td><?php echo $cpf; ?></td>
            <td><?php echo $cidade; ?></td>
            <td><?php echo $estado; ?></td>
            <td><?php echo $endereco; ?></td>
            <td><?php echo $telefone; ?></td>
            <td><?php echo $obs; ?></td>
        </tr>
        <tr>
            <td>Gabriel Jeusus</td>
            <td>12/12/1992</td>
            <td>923121</td>
            <td>Xique-Xique</td>
            <td>Bahia</td>
            <td>Rua Bahia das Cruzes</td>
            <td>(77)999442204</td>
            <td></td>
        </tr>
        <tr>
            <td>Neymar Júnior</td>
            <td>05/02/1992</td>
            <td>910112</td>
            <td>Mogi das Cruzes</td>
            <td>São Paulo</td>
            <td>Rua São Paulo das Avenidas</td>
            <td>(77)997430904</td>
            <td>Algumas lesões, que necessitam de atenção.</td>
        </tr>
    </table>
</main>
    
    <footer>
        <p>&copy Copyrigth - Matheus Sobrinho - 2024</p>
        <div class="contatos">
        <a href="https://www.instagram.com/"><img src="img/instagram.png" alt="Instagram"></a>
        <a href="https://workspace.google.com/products/gmail/"><img src="img/e-mail.png" alt="Email"></a>
        <a href="https://web.whatsapp.com/"><img src="img/whatsapp.png" alt="WhatsApp"></a></div>
    </footer>
</body>

</html>