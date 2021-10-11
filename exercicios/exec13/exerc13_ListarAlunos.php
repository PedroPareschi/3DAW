<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $arquivo = fopen("alunoNovo.txt", "r");
    $texto = fread($arquivo, 1000);
    $texto=str_replace("\n","<br />",$texto);
    fclose($arquivo);
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
<h1>Listar Aluno</h1>
<br>
<a href="exerc13_InserirAluno.php">Inserir Aluno</a><br>
<a href="exerc13_AppendAluno.php">Adicionar Aluno</a><br>
<a href="exerc13_ListarAlunos.php">Listar Alunos</a><br>
<a href="exerc13_ExcluirAluno.php">Excluir Alunos</a><br>
<a href="exerc13_DetalheAluno.php">Detalhe de aluno</a>

<form action="exerc13_ListarAlunos.php" method="get">
    <input type="submit" name="inserir">
</form>
<?php if (!empty($texto)) {
    echo "$texto";
} ?>

</body>
</html>