<?php get_header(); ?>

	<div class="section_one_header">
		<div class="container">
			<div class="row">
				<header>
					<?php
					   if(get_theme_mod('rf_titulo_txt')){
					?>
						<h1><?= get_theme_mod('rf_titulo_txt'); ?></h1>
					<?php } ?>
				</header>
			</div>

			<div class="box_header">
				<div class="row d-flex">

					<div class="box_image">
						<div class="col-sm-12 col-12">
							<div class="main_flex_figure">
								<img src="<?php bloginfo('template_url') ?>/assets/images/educador.png" alt="educador">
								<h3>Educador</h3>
							</div>
						</div>
					</div>

					<div class="box_image">
						<div class="col-sm-12 col-12">
							<div class="main_flex_figure">
								<img src="<?php bloginfo('template_url') ?>/assets/images/palestrante.png" alt="palestrante">
								<h3>Palestrante</h3>
							</div>
						</div>
					</div>

					<div class="box_image">
						<div class="col-sm-12 col-12">
							<div class="main_flex_figure">
								<img src="<?php bloginfo('template_url') ?>/assets/images/scrum-master.png" alt="scrum-master">
								<h3>Scrum Master</h3>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div><!-- end section_one_header -->

	<div class="section_two_box">
		<div class="container" id="sobre">
			
			<div class="row">

				<div class="col-md-6 col-12">
					<div class="main_author">
						<img src="<?php bloginfo('template_url') ?>/assets/images/pedro.jpg" alt="pedro">
					</div>
				</div>

				<div class="col-md-6 col-12">
					
					<div class="main_desc">
						<div class="amin_desc_header">
							<header>
								<h1>Um pouco sobre mim</h1>
							</header>
						</div>

						<div class="text">
							<p>
								Sou Pedro Santana, tenho 38 anos, casado e pai do Pedrinho. <br>
								Formado em Redes de Computadores  e pós-graduado em Gerência de Projetos, com certificação Scrum Master  <br>
								pela Scrum Alliance, atuo nas áreas de TI e sou professor universitário nas turmas de Sistema de Informação, <br> 
								Analise e Desenvolvimento de Sistema, Redes de Computadores e Metodologias Ágeis. <br>
								Atuo também, como professor do ensino infantil (6 a 12 anos) a disciplina de Educação Financeira com Criatividade. <br>

								Nos últimos 5 anos venho exercendo a função de Gerente de Projetos na área de Desenvolvimento de Software,
								com foco em aplicativo educacional e computação em Nuvem. <br>

								Nas horas vagas sou Game Designer. <br> Construo jogos de tabuleiro para melhorar o aprendizado entre alunos e professores.
								O primeiro deles foi desenvolvido para os alunos dos cursos de Montagem e Manutenção de Computadores 
								aprenderem algumas disciplinas de forma lúdica. O segundo protótipo será usado por personais financeiros para explicar 
								as formas de investimentos de maneira divertida e prazerosa. <br>

								Fui ganhador do Prêmio Professor Criativo (Pipa Comunicação – 2016), <br> onde escrevi o segundo capítulo do e-book 
								Educação Criativa – Multiplicando experiências para a aprendizagem, no qual falo das técnicas de criatividade 
								para desenvolvimento de jogos de tabuleiro. Clique aqui para baixar o e-book

								Minhas experiências internacionais foram:

								Líbia – Gestor de TI da Queiroz Galvão (2009-2011). Era responsável por todo parque tecnológico, realizando 
								instalações de servidores e estações de trabalho Windows, Firewall, e realizei todo projeto de cabeamento estruturado 
								em seis obras em cidades diferentes.

								Toronto, Canadá (maio a outubro 2018) – onde fui aperfeiçoar o inglês e realizei alguns trabalhos voluntários, 
								de análise de desempenho da rede wifi e manutenção em alguns computadores na instituição de ensino onde 
								estudei – a RCIIS.

								Tenho como filosofia de vida a certeza que “existem oportunidades que surgem e oportunidades que são criadas. 
								Eu prefiro criar as minhas e valorizar todas”. Foi dessa maneira que conquistei todos os meus objetivos. 
								Criado por minha avó, Maria Alice – a quem devo toda gratidão pelos ensinamentos e dedicação até me tornar 
								adulto –  fui estudante de escola pública. 
								Por 11 anos fiz parte da Escola Estadual Professora Zulmira de Paula Almeida, em Jardim Paulista, 
								Cidade do Paulista/PE, onde tenho enorme gratidão pelos professores que tive 
								e amigos que fiz durante esse tempo.
							</p>
						</div>
					</div>

				</div>

			</div><!-- row -->

		</div> <!-- end container -->
	</div><!-- end section_two_box -->

	<div class="section_three_box">
		<div class="container" id="servicos">

			<div class="row">
				<header>
					<h1>Serviços</h1>
				</header>	
			</div>

			<div class="box_servicos">
				<div class="row">
					    <!-- box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.5); -->
					<div class="col-md-4">
						<div class="box_servicos_desc">
							<img width="100px" src="<?php bloginfo('template_url') ?>/assets/images/suporte.png" alt="suporte">
							<h2>Suporte de TI </h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
						</div>	
					</div>

					<div class="col-md-4">
						<div class="box_servicos_desc">
							<img width="100px" src="<?php bloginfo('template_url') ?>/assets/images/scrum.png" alt="scrum">
							<h2>Treinamento Scrum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
						</div>	
					</div>

					<div class="col-md-4">
						<div class="box_servicos_desc">
							<img width="100px" src="<?php bloginfo('template_url') ?>/assets/images/criatividade.png" alt="criatividade">
							<h2>Treinamento Tecnica de Criatividade</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
						</div>	
					</div>

				</div>
			</div>
		</div>
	</div><!-- end section_three_box -->

	<div class="section_four_box">
		
		<div class="container" id="palestras">
			<div class="row">
				<header>
					<h1>Palestras</h1>
				</header>	
			</div>	
		</div>

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 0;
							   for($a = 0; $a <= 2; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/0<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 3;
							   for($a = 3; $a <= 5; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/0<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item active -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 6;
							   for($a = 6; $a <= 8; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/0<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 9;
							   for($a = 9; $a <= 11; $a++){
								   $a = ($a <= 9) ? 0 . $a : $a;
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 12;
							   for($a = 12; $a <= 14; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 15;
							   for($a = 15; $a <= 17; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 18;
							   for($a = 18; $a <= 20; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 21;
							   for($a = 21; $a <= 23; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 24;
							   for($a = 24; $a <= 26; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 27;
							   for($a = 27; $a <= 29; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 30;
							   for($a = 30; $a <= 32; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 33;
							   for($a = 33; $a <= 35; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 36;
							   for($a = 36; $a <= 38; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 39;
							   for($a = 39; $a <= 41; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 42;
							   for($a = 42; $a <= 44; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 45;
							   for($a = 45; $a <= 47; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 48;
							   for($a = 48; $a <= 50; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 51;
							   for($a = 51; $a <= 53; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 54;
							   for($a = 54; $a <= 56; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 57;
							   for($a = 57; $a <= 59; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<div class="carousel-item ">
					<div class="img_slide">
						<div class="row d-flex">
							<?php
							   $a = 60;
							   for($a = 60; $a <= 61; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
						<div class="row d-flex">
							<?php
							   $a = 62;
							   for($a = 62; $a <= 63; $a++){
							?>
							<div class="img_item">
								<img width="400px" src="<?php bloginfo('template_url') ?>/assets/images/galeria/<?= $a; ?>.jpg" alt="galeria">
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
							</div>
							<?php
							   }
							?>
						</div><!-- end row d-flex -->
					</div>
				</div><!-- end carousel-item -->
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
					<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<i class="fa fa-chevron-right"></i>
					<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div><!-- end carousel -->
	</div><!-- end section_four_box  -->

	<div class="section_five_box">
		
		<div class="container" id="portfolio">
			<div class="row">
				<header>
					<h1>Portifolio</h1>
				</header>
			</div>
		</div>

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="slide_two_item">
						<div class="row">
							<?php
							$a = [
								"Valore Contadores Associados - Serviços de suporte Técnico ( Estações d Trabalho)",
								"Vertices Contadores - Migração para nuvem e suporte técnico ( Estações de Trabalho e Servidores)",
								"Eu Médico Residente - Implantação do Framework Scrum",
								"Solidus - Cabeamento Estruturado",
								"Arven Capital Partners - Implantação do Storage e configuração das estações e ativos de Redes",
								"BSA - Bezerra de Souza Advogados - Serviços de Suporte Técnico ( Estações de Trabalho)",
								"ServHost - Serviços de Cabeamento Estruturado",
								"Combogó Comunicações - Implantação do Storage e Serviços de Suporte Técnico ( Estações de Trabalho )",
								"On Case - Organização do Rack e do cabeamento",
								"Beehive Coworking - Organização do Rack e do cabeamento",
								"UDON Cozinha Oriental - Organização do Rack e do cabeamento",
								"Dog On The Road - Organização do Cabeamento e Serviços de Suporte Técnico ( Estações de Trabalho)"
							];
							   for($b = 0; $b <= 3; $b++){
							?>
							<div class="slide_two_img">
								<img src="<?php bloginfo('template_url') ?>/assets/images/img-0<?= $b; ?>.png" alt="portifolio">
								<p><?= $a[$b]; ?></p>
							</div>
							<?php
							   }
							?>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide_two_item">
						<div class="row">
							<?php
							   for($b = 4; $b <= 7; $b++){
							?>
							<div class="slide_two_img">
								<img src="<?php bloginfo('template_url') ?>/assets/images/img-0<?= $b; ?>.png" alt="portifolio">
								<p><?= $a[$b]; ?></p>
							</div>
							<?php
							   }
							?>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="slide_two_item">
						<div class="row">
							<?php
							   for($b = 8; $b <= 11; $b++){
								//    $b = ($b <= 9) ? 0 . $b : $b;
								$c = $b;
								$c = ($c <= 9) ? 0 . $c : $c;
							?>
							<div class="slide_two_img">
								<img src="<?php bloginfo('template_url') ?>/assets/images/img-<?= $c; ?>.png" alt="portifolio">
								<p><?= $a[$b]; ?></p>
							</div>
							<?php
							   }
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- end section_five_box  -->

	<div class="section_six_box">
		<div class="container" id="depoimentos">
			<div class="row">
				<header>
					<h1>Depoimentos</h1>
				</header>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-md-4">
					<div class="depoimento_box">
						<img width="200px" height="210px" class="rounded-circle" src="<?php bloginfo('template_url') ?>/assets/images/staff.jpg" alt="staff">
						<div class="depoimento_desc">
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas porro quo doloribus tenetur fugiat saepe sit praesentium quam.</p>
						</div>
						<h3>Juan Fran</h3>
					</div>
				</div>

				<div class="col-md-4">
					<div class="depoimento_box">
						<img width="200px" height="210px" class="rounded-circle" src="<?php bloginfo('template_url') ?>/assets/images/staff.jpg" alt="staff">
						<div class="depoimento_desc">
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas porro quo doloribus tenetur fugiat saepe sit praesentium quam.</p>
						</div>
						<h3>Juan Fran</h3>
					</div>
				</div>

				<div class="col-md-4">
					<div class="depoimento_box">
						<img width="200px" height="210px" class="rounded-circle" src="<?php bloginfo('template_url') ?>/assets/images/staff.jpg" alt="staff">
						<div class="depoimento_desc">
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas porro quo doloribus tenetur fugiat saepe sit praesentium quam.</p>
						</div>
						<h3>Juan Fran</h3>
					</div>
				</div>

			</div>
		</div>
	</div><!-- end section_six_box  -->

	<div class="section_contato">

		<div class="container" >
			<div class="row">
				<header>
					<h1>Contato</h1>
				</header>
			</div>
			<div class="item_contato">
				<div class="row">

					<div class="col-md-4">
						<div class="box_item_contato">
							<img width="150px" src="<?php bloginfo('template_url') ?>/assets/images/addr.png" alt="addr">
							<h3>Endereço</h3>
							<p>Rua da hora 122 Qd b Recife -PE 53417 - 220</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="box_item_contato">
							<img width="150px" src="<?php bloginfo('template_url') ?>/assets/images/phone.png" alt="addr">
							<h3>Telefone</h3>
							<p>(81)99999-9999</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="box_item_contato">
							<img width="150px" src="<?php bloginfo('template_url') ?>/assets/images/mail.png" alt="addr">
							<h3>E-mail</h3>
							<p>suapalestacompedro@gmail.com</p>
						</div>
					</div>
				</div>
			</div><!-- end item_contato -->
		</div><!-- end container-->	

		<form class="form_contato" id="contato">
			<div class="container">
				<div class="row">

					<div class="col-md-7">
						<div class="form-group">
							<label>Seu nome:</label>
							<input class="form-control" type="text" placeholder="seu nome">
						</div>
					</div>

					<div class="col-md-7">
						<div class="form-group">
							<label>Seu email:</label>
							<input class="form-control" type="email" placeholder="seu email">
						</div>
					</div>
					
					<div class="col-md-7">
						<div class="form-group">
							<label>Titulo Mensagem</label>
							<input class="form-control" type="text" placeholder="titulo da mensagem">
						</div>
					</div>

					<div class="col-md-7">
						<div class="form-group">
							<label>Mensagem:</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sua Mensagem"></textarea>
							<button class="btn_enviar col-md-4 btn btn-outline-info">Enviar</button>
						</div>
					</div>
				
				</div>
			</div>
		</form>
	</div><!-- end section_contato -->

<?php get_footer(); ?>
</body>
</html>