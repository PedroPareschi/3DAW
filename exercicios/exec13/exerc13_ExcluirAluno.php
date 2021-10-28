<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];

    $arquivoAlunoIn = fopen("alunoNovo.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoAlunoIn)) {
        $linhas[] = fgets($arquivoAlunoIn);
    }
    fclose($arquivoAlunoIn);

    $arquivoAlunoOut = fopen("alunoNovo.txt", "w") or die("Erro na abertura do arquivo");
    $x = 0;
    foreach($linhas as $linha) {
        $colunaDados = explode(";", $linha);
        if ($colunaDados[1] != $matricula) {
            $txt = $linha;
            fwrite($arquivoAlunoOut, $txt);
        }
    }
    fclose($arquivoAlunoOut);
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
<h1>Excluir Aluno</h1>
<br>
<a href="exerc13_InserirAluno.php">Inserir Aluno</a><br>
<a href="exerc13_AlterarAluno.php">Alterar aluno</a><br>
<a href="exerc13_ListarAlunos.php">Listar Alunos</a><br>
<a href="exerc13_ExcluirAluno.php">Excluir Aluno</a><br>
<a href="exerc13_DetalheAluno.php">Detalhe de aluno</a>

<form action="exerc13_ExcluirAluno.php" method="post">
    Nome: <input type="text" name="matricula">
    <input type="submit" name="inserir">
</form>
</body>
</html>