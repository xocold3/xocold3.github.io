<?php
$ini = parse_ini_file('./config/config.ini');
?>

	


<!DOCTYPE ?php>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Сборка ПК в Бишкеке</title>
		<meta charset="utf-8" />
		<!-- SEO Entries -->
		<meta content="cборка, компьютеров, бишкек, собрать пк бишкек, сборка компьютеров бишкек" name="keywords" />
		<meta content="Сборка пк от xocold." name="description" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link href="css/rackhost.css" rel="stylesheet" type="text/css" />
		<!-- <link href="themes/blue/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/green/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/red/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/business/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/blueHeader/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/redHeader/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="themes/greenHeader/css/custom.css" rel="stylesheet" type="text/css" /> -->
		<!-- Javascripts -->
		<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="js/rackhost.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- Site Wrapper Start -->
		<div class="siteWrapper">
			<!-- Site Header -->
			<div class="siteHeaderShadow">
			</div>
			<div class="siteHeader">
				<div class="center">
					<a class="logo" href="index.html"></a>
					<ul class="navigation">
						<li>
							<a href="shared.html"style="font-family:Impact;">Сборка ПК <br /><span>(помощь)</span></a>
						
													<ul class="dropdown">
							<li><a href="team.html"><strong>До</strong> 20 000 сом</a></li>
								<li><a href="locations.html"><strong></strong>От 20 000 до 40 000 сом</a></li>
								<li><a href="blog.html"><strong></strong>От 40 000 до 60 000 сом</a></li>
								<li><a href="layout.html"><strong></strong>От 60 000 до 80 000 сом</a></li>
								<li><a href="business.html"><strong>От</strong> 80 000 сом</a></li>	
							</ul>
						<li>
							<a class="dropdown" href="virtual.html"style="font-family:Impact;">Чистка ПК<br /><span>замена термопасты и т.д.</span></a>
							<ul class="dropdown">
								<li><a href="virtual.html"><strong></strong>Чистка от пыли</a></li>
								<li><a href="virtual.html"><strong></strong> Замена термопасты</a></li>
							</ul>
						</li>
						<li>
							<a href="dedicated.html"style="font-family:Impact;">Консультация<br /><span>с главным специалистом</span></a>
						</li>
						<li>
							<a class="dropdown" href="about.html"style="font-family:Impact;">О нас "xocold"</strong> <br /><span>Где мы расположены?</span></a>
						</li>
						<li>
							<a href="contact.html"style="font-family:Impact;">Наши контакты<br /><span>pinxin95@mail.ru</span></a>
						<ul class="dropdown">
								<li><a href="team.html"><strong>MegaCom</strong> +996556029548</a></li>
								<li><a href="locations.html"><strong>O!</strong> +996703073110</a></li>
								<li><a href="blog.html"><strong>Telegram</strong> @Solofg</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- Content Slider -->
			<div class="contentSlider">
				<div class="center">
					<div class="slide clearfix">
						<div class="slideSwitchLabel">
							<strong>Собрать ПК</strong> 
						</div>
						<div class="information">
							<h1>Сборка ПК в Бишкеке<span></span></h1>
							<p>Сама сборка осуществляется со <strong>всеми</strong> пожеланиями заказчика и за предоставленный бюджет!</p>
							<ul class="clearfix">
								<li><strong></strong></li>
								<li><strong></strong> </li>
								<li>Постоянным клиентам скидка<strong> 10%</strong></li>
								<li><strong></strong></li>
							</ul>
							<div class="box clearfix">
								<div class="label">
									ЦЕНА<br />ОТ
								</div>
								<div class="price">
									<?php print $ini['cena1'];?>
								</div>
								<a class="colorButton" href="shared.html"><span class="pointer"><strong>К сборке</strong></span></a>
							</div>
						</div>
						<img src="img/slider/02.png" alt="Shared" /> 
					</div>
					<div class="slide clearfix">
						<div class="slideSwitchLabel">
							<strong>Чистка ПК</strong>
						</div>
						<div class="information">
							<h1>Все услуги по чистке ПК<span></span></h1>
							<p>В них входит: отчистка от пыли, нанесение новой термопасты, замена деталей ПК(по желанию)<strong></strong><strong></strong></p>
							<ul class="clearfix">
								<li></li>
								<li>При двух или выше заказах<strong> бонус!</strong> </li>
								<li><strong></strong></li>
								<li><strong></strong></li>
							</ul>
							<div class="box clearfix">
								<div class="label">
									ЦЕНА<br />ОТ
								</div>
								<div class="price">
									<?php print $ini['cena2'];?>
								</div>
								<a class="colorButton" href="virtual.html"><span class="pointer"><strong>К отчистке</strong></span></a>
							</div>
						</div>
						<img src="img/slider/03.png" alt="Virtual" />
					</div>
					<div class="slide clearfix">
						<div class="slideSwitchLabel">
							<strong>Консультация</strong>
						</div>
						<div class="information">
							<h1>Консультация <span> с клиентом</span></h1>
							<p>Предоставляем вам полную <strong>бесплатную</strong> консультацию по телефону или же на удобной для вас социальной сети.</p>
							<ul class="clearfix">
								<li><strong>Telegram</strong> @Solofg</li>
								<li><strong>WhatsApp</strong> +996556029548</li>
								<li><strong></strong></li>
								<li><strong></strong></li>
							</ul>
							<div class="box clearfix">
								<div class="label">
									Цена<br />на услугу:
								</div>
								<div class="price">
									<?php print $ini['cena3'];?>
								</div>
								<a class="colorButton" href="dedicated.html"><span class="pointer"><strong>К консультации</strong></span></a>
							</div>
						</div>
						<img src="img/slider/05.png" alt="Dedicated" />
					</div>
				</div>
			</div>
			<!-- Content Wrapper -->
			<div class="contentWrapper">
				<div class="outerShadow">
				</div>
				<div class="innerShadow">
				</div>
				<div class="center clearfix">
					<!-- Additional clearfix necessary for non floated objects -->
					<div class="clearfix">
					</div>
					<!-- Content Starts - Header template should end here -->
					<div class="column tiny">
						<h3 class="iconMediumNetwork">Процессоры  <span> нового поколения</span></h3>
						<p class="text">Благодаря технологии Intel® Turbo Boost 2.0 ваш компьютер обеспечит достаточную мощность и быстродействие для существенного повышения эффективности вашей работы. Наслаждайтесь исключительной производительностью в играх и увлекательными зрелищами с фантастическим качеством 4K Ultra HD, с легкостью редактируйте и публикуйте панорамное видео — и все это в сочетании с технологией Thunderbolt™ 3 для сверхбыстрой передачи данных.</p>
					</div>
					<div class="column tiny">
						<h3 class="iconMediumCog">100% <span> выполнение заказов</span></h3>
						<p class="text">xocold - это профессионально, быстро, качественно.</p>
					</div>
					<div class="column tiny">
						<h3 class="iconMediumServer">Не единой жалобы!<span> </span></h3>
						<p class="text"> Наш девиз - клиет и его пожелания превыше всего!</p>
					</div>
					<div class="column tiny last">
						<h3 class="iconMediumHelp">Служба <span> поддержки</span></h3>
						<ul class="columnNavigation">
							<li><a class="iconSmallPhone" href="contact.html">O! <?php print $ini['phone2'];?></a></li>
							<li><a class="iconSmallPhone" href="contact.html">MegaCom <?php print $ini['phone1'];?></a></li>
							<li><a class="iconSmallChat" href="contact.html">Чат для клиентов</a></li>
							<li><a class="iconSmallClient" href="admin/index.php">Вход на сайт</a></li>
							<li><a class="iconSmallEmail" href="contact.html">Почта <?php print $ini['mail'];?> <a/></li>
						</ul>
					</div>
					<!-- Wrap separatorShadow in separator to avoid IE 7 bugs -->
					<div class="separator">
						<div class="separatorShadow">
						</div>
					</div>
					<div class="column small">
						<h3>Кустомер <span> (отзывы покупателей)</span></h3>
						<div class="testimonialBox">
							<p>&ldquo;---&rdquo;</p>
							<div class="author">
								<strong>Имя</strong>, Организация
							</div>
						</div>
					</div>
					<div class="column large last">
						<h3>О компании "xocold"<span></span></h3>
						<p class="text"><a class="imageZoom" href="img/content/locations-2.jpg"><img class="alignRight" src="img/content/666.jpg" alt="index" /></a>Хоть мы и недавно начали нашу деятельность, но у нас есть потенциал. Мы горим желанием и хотим стать первыми на этом рынке в Бишкеке! Поэтому будем рады каждому отзыву и отклику. А особенно тому, если вы расскажите о нас своим друзьям!</p>
					</div>
					<!-- Clear necessary after every column row -->
					<div class="clearfix">
					</div>
					<!-- Content Ends - Footer template should start here -->
				</div>
			</div>
			<!-- Twitter Widget -->
			<div class="twitterWidget">
				<div class="center">
					<!-- Simply change the href to your username -->
					<a class="profileLink" href="http://twitter.com/envatowebdesign"></a><p>Загрузка<span>последнего твита...</span></p>
				</div>
			</div>
			<!-- Site Footer -->
			<div class="siteFooter">
				<div class="center clearfix">
					<div class="column tiny">
						<h5>Навигация <span>по сайту</span></h5>
						<ul class="columnNavigation">
							<li><a href="shared.html"><strong>Сборка</strong> ПК</a></li>
							<li><a href="virtual.html"><strong>Чистка</strong> ПК</a></li>
							<li><a href="dedicated.html"><strong>Консультация </strong> со специалистами</a></li>
							<li><a href="about.html"><strong>О нас</strong> "xocold"</a></li>
							<li><a href="contact.html"><strong>Наши</strong> контакты</a></li>
						</ul>
					</div>
					<div class="column tiny">
						<h5>Дополнительная <span>информация</span></h5>
						<ul class="columnNavigation">
							<li><a href="terms.html"><strong>Карта</strong> сайта</a></li>
							<li><a href="terms.html"><strong>Условия</strong> обслуживания</a></li>
							<li><a href="terms.html"><strong>Политика</strong> конфиденциальности</a></li>
							<li><a href="terms.html"><strong>Политика </strong> DMCA</a></li>
						</ul>
					</div>
					<div class="column tiny">
						<h5>Центр  <span>поддержки</span></h5>
						<ul class="columnNavigation">
							<li><a class="iconSmallPhone" href="contact.html"><strong>KG|O!</strong> +996556029548</a></li>
							<li><a class="iconSmallChat" href="contact.html"><strong>Чат для клиентов</strong></a></li>
							<li><a class="iconSmallEmail" href="contact.html"><strong>Почта</strong></a></li>
							<li><a class="iconSmallClient" href="login.html"><strong>Вход на сайт</strong></a></li>
						</ul>
					</div>
					<div class="column tiny last">
						<h5>О "xocold"<span></span></h5>
						<p class="text">Это маленькая компания, которая начала существовать с 2019 года и существует по сей день!</p>
					</div>
				</div>
			</div>
			<!-- Site Footer Bar -->
			<div class="siteFooterBar">
				<div class="center">
					<a class="backToTop" href="#">Навверх</a><p>Подписывайтесь на нас в <a href="#">Твиттере</a>, <a href="#">ВКонтакте</a> или в <a href="#"> Телеграме</a> для того, чтобы получать новости с сайта (в том числе бонусы и скидки).<br />2019 &copy; xocold. Все права защищены. Дизайн делал сайт: <a href="http://serifly.com">Serifly</a>
				</div>
			</div>
		</div>
		<!-- Site Wrapper Ends -->
	</body>
</html>
