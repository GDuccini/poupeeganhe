<?php
header ('Content-type: text/html; charset=utf-8');
require_once("conexao.php"); 
$id1 = $_GET ['id']; 
$querry = "SELECT * FROM poupeeganhe WHERE id='$id1'";
$sql = mysqli_query($con,$querry) or die(mysqli_error($con));
if (mysqli_num_rows($sql) =='0') {
    echo "Falha no acesso ao BD";
} else {
  $artigo=mysqli_fetch_assoc($sql); 
  $autor  = $artigo['autor'];
  $data   = $artigo['data'];
  $titulo = $artigo['titulo'];
  $texto  = $artigo['texto'];
  $imagem = $artigo['imagem'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Poupe e Ganhe - Tesouro Direto, LCI, LCA, Bolsa de Valores, Bitcoin e muito mais.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
   <link rel="stylesheet" type="text/css" href="../css/artigos.css">
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116819982-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-116819982-1');
    </script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
    	<div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    		<a class="navbar-brand" href="../index.php">Poupe e Ganhe</a>
      			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        			<span class="navbar-toggler-icon"></span>
      			</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<ul class="navbar-nav mr-auto">
        		<li class="nav-item">
          	<a class="nav-link" href="principal/sairvermelho.php">Sair do vermelho</a>
      				</li>
          		<li class="nav-item">
          			<a class="nav-link" href="#">Tesouro direto</a>
          		</li>
          		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Renda fixa</a>
      					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
      						<a class="dropdown-item" href="#">Action</a>
      						<a class="dropdown-item" href="#">Another action</a>
      					</div>
    				</li>
    				<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Renda variável</a>
      					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
      						<a class="dropdown-item" href="#">Action</a>
      						<a class="dropdown-item" href="#">Another action</a>
      					</div>
    				</li>
    				<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços virtuais</a>
      					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
      						<a class="dropdown-item" href="#">Action</a>
      						<a class="dropdown-item" href="#">Another action</a>
      					</div>
    				</li>
    			</ul>
      		</div>
    	</div>
    </div>
    </br>
    </br>
    </br>
    </br>
    <div class="wrap">
      <div class="row">
        <div class="col-12">
          <img class="d-none d-md-block mx-auto img-fluid" src="http://via.placeholder.com/728x90">
          <img class="d-block d-md-none mx-auto img-fluid" src="http://via.placeholder.com/336x280">
        </div>
      </div>
      </br>
      </br>
   		<div class="row">
   			<div class="col-12 col-md-8 col-lg-9 main">
  	      <div class="row">
            <div class="col-12">
              <h1 class="text-muted"><?php echo $titulo; ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-8 img">
              <img class="img-fluid" src="../img/<?php echo $imagem; ?>.png">
            </div> 
            <div class="col-12 col-md-4 info">
              <h5 class="text-danger autor"><?php echo $autor; ?></h5>
              <h5 class="text-muted data"><?php echo $data; ?></h5>
            </div>
          </div>
          </br>
          <div class="row">
            <div class="col-12">
              <p class="text-justify"><?php echo $texto; ?></p>
            </div>
          </div>
   		  </div>
        <div class="col-12 col-md-4 col-lg-3 aside">
          <img class="d-none d-md-block mx-auto img-fluid" src="http://via.placeholder.com/300x600">
        </div>
      </div>
    </br>
    </div>
		<!--Footer-->
		<footer class="page-footer font-small blue-grey lighten-5">
      <!--Footer Links-->
        <div class="row text-center text-md-left prefoot">
        <!--First column-->
            <div class="col-12 col-sm-8 pt-4 dark-grey-text">
                  <h6 class="text-uppercase font-weight-bold">
                    <strong>Idealizadores do Poupe e Ganhe</strong>
                  </h6>
                  <strong><p class="autores">Felipe Duccini</p></strong>
                  <p class="text-justify pt-2">Bacharel em História e Mestre em História Social, aficionado por História Econômica e pelo Mercado de Capitais. É adepto da análise fundamentalista, seguindo a filosofia do <i>Value Investing</i>. Procura produzir conteúdos que atendam ao máximo as necessidades das pessoas alvo do determinado artigo.</p>
                  <strong><p class="autores">Guilherme Duccini</p></strong>
                  <p class="text-justify pt-2">Com foco na análise quantitativa contribui com as avaliações financeiras do investimento. Estrutura a apresentação do conteúdo de forma que o leitor tenha uma experiência agradável e elegante.</p>
            </div>
            <div class="col-12 col-sm-4 pt-4 dark-grey-text">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contato</strong>
                </h6>
                <p class="pt-2">Quer falar com a gente? Nos mande um email!</p>
                <p>contato@poupeeganhe.com.br</p>
                <h6 class="text-uppercase font-weight-bold">
                  <strong>Comercial</strong>
               </h6>
               <p class="pt-2">Quer nos enviar uma proposta comercial? Aguardamos seu email!
               <p>comercial@poupeeganhe.com.br</p>
            </div>
      </div>
      <div class="row">
           <!-- Copyright-->
          <div class="col-12 footer-copyright py-4">
            <div class="designer">Design: guilhermeduccini</div>
            <div class="copyright">&nbsp; &nbsp; © 2018 Poupe e Ganhe</div>
          </div>
        </div>
    </footer>
	</div>
</body>
<body>