<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minhas Notas</title>
<link rel="stylesheet" type="text/css" href="css/minhas_notas.css"/>
<link rel="shortcut icon" href="img/ico_escola.ico" />
</head>

<body>
<?php require "topo.php"; ?>

<div id="caixa_preta">
</div><!-- caixa_preta -->

<div id="box">
<?php if($_GET['pg'] == 'trabalhos'){ ?>
<h1><strong>Notas de seus trabalhos em cada bimestre</strong></h1>
<table width="900" border="0">
  <tr>
    <td width="317"><strong>DISCIPLINA<br /><br /></strong></td>
    <td width="150"><strong>1º Bimestre</strong></td>
    <td width="150"><strong>2º Bimestre</strong></td>
    <td width="150"><strong>3º Bimestre</strong></td>
    <td width="150"><strong>4º Bimestre</strong></td>
  </tr>
<?php
$sql_1 = "SELECT * FROM disciplinas WHERE curso = '$serie'";
$result_1 = mysqli_query($conexao, $sql_1);
	while($res_1 = mysqli_fetch_assoc($result_1)){
		$disciplina = $res_1['disciplina'];

$sql_2 = "SELECT * FROM notas_trabalhos WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '1'";
$result_2 = mysqli_query($conexao, $sql_2);
$sql_3 = "SELECT * FROM notas_trabalhos WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '2'";
$result_3 = mysqli_query($conexao, $sql_3);
$sql_4 = "SELECT * FROM notas_trabalhos WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '3'";
$result_4 = mysqli_query($conexao, $sql_4);
$sql_5 = "SELECT * FROM notas_trabalhos WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '4'";
$result_5 = mysqli_query($conexao, $sql_5);
		
?>
  <tr>
    <td><?php echo $disciplina; ?></td>
    <td>
    <?php
    if(mysqli_num_rows($result_2) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_2 = mysqli_fetch_assoc($result_2)){
				$nota = $res_2['nota'];
				if($nota >= 7){
						echo "<h2><strong>$nota</strong></h2>";
				}else{
						echo "<h3><strong>$nota</strong></h3>";	
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_3) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_3 = mysqli_fetch_assoc($result_3)){
				$nota = $res_3['nota'];
				if($nota >= 7){
						echo "<h2><strong>$nota</strong></h2>";
				}else{
						echo "<h3><strong>$nota</strong></h3>";	
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_4) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_4 = mysqli_fetch_assoc($result_4)){
				$nota = $res_4['nota'];
				if($nota >= 7){
						echo "<h2><strong>$nota</strong></h2>";
				}else{
						echo "<h3><strong>$nota</strong></h3>";	
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_5) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_5 = mysqli_fetch_assoc($result_5)){
				$nota = $res_5['nota'];
				if($nota >= 7){
						echo "<h2><strong>$nota</strong></h2>";
				}else{
						echo "<h3><strong>$nota</strong></h3>";	
				}
				
			}
	}?>
    </td>
    </tr>
  <tr>
    <td colspan="6"><img src="img/menu_topo.png" width="900" height="1"></td>
  </tr>
<?php } ?>
</table>
<?php } ?>


