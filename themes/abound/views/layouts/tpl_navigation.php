<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Aplikasi Kontrakan <small>4G</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Beranda', 'url'=>array('/site/index')),
                        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
                        array('label'=>'Pelanggan <span class="caret"></span>', 'url'=>'/orang/index', 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
								array('label'=>'Kelola Pelanggan', 'url'=>array('/orang/admin'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Create Pelanggan', 'url'=>array('/orang/create'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Cetak Pelanggan', 'url'=>array('/orang/cetakPelanggan'), 'visible'=>!Yii::app()->user->isGuest),
					),
				),
						array('label'=>'Kamar <span class="caret"></span>', 'url'=>'/kamar/index', 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
								array('label'=>'Kelola Kamar', 'url'=>array('/kamar/admin'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Create Kamar', 'url'=>array('/kamar/create'), 'visible'=>!Yii::app()->user->isGuest),
								array('label'=>'Cetak Kamar', 'url'=>array('/kamar/cetakKamar'), 'visible'=>!Yii::app()->user->isGuest),
					),
				),
						array('label'=>'Transaksi', 'url'=>array('/transaksi/create'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Laporan', 'url'=>array('/transaksi/admin'), 'visible'=>!Yii::app()->user->isGuest),	
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->