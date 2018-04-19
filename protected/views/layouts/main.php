<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">

		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Beranda', 'url'=>array('/site/index')),
				array('label'=>'Pelanggan', 'url'=>array('/orang/index'), 'visible'=>!Yii::app()->user->isGuest,
					'items'=>array(
								array('label'=>'Kelola Pelanggan', 'url'=>array('/orang/admin'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Create Pelanggan', 'url'=>array('/orang/create'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Cetak Pelanggan', 'url'=>array('/orang/cetakSiswa'), 'visible'=>!Yii::app()->user->isGuest),
					),
				),
				array('label'=>'Kamar', 'url'=>array('/kamar/index'), 'visible'=>!Yii::app()->user->isGuest,
					'items'=>array(
								array('label'=>'Kelola Kamar', 'url'=>array('/kamar/admin'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Create Kamar', 'url'=>array('/kamar/create'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Cetak Kamar', 'url'=>array('/kamar/cetakSiswa'), 'visible'=>!Yii::app()->user->isGuest),
					),
				),
				array('label'=>'Transaksi', 'url'=>array('/transaksi/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Laporan', 'url'=>array('/transaksi/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Tentang Aplikasi', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Kontak Kami', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