<?php if($_GET['pg'] == 'provas'){ ?>
<h1><strong>Notas de suas provas em cada bimestre</strong></h1>
<table width="900" border="0">
  <tr>
    <td width="317"><strong>DISCIPLINA<br /><br /></strong></td>
    <td width="150"><strong>1º Bimestre</strong></td>
    <td width="150"><strong>2º Bimestre</strong></td>
    <td width="150"><strong>3º Bimestre</strong></td>
    <td width="150"><strong>4º Bimestre</strong></td>
  </tr>
<?php
$sql_1 = "SELECT * FROM disciplinas WHERE curso = '$serie'";
$result_1 = mysqli_query($conexao, $sql_1);
	while($res_1 = mysqli_fetch_assoc($result_1)){
		$disciplina = $res_1['disciplina'];
		
$sql_2 = "SELECT * FROM notas_provas WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '1'";
$result_2 = mysqli_query($conexao, $sql_2);		
$sql_3 = "SELECT * FROM notas_provas WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '2'";
$result_3 = mysqli_query($conexao, $sql_3);		
$sql_4 ="SELECT * FROM notas_provas WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '3'";
$result_4 = mysqli_query($conexao, $sql_4);			
$sql_5 = "SELECT * FROM notas_provas WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '4'";
$result_5 = mysqli_query($conexao, $sql_5);		
?>  
  <tr>
    <td><?php echo $disciplina; ?></td>
    <td>
    <?php
    if(mysqli_num_rows($result_2) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_2 = mysqli_fetch_assoc($result_2)){
			$nota = $res_2['nota'];
			$prova = $res_2['prova'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_2['nota']."</strong>";
			}else{
				echo "<h3><strong>".$res_2['nota']."</strong>";			
			}
			if($res_2['prova'] == ''){
			}else{
			echo " | <a target='_blank' class='a5' href='../trabalhos_alunos/$prova'>Ver</a></h2></h3>";
			}
			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_3) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_3 = mysqli_fetch_assoc($result_3)){
			$nota = $res_3['nota'];
			$prova = $res_3['prova'];
		
			if($nota >= 7){
				echo "<h2><strong>".$res_3['nota']."</strong>";
			}else{
				echo "<h3><strong>".$res_3['nota']."</strong></h3>";			
			}
			if($res_3['prova'] == ''){
			}else{
			echo " | <a target='_blank' class='a5' href='../trabalhos_alunos/$prova'>Ver</a></h2>";
			}			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_4) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_4 = mysqli_fetch_assoc($result_4)){
			$nota = $res_4['nota'];
			$prova = $res_4['prova'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_4['nota']."</strong>";
			}else{
				echo "<h3><strong>".$res_4['nota']."</strong></h3>";			
			}
			if($res_4['prova'] == ''){
			}else{
			echo " | <a target='_blank' class='a5' href='../trabalhos_alunos/$prova'>Ver</a></h2>";
			}			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_5) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_5 = mysqli_fetch_assoc($result_5)){
			$nota = $res_5['nota'];
			$prova = $res_5['prova'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_5['nota']."</strong>";
			}else{
				echo "<h3><strong>".$res_5['nota']."</strong></h3>";			
			}
			if($res_5['prova'] == ''){
			}else{
			echo " | <a target='_blank' class='a5' href='../trabalhos_alunos/$prova'>Ver</a></h2>";
			}			
	}}?>
    </td>        
  </tr>
<?php } ?>  
  <tr>
    <td colspan="6"><img src="img/menu_topo.png" width="900" height="1"></td>
  </tr>
</table>
<?php } ?>


<?php if($_GET['pg'] == 'observacao'){ ?>
<table width="900" border="0">
  <tr>
    <td width="317"><strong>DISCIPLINA<br /><br /></strong></td>
    <td width="150"><strong>1º Bimestre</strong></td>
    <td width="150"><strong>2º Bimestre</strong></td>
    <td width="150"><strong>3º Bimestre</strong></td>
    <td width="150"><strong>4º Bimestre</strong></td>
  </tr>
<?php
$sql_1 = "SELECT * FROM disciplinas WHERE curso = '$serie'";
$result_1 = mysqli_query($conexao, $sql_1);		
	while($res_1 = mysqli_fetch_assoc($result_1)){
		$disciplina = $res_1['disciplina'];
		
$sql_2 = "SELECT * FROM notas_observacao WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '1'";
$result_2 = mysqli_query($conexao, $sql_2);
		
$sql_3 = "SELECT * FROM notas_observacao WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '2'";	
$result_3 = mysqli_query($conexao, $sql_3);
	
$sql_4 = "SELECT * FROM notas_observacao WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '3'";
$result_4 = mysqli_query($conexao, $sql_4);
		
$sql_5 = "SELECT * FROM notas_observacao WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '4'";
$result_5 = mysqli_query($conexao, $sql_5);
		
?>  
  <tr>
    <td><?php echo $disciplina; ?></td>
    <td>
    <?php
    if(mysqli_num_rows($result_2) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_2 = mysqli_fetch_assoc($result_2)){
			$nota = $res_2['nota'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_2['nota']."</strong></h2>";
			}else{
				echo "<h3><strong>".$res_2['nota']."</strong></h3>";			
			}
			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_3) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_3 = mysqli_fetch_assoc($result_3)){
			$nota = $res_3['nota'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_3['nota']."</strong></h2>";
			}else{
				echo "<h3><strong>".$res_3['nota']."</strong></h3>";			
			}
			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_4) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_4 = mysqli_fetch_assoc($result_4)){
			$nota = $res_4['nota'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_4['nota']."</strong></h2>";
			}else{
				echo "<h3><strong>".$res_4['nota']."</strong></h3>";			
			}
			
		}}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_5) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_5 = mysqli_fetch_assoc($result_5)){
			$nota = $res_5['nota'];
			
			if($nota >= 7){
				echo "<h2><strong>".$res_5['nota']."</strong></h2>";
			}else{
				echo "<h3><strong>".$res_5['nota']."</strong></h3>";			
			}
			
	}}?>
    </td>        
  </tr>
