<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, telephone=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>About | OSAKANA フリーランスのクリエーターです。</title>
</head>
<body>
  <!-- #all -->
  <div id="all">

      <!-- #header -->
      <div id="header">
		<h1 class="title">
			<a href="index.php">OSAKANA</a>
		</h1>
		<ul class="header-menu">
			<li class="header-contents">
				<a href="about.php">About</a>
			</li>
			<li class="header-contents">
				<a href="portfolio.php">Portfolio</a>
			</li>
			<li class="header-contents">
				<a href="blog.php">Blog</a>
			</li>
			<li class="header-contents">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
      </div>
      <!-- /#header -->

	<!-- #contents -->
	<div id="contents">
		<h2 class="sub-ttl">About</h2>
		<section>
			<p class="text02">フリーランスのクリエーターとして「Web制作」「楽曲制作」をしております。</p>
			<img src="img/profile.png" alt="おさかなのプロフィール画像" class="about-img" style="width: 150px; height: 150px">
			<p class="text02">名前<br>おさかな</p>
			<p class="text02">メールアドレス<br>osakana1699@gmail.com</p>
			<p class="text02">事業内容<br>・Web制作、HTML/CSSコーディング、スマートフォンサイト、WordPress導入
			<br>・楽曲制作、フリーBGM、エフェクト、ゲームミュージック</p>
		</section>
	</div>
	<!-- /#contents -->

	<!-- #footer -->
      <div id="footer">
		<ul class="footer-menu">
			<li class="footer-contents">
				<a href="about.html">About</a>
			</li>
			<li class="footer-contents">
				<a href="portfolio.html">Portfolio</a>
			</li>
			<li class="footer-contents">
				<a href="blog.html">Blog</a>
			</li>
			<li class="footer-contents">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
		<small id="copyright">© 2020<?php if (date("Y")!=2020) echo date("Y"); ?>  OSAKANA All rights reserved.</small>
		<div class="top"><a href="#"><i class="fas fa-angle-double-up fa-2x"></i></a></div>
      </div>
      <!-- /#footer -->
</div>
<script src="js/main.js"></script>
</body>