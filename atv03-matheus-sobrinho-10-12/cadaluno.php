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
                <li><a href="cadaluno.php" id="pose">Inscrição</a></li>
                <li><a href="listaaluno.php">Lista de alunos</a></li>
            </ul>
        </nav>
        <div class="login">
            <img src="img/usuario.png" alt="logo do usuario">
            <h4>Login</h4>
        </div>
    </header>
    <main class="d1">
        <form action="listaaluno.php" method="post">
            <div>
                <h3>Cadastramento de Alunos</h3>
                <label for="frame">Nome Completo do Aluno:</label><br>
                <input type="text" value="Digite o nome completo" class="forms" name="name" required><br>
                <label for="frame">CPF do Aluno:</label><br>
                <input type="text" class="forms" name="cpf" value="Digite o CPF" required><br>
                <label for="frame">Número de Matrícula:</label><br>
                <input type="text" class="forms" name="id" value="Digite o número da matricula" required><br>
                <label for="frame">Nome do Pai:</label><br>
                <input type="text" class="forms" name="pai" value="Digite o nome completo do pai" required><br>
                <label for="frame">Nome da Mãe:</label><br>
                <input type="text" class="forms" name="mae" value="Digite o nome da mãe" required><br>
                <label for="frame">Endereço:</label><br>
                <input type="text" class="forms" name="end" value="Digite o seu endereço" required><br>
            </div>
            <div>
                <label for="frame">Data de nascimento</label><br>
                <input type="date" class="forms" name="date" required><br>
                <label for="frame">Cidade:</label><br>
                <input type="text" class="forms" name="cidade" value="Digite a cidade" required><br>
                    <label for="estado">Escolha seu estado:</label><br>
                    <select id="estado" name="estado">
                      <option value="">Selecione um estado</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select><br>                  
                <label for="frame">CEP:</label><br>
                <input type="text" class="forms" name="cep" value="Digite o CEP" required><br>
                <label for="frame">Telefone:</label><br>
                <input type="text" class="forms" name="tel" value="Digite o Telefone" required><br>
                <label for="frame">E-mail</label><br>
                <input type="text" class="forms" name="e-mail" value="Digite o e-mail" required><br>
                <label for="frame">Responsável(se não for o pai ou a mãe):</label><br>
                <input type="text" class="forms" name="resp" value="Digite o nome do responsável" required><br>
                <label for="frame">Observações sobre o aluno:</label><br>
                <textarea name="obs" class="forms" placeholder="OBS:"></textarea><br>
                <input type="submit" value="Cadastrar" class="butao">
                <input type="reset" value="Limpar" class="butao">
            </div>
        </form>
        <img src="img/img-de-alunos.png" alt="imagem de alunos" class="imagem">
    </main>
    <footer>
        <p>&copy Copyrigth - Matheus Sobrinho 2024</p>
        <div class="contatos">
            <a href="https://www.instagram.com/"><img src="img/instagram.png" alt="Instagram"></a>
            <a href="https://workspace.google.com/products/gmail/"><img src="img/e-mail.png" alt="Email"></a>
            <a href="https://web.whatsapp.com/"><img src="img/whatsapp.png" alt="WhatsApp"></a>
        </div>
    </footer>
</body>

</html>