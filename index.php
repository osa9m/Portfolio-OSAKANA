<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, telephone=no">
  <meta property="og:title" content="OSAKANA フリーランスのクリエーターです。 ">
  <meta property="og:image" content="http://osa-k.work/img/header.jpg">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css">
  <title>OSAKANA フリーランスのクリエーターです。</title>
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
		<img src="img/header.jpg" alt="オバケのイラストとコンセプト" class="header-img">
      </div>
      <!-- /#header -->


      <!-- #contents -->
      <div id="contents">
		<section class="service">
			<h2 class="sub-ttl">Service</h2>
			<ul class="service-menu">
				<li class="service-contents">
					<h3 class="service-block">ヒアリング</h3><br>
					<i class="fas fa-hand-holding-heart fa-4x"></i>
					<p class="text01">まずはお客様のご要望をよく聞き、どのようなことを求めているのか、どうすれば喜んでいただけるのかを考えます。そして、効果的なプランを練っていきます。お客様に合わせてより良いものをご提供できるように、まずは「聞く」ことを大切にしております。</p>
				</li>
				<li class="service-contents">
					<h3 class="service-block">コーディング</h3><br>
					<i class="fas fa-laptop fa-4x"></i>
					<p class="text01">デザイン通りにコーディングすることはもちろん、そのデザインにどんな意図があるのかを考えてコードに落とし込んでいきます。「動き」や「効果」などを積極的に活用して、可読性の高い美しいコードを心がけていきます。</p>
				</li>
				<li class="service-contents">
					<h3 class="service-block">曲作り</h3><br>
					<i class="fas fa-music fa-4x"></i>
					<p class="text01">ヒアリングに基づき、1つ1つの音の重なりを大切に紡いでいきます。「ハーモニー」や「リズム」そして「メロディー」など曲全体のバランスを見ながら、こまめに確認をすることで、イメージに沿った楽曲に仕上げていきます。</p>
				</li>
			</ul>
		</section>
		<section>
			<h2 class="sub-ttl">Portfolio</h2>
			<a href="portfolio.php"><img src="img/Cafe-LP.png" alt="カフェのwebサイト" class="portfolio-img"></a>
			<a href="portfolio.php"><img src="img/cool-dark.png" alt="wpテーマ Cool Dark" class="portfolio-img"></a>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/nDvnsM5r8jU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="portfolio-under"></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/VoBpsS09Xjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="portfolio-under"></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/suuOJadH0Zw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/TruJkgA-zeg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/QC4Al8LtNWg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/-s1PZjbS6j4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uggrTM_CJds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sTv_vaeGXgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		<section>
			<h2 class="sub-ttl">Blog</h2>
			<img src="img/osakanav-header1.jpg" alt="ブログヘッダー画像" class="blog-img">
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
  <!-- /#all -->
<script src="js/main.js"></script>
</body>
</html>