<?PHP

require_once("../seguranca.php");
require_once('../seguranca.php');

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> .:: Admin ::. </title>
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body {
	background-color: #FFF;
	margin: 0px;
	width: 100%;
	height: 100vh;
	font-family: Verdana, Geneva, sans-serif;
	color: #6e7882;
	font-size: 14px;
}

#principal {
	width: 100%;
	height: 1000px;
}

#menu {
	width: 20%;
	height: 1000px;
	background-color: #ba0707;
	float: left;
}

#conteudo {
	width: 80%;
	height: 100vh;
	float: left;	
	background-color: #F4F4F4;
}

.titulo {
	width: 96%;
	height: 21px;
	float: left;
	border: 0px;
	font-weight: bold;
	color: #FFF;
	background-color: #700101;
	padding: 2%;
}

.botao {
	width: 92%;
	height: 20px;
	float: left;
	border: 0px;
	border-bottom: 2px;
	border-color: #1e2b34;
	border-style: solid;
	padding: 4%;
}

.botao:hover {
	background-color: red;
	color: #FFF;
}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #fff;
	font-size: 14px;
}

img {
	width: 12px;
	height: 12px;
}
	
</style>

</head>
<body> 
<div id="principal">
  <div id="menu">   
    <div class="titulo"> :: Login </div>
    
    <a href="../login/form_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../login/consulta_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>


<!-- 
    <div class="titulo"> :: Aluno </div>
    
    <a href="../aluno/form_aluno.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../aluno/consulta_aluno.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a> -->

	<div class="titulo"> :: Slogan </div>
    
    <a href="../slogan/form_slogan.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../slogan/consulta_slogan.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

	<!-- <div class="titulo"> :: Serviços </div>
    
    <a href="../servicos/form_servicos.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../servicos/consulta_servicos.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a> 

	<div class="titulo"> :: Projetos </div>
    
    <a href="../projetos/form_projetos.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../projetos/consulta_projetos.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a> -->


    <div class="titulo"> :: Sair </div>
    <a href="../logout.php"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Logout </div> 
    </a>
        
  </div>
    
  <div id="conteudo"> 
    <iframe name="conteudo" src="" height="1000px" width="100%" frameborder="0" scrolling="auto"> </iframe>
  </div>
  
</div>
</body>
</html>
