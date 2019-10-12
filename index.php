<?php
require_once  ('include/config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title><?echo $site_title?> Team</title>
	<!------- SYLTE -------->
	<link rel="stylesheet" type="text/css" href="/include/css/desktop.css">
	<!--<link rel="stylesheet" type="text/css" href="/include/css/mobile.css"> -->
	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/include/bootstrap/css/bootstrap.css">

	<script src="/include/bootstrap/jquery.js"></script>
	<script src="/include/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


	<a href="/">
		<div class="head-logo">
				DirtyBytes
		</div>
	</a>

	<!-----Havbar-------->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#">Navbar</a>
 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">

      				<li class="nav-item active">
        				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      				</li>

      				<li class="nav-item">
        				<a class="nav-link" href="#">Link</a>
      				</li>

      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Dropdown
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Action</a>
          					<a class="dropdown-item" href="#">Another action</a>
          				<div class="dropdown-divider"></div>
          					<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      				</li>

      				<li class="nav-item">
        				<a class="nav-link disabled" href="#">Disabled</a>
      				</li>

    			</ul>
  			</div>
	</nav>

	<!-----Head------>
	<header>
		<div class="header-block">
			
			<h2>Заголовочный текст</h2><br>
			краткий текст текст текст текс текст текс краткий<br>
			<form>
				<button class="header-button">Button</button>
			</form>
		</div>
	</header>

	<main>

		<!-------Info------->
		<article>
			<div class="card-block">
				<div class="headline">Навыки</div>
				<hr size="3px" width="500px" align="center" color="black"><br>
				<div class = "card_block_1_line">
					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/coding.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/blogging.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/domain-registration.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>

				</div>

				<div class = "card_block_2_line">

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/shield.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/target.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/speech-bubbles.png" alt=""></div>
							<div class="info-headline">Headline</div>
						</div>
						<div class="info-text">
							test test Test text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text
						</div>
					</div>


			</div>
		</article>

		<!---Traning--->
		<article>
			<div class="traning-block">
				<div class="headline">Тренировка</div>
				<hr size="3px" width="500px" align="center" color="white"><br>
				<div class="traning-text">
					Привет! Мы являемся Хабаровской CTF командой, и зовемся мы - DirtyBytes. Одна из наших целей - привлеть и научить как можно людей в сфере ИБ. И один из таких способов - практика! Мы подготовили для тебе прау заданий, решая которые ты сможешь тренироваться.<br><br>
					Появятся вопросы! Пиши нам используя <a href="/">наши контакты</a>, мы всегда рады помочь с понимание решения таска.<br> Удачной тренировки
				</div>
				<form action="http://ctf.DirtyBytes.ru">
					<button class="traning-button">Тренироваться</button>
				</form>
			</div>
		</article>

		<!-----Achivments------>
		<article>
			<div class="achiv-block">
				<div class="headline">Достижения</div>
				<hr size="3px" width="500px" align="center" color="black"><br>

				<a class="achiv-headline">победы</a><br><br>
				<div class="win-block">
					<div class="win-block-1">
					
						<div class="achiv-ico">
							<img src="/include/img/spacectf.png" alt=""><br> 
							Space CTF 
						</div> 
						<div class="achiv-ico">
							<img src="/include/img/evilcorpctf.png" alt=""><br> 
							EvilCorp CTF 
						</div> 
						<div class="achiv-ico">
							<img src="/include/img/oldschoolctf.jpg" alt=""><br> 
							OldSchool CTF 
						</div>
					</div>
					<div class="win-block-2">	
						<div class="achiv-ico">
							<img src="/include/img/tyumenctf.jpg" alt=""><br> 
							Tyumen CTF 
						</div>
						<div class="achiv-ico">
							<img src="/include/img/scs.png" alt=""><br> 
							Sberbank CTF 
						</div>
						<div class="achiv-ico">
							<img src="/include/img/rt.png" alt=""><br> 
							cyberchallenge CTF 
						</div>
					</div>
				</div>

				<br><br><br><br><br>

				<a class="achiv-headline">Организация</a><br><br>
				<div class="org-block">
					<div class="achiv-ico">
						<img src="/include/img/blackmirrorctf.jpg" alt=""><br> 
						Space CTF 
					</div> 
					<div class="achiv-ico">
						<img src="/include/img/genesisctf.jpg" alt=""><br> 
						EvilCorp CTF 
					</div> 	
				</div>

				
			</div>
		</article>

		<!-------Contact------->
		<article>
			<div class="contact-block">
				<div class="headline">Контакты</div>
				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="team-block">
					<div class="team-ico">
						<a href="https://vk.com/dronbro"><img class="team-img" src="/include/img/dron.jpg" alt=""></a><br>Ерофеев Андрей
					</div>
					<div class="team-ico">
						<a href="https://https://vk.com/me0ny"><img class="team-img" src="/include/img/tema.png" alt=""></a><br>Ипатов Артем
					</div>
					<div class="team-ico">
						<a href="https://https://vk.com/tz_sl"><img class="team-img" src="/include/img/slava.jpg" alt=""></a><br>Бувака Вячеслав
					</div>
					<div class="team-ico">
						<a href="https://vk.com/bo_gamedev75"><img class="team-img" src="/include/img/bogdan.jpg" alt=""></a><br>Данилин Богдан
					</div>
				</div>

				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="social-block">
					<div class ="social-text">
						Это наши проекты. Подпишись, нам очень нужна твоя поддержка. Там публикуется много полезной и интересной информации
					</div>
					<div class="social-ico">
						<a href="https://instagram.com/DirtyBytesCTF"><img class="social-ico-img" src="/include/img/social-icon/instagram.png" alt=""></a>
						<a href="https://vk.com/initblog"><img class="social-ico-img" src="/include/img/social-icon/vk.png" alt=""></a>
						<a href="https://youtube.com"><img class="social-ico-img" src="/include/img/social-icon/youtube.png" alt=""></a>
						<a href="https://instagram.com/initblog"><img class="social-ico-img" src="/include/img/social-icon/instagram.png" alt=""></a>
					</div>
				</div>

				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="mail-contact-block">
						<form method="POST" action="mail.php">
							<div class="mail-input-title">
								Заголовок
								<input class="mail-input" type="text" name="head" placeholder="Заголовок" required>
							</div>
							<div class="mail-input-mes">
								Сообщение
								<textarea class="mail-input" rows="4" name="mes" required></textarea>
							</div>
							<div class="mail-input-cont">
								Почта
								<input class="mail-input" type="text" name="mail" placeholder="Если хотите связаться">
							</div>
							<br>
							<button class="mail-button" type="submit" name="submit">Отправить</button>
						</form>
				</div>

			</div>
		</article>
	</main>

	<footer>
		<a href="https://instagram.com/dirtybytesctf" target="_blank">DirtyBytes</a> - Хабаровская команда по CTF игре.<br>
        По всем вопросам пишите на почту: <a href="mailto:dirtybytesctf@gmail.com" target="_blank">dirtybytesctf@gmail.com</a><br>
        Code by: <a href="https://vk.com/dronbro" target="_blank">TheDronIt</a>. Все права защищены. © 2019
	</footer>
</body>
</html>