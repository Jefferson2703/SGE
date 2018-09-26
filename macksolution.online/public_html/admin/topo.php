<? $painel_atual = "admin";?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require "../config.php"; ?>
<link rel="shortcut icon" href="img/ico_escola.ico" />
<link href="css/topo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<link href="../css/lightbox.css" rel="stylesheet" />


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

<body >
<div id="box_topo">
 
 <div id="logo">
  <img src="../img/logo.png" height="110" style="margin-top: 40px; "/>
 </div><!-- logo -->
 
 <div id="mostra_login" style="margin-top: 70px">
  <h1 style="margin-top: 80px"><strong>Seja Bem Vindo <i><?php echo @$nome; ?> </i>- Seu código é: <?php echo @$code; ?></strong> <strong>
    </strong></h1>
      <a href="../config.php?pg=sair" ><img src="../img/sair.png" height="50px" style="margin-top: 60px"></a>
 </div><!-- mostra_login -->
</div><!-- box_topo -->

<div id="box_menu">
 
 <div id="menu_topo">
  <ul>
   <img src="img/separador_menu.png" />
   <li class="esp"><a href="index.php">HOME</a></li>
   <img src="img/separador_menu.png" />
   <li class="esp"><a href="">CURSOS E DISCIPLINAS</a>
    <ul>
     <li><a href="#">Cadastrar Curso</a></li>
     <li><a href="#">Cadastrar Disciplina</a></li>
     <li><a href="#">Cursos & Disciplinas</a></li>
    </ul>
   </li>
   <img src="img/separador_menu.png" />
   <li class="esp"><a href="professores.php?pg=todos">PROFESSORES</a></li>   
   <img src="img/separador_menu.png" />
   <li class="esp"><a href="#">ESTUDANTES</a></li>
   <img src="img/separador_menu.png" /> 
  </ul>
 </div><!-- menu_topo -->
</div><!-- box_menu -->
</body>
</html>