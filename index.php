<!DOCTYPE HTML>
<html>

<head>
	<?php
	include 'assets/config.php';
	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';
	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	$json = file_get_contents("assets/db.json");
	$data = json_decode($json);
	?>
	<title><?php echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	<meta property="og:title" content="<?php echo $tituloPagina ?>" />
	<meta name="description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->	
</head>

<body class="Home">
	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#menu-abas">Experiência</a>
				<a href="#icones">Informações</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<?php echo $images ?>bg.jpg">
		<article>
			<h1>ENCENADO NUM BELÍSSIMO SALÃO DE BAILE​<strong>CINDERELA DINING EXPERIENCE​</strong></h1>
		</article>

		<h3 id="ancora-abas">
			Megaexperiência inédita no Brasil convida pessoas de todas as idades para um dos bailes mais famosos dos contos de fada. Prepare-se para viver momentos de fantasia cheios de sabor, música, tecnologia, dança, teatro e ilusionismo. A Bela e A Fera Experience é uma atração cheia de surpresas para encantar toda a família
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
			Ao chegar, o visitante já será recebido no jardim de um suntuoso castelo com em média 700mt² construído para receber A Bela e a Fera Dining Experience. Toda experiência começa ao se deparar com a entrada do castelo, perfeito para incríveis registros fotográficos.​
			<br><br>
			Após a recepção por nossa equipe devidamente caracterizada. Os visitante serão convidados ao salão real, onde o baile irá começar.  Depois de tomarem os seus lugares e realizarem seus primeiros pedidos, os funcionários da realeza levarão as delicias solicitadas já preparando o público para a segunda parte da experiência.​
			<br><br>
			Com a plateia em formato de restaurante, o show é uma releitura, adaptada da clássica história, originalmente escrita pela francesa Gabrielle-Suzanne Barbot em 1.740. Com dezenas de artistas, os convidados desse glamuroso evento podem esperar muita música, dança, teatro e ilusionismo, além de efeitos especiais visuais durante todo o percurso. Tudo isso enquanto se deliciam com uma experiência gastronômica desenvolvida especialmente para o evento. ​
			<br><br>
			O figurino é um show à parte. Com grande riqueza de detalhes, darão vida e realismo aos clássicos personagens Bela, Fera (que se transforma em príncipe), Candelabro, Relógio e muitos outros. Toda a equipe (recepcionistas, vendedores e garçons) também estará caracterizada com figurinos de época para que a imersão seja ainda mais completa.
			<br><br>
			Os ingressos de A Bela e A Fera Experience têm preços a partir de R$45,00 (couvert artístico). O evento atende a todas as regras de distanciamento social e higiene necessárias para sua realização.​
			<br><br>
			Os assentos são definidos por ordem de chegada. Temos dois palcos, sendo um deles 360°.<br>			
			Crianças a partir dos 24 meses são pagantes.
		</p>

		<video id='videolol' src="<?php echo $images ?>cinderela.mp4" preload="auto" type="video/mp4" controls poster=""></video>
	</section>

	<!-- <div class="parceiros DesktopItem">
		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<?php echo $images ?>media-partner.png">
	</div> -->

	<section id="icones">
		<h1 class="">CINDERELA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<?
			foreach ($data->locais as $local) {
				echo '
					<a class="'.$local->ativo.'"local="'.$local->sigla.'">'.$local->nome.'</a>
				';
			}
			?>
		</div>

		<?
		foreach ($data->locais as $local) {
			echo '
				<div class="local '.$local->sigla.' '.$local->ativo.'">
					<div class="wrapper-card">
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon02.png">
							</div>
							<h2>'.$local->local.'</h2>
						</div>
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon03.png">
							</div>
							<h2>DURAÇÃO - 75min</h2>
						</div>
					</div>
				</div>		
			';				
		}
		?>
	</section>

	<section id="valores">
		<?php include 'assets/includes/tabelas.php'; ?>
	</section>

	<section id="ingressos">
		<h1 class="">ENTRADAS</h1>		
		<p class="aviso">
			O Evento seguirá as normas e decretos municipais em relação ao enfretamento da Covid-19, tais como solicitação de comprovante de vacinação e/ou o uso de máscaras de acordo com cada cidade e tem suas condições sujeitas às mudanças dos órgãos reguladores até a data de sua sessão.
		</p>		
		
		<div class="wrapper-card">
			<?
			foreach ($data->locais as $local) {
				echo'
					<div class="card">
						<a onclick="gtag_report_conversion(' .$local->link. ')" class="Btn" href=" '.$local->link.' ">
							<h2>'.$local->nome.'</h2>
						</a>
					</div>
				';
			}
			?>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<?php echo $images ?>logo.png">
	</section>

	<?php include 'assets/footer.php'; ?>
	<a href="https://api.whatsapp.com/send?phone=5511&amp;text=Oi,%20vim%20através%20do%20website%20Cinderela%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>
</html>