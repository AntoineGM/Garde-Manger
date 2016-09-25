<?php 
    require_once('includes/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - Garde Manger</title>

	<!-- [ include for all pages ] -->
	<?php include "includes/head.php" ?>

	<!-- [ css for home page ] -->
	<link rel="stylesheet" href="<?php echo static_url(); ?>css/pages/home.css">

</head>
<body class="home">

<div id="page">

	<!-- [ include for all pages ] -->
	<?php include "includes/page-start.php" ?>

	<header class="site-header-home site-header">

		<div class="row-logo">
			<h1 class="logo">Garde Manger</h1>
			<h2 class="logo-tagline">Você escolhe, a gente colhe.</h2>
		</div>
		<!-- /.row-logo -->

		<button class="toggle-menu c-hamburger c-hamburger--htx">
            <span>Abrir/fechar menu</span>
        </button>

		<div class="site-header-container">

			<div class="row-top-links">
				<span class="item-link btn-open-modal" data-modal=".site-modal-login">Login</span>
				<span class="item-link btn-open-modal" data-modal=".site-modal-cadastro">Cadastre-se</span>
				<a href="#atendimentoaocliente" class="go-to-section item-link">Contato</a>
			</div>
			<!-- /.row-top-links -->

			<nav class="row-bottom-links">
				<ul class="links">
					<li class="item"><a href="#quemsomos" class="go-to-section item-link">Quem somos</a></li>
					<li class="item"><a href="#comofunciona" class="go-to-section item-link">Como funciona</a></li>
					<li class="item item-w-sub-menu">
						<span class="item-link">Planos</span>
						<ul class="sub-menu">
							<li class="sub-menu-item"><a href="#planos" data-slick-el=".plans-slider" data-slick-item="zero" class="go-to-section sub-menu-link">Plano P</a></li>
							<li class="sub-menu-item"><a href="#planos" data-slick-el=".plans-slider" data-slick-item="1" class="go-to-section sub-menu-link">Plano M</a></li>
							<li class="sub-menu-item"><a href="#planos" data-slick-el=".plans-slider" data-slick-item="2" class="go-to-section sub-menu-link">Plano G</a></li>
						</ul>
						<!-- /.sub-menu -->
					</li>
					<li class="item"><a href="#entregas" class="go-to-section item-link">Entregas</a></li>
					<li class="item item-w-sub-menu">
						<span class="item-link">Alimentos</span>
						<ul class="sub-menu">
							<li class="sub-menu-item"><a href="#alimentos" data-after-scroll="openModalAlimHorta" class="go-to-section sub-menu-link">Da horta</a></li>
							<li class="sub-menu-item"><a href="#alimentos" data-after-scroll="openModalAlimJardim" class="go-to-section sub-menu-link">Do jardim</a></li>
							<li class="sub-menu-item"><a href="#alimentos" data-after-scroll="openModalAlimPomar" class="go-to-section sub-menu-link">Do pomar</a></li>
							<li class="sub-menu-item"><a href="#alimentos" data-after-scroll="openModalAlimGalinheiro" class="go-to-section sub-menu-link">Do galinheiro</a></li>
						</ul>
						<!-- /.sub-menu -->
					</li>
					<li class="item"><a href="#meugardemanger" class="go-to-section item-link">Meu Garde Manger</a></li>
					<li class="item"><a href="#feiraonline" class="go-to-section item-link">Feira Online</a></li>
					<li class="item item-w-sub-menu">
						<span class="item-link">O Garde Manger</span>
						<ul class="sub-menu">
							<li class="sub-menu-item"><a href="#ogardemanger" class="go-to-section sub-menu-link">Espaço</a></li>
							<li class="sub-menu-item"><span data-modal=".site-modal-visita" class="btn-open-modal sub-menu-link">Visitas</span></li>
						</ul>
						<!-- /.sub-menu -->
					</li>
					<li class="item item-w-sub-menu">
						<span class="item-link">Contato</span>
						<ul class="sub-menu">
							<li class="sub-menu-item"><a href="#duvidasfrequentes" class="go-to-section sub-menu-link">Dúvidas Frequentes</a></li>
							<li class="sub-menu-item"><a href="#atendimentoaocliente" class="go-to-section sub-menu-link">Atendimento ao cliente</a></li>
						</ul>
						<!-- /.sub-menu -->
					</li>
				</ul>
				<!-- /.links -->
			</nav>
			<!-- /.row-bottom-links -->

			<div class="social-links">
				<a href="#" target="_blank" title="Facebook" class="item-link-social icon icon-svg_facebook">Facebook</a>
				<a href="#" target="_blank" title="Instagram" class="item-link-social icon icon-svg_instagram">Instagram</a>
				<a href="#" target="_blank" title="Youtube" class="item-link-social icon icon-svg_youtube">Youtube</a>
				<a href="#" target="_blank" title="Pinterest" class="item-link-social icon icon-svg_pinterest">Pinterest</a>
			</div>
			<!-- /.social-links -->

		</div>
		<!-- /.site-header-container -->

	</header>
	<!-- /.site-header-home site-header -->

	<!-- Banner slider -->
	<div class="home-banner-top">
		<div class="slider">
		
			<article class="slide">
				<div class="text-container text-right">
					<h2 class="slide-title">Lorem ipsum dolor amet?</h2>
					<p class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#" class="slide-button">
						<span class="icon icon-svg_arrow-down"></span>
						<span class="button-text">Ir para lista de compras</span>
					</a>
				</div>
				<div class="text-container text-left-container">
					<p class="text-left">Lista de compras</p>
				</div>
				<figure class="slide-image">
					<img width="437" height="425" src="<?php echo static_url(); ?>images/home/banner01.png" alt="" class="image">
				</figure>
				<!-- /.slide-image -->
			</article>
			<!-- /.slide -->
		
			<article class="slide">
				<div class="text-container text-right">
					<h2 class="slide-title">Lorem ipsum dolor amet?</h2>
					<p class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#" class="slide-button">
						<span class="icon icon-svg_arrow-down"></span>
						<span class="button-text">Ir para lista de compras</span>
					</a>
				</div>
				<div class="text-container text-left-container">
					<p class="text-left">Lista de compras</p>
				</div>
				<figure class="slide-image">
					<img width="437" height="425" src="<?php echo static_url(); ?>images/home/banner01.png" alt="" class="image">
				</figure>
				<!-- /.slide-image -->
			</article>
			<!-- /.slide -->

			<article class="slide">
				<div class="text-container text-right">
					<h2 class="slide-title">Lorem ipsum dolor amet?</h2>
					<p class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="#" class="slide-button">
						<span class="icon icon-svg_arrow-down"></span>
						<span class="button-text">Ir para lista de compras</span>
					</a>
				</div>
				<div class="text-container text-left-container">
					<p class="text-left">Lista de compras</p>
				</div>
				<figure class="slide-image">
					<img width="437" height="425" src="<?php echo static_url(); ?>images/home/banner01.png" alt="" class="image">
				</figure>
				<!-- /.slide-image -->
			</article>
			<!-- /.slide -->

		</div>
		<!-- /.slider -->
	</div>
	<!-- /.home-banner-top -->
	<!-- // Banner slider -->

	<!-- Quem somos -->
	<section class="home-who-we-are home-section site-section" id="quemsomos">

		<span class="btn-arrow-down icon icon-svg_arrow-down"></span>

		<h2 class="section-title">Quem somos</h2>

		<figure class="section-image image10"><img width="499" height="98" src="<?php echo static_url(); ?>images/home/quem-somos-imagem.jpg" alt="" class="image img-responsive"></figure>

		<div class="section-text">
			<p>Antes de a gente se mudar para as cidades, as pessoas acordavam com as galinhas. Não faz muito tempo. Avós, bisavós ou seus pais, mesmo. Cuidavam da terra e colhiam para comer. <br> Batatas, alface, mamão e ovos ficavam guardados no garde manger. Um armário pequeno e fechado para proteger os alimentos. E daí veio a nossa ideia.</p>
			<p><strong>Somos seu garde manger de hoje em dia. Uma plataforma online para cuidar dos alimentos que você escolhe pra gente plantar. </strong></p>
			<p>Onde? Na nossa horta comunitária. A gente cultiva, colhe e te entrega. <br> E você acompanha tudo por aqui. Legumes crescendo, verduras ficando verdinhas. <br> Frutas do pomar e ovos da sua galinha. Já vai pensando no nome dela.</p>
			<p>Voltamos ao campo pra você voltar a se alimentar como antes. <br> Sabendo a origem do que come, respeitando o sabor e o tempo das coisas. <br> Com um pouco de tecnologia e muita sabedoria de antigamente. <br> Aproveitamos até a água da chuva. E queremos que você perceba como tudo fica mais simples, mais bonito e bem mais gostoso assim.</p>
		</div>
		<!-- /.section-text -->

		<figure class="section-image image20"><img width="1360" height="257" src="<?php echo static_url(); ?>images/home/quem-somos-imagem02.jpg" alt="" class="image img-responsive"></figure>

	</section>
	<!-- /.home-who-we-are -->
	<!-- // Quem somos -->

	<!-- Como funciona -->
	<section class="home-how-it-works home-section site-section" id="comofunciona">

		<span class="btn-arrow-down icon icon-svg_arrow-down"></span>
		<h2 class="section-title">Como funciona</h2>
		<!-- /.section-title -->

		<div class="home-how-it-works-slider">

			<div class="slider-label">
				<span class="text">Como funciona?</span>
				<span class="total-itens"><span class="active"></span> <span class="sep"></span> <span class="total"></span> </span>
			</div>
			<!-- /.slider-label -->
			
			<div class="slider">
				
				<article class="slide">
					<h3 class="title">
						<span class="number">1</span> Prepare <span class="br"></span> a terra
					</h3>

					<p><strong>Escolha seu tipo de horta:</strong> <br>
					Nova, você escolhe tudo. <br>
					Padrão, sugerimos metade das escolhas. <br>
					Pronta, uma que alguém já usou. <br>
					</p>

					<p><strong>O tamanho dela:</strong> <br>
					P - 1 a 2 pessoas <br>
					M - 2 a 3 pessoas <br>
					G - 3 a 4 pessoas <br>
					</p>

					<p><strong>E o nome da sua galinha, <span class="br"></span>
					seus ovos virão só dela.</strong>	 </p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">2</span> Escolha <span class="br"></span> os alimentos
					</h3>

					<p> <strong>Legumes</strong>
					<strong>Verduras</strong> <br>
					<strong>Ervas e temperos</strong> <br>
					<strong>Frutas</strong> <br>
					<strong>Flores</strong> </p>

					<p>A quantidade e a variedade de vegetais muda para cada tipo e tamanho de horta. E é você que decide o que e quanto vai querer de cada alimento.</p>

				</article>
				<!-- /.slide -->
				
				<article class="slide">
					<h3 class="title">
						<span class="number">3</span> Aprenda o tempo do cultivo
					</h3>

					<p>Se sua horta for nova, a terra precisa de 2 meses antes da primeira colheita. </p>

					<p>E você só começa a pagar depois disso. Se for a horta padrão, assim que se registrar, você já começa a receber. </p>
					
				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">4</span> Quantas colheitas por mês?
					</h3>

					<p>1, mensal <br> 2, quinzenal <br> 4, semanal</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">5</span> Acompanhe sua horta
					</h3>

					<p>Pelo seu registro, você consegue saber como vai a plantação por aqui. Se o tomate cresceu, se a rúcula tá bem verdinha e se a galinha está botando direitinho.</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">6</span> E se a chuva atrapalhar ou a praga tomar conta?
					</h3>

					<p>Não tem problema. Como não usamos defensivos agrícolas e cultivamos de um jeito bem natural, pode ser que isso aconteça mesmo. </p>

					<p>Mas a gente entende da terra e garante uma colheita mínima. Temos hortas extras para te abastecer, nesses casos. Vamos te informar pela plataforma, caso isso aconteça.  </p>
					
					<p>E você só paga o que receber. </p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">7</span> Hora da colheita
					</h3>

					<p>Separamos, limpamos e embalamos tudo pra você. Logo, logo, sua feirinha chega em casa.</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">8</span> Muita batata? Venda ou troque por outros alimentos.
					</h3>

					<p>Você pode oferecer para venda o que acha que vai sobrar ou trocar por alimentos que outras pessoas estão oferecendo. </p>

					<p>Pode vender tudo também, quando for viajar! Os créditos são em moeda virtual e os preços variam conforme a demanda, pra não deixar nada sobrar.</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">9</span> Sua feira chegou!
					</h3>

					<p>Levamos tudo pra você, no dia combinado. </p>
					<p>Vegetais e ovos fresquinhos, embalados com carinho.</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">10</span> Quer só comprar?
					</h3>

					<p>Então escolha as entregas avulsas. </p>

					<p>Nossa feirinha virtual fica acessível para quem quiser. Você pode montar sua cesta e receber tudo em casa também.</p>

				</article>
				<!-- /.slide -->	
				
				<article class="slide">
					<h3 class="title">
						<span class="number">11</span> Visite sua horta
					</h3>

					<p>Escolha um dos dias disponíveis e venha visitar a gente. </p>

					<p>Você vai ver de perto como anda a plantação, conhecer sua galinha e comer umas frutas do pé.</p>

				</article>
				<!-- /.slide -->	

			</div>
			<!-- /.slider -->

		</div>
		<!-- /.home-how-it-works-slider -->
		
	</section>
	<!-- /#comofunciona.home-how-it-works -->
	<!-- // Como funciona -->

	<!-- Planos -->
	<section class="home-plans home-section site-section" id="planos">
		
		<span class="btn-arrow-down icon icon-svg_arrow-down"></span>
		<h2 class="section-title">Nossos planos</h2>
		<!-- /.section-title -->

		<div class="home-plans-slider">

			<ul class="plans-slider-dots">
				<li class="item">Plano <span class="plan">P</span></li>
				<li class="item">Plano <span class="plan">M</span></li>
				<li class="item">Plano <span class="plan">G</span></li>
			</ul>
			<!-- /.plans-slider-dots -->

			<div class="slider plans-slider">

				<article class="slide">

					<figure class="slide-image"><img class="image" width="229" height="434" src="<?php echo static_url(); ?>images/home/planos-imagem-p.png" alt=""></figure>

					<div class="content-left">
						<h3 class="title">Plano P</h3>
						<p class="subtitle">1 a 2 pessoas</p>
						<p class="description10">1 galinha <span class="br"></span> e 20 células* para plantio</p>
						<p class="description20">*Célula é cada espaço <span class="br"></span> de 40cm X 40cm, <span class="br"></span> onde plantamos seus <span class="br"></span> alimentos na nossa horta.</p>
						<p class="description30">Bom para quem não cozinha muito ou não come em casa todos os dias.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>
					<!-- /.content-left -->

					<div class="content-right">
						<p class="title">Plano P</p>
						<p class="subtitle">1 a 2 pessoas</p>
						<p class="description10">1 galinha e 20 células para plantio</p>
						<p class="description30">Bom para quem não cozinha muito ou não come em casa todos os dias.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>

				</article>
				<!-- /.slide -->

				<article class="slide">

					<figure class="slide-image"><img class="image" width="320" height="320" src="<?php echo static_url(); ?>images/home/planos-imagem-m.png" alt=""></figure>

					<div class="content-left">
						<h3 class="title">Plano M</h3>
						<p class="subtitle">3 a 4 pessoas</p>
						<p class="description10">1 galinha <span class="br"></span> e 30 células* para plantio</p>
						<p class="description20">*Célula é cada espaço de <span class="br"></span> 40cm X 40cm, onde plantamos seus alimentos na nossa horta.</p>
						<p class="description30">Para quem gosta de cozinhar e faz várias refeições em casa.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>
					<!-- /.content-left -->

					<div class="content-right">
						<p class="title">Plano M</p>
						<p class="subtitle">3 a 4 pessoas</p>
						<p class="description10">1 galinha e 30 células para plantio</p>
						<p class="description30">Para quem gosta de cozinhar e faz várias refeições em casa.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>

				</article>
				<!-- /.slide -->

				<article class="slide">

					<figure class="slide-image"><img class="image" width="290" height="343" src="<?php echo static_url(); ?>images/home/planos-imagem-g.png" alt=""></figure>

					<div class="content-left">
						<h3 class="title">Plano G</h3>
						<p class="subtitle">4 a 5 pessoas</p>
						<p class="description10">2 galinhas e 50 células* para plantio</p>
						<p class="description20">*Célula é cada espaço de 40cm X 40cm, onde plantamos seus alimentos na nossa horta.</p>
						<p class="description30">Tamanho família, para quem tem a casa cheia e cozinha bastante.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>
					<!-- /.content-left -->

					<div class="content-right">
						<p class="title">Plano G</p>
						<p class="subtitle">4 a 5 pessoas</p>
						<p class="description10">2 galinhas e 50 células para plantio</p>
						<p class="description30">Tamanho família, para quem tem a casa cheia e cozinha bastante.</p>
						<p class="price"><span class="dst">R$ 000,00</span> / por mês</p>
					</div>

				</article>
				<!-- /.slide -->

			</div>
			<!-- /.slider plans-slider -->
			
		</div>
		<!-- /.home-plans-slider -->
	</section>
	<!-- /#plans.home-plans -->
	<!-- // Planos -->

	<!-- Entregas -->
	<section class="home-shipping home-section site-section" id="entregas">

		<span class="btn-arrow-down icon icon-svg_arrow-down"></span>
		
		<h2 class="section-title">Entregas</h2>
		<!-- /.section-title -->

		<p class="desc">Fique tranquilo. Garantimos sua entrega independentemente do clima, do risco de pragas ou de qualquer contratempo. Temos hortas para reserva de colheita, afinal, sabemos que não podemos controlar a natureza.</p>

		<figure class="section-image"><img width="1360" height="395" src="<?php echo static_url(); ?>images/home/entregas.jpg" alt="" class="image"></figure>

	</section>
	<!-- /#entregas.home-shipping home-section site-section -->
	<!-- // Entregas -->

	<!-- Alimentos -->
	<section class="home-foods home-section site-section" id="alimentos">

		<div class="section-container">

			<h2 class="section-title">Alimentos <span class="tooltip tooltip10">Passe o mouse na foto para ver a descrição</span></h2>
			<!-- /.section-title -->
			<p class="desc">Quer saber mais sobre as informações de cada alimento, <a href="<?php echo site_url(); ?>/pages/alimentos.php">clique aqui.</a></p>

			<p class="tooltip-mobile"><span class="tooltip tooltip10">Aperte sobre a foto para ver a descrição</span></p>

			<ul class="home-foods-types">
				<li class="item">
					<button class="btn-hover"></button>
					<h3 class="item-title">Da horta</h3>
					<p class="item-desc">Legumes, verduras e ervas. <span class="br"></span> Todos fresquinhos, adubados com matéria orgânica e mineral, como antigamente.</p>
					<img width="307" height="307" src="<?php echo static_url(); ?>images/home/alimentos-horta.jpg" alt="" class="item-image img-responsive">
					<button class="btn-view-itens btn-open-modal" type="button" data-modal=".site-modal-foods-horta" data-callback-open="slickModalFoodsStart" data-callback-close="slickModalFoodsDestroy"><span class="btn-arrow-down icon icon-svg_arrow-down" data-grunticon-embed></span><span class="text">Veja aqui o que está sendo cultivado.</span></button>
				</li>
				<li class="item">
					<button class="btn-hover"></button>
					<h3 class="item-title">Do jardim</h3>
					<p class="item-desc">Flores para alegrar sua cesta <span class="br"></span> e perfumar os alimentos. Já imaginou um arranjo do campo na sua sala?</p>
					<img width="307" height="307" src="<?php echo static_url(); ?>images/home/alimentos-jardim.jpg" alt="" class="item-image img-responsive">
					<button class="btn-view-itens btn-open-modal" type="button" data-modal=".site-modal-foods-jardim" data-callback-open="slickModalFoodsStart" data-callback-close="slickModalFoodsDestroy"><span class="btn-arrow-down icon icon-svg_arrow-down" data-grunticon-embed></span><span class="text">Saiba quem anda <span class="br"></span> ciscando por aqui.</span></button>
				</li>
				<li class="item">
					<button class="btn-hover"></button>
					<h3 class="item-title">Do pomar</h3>
					<p class="item-desc">As frutas de cada época, direto do pé. Essas árvores fazem tudo aqui funcionar melhor. Enriquecem o solo com o que cai no chão e bloqueiam a entrada de pragas. Também alimentam os pássaros que ajudam a semear outra vez.</p>
					<img width="307" height="307" src="<?php echo static_url(); ?>images/home/alimentos-pomar.jpg" alt="" class="item-image img-responsive">
					<button class="btn-view-itens btn-open-modal" type="button" data-modal=".site-modal-foods-pomar" data-callback-open="slickModalFoodsStart" data-callback-close="slickModalFoodsDestroy"><span class="btn-arrow-down icon icon-svg_arrow-down" data-grunticon-embed></span><span class="text">Conheça nossos pés de frutas.</span></button>
				</li>
				<li class="item">
					<button class="btn-hover"></button>
					<h3 class="item-title">Do galinheiro</h3>
					<p class="item-desc">Temos três espécies de galinhas. <span class="br"></span> Cada uma bota em média 2 ovos por semana e você pode ter mais de uma se quiser. Dependendo da espécie, pode até ser 1 por dia, ou só 1 por semana. Elas têm uma coleirinha com nome e os cuidadores tomam conta para que botem sempre nos seus ninhos.</p>
					<img width="307" height="307" src="<?php echo static_url(); ?>images/home/alimentos-galinheiro.jpg" alt="" class="item-image img-responsive">
					<button class="btn-view-itens btn-open-modal" type="button" data-modal=".site-modal-foods-galinheiro" data-callback-open="slickModalFoodsStart" data-callback-close="slickModalFoodsDestroy"><span class="btn-arrow-down icon icon-svg_arrow-down" data-grunticon-embed></span><span class="text">Saiba quem anda ciscando por aqui.</span></button>
				</li>
			</ul>
			<!-- /.home-foods-types -->

			<button class="btn-view-all">Ver lista completa de produtos <span class="icon icon-svg_plus"></span></button>

			<section class="home-foods-all-itens">

				<button class="btn-close icon icon-svg_close" data-grunticon-embed><span class="txt">Fechar</span></button>

				<h4 class="title"><span class="text">Lista de produtos</span></h4>
				<!-- /.title -->

				<div class="home-foods-list home-foods-list10">
					<button class="btn-close icon icon-svg_close" data-grunticon-embed><span class="txt">Fechar</span></button>
					<h5 class="list-title">Da Horta</h5>

					<div class="foods-list-slider">
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<!-- /.foods-list-slide -->
					</div>
					<!-- /.foods-list-slider -->

				</div>
				<!-- /.home-foods-list -->
				

				<div class="home-foods-list home-foods-list20">
					<button class="btn-close icon icon-svg_close" data-grunticon-embed><span class="txt">Fechar</span></button>
					<h5 class="list-title">Do Jardim</h5>

					<div class="foods-list-slider">
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<!-- /.foods-list-slide -->
					</div>
					<!-- /.foods-list-slider -->

				</div>
				<!-- /.home-foods-list -->
				
				<div class="home-foods-list home-foods-list30">
					<button class="btn-close icon icon-svg_close" data-grunticon-embed><span class="txt">Fechar</span></button>
					<h5 class="list-title">Do Pomar</h5>

					<div class="foods-list-slider">
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<!-- /.foods-list-slide -->
					</div>
					<!-- /.foods-list-slider -->

				</div>
				<!-- /.home-foods-list -->
				

				<div class="home-foods-list home-foods-list40">
					<button class="btn-close icon icon-svg_close" data-grunticon-embed><span class="txt">Fechar</span></button>
					<h5 class="list-title">Do Galinheiro</h5>

					<div class="foods-list-slider">
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum dolor amet double line</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
						<ul class="foods-list-slide slide">
							<li class="foods-list-slide-item">Lorem ipsum</li>
						</ul>
					</div>
					<!-- /.foods-list-slider -->

				</div>
				<!-- /.home-foods-list -->
				
			</section>
			<!-- /.home-foods-all-itens -->

		</div>
		<!-- /.section-container -->

	</section>
	<!-- /#alimentos.home-foods home-section site-section -->
	<!-- // Alimentos -->

	<!-- Meu Garde Manger -->
	<section class="home-my-garde-manger home-section site-section" id="meugardemanger">
		<div class="section-content">
			<div class="content">

				<h2 class="section-title">Meu Garde Manger</h2>
				<p class="desc">Aqui você acompanha todo o cultivo e também a produção de ovos. <br> Tem atualizações toda semana - uma ou duas vezes - e até todo dia, como no caso dos ovos. <br> Dá para ter uma previsão da quantidade de alimentos e da data de colheita.</p>

				<button class="btn-do-action btn-open-modal" data-modal=".site-modal-login" type="button"><span class="text">Fazer login</span></button>

			</div>
			<!-- /.content -->

			<figure class="section-image image10"><img width="520" height="658" src="<?php echo static_url(); ?>images/home/meu-gm.png" alt="" class="image"></figure>

		</div>
		<!-- /.section-content -->

		<figure class="section-image image20"><img width="800" height="726" src="<?php echo static_url(); ?>images/home/meu-gm-02.jpg" alt="" class="image"></figure>
	</section>
	<!-- /#meugardemanger.home-my-garde-manger home-section site-section -->
	<!-- // Meu Garde Manger -->

	<!-- Feira online -->
	<section class="home-section site-section home-online-market" id="feiraonline">
		<div class="section-content">
			<span class="btn-arrow-down icon icon-svg_arrow-down"></span>
			<h2 class="section-title">Feira Online <span class="tooltip tooltip10">Compras e vendas avulsas</span></h2>
			<p class="desc">Aqui você compra de quem já cultiva, vende o que está sobrando e acumula moeda virtual.</p>
			<article class="content-col col10">
				<h3 class="col-title">COMPRA AVULSA EM REAIS</h3>
				<p class="text">Para quem não é assinante ou ainda não acumulou moeda virtual. Entre aqui e faça a feira com os produtos da nossa horta.</p>
				<a href="#" class="btn-arrow-link"><span class="btn-arrow-down icon icon-svg_arrow-down"></span><span class="text">Comprar créditos</span></a>
			</article>
			<!-- /.content-col col10 -->
			<article class="content-col col20">
				<h3 class="col-title">COMPRA COM MOEDA VIRTUAL</h3>
				<p class="text">É assinante e quer completar sua cesta com mais produtos? Use seus créditos aqui.</p>
				<a href="#" class="btn-arrow-link"><span class="btn-arrow-down icon icon-svg_arrow-down"></span><span class="text">Comprar créditos</span></a>
			</article>
			<!-- /.content-col col20 -->
			<article class="content-col col30">
				<h3 class="col-title">VENDINHA</h3>
				<p class="text">Ofereça aqui os alimentos que estão sobrando para acumular créditos em moeda virtual. <br> A gente atualiza o estoque e disponibiliza os produtos para quem quer comprar. <br> E você pode usar seus créditos para trocar pelo que quiser depois.</p>
			</article>
			<!-- /.content-col col30 -->
		</div>
		<!-- /.section-content -->
	</section>
	<!-- /#feiraonline.home-section site-section home-online-market -->
	<!-- // Feira online -->

	<!-- O Garde Manger -->
	<section class="home-about-garde-manger home-section site-section" id="ogardemanger">
		<div class="section-container">
			<h2 class="section-title">O Garde Manger</h2>
			<p class="desc">Estamos dividos em células, espalhadas em diferentes regiões. <br> Assim, não fazemos cultivos muito extensos, respeitamos mais o solo e cuidamos melhor de quem trabalha com a gente.</p>
			<!-- /.section-title -->
			<p class="title-itens"><span class="text">Cada célula Garde Manger tem: <span class="help-text">(passe o mouse no quadrado para ver a descrição)</span></span></p>
			<ul class="description-itens">
				<li class="desc-item hover">
					<p class="item-name"><span class="text">Hortas</span></p>
					<p class="desc-text small left">Hortas, para 100 clientes em média</p>
				</li>
				<li class="desc-item">
					<p class="item-name"><span class="text">Pomar</span></p>
				</li>
				<li class="desc-item hover">
					<p class="item-name"><span class="text">Galinheiro</span></p>
					<p class="desc-text small bottom">Galinheiro, com 100 galinhas em média</p>
				</li>
				<li class="desc-item hover">
					<p class="item-name"><span class="text">Galpão-armazém</span></p>
					<p class="desc-text large bottom">Galpão-armazém, que guarda ferramentas de cultivo e recolhe água da chuva para a irrigação</p>
				</li>
				<li class="desc-item hover">
					<p class="item-name"><span class="text">Espaço de mudas</span></p>
					<p class="desc-text large right">Espaço de mudas, onde plantamos as sementes e criamos as plantas antes de irem para cada horta</p>
				</li>
			</ul>
			<!-- /.description-itens -->
			<!-- /.title-itens -->
		</div>
		<!-- /.section-container -->

		<div class="home-about-slider">
			<div class="slider">
				<div class="slide"><img width="1360" height="395" src="<?php echo static_url(); ?>images/home/o-garde-manger.jpg" alt="" class="image"></div>
				<div class="slide">
					<div class="embed-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/KsdjmvCWbH4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- /.home-about-slider -->

	</section>
	<!-- /#ogardemanger.home-about-garde-manger home-section site-section -->
	<!-- // O Garde Manger -->

	<!-- Visita ao Garde Manger -->
	<div class="home-visit-us">
		<div class="col col10">
			<img width="637" height="399" src="<?php echo static_url(); ?>images/home/banner-garde-manger.jpg" alt="" class="image">
		</div>
		<article class="col col20">
			<div class="content">
				<h3 class="title">Visita ao Garde Manger</h3>
				<p class="desc">Para conhecer de perto a plantação, <span class="br"></span> sua galinha e ver como tudo funciona por aqui. <br> Escolha uma data e agende sua visita. <br> Estamos te esperando.</p>
				<button class="btn-do-action btn-open-modal" data-modal=".site-modal-visita" type="button"><span class="text">Reserve</span></button>
			</div>
			<!-- /.content -->
		</article>
	</div>
	<!-- /.home-visit-us -->
	<!-- // Visita ao Garde Manger -->

	<!-- Dúvidas Frequentes -->
	<section class="home-faq faq-wrapper site-section" id="duvidasfrequentes">
		
		<div class="col col10">

			<div class="col-content">
				<h2 class="section-title faq-title">Dúvidas Frequentes</h2>

				<div class="faq-content-left">
					<ol class="home-faq-slider faq-itens">
						<li class="faq-item">
							<p class="question"><span class="number">1<span class="dot">.</span></span> <span class="text">Onde o Garde Manger entrega?</span></p>
							<p class="answer">Por enquanto em São Paulo, na região Oeste. Mas escreva para a gente, quem sabe conseguimos atendê-lo. Também entregamos em empresas.</p>
						</li>
						<li class="faq-item">
							<p class="question"><span class="number">2<span class="dot">.</span></span> <span class="text">Não consigo escolher o que plantar, vocês me ajudam?</span></p>
							<p class="answer">Recomendamos que escolha uma horta padrão - ela já tem um pouco de tudo o que você vai precisar. Se quiser escolher tudo em uma horta nova, fale com a gente para ajudá-lo.</p>
						</li>
						<li class="faq-item">
							<p class="question"><span class="number">3<span class="dot">.</span></span> <span class="text">Quanto tempo demora para eu receber minha primeira entrega e quantas vezes por semana ela vem?</span></p>
							<p class="answer">Se você escolher uma horta padrão, na semana seguinte já começa a receber. Se quiser uma horta nova, recebe a primeira entrega depois de dois meses. As entregas são feitas uma vez por semana.</p>
						</li>
						<li class="faq-item">
							<p class="question"><span class="number">4<span class="dot">.</span></span> <span class="text">Se eu não estiver em casa, como receber a cesta?</span></p>
							<p class="answer">É só escolher a melhor data/hora entre as opções de entrega. Se não quiser receber alguma semana, vederemos seus produtos.</p>
						</li>
						<li class="faq-item">
							<p class="question"><span class="number">5<span class="dot">.</span></span> <span class="text">E se der praga na minha horta?</span></p>
							<p class="answer">Fique tranquilo. Você receberá seus alimentos, não importa o que aconteça. </p>
						</li>
					</ol>
					<!-- /.home-faq-slider faq-itens -->
				</div>
				<!-- /.faq-content-left -->

				<p class="faq-request btn-open-modal" data-modal=".site-modal-duvidas">Sua dúvida não está aqui? <span class="br"></span> Escreva para a gente.</p>

			</div>
			<!-- /.col-content -->

		</div>
		<!-- /.col col10 -->

		<div class="col col20">

			<div class="col-content">

				<div class="faq-content-right"></div>
				<!-- /.faq-content-right -->

			</div>
			<!-- /.col-content -->
			
		</div>
		<!-- /.col col20 -->
		
	</section>
	<!-- /#duvidasfrequentes.home-faq -->
	<!-- // Dúvidas Frequentes -->

	<!-- [ Atendimento ao cliente ] -->
	<?php include "includes/footer/customer-service.php" ?>

	<!-- [ home modal windows ] -->
	<?php include "includes/footer/home.php" ?>

	<!-- [ include for all pages ] -->
	<?php include "includes/page-end.php" ?>

	</div>
	<!-- /#page -->

	<!-- [ javascript for home page ] -->
	<script src="<?php echo static_url(); ?>js/app/views/home.js"></script>
	
</body>
</html>