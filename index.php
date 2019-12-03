<?php
require_once  ('include/config.php');

$d_mas = array();	

	$sql = mysqli_query($link, 'SELECT * FROM news WHERE hidden="0" ORDER BY id DESC LIMIT 5');
    while ($news = mysqli_fetch_array($sql)) 
  	{
  		$news_id[] = "{$news['id']}";
  		$news_headline[] = "{$news['headline']}";
  		$news_descr[] = "{$news['descr']}";
  		$news_date[] = "{$news['date']}";
		$news_photo[] = "{$news['photo']}";
		$news_link[] = "{$news['link']}";
  	}
  	

?>
<!DOCTYPE html>
<html>
<head>
	<title><?echo $site_title?> Team</title>
	<!------- SYLTE -------->
	<link rel="stylesheet" type="text/css" href="/include/css/desktop.css">
	<link rel="stylesheet" type="text/css" href="/include/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	<meta charset="cp1251">
	<link rel="shortcut icon" href="/include/img/favicon.ico" type="image/x-icon">
</head>	
<body>


	<a href="/">
		<div class="head-logo">
			DirtyBytes
		</div>
	</a>

	
	<!-----Head------>
	<header>
		<div class="header-block">
			
			<h2>������ � ����� ����������</h2>
			�� - ��������������� ������� �� ���� CTF, ������� ���������� �������������� ������������� � �����������������. <br>�� � ������ ������� �������.<br><br>
			<form>
				<button onclick="contact_scroll()" type="button" class="header-button">���������</button>
			</form>
		</div>
	</header>

	<main>

		<!---------News--------->
		<article>
			<div class="news-block">
				<div class="headline">��������� �������</div>
				<hr size="3px" width="500px" align="center" color="black"><br>
				<div class="news_block_place">
					<div class='big' id="<?echo $news_id[0]?>">
						<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[0]?>">
							<img  class="news_block_img_big" src="/include/img/news/<?echo $news_photo[0]?>" alt="">
							<div class="news_block_text_block_big">
								<div class="news_block_text_big">
									<?echo $news_headline[0]?>
								</div>
								<div class="news_block_descr_big"> 
									<?echo $news_descr[0]?>
								</div>
								<div class="news_block_date_big".>
									<?echo $news_date[0]?>
								</div>
							</div>
						</a>
					</div>
					<div class='short' id="<?echo $news_id[1]?>">
						<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[1]?>">
							<img class='news_block_img_short' src="/include/img/news/<?echo $news_photo[1]?>" alt="">
							<div class="news_block_text_block_short">
								<div class="news_block_text_short">
									<?echo $news_headline[1]?>
								</div>
								<div class="news_block_date_short">
									<?echo $news_date[1]?>
								</div>
							</div>
						</a>
					</div>
					<div class='short' id="<?echo $news_id[2]?>">
						<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[2]?>">
							<img class='news_block_img_short' src="/include/img/news/<?echo $news_photo[2]?>" alt="">
							<div class="news_block_text_block_short">
								<div class="news_block_text_short">
									<?echo $news_headline[2]?>
								</div>
								<div class="news_block_date_short">
									<?echo $news_date[2]?>
								</div>
							</div>
						</a>
					</div>
					<div class='short' id="<?echo $news_id[3]?>">
						<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[3]?>">
							<img class='news_block_img_short' src="/include/img/news/<?echo $news_photo[3]?>" alt="">
							<div class="news_block_text_block_short">
								<div class="news_block_text_short">
									<?echo $news_headline[3]?>
								</div>
								<div class="news_block_date_short">
									<?echo $news_date[3]?>
								</div>
							</div>
						</a>
					</div>		
					<div class='long' id="<?echo $news_id[4]?>">
						<div class="news_block_img_long_block">
							<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[4]?>">
								<img class='news_block_img_long' src="/include/img/news/<?echo $news_photo[4]?>" alt="">
							</a>
						</div>
						<div class="news_block_text_long">
							<?echo $news_headline[4]?>
						</div>
						<div class="news_block_descr_long">
							<a style="text-decoration: none; color:white;" href="https://<?echo $news_link[4]?>">
								<?echo $news_descr[4]?>
							</a>
						</div>
						<div class="news_block_date_long">
							<?echo $news_date[4]?>
						</div>
					</div>
				</div><br><br>
				<a style="font-size: 28px; text-decoration: none; color:white;"href="/news">�������� ������</a>
			</div>
		</article>


		<!-------Info------->
		<article>
			<div class="card-block">
				<div class="headline">������</div>
				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class = "card_block_line">
					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/quality.png" alt=""></div>
							<div class="info-headline">CTF</div>
						</div>
						<div class="info-text">
							CTF - ��� �����. � ���� ���� ������, ��� ��� ��� �������� ����� ������� �� ���������� ��� ������.
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/shield.png" alt=""></div>
							<div class="info-headline">��</div>
						</div>
						<div class="info-text">
							���� �� ������ ��� �������������� ������������. CTF - ��� ������ ����������� � ����� ��, �� ������ �������������� ����� ��������������, ������� ������ �� �������� ����������� ��� �������� ���� ����� ��������� ����� � ��.
						</div>
					</div>

					

				</div>

				<div class = "card_block_line">

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/devices.png" alt=""></div>
							<div class="info-headline">����������������</div>
						</div>
						<div class="info-text">
							�� ����� ����� ���������������, � ��� ������� �������� ����� �� ��������, ���� ��� ���� ����� ������ ��� ��� �������, ������ ����� ������ ��� ��� ���������.
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/domain-registration.png" alt=""></div>
							<div class="info-headline">�������� ������</div>
						</div>
						<div class="info-text">
							�������� ������ ��� ����� ������� ���� ������ ��� �����. �� ��� ��, ���������� ������ �������� ������ ������ ������������ ������� ����������, ��� ����� ������ �������� ��� ������ ����������� � ��� �����.
						</div>
					</div>

					

				</div>

				<div class = "card_block_line">

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/speech-bubbles.png" alt=""></div>
							<div class="info-headline">���. ����</div>
						</div>
						<div class="info-text">
							�� ������� ���� ������ VK, � ������� ��������� ��������� �������� ��������� ������ ������� ����� ����. ��� �� � ��� ���� ���� YouTube �����, �� ������� �� ����� �������� � ��������� ������������� �� ������� �������.
						</div>
					</div>

					<div class="info-card">
						<div class="info-head">
							<div class="info-ico"><img src="/include/img/icon/shared-folder.png" alt=""></div>
							<div class="info-headline">�������</div>
						</div>
						<div class="info-text">
							������� ������, ��� �� ������� � ����, ����� ���������� ������ �������� � ������� ������, ������� �� ���������� ���� IT.
						</div>
					</div>

				</div>

			</div>
		</article>

		<!---Traning--->
		<article>
			<div class="traning-block">
				<div class="headline">����������</div>
				<hr size="3px" width="500px" align="center" color="white"><br>
				<div class="traning-text">
					���� �� ����� ����� - �������� � ������� ��� ����� ����� � ����� ��. � ���� �� ����� �������� - ��������! �� ����������� ��� ���� ���� �������, ����� ������� �� ������� �������������.<br><br>
					�������� �������! ���� ��� ��������� <a href="/">���� ��������</a>, �� ������ ���� ������ � ��������� ������� �����.<br> ������� ����������
				</div>
				<form action="http://ctf.DirtyBytes.ru">
					<button class="traning-button">�������������</button>
				</form>
			</div>
		</article>

		<!-----Achivments------>
		<article>
			<div class="achiv-block">
				<div class="headline">����������</div>
				<hr size="3px" width="500px" align="center" color="black"><br>

				<a class="achiv-headline">������</a><br><br>
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
							cyber challenge CTF 
						</div>
					</div>
				</div>

				<br><br><br><br><br>

				<a class="achiv-headline">�����������</a><br><br>
				<div class="org-block">
					<div class="achiv-ico">
						<img src="/include/img/blackmirrorctf.jpg" alt=""><br> 
						Black Mirror CTF 
					</div> 
					<div class="achiv-ico">
						<img src="/include/img/genesisctf.jpg" alt=""><br> 
						Genesis CTF 
					</div> 	
				</div>

				
			</div>
		</article>

		<!-------Contact------->
		<article>
			<div class="contact-block" id="contact">
				<div class="headline">��������</div>
				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="team-block">
					<div class="team-ico">
						<a href="https://vk.com/dronbro"><img class="team-img" src="/include/img/dron.jpg" alt=""></a><br>������� ������
					</div>
					<div class="team-ico">
						<a href="https://vk.com/me0ny"><img class="team-img" src="/include/img/tema.png" alt=""></a><br>������ �����
					</div>
					<div class="team-ico">
						<a href="https://vk.com/tz_sl"><img class="team-img" src="/include/img/slava.jpg" alt=""></a><br>������ ��������
					</div>
					<div class="team-ico">
						<a href="https://vk.com/bo_gamedev75"><img class="team-img" src="/include/img/bogdan.jpg" alt=""></a><br>������� ������
					</div>
				</div>

				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="social-block">
					<div class ="social-text">
						��� ���� �������. ���������, ��� ����� ����� ���� ���������. ��� ����������� ����� �������� � ���������� ����������
					</div>
					<div class="social-ico">
						<a href="https://instagram.com/DirtyBytesCTF"><img class="social-ico-img instagram" src="/include/img/social-icon/instagram.png" alt=""></a>
						<a href="https://vk.com/initblog"><img class="social-ico-img vk" src="/include/img/social-icon/vk.png" alt=""></a>
						<a href="https://youtube.com"><img class="social-ico-img youtube" src="/include/img/social-icon/youtube.png" alt=""></a>
						<a href="https://instagram.com/initblog"><img class="social-ico-img instagram" src="/include/img/social-icon/instagram.png" alt=""></a>
					</div>
				</div>

				<hr size="3px" width="500px" align="center" color="black"><br>

				<div class="mail-contact-block">
						<form method="POST" action="mail.php">
							<div class="mail-input-title">
								���������
								<input class="mail-input" type="text" name="head" placeholder="���������" required>
							</div>
							<div class="mail-input-mes">
								���������
								<textarea class="mail-input" rows="4" name="mes" required></textarea>
							</div>
							<div class="mail-input-cont">
								�����
								<input class="mail-input" type="text" name="mail" placeholder="���� ������ ���������">
							</div>
							<br>
							<button class="mail-button" type="submit" name="submit">���������</button>
						</form>
				</div>

			</div>
		</article>
	</main>

	<footer>
		<a href="https://instagram.com/dirtybytesctf" target="_blank">DirtyBytes</a> - ����������� ������� �� CTF ����.<br>
        �� ���� �������� ������ �� �����: <a href="mailto:dirtybytesctf@gmail.com" target="_blank">dirtybytesctf@gmail.com</a><br>
        Code by: <a href="https://vk.com/dronbro" target="_blank">TheDronIt</a>. ��� ����� ��������. � 2017-2020
	</footer>

	<script>
		function contact_scroll() 
		{
  			var elmnt = document.getElementById("contact");
  			elmnt.scrollIntoView({behavior: "smooth"});
		}


	</script>

</body>
</html>