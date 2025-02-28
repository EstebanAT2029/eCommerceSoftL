<?php
$this->breadcrumbs=array(
	Yii::t('YiiShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('YiiShopModule.shop', 'Administration'),
);

?>

<H1> Webshop Administration </H1>

<div class="span-8"> 
<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('YiiShopModule.shop', 'Administrate Categories'))); ?>
<?php $this->renderPartial('/category/admin'); ?>
<?php $this->endWidget(); ?>
</div>

<div class="span-15 last"> 
<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('YiiShopModule.shop', 'Administrate your Products'))); ?>
<?php $this->renderPartial('/products/admin'); ?>
<?php $this->endWidget(); ?>
</div>

<div style="clear:both;">

<div class="span-8 last"> 
<?php $this->beginWidget('zii.widgets.CPortlet', array('title' => Yii::t('YiiShopModule.shop', 'Pending Orders'))); ?>
<?php $this->renderPartial('/order/admin'); ?>
<?php $this->endWidget(); ?>
</div>

<div style="clear:both;">
