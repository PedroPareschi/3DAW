<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $dtNasc = $_POST["dtNasc"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $fone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    $arquivoAluno = fopen("alunoNovo.txt", "w");
    $txt = "nome;matricula;data Nascimento;email;cpf;telefone;endereco;cidade;estado;cep\n";
    fwrite($arquivoAluno, $txt);
    $txt = $nome . ";" . $matricula . ";" . $dtNasc . ";" . $email . ";" . $cpf . ";" . $fone . ";" .
        $endereco . ";" . $cidade . ";" . $estado . ";" . $cep . "\n";
    fwrite($arquivoAluno, $txt);
    fclose($arquivoAluno);
}
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Inserir Aluno</h1>
<br>
<a href="exerc13_InserirAluno.php">Inserir Aluno</a><br>
<a href="exerc13_AppendAluno.php">Adicionar Aluno</a><br>
<a href="exerc13_ListarAlunos.php">Listar Alunos</a><br>
<a href="exerc13_ExcluirAluno.php">Excluir Alunos</a><br>
<a href="exerc13_DetalheAluno.php">Detalhe de aluno</a>
<form action="exerc13_InserirAluno.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Matricula: <input type="text" name="matricula"><br>
    Data de nascimento: <input type="date" name="dtNasc"><br>
    Email: <input type="email" name="email"><br>
    CPF: <input type="text" name="cpf"><br>
    Telefone: <input type="tel" name="telefone"><br>
    Endereço: <input type="text" name="endereco"><br>
    Cidade: <input type="text" name="cidade"><br>
    Estado: <input type="text" name="estado"><br>
    CEP: <input type="text" name="cep"><br>
    <input type="submit" name="inserir">
</form>


</body>
</html>