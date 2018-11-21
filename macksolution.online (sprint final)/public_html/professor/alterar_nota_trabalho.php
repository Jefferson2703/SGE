<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/ico_escola.ico" />
<title>Editar Nota</title>
<?php require "../config.php"; ?>

</head>

<body>




<?php if($_GET['pg'] == 'prova_bimestral'){ ?>

<?php if(isset($_POST['send'])){

$nota = $_POST['nota'];
$bimestre = $_GET['bimestre'];
$professor = $_GET['professor'];
$disciplina = $_GET['disciplina'];
$code_aluno = $_GET['aluno'];

$sql = "UPDATE notas_provas SET nota = '$nota' WHERE code = '$code_aluno' AND bimestre = '$bimestre' AND disciplina = '$disciplina'";

mysqli_query($conexao, $sql);

echo "A nota deste aluno foi alterada com sucesso!!!";
die;
	
}?>

<em>Digite abaixo qual vai ser a nova nota</em>
<form name="" method="post" action="" enctype="multipart/form-data">

 <input class="editaNota" type="text" size="4" maxlength="7" name="nota" value="<?php echo $_GET['nota']; ?>" /><input type="submit" name="send" value="Alterar" />
</form>

<?php } ?>

</body>
</html>