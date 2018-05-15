<div class="row secoes">
	<div class="col-12 artigos">
		<h1>Artigos</h1>
	</div>
</div>
<div class="row secoes">
	<div class="col-sm-6 col-md-3">
		<?php
		require_once("artigos.php"); 
		$art1   = $artigos[0];
		$id     = $art1['id'];
		$autor  = $art1['autor'];
		$data   = $art1['data'];
		$titulo = $art1['titulo'];
		$imagem = $art1['imagem'];
		$alt    = $art1['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$art2   = $artigos[1];
		$id     = $art2['id'];
		$autor  = $art2['autor'];
		$data   = $art2['data'];
		$titulo = $art2['titulo'];
		$imagem = $art2['imagem'];
		$alt    = $art2['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$art3   = $artigos[2];
		$id     = $art3['id'];
		$autor  = $art3['autor'];
		$data   = $art3['data'];
		$titulo = $art3['titulo'];
		$imagem = $art3['imagem'];
		$alt    = $art3['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$art4   = $artigos[3];
		$id     = $art4['id'];
		$autor  = $art4['autor'];
		$data   = $art4['data'];
		$titulo = $art4['titulo'];
		$imagem = $art4['imagem'];
		$alt    = $art4['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>	
	</div>
</div>
</br>
<div class="row secoes">
	<div class="col-12 artigos">
		<h1>Notícias</h1>
	</div>
</div>
<div class="row secoes">
		<div class="col-sm-6 col-md-3">
		<?php
		require_once("noticias.php"); 
		$info1  = $noticias[0];
		$id     = $info1['id'];
		$autor  = $info1['autor'];
		$data   = $info1['data'];
		$titulo = $info1['titulo'];
		$imagem = $info1['imagem'];
		$alt    = $info1['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$info2  = $noticias[1];
		$id     = $info2['id'];
		$autor  = $info2['autor'];
		$data   = $info2['data'];
		$titulo = $info2['titulo'];
		$imagem = $info2['imagem'];
		$alt    = $info2['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$info3  = $noticias[2];
		$id     = $info3['id'];
		$autor  = $info3['autor'];
		$data   = $info3['data'];
		$titulo = $info3['titulo'];
		$imagem = $info3['imagem'];
		$alt    = $info3['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<?php
		$info4  = $noticias[3];
		$id     = $info4['id'];
		$autor  = $info4['autor'];
		$data   = $info4['data'];
		$titulo = $info4['titulo'];
		$imagem = $info4['imagem'];
		$alt    = $info4['alt'];
		?>
		<div class="card img-box border-0">
			<a href="principal/pagina.php?id=<?php echo $id; ?>">
				<img class="card-img-top img-fluid rounded" alt="<?php echo $alt; ?>" src="img/<?php echo $imagem;?>.png">
				<div class="card-block">
					<h4 class="card-title text-muted"><?php echo $titulo;?></h4>
				</div>
			</a>
		</div>	
	</div>
</div>
</br>
<div class="row secoes">
	<div class="col-12 artigos">
		<h1>Recomendado</h1>
	</div>
</div>
<div class="row tablist-aba secoes">
	<div class="col-12 tabcell">
		<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
			<li class="nav-item ativo">
  				<a class="nav-link active" id="youtube-tab" data-toggle="tab" href="#youtube" role="tab" aria-controls="youtube" aria-selected="true" onclick="Background()">Canais do Youtube</a>
			</li>
			<li class="nav-item ativo">
  				<a class="nav-link" id="sites-tab" data-toggle="tab" href="#sites" role="tab" aria-controls="sites" aria-selected="false" onclick="retiraBack()">Portais</a>
			</li>
			<li class="nav-item ativo">
  				<a class="nav-link" id="livros-tab" data-toggle="tab" href="#livros" role="tab" aria-controls="livros" aria-selected="false" onclick="retiraBack()">Livros</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active tablista" id="youtube" role="tabpanel" aria-labelledby="youtube-tab">
				<div class="row videos">
  					<div class="col-12 col-md-4 video">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-item" width="560" height="315" src="https://www.youtube.com/embed/iT0Lvc04OAk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
	                	<h6 class="text-uppercase font-weight-bold dark-grey-text">Meu poupe!</h6>
	                	<p class="text-justify">Nathalia Acuri em tom divertido (as vezes mais do que gostaríamos) apresenta amplo conteúdo sobre investimentos, educação financeira pessoal e outros assuntos associados a investimento e trabalho. Devido ao grande sucesso em apenas 2 anos, coisa boa tem não é?!</p>
	  				</div>
	  				<div class="col-12 col-md-4 video">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-item" width="560" height="315" src="https://www.youtube.com/embed/-zXcJhCKA-A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>		
						</div>
						<h6 class="text-uppercase font-weight-bold dark-grey-text">Júlia Mendonça</h6>
	                	<p class="text-justify">Quer saber sobre investimentos e finanças num tom simples, divertido e sem aquele ar arrogante? Esse é o seu canal! Abrangendo diversos assuntos produzidos frequentemente, vale a pena conferir.</p>
		  			</div>
	  				<div class="col-12 col-md-4 video">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-item" width="560" height="315" src="https://www.youtube.com/embed/cJckfRrMM48" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
						<h6 class="text-uppercase font-weight-bold dark-grey-text">EconoMirna</h6>
	                	<p class="text-justify">Mesma variedade de assuntos, simplicidade e informações valiosas. A diferença está na ausência de brincadeiras, o que nem de longe significa vídeos chatos.</p>
		  			</div>
  				</div>
  			</div>
  			<div class="tab-pane fade tablista" id="sites" role="tabpanel" aria-labelledby="sites-tab">
  				<div class="row ind-sites">
  					<div class="col-12 col-md-4 websites">
  						<a href=""><img class="img-fluid center" alt="Infomoney:notícias, artigos." src="img/link1.png"></a>
						<p class="text-justify">Infomoney é um portal especializado no mercado de ações. Notícias sobre as princiapis empresas da bolsa são disponibilizas frequentemente. Além disso, possui matérias interessantes sobre consumo, renda e mercado de trabalho.</p>
						<p class="text-justify">Infomoney é associada a XP Investimentos. Artigos sobre corretoras e bancos de investimentos devem serem contextualizado com outras opções do mercado.</p>
  					</div>
	  				<div class="col-12 col-md-4 websites">
	  					<a href=""><img class="img-fluid center" alt="Exame Abril, portal notícias." src="img/link2.png"></a>
						<p class="text-justify">Exame é um portal consagrado com matérias diversificadas</p>
						<p class="text-justify">A qualidade do seu time de jornalistas produz matérias agradáveis de ler e sem politização. O diferencial deste canal são as oportunidades de trabalho em outros países e bolsas de estudos.</p>
	  				</div>
	  				<div class="col-12 col-md-4 websites">
	  					<a href=""><img class="img-fluid center" alt="Geração de Valor, Flávio Augusto." src="img/link3.png"></a>
	  					<p class="text-justify">O portal Geração de Valor é mantido pelo empreendedor Flávio Augusto e sua equipe.</p>
	  					<p class="text-justify">Com matérias de impacto em nível elegante, é um canal valioso para quem deseja crescer pessoalmente e financeiramente.</p>
	  				</div>
  				</div>
  			</div>
  			<div class="tab-pane fade tablista" id="livros" role="tabpanel" aria-labelledby="livros-tab">
  				<div class="row">
  					<div class="col-12 col-md-4">
  						<div class="row ind-livros">
  							<div class="row">
  								<div class="col-6">
  									<img class="img-fluid" alt="Pai Rico, Pai Pobre. - Robert Kiyosaki" src="img/livro1.png">
  								</div>
  								<div class="col-6">
  									<h1>Autor:</h1>
  									<p>Robert Kiyosaki e Sharon Lechter</p>
  								</div>
  							</div>
  							</br>
  							<div class="row">
  								<div class="col-12">
  									<p class="text-justify">Aprendemos neste clássico que a educação financeira é a chave para a prosperidade, em contraponto ao pensamento automático no qual a riqueza se baseia no quanto a pessoa ganha. Este é o primeiro passo de um mindset próspero.</p>
  								</div>
  							</div>
  						</div>
  					</div>
	  				<div class="col-12 col-md-4">
	  					<div class="row ind-livros">
  							<div class="row">
  								<div class="col-6">
  									<img class="img-fluid" alt="Os Segredos da Mente Milionária. - T. Havr Eker" src="img/livro2.png">
  								</div>
  								<div class="col-6">
  									<h1>Autor:</h1>
  									<p>T. Havr Eker</p>
  								</div>
  							</div>
  							</br>
  							<div class="row">
  								<div class="col-12">
  									<p class="text-justify">Após aprendermos o quão importante é o mindset próspero e proativo, conhecemos neste livros diversos exemplos dos resultados dessa filosofia. Ter uma mente enriquecedora não é uma coincidência e sim um padrão.</p>
  								</div>
  							</div>
  						</div>
	  				</div>
	  				<div class="col-12 col-md-4">
	  					<div class="row ind-livros livro3">
  							<div class="row">
  								<div class="col-6">
  									<img class="img-fluid" alt="O Homem mais Rico da Babilônia. - George Clason" src="img/livro3.png">
  								</div>
  								<div class="col-6">
  									<h1>Autor:</h1>
  									<p>George Clason</p>
  								</div>
  							</div>
  						   </br>
  							<div class="row">
  								<div class="col-12">
  									<p class="text-justify">Estamos convencidos que uma mente enriquecedora vai para frente. Bate aquela voz interior, será que eu consigo? Este livro mostra como uma pessoa com baixo patrimônio pode chegar longe.</p>
  								</div>
  							</div>
  						</div>
	  				</div>
  				</div>
  			</div>
		</div>
	</div>
</div>