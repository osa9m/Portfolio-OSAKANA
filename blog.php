<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, telephone=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Blog | OSAKANA フリーランスのクリエーターです。</title>
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
		<h2 class="sub-ttl">Blog</h2>
		<section>
			<img src="img/osakanav-header1.jpg" alt="ブログヘッダー画像" class="blog-img">
			<p class="text00">
				おさかなが運営しているブログ「おさかなび-osakanav-」です。<br>
			  	コンセプトは、誰もが「デジタル時代を楽しむためのミニ知識」をご紹介していくというものです！
			</p>
			<p class="text00">
				インターネットの普及により私たちの生活が急激に変化し、たくさんの情報があふれかえり、情報を取捨選択する力が必要になってきました。<br>
				そんな時代を「情報の海」に飲み込まれずに「誰でも楽しめる」ように、おさかなが「ナビ」をしていく！<br>
				そんな思いを込めてサイトを立ち上げました…！
			</p>
			<p class="text00">
				↓こんな感じの「ゆるいイラスト」も描いています。
			</p>
			<img src="img/osakanav.jpg" alt="おさかなび-osakanav-のイラスト" class="blog-img1">
			<p class="text00">
				ブログには「WordPress」を使用しています。
			</p>
			<p class="text00">
				毎日更新中！
				ぜひ覗いてみてください…！
			</p>
			<div class="btn" id="00btn">「おさかなび-osakanav-」はこちら</div>
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
		<small id="copyright">© 2020<?php if (date("Y")!=2020) echo date("-Y"); ?>  OSAKANA All rights reserved.</small>
		<div class="top"><a href="#"><i class="fas fa-angle-double-up fa-2x"></i></a></div>
      </div>
      <!-- /#footer -->
</div>
<script src="js/main.js"></script>
</body>