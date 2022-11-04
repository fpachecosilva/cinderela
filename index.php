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
	<header class="">
		<div class="menu">
			<div class="center">
				<div></div>
			</div>
		</div>
		<article>
		<img class="logo" src="<?php echo $images ?>logo.png">
			<div class="box-links">
				<a href="#experiencia">Experiência</a>
				<a href="#acessos">Acessos</a>
				<a href="#gastronomia">Gastronomia</a>
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
			Experiência inédita no Brasil convida pessoas de todas as idades para um dos bailes mais famosos dos contos de fada. Prepare-se para viver momentos de fantasia cheios de sabor, música, tecnologia, dança, teatro e ilusionismo. Cinderela Experience é uma atração cheia de surpresas para encantar toda a família.​
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
			Cinderela, uma das princesas mais querida dos contos de fada convida todos para o grande banquete do seu casamento. Prepare-se para viver momentos de fantasia cheios de sabor, música, tecnologia, dança, teatro e ilusionismo. Cinderela Experience é uma atração cheia de surpresas para encantar toda a família.​
			<br><br>
			Após a recepção por nossa equipe devidamente caracterizada. Os visitantes serão convidados ao salão real, onde o banquete irá acontecer. Depois de tomarem os seus lugares e realizarem seus primeiros pedidos, os funcionários da realeza levarão as delícias solicitadas já preparando o público para a segunda parte da experiência.​
			<br>
			Os assentos são definidos por ordem de chegada.​
			<br>
			Crianças a partir dos 24 meses são pagantes.​
		</p>

		<video id='videolol' src="<?php echo $images ?>cinderela.mov" preload="auto" type="video/mp4" controls poster=""></video>
	</section>

	<section id="content">
		<article>
			<div id="experiencia" class="content-item">
				<h3>
					CINDERELA DINNER SHOW: MEGA EXPERIÊNCIA CHEGA À SÃO PAULO, EM NOVEMBRO, NO SHOPPING MORUMBI TOWN
				</h3>
				<p>
				A atração, que acontece dentro do castelo da Cinderela, conta com muitas surpresas e convida toda a família para uma experiência mágica e única! Prepare-se para viver momentos de fantasia cheios de sabor, música, dança, ilusionismo e muito mais.​
				<br><br>
					Já imaginou fazer parte da história de uma das princesas mais conhecidas no mundo? E o melhor, uma história ainda não contada! Cinderela Experience traz o público, com muita música e humor, para dentro da festa de casamento de Ella (Cinderela) e Alain (Príncipe), contada a partir das antigas memórias de - ninguém mais, ninguém menos - que a Madrasta. ​
					<br><br>
					O show conta com um talentoso e carismático elenco, que interpreta os personagens do clássico livro do escritor francês Charles Perrault, de 1697, que deu origem - anos depois - ao filme. ​
					<br><br>
					Os convidados encontraram diversos cenários lúdicos e mágicos para registrar toda a experiência e torná-la ainda mais inesquecível, como por exemplo, logo na entrada do evento, a impactante e grandiosa fachada do castelo.​
					<br><br>
					Os figurinos e efeitos visuais são um show à parte: o vestido azul da princesa Cinderela ganha vida em cena ao inflar-se e iluminar todo o salão de baile, e sua carruagem aparece durante o espetáculo como um passe de mágica.​
					<br><br>
					Com números musicais românticos que emocionam, coreografias divertidas, efeitos de luz e som dignos de uma grande produção, a experiência imersiva é um grande espetáculo 360º, que conta com interações em toda a estrutura do castelo, entre elas surpreendentes números aéreos.​
				</p>
			</div>

			<div id="acessos" class="content-item">
				<h3>
					Magic Fast Pass​
				</h3>
				<p>
					Acesso exclusivo. Nessa modalidade a entrada é liberada antes das demais (Acesso Normal), assim que é liberado o salão para nossos clientes. Tornando o Magic Fast Pass, um acesso onde será possível o cliente escolher primeiro as mesas para seu grupo.​
				</p>
			</div>

			<div id="acesso" class="content-item">
				<h3>
					Magic Fast Pass​
				</h3>
				<p>
					Acesso exclusivo. Nessa modalidade a entrada é liberada antes das demais (Acesso Normal), assim que é liberado o salão para nossos clientes. Tornando o Magic Fast Pass, um acesso onde será possível o cliente escolher primeiro as mesas para seu grupo.​
				</p>
			</div>

			<div id="gastronomia" class="content-item">
				<h3>
					<!-- Cardápio -->
					<strong>Em breve mais informações.</strong>
				</h3>
				<!-- <p>
					<strong>Entradas​</strong>
					<br>
					<u>Jaq Crocs (5 unid):</u> Crocante de Tapioca (com Queijo em Formato de Estrela) com Geléia de Blue Berry;​<br>
					<u>Irmãs Malvadas (2 unid):</u> Bruschetta de Tomates Confitados com Pérolas Mágicas de Manjericão e Bruschetta de Mix de Cogumelos com Pérolas Mágicas de Trufa Branca;​<br>
					<u>Lucifer (3 unid):</u> Arancini Negro Recheado de Salmão com Coulis de Morangos Silvestres;​<br>
					<u>Salada do Rei:</u> Mesclun de Folhas Verdes com Mangas Confitadas e Salmão Defumado ou Carpaccio com Azeite Mágico de Tangerina.​<br>
					​<br>
					<strong>Principais​</strong>
					<br>
					<u>Grão-Duque:</u> Nhoque com Fonduta de Queijo e Supreme de Frango Glaciado e Brotos de Beterraba com Gelo Seco Natural;​<br>
					<u>Fada Madrinha:</u> Risoto de Abóbora com Carne Seca e Nuvem de Pimenta Biquinho  (Servido na Mini Moranga com Pavil Mágico);​<br>
					<u>Lady Tremeine:</u> Burger no Pão Australiano com Blend da Casa, Tomates Confitados, Maionese de Páprica Defumada, Crisp de Alho Poró e Queijo Empanado com Gelo Seco Natural;​
					<br><br>
					<strong>Sobremesas​</strong>
					<br>
					<u>O Príncipe:</u> Brownie de Chocolate Semi Amargo com Castanhas, Coberto com Ganache de Chocolate Branco, Suspiro Nitro de Avelã com Ganache de Chocolate Branco com Coulis de Maracujá Dourada;​<br>
					<u>Intocável da Cinderela:</u> Suspiro Nitro Blue com Tartelete com Mousse de Chocolate Branco com Lâminas de Amendôas Tostadas e Calda de Cereja;
					<br><br>
					<p>Obs.: O cardápio pode sofrer algumas alterações sem aviso prévio.</p>
				</p> -->
			</div>
		</article>
	</section>

	<!-- <div class="parceiros DesktopItem">
		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<?php echo $images ?>media-partner.png">
	</div> -->

	<section id="icones">
		<h1 class="">CINDERELA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<?php
			foreach ($data->locais as $local) {
				echo '
					<a class="'.$local->ativo.'"local="'.$local->sigla.'">'.$local->nome.'</a>
				';
			}
			?>
		</div>

		<?php
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
			<?php
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
	<a href="https://api.whatsapp.com/send?phone=5511978308478&amp;text=Oi,%20vim%20através%20do%20website%20Cinderela%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>
</html>