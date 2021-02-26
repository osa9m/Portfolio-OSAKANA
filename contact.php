<?php

$page_flag = 0;
$clean = array();
$error = array();

if( !empty($_POST) ) {
	foreach( $_POST as $key => $value) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	}
}

if (!empty($_POST['submit']) ) {
	$error = validation($clean);
	if( empty($error) ) {
		$page_flag = 1;

		session_start();
		$_SESSION['page'] = true;
	}
} elseif (!empty($_POST['btn_submit']) ) {

	session_start();
	if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {

		unset($_SESSION['page']);

	$page_flag = 2;

	$header = null;
	$auto_reply_subject = null;
	$auto_reply_text = null;
	$admin_reply_subject = null;
	$admin_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');

	$header = "MIME-Version: 1.0\n";
	$header .= "From: OSAKANA <osakana1699@gmail.com>\n";
	$header .= "Reply-To: OSAKANA <osakana1699@gmail.com>\n";

	$auto_reply_subject = '【クリエーターのOSAKANA】 お問い合わせありがとうございます。';
	$auto_reply_text = "
	この度は、お問い合わせ頂き誠にありがとうございます。

	下記の内容でお問い合わせを受け付けました。
	------------------------------------
	\n\n";
	$auto_reply_text .= "お問い合わせ日時:" . date("Y-m-d H:i") ."\n";
	$auto_reply_text .= "氏名:" . $_POST['name'] . "\n";
	$auto_reply_text .= "メールアドレス:" . $_POST['mail'] . "\n\n";

	$auto_reply_text .= "お問い合わせ内容:" . nl2br($_POST['inquiry']) . "\n";
	$auto_reply_text .= '
	------------------------------------
	OSAKANA/長 百美
	mail: osakana1699@gmail.com';
	// $admin_reply_text .= 'お問い合わせ内容:' . nl2br($_POST['inquiry']) . 'n\n';

// 運営側のメール
	mb_send_mail( $_POST['mail'], $auto_reply_subject, $auto_reply_text, $header);

	$admin_reply_subject = "お問い合わせを受け付けました";

	$admin_reply_text = "下記の内容でお問い合わせがありました。 \n\n";
	$admin_reply_text .= "お問い合わせ日時:" . date('Y-m-d H:i') . "\n";
	$admin_reply_text .= "氏名:" . $_POST['name'] . "\n";
	$admin_reply_text .= "メールアドレス:" . $_POST['mail'] . "n\n";
	$admin_reply_text .= 'お問い合わせ内容:' . nl2br($_POST['inquiry']) . "\n";

	mb_send_mail( 'osakana1699@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
} else {
	$page_flag = 0;
	}
}

function validation($data) {
	$error = array();
	if( empty($data['name']) ) {
		$error[] = '「お名前」は必ず入力してください。';
	}
	if( empty($data['mail']) ) {
		$error[] = '「メールアドレス」は必ず入力してください。';
	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['mail']) ) {
		$error[] = '「メールアドレス」は正しい形式で入力してください。';
	}
	if( empty($data['inquiry']) ) {
		$error[] = '「お問い合わせ内容」は必ず入力してください。';
	}
	return $error;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, telephone=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <title>Contact | OSAKANA フリーランスのクリエーターです。</title>
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

		<!-- $page_flag1 -->
		<?php if($page_flag === 1): ?>

			<div id="contents">
			<h2 class="sub-ttl">入力内容の確認</h2>
			<section>
				<form action="" method="post">
					<p class="form1">
						お名前<span class="required">必須</span>
						<br>
						<?php echo $_POST['name']; ?>
					</p>
					<p class="form1">
						貴社名<br>
						<?php echo $_POST['company-name']; ?>
					</p>
					<p class="form1">
						メールアドレス<span class="required">必須</span>
						<br><?php echo $_POST['mail']; ?>
					</p>
					<p class="form1">
						お問い合わせ内容<span class="required">必須</span><br>
						<?php echo $_POST['inquiry']; ?>
					</p>
					<input type="submit" name="btn_back" class="btn-back" value="戻る">
					<input type="submit" name="btn_submit" class="btn-submit" value="送信">
					<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
					<input type="hidden" name="company-name" value="<?php echo $_POST['company-name']; ?>">
					<input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
					<input type="hidden" name="inquiry" value="<?php echo $_POST['inquiry']; ?>">
				</form>
			</section>
		<?php else: ?>
		<!-- /$page_flag1 -->

		<!-- $page_flag2 -->
		<?php if($page_flag === 2): ?>
			<h2 class="submit-done">送信が完了しました。</h2>
			<p class="text00">	お問い合わせいただき、ありがとうございます。<br>メッセージを受け付けました。<br>
			</p>
		<?php else: ?>
		<!-- /$page_flag2 -->

		<?php if (!empty($error) ): ?>
			<ul class="error_list">
			<?php foreach( $error as $value): ?>
				<li><?php echo $value; ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>

	<!-- #contents -->
	<div id="contents">
		<h2 class="sub-ttl">Contact</h2>
		<section>
			<p class="text00">
				「Web制作」「楽曲制作」のご依頼・ご相談などお気軽にお問い合わせください。
			</p>
			<form action="contact.php" method="post">
				<p class="form">
					お名前<span class="required">必須</span>
					<br><input type="text" name="name" value="<?php if(!empty($_POST['name']) ){ echo $_POST['name']; } ?>">
				</p>
				<p class="form">
					貴社名<br>
					<input type="text" name="company-name" value="<?php if(!empty($_POST['company-name']) ){ echo $_POST['company-name']; } ?>">
				</p>
				<p class="form">
					メールアドレス<span class="required">必須</span>
					<br><input type="text" name="mail" value="<?php if(!empty($_POST['mail']) ){ echo $_POST['mail']; } ?>">
				</p>
				<p class="form">
					お問い合わせ内容<span class="required">必須</span><br>
					<textarea name="inquiry" id="" cols="40" rows="13" placeholder="(例)ご相談があります。HTML/CSSコーディングを依頼したいのですが可能でしょうか？よろしくお願いいたします。" ><?php if( !empty($_POST['inquiry']) ){ echo $_POST['inquiry']; } ?></textarea>
				</p>
				<div class="g-recaptcha" data-callback="clearcall" data-sitekey="6LeDbuAUAAAAAFIyQMLpBxOYGMH1Tq8byIx39mcf"></div>
				<input type="submit" name="submit" class="btn-submit">
			</form>
		</section>
	</div>
	<!-- /#contents -->
<?php endif; ?>
<?php endif; ?>

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