<?php } ?>  
  <tr>
    <td colspan="6"><img src="img/menu_topo.png" width="900" height="1"></td>
  </tr>
</table>
<?php } ?>


<?php if($_GET['pg'] == 'bimestrais'){ ?>
<h1><strong>Suas notas bimestrais</strong></h1>
<table width="900" border="0">
  <tr>
    <td width="317"><strong>DISCIPLINA<br /><br /></strong></td>
    <td width="120"><strong>1º Bimestre</strong></td>
    <td width="120"><strong>2º Bimestre</strong></td>
    <td width="120"><strong>3º Bimestre</strong></td>
    <td width="120"><strong>4º Bimestre</strong></td>
    <td width="150"><strong>Resultado</strong></td>
  </tr>
<?php
$sql_1 = "SELECT * FROM disciplinas WHERE curso = '$serie'";
$result_1 = mysqli_query($conexao, $sql_1);
	while($res_1 = mysqli_fetch_assoc($result_1)){
		$disciplina = $res_1['disciplina'];
		
$sql_2 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '1'";
$result_2 = mysqli_query($conexao, $sql_2);
		
$sql_3 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '2'";	
$result_3 = mysqli_query($conexao, $sql_3);
	
$sql_4 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '3'";
$result_4 = mysqli_query($conexao, $sql_4);
		
$sql_5 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '4'";
$result_5 = mysqli_query($conexao, $sql_5);
		
?>  
  <tr>
    <td><?php echo $disciplina; ?></td>  
    <td>
    <?php
    if(mysqli_num_rows($result_2) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_2 = mysqli_fetch_assoc($result_2)){
				$nota = number_format($res_2['nota'],2);
				
				if($nota >= 7){
					echo "<h2><strong>$nota</strong></h2>";
				}else{
					echo "<h3><strong>$nota</strong></h3>";
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_3) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_3 = mysqli_fetch_assoc($result_3)){
				$nota = number_format($res_3['nota'],2);
				
				if($nota >= 7){
					echo "<h2><strong>$nota</strong></h2>";
				}else{
					echo "<h3><strong>$nota</strong></h3>";
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_4) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_4 = mysqli_fetch_assoc($result_4)){
				$nota = number_format($res_4['nota'],2);
				
				if($nota >= 7){
					echo "<h2><strong>$nota</strong></h2>";
				}else{
					echo "<h3><strong>$nota</strong></h3>";
				}
				
			}
	}?>
    </td>
    <td>
    <?php
    if(mysqli_num_rows($result_5) == ''){
		echo "<h2>-</h2>";
	}else{
		while($res_5 = mysqli_fetch_assoc($result_5)){
				$nota = number_format($res_5['nota'],2);
				
				if($nota >= 7){
					echo "<h2><strong>$nota</strong></h2>";
				}else{
					echo "<h3><strong>$nota</strong></h3>";
				}
				
			}
	}?>
    </td>    
    <td>
<?php
if(mysqli_num_rows($result_5) == ''){
	echo "-";
}else{
$sql_2 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '1'";		
$result_2 = mysqli_query($conexao, $sql_2);

$sql_3 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '2'";	
$result_3 = mysqli_query($conexao, $sql_3);
	
$sql_4 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '3'";	
$result_4 = mysqli_query($conexao, $sql_4);
	
$sql_5 = "SELECT * FROM notas_bimestrais WHERE code = '$code' AND disciplina = '$disciplina' AND bimestre = '4'";	
$result_5 = mysqli_query($conexao, $sql_5);


while($res_2 = mysqli_fetch_assoc($result_2)){
while($res_3 = mysqli_fetch_assoc($result_3)){
while($res_4 = mysqli_fetch_assoc($result_4)){
while($res_5 = mysqli_fetch_assoc($result_5)){
	

	$media = ($res_2['nota']+$res_3['nota']+$res_4['nota']+$res_5['nota'])/4;
	
	if($media >=7){
		echo "<h2><strong>".number_format($media,2)." - Aprovado</strong></h2>";
	}else{
		echo "<h3><strong>".number_format($media,2)." - Reprovado</strong></h3>";
	
	}}}}}}
?>    
    </td>
  </tr>
<?php } ?>  
  <tr>
    <td colspan="6"><img src="img/menu_topo.png" width="900" height="1"></td>
  </tr>
</table>

<?php } ?>
</div><!-- box -->

</body>
</html>