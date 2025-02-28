<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>

<h1> <?php echo Yii::t('YiiShopModule.shop', 'Welcome to my Webshop'); ?> </h1>


<div class="span-16"> 
<?php $this->renderPartial('/shop/welcome'); ?>
</div>

<div class="span-8 last"> 
<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('YiiShopModule.shop', 'Product Categories'))); ?>
<?php $this->renderPartial('/category/index'); ?>
<?php $this->endWidget(); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('YiiShopModule.shop', 'Your Shopping Cart'))); ?>
<?php $this->renderPartial('/shoppingCart/index', array()); ?>
<?php $this->endWidget(); ?>
</div>


<div style="clear:both;"> </div>

