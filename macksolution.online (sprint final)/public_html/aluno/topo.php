<?php $painel_atual = "Aluno";?>
<!DOCTYPE >
<head>
<meta />
<?php require "../config.php";


$sql_aluno = "SELECT * FROM estudantes WHERE code = '$code'";
$result = mysqli_query($conexao, $sql_aluno);
	while($r_aluno = mysqli_fetch_assoc($result)){
		$nome = $r_aluno['nome'];
		$serie = $r_aluno['serie'];
		$turno = $r_aluno['turno'];
		$cpf = $r_aluno['cpf'];
	}
?>
<title>Painel do Aluno</title>
<link href="css/topo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<link href="../css/lightbox.css" rel="stylesheet" />
<link rel="shortcut icon" href="img/ico_escola.ico" />


<link rel="stylesheet" href="../jquery.superbox.css" type="text/css" media="all" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

	<script type="text/javascript" src="../jquery.superbox-min.js"></script>
	<script type="text/javascript">

		$(function(){

			$.superbox.settings = {

				closeTxt: "Fechar",

				loadTxt: "Carregando...",

				nextTxt: "Next",

				prevTxt: "Previous"

			};

			$.superbox();

		});

	</script>
</head>

<body>
<div id="box_topo">
 
 <div id="logo">
  <img src="../img/logo.png" height="110" style="margin-top: 40px; "/>
 </div><!-- logo -->
 
 <div id="mostra_login" style="margin-top: 40px">
      <a href="../config.php?pg=sair" ><img src="../img/sair.png" height="50px" style="margin-top: 0px"></a>
  <h1 style="margin-top: 80px"><strong>Seja Bem Vindo <i><?php echo @$nome; ?> </i>- Seu código é: <?php echo @$code; ?></strong> <strong>

    </strong></h1>

 </div><!-- mostra_login -->
</div><!-- box_topo -->

<div id="box_menu">
 
 <div id="menu_topo">
  <ul>
      <img src="img/separador_menu.png" style="margin-left: 70px"/>
   <li><a href="index.php">HOME</a></li>
   <img src="img/separador_menu.png" />
   
     <li><a href="minhas_notas.php?pg=provas">Notas</a></li>
   <img src="img/separador_menu.png" />
   </li>

  </ul>
 </div><!-- menu_topo -->

</div><!-- box_menu -->
</body>
</html>