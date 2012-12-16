<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />	
		
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->
		
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>
		<div id="container">
			<div id="title">
				<img class="applogo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" />
				<span class="appname"><?php echo CHtml::encode(Yii::app()->name); ?></span>
				<?php if (Yii::app()->user->isGuest) { ?>
					<div class="applogin">
						<a href="/site/login" title="Login">Login</a>
						<a href="/site/register" title="Register">Register</a></div>
				<?php } ?>
			</div>
			<div id="navigation">
				<?php $this->widget('zii.widgets.CMenu',array(
					'id' => 'navlist',
					'items'=>array(
						array('label'=>'HOME', 'url'=>array('/site/index')),
						array('label'=>'ABOUT US', 'url'=>array('/site/aboutus')),
						array('label'=>'PORTFOLIO', 'url'=>array('/site/portfolio')),
						array('label'=>'BLOG', 'url'=>array('/site/blog')),
						array('label'=>'CONTACT', 'url'=>array('/site/contact'))
					)
				)); ?>
			</div>
			<div id="content">
				<?php echo $content; ?>
			</div>
			<div id="footer">
				Some footer bullshit here
			</div>
		</div>
	</body>
</html>