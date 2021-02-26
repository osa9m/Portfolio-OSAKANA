<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, telephone=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Portfolio | OSAKANA フリーランスのクリエーターです。</title>
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
		<h2 class="sub-ttl">Portfolio</h2>
		<section>
			<h3 class="profile-block">Web制作</h3>
			<a href="https://osa9m.github.io/Cafe--Maple-/" target="_blank" rel="noopener"><img src="img/Cafe-LP.png" alt="カフェのwebサイト" class="portfolio-img"></a>
			<h4 class="portfolio-item"><a href="https://osa9m.github.io/Cafe--Maple-/" target="_blank" rel="noopener">Cafe喫茶-Maple-</a></h4>
			<p class="text00">Design/HTML5,CSS3/</p>
			<p class="text00">「Cafe喫茶-Maple-」というカフェをイメージしたサイトを制作いたしました。主にデザインや配色から、コーディングまでを担当させていただきました。</p>
			<!-- <a href="" target="_blank" rel="noopener"> --><img src="img/cool-dark.png" alt="wpテーマ Cool Dark" class="portfolio-img"><!-- </a> -->
			<h4 class="portfolio-item"><!-- <a href=""> -->Cool Dark</h4></a>
			<p class="text00">Design/HTML5,CSS3/PHP/</p>
			<p class="text00">「Cool Dark」という、IT好きのためのWordPressテーマを作成いたしました。グリーンとブラックの配色がたまりません。</p>
			<h4 class="portfolio-item">「ユーズアペン」use a pen
			</h4>
			<p class="text00">
			すべての人にサクサク書けるの楽しみを<br>
			無料で学べる「作文」学習サイト
			</p>
			<p class="text00">近日公開！</p>
		</section>
		<section>
			<h3 class="profile-block">楽曲制作</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/nDvnsM5r8jU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/VoBpsS09Xjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/suuOJadH0Zw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/TruJkgA-zeg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/QC4Al8LtNWg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/-s1PZjbS6j4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uggrTM_CJds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sTv_vaeGXgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		<p class="00text">随時更新中です。</p>
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