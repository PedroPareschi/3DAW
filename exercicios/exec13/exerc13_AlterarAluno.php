<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $conteudo = file_get_contents("alunoNovo.txt");
    foreach (preg_split("/((\r?\n)|(\r\n?))/", $conteudo) as $linha) {
        if (strpos($linha, $matricula) !== false) {
            $nome = $_POST["nome"];
            $dtNasc = $_POST["dtNasc"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $fone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $cep = $_POST["cep"];
            $txt = $nome . ";" . $matricula . ";" . $dtNasc . ";" . $email . ";" . $cpf . ";" . $fone . ";" .
                $endereco . ";" . $cidade . ";" . $estado . ";" . $cep;
            $conteudo = str_replace($linha, $txt, $conteudo);
        }
    }
    file_put_contents("alunoNovo.txt", $conteudo);
}
?>
<!doctype html >
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> Document</title>
</head>
<body>
<h1> Alterar Aluno </h1>
<br>
<a href="exerc13_InserirAluno.php"> Inserir Aluno </a><br>
<a href="exerc13_AlterarAluno.php"> Alterar Aluno </a><br>
<a href="exerc13_ListarAlunos.php"> Listar Alunos </a><br>
<a href="exerc13_ExcluirAluno.php"> Excluir Aluno </a><br>
<a href="exerc13_DetalheAluno.php"> Detalhe de aluno </a>
<form action="alterarAlunoAux.php" method="post">
    Matricula: <input type="text" name="matricula"><br>
    <input type="submit" value="Alterar">
</form>
</body>
</html>
