<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/todas_as_avaliacoes.css"/>

<link rel="shortcut icon" href="img/ico_escola.ico" />
<link rel="stylesheet" type="text/css" href="css/professores.css"/>
<title>Provas</title>
</head>

<body>
<?php require "topo.php"; ?>

<div id="caixa_preta">
</div><!-- caixa_preta -->

<div id="box">
<?php if($_GET['pg'] == 'provas_bimestrais'){ ?>
<br /><a class="a2" rel="superbox[iframe][850x350]" href="cadastrar_prova.php?tipo=bimestral&code=<?php echo $code; ?>">Cadastrar Prova</a>
<p></p>
 <h1>Abaixo segue seu histórico de provas bimestrais de suas turmas!</h1>
 
<?php
$sql_1 = "SELECT * FROM provas_bimestrais WHERE professor = '$code' ORDER BY id DESC";
$result = mysqli_query($conexao, $sql_1);
if(mysqli_num_rows($result) == ''){
	 echo "<h2>No momento não existe nenhuma prova lançada no sistema!</h2>";	 
}else{
	while($res_1 = mysqli_fetch_assoc($result)){
?> 
<table width="955" border="0">
  <tr>
    <td width="90">Nº prova</td>
    <td width="60">Status</td>
    <td width="131">Lançamento</td>
    <td width="187">Data de aplicação</td>
    <td width="323">Disciplina</td>
  </tr>
  <tr>
    <td><h3><?php echo $res_1['id']; ?></h3></td>
    <td><h3><?php echo $res_1['status']; ?></h3></td>
    <td><h3><?php echo $res_1['date']; ?></h3></td>
    <td><h3><?php echo $res_1['data_aplicacao']; ?></h3></td>
    <td><h3><?php echo $res_1['disciplina']; ?></h3></td>
  </tr>
  <tr>

    <td colspan="3"><a class="correcao" href="correcao_prova.php?pg=prova_bimestral&id=<?php echo $res_1['id']; ?>">Fazer correção</a></td>
    <td></td>
    <td><a  style="margin-left: 250px" href="todas_as_avaliacoes.php?pg=excluir&id=<?php echo $res_1['id']; ?>&code=<?php echo $code; ?>"><img src="img/deleta.jpg" width="16" border="0" /></a>
    <a style="margin-left:4px" rel="superbox[iframe][850x350]" href="editar_prova.php?id=<?php echo $res_1['id']; ?>&code=<?php echo $code; ?>""><img src="../img/ico-editar.png" width="18" border="0" /></a>
  </td>
  </tr>  
  </table> 
 
<?php }}}

if($_GET['pg'] == 'excluir'){
	
$id = $_GET['id'];
$code = $_GET['code'];

$sql_2 = "DELETE FROM provas_bimestrais WHERE id = '$id'";
mysqli_query($conexao, $sql_2);

echo "<script language='javascript'>window.location='todas_as_avaliacoes.php?pg=provas_bimestrais';</script>";

}?> 
</div><!-- box-->



<?php require "rodape.php"; ?>
</body>
</html>