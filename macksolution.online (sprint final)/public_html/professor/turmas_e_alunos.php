<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/turmas_e_alunos.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="img/ico_escola.ico" />
</head>

<body>
<?php require "topo.php"; ?>
<div id="caixa_preta">
</div><!-- caixa_preta -->

<div id="box">
<h1>Abaixo mostra seu histórico de disciplinas e alunos!</h1>
<?php
 $sql_1 = "SELECT * FROM disciplinas WHERE professor = '$code'";
 $result = mysqli_query($conexao, $sql_1);
if(mysqli_num_rows($result) == ''){
	echo "Você não ministra nenhuma disciplina!";
}else{
	while($res_1 = mysqli_fetch_assoc($result)){
		$curso = $res_1['curso'];
?>	
 <table width="955" border="0">
  <tr>
    <td width="400"><strong>Disciplina ministrada:</strong> <?php echo $res_1['disciplina']; ?></td>
    <td width="300"><strong>Total de alunos desta disciplina:</strong><?php 
	$sql_2 = "SELECT * FROM estudantes WHERE serie = '$curso'";
	echo mysqli_num_rows(mysqli_query($conexao, $sql_2)); ?></td>
    
  </tr>
 </table>	
<?php }} ?>
</div><!-- box -->

<?php require "rodape.php"; ?>
</body>
</html>