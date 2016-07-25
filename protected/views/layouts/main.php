<!DOCTYPE html>
<html lang="<?=Yii::app()->language; ?>">
	<head>
		<meta charset="utf-8" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-touch-fullscreen" content="yes" />
		
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/vnd.microsoft.icon" href="/images/favicon.ico">
        <link rel="SHORTCUT ICON" href="/images/favicon.ico">
		<?=SeoHelper::getInstance()->renderMetaTags() ?>

	</head>

    <body>
		<?php
		/* if(Yii::app()->user->checkAccess('admin'))
		  $this->renderPartial('//layouts/parts/_admin_menu');
		 */
		?>

		<div class = "g-container">
			<!--======================== header ============================-->
			<header class = "g-header">
				<nav class="navbar navbar-default j-menu b-menu-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="/images/logo.png" alt="WebAnex"></a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">home</a></li>
								<li><a href="#">services</a></li>
								<li><a href="#">about</a></li>
								<li><a href="#">works</a></li>
								<li><a href="#">testimonial</a></li>
								<li><a href="#">team</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="#">contact</a></li>
								<li><a href="#">digicom</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>

			<div class = "clearfix"></div>

			<div class = "g-content">
				<?php echo $content; ?>
			</div>

			<div class = "clearfix"></div>

			<section class="container footer-correct">
				<footer class="b-footer">
					<section class="container footer-correct">
						<div class="row">
							<div class="b-footer-border">
								<div class="b-inner-fotter-border"></div>
							</div>

							<div class = "clearfix"></div>
							
							<div class="b-footer-bottom">
								<div class="col-md-5">
									<p>ИП Старыгин С.Ю.</p>
									<p>
										Изготовлено:
										<a class="b-footer-logo" href="#" title="WebAnnex" target="_blank">WebAnnex Group</a>
									</p>
								</div>

								<div class="col-md-2">
									<a class="b-vremenno" title="asd" target="_blank" href="/">WebAnnex Group</a>
								</div>

								<div class="col-md-5 b-footer-menu">
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Documantation</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class = "clearfix"></div>
							</div>
						</div>
					</section>
				</footer>
			</section>
        </div>
		
		<?php
		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$cs->registerPackage('bootstrap');
		$cs->registerScriptFile('http://html5shiv.googlecode.com/svn/trunk/html5.js', CClientScript::POS_END, array('media' => 'lt IE 9'));
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/system.jquery.js');
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/main.jquery.js');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/system.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/main.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/icon.css');
		?>
    </body>
</html>

