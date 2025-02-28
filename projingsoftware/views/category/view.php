<?php
$this->breadcrumbs=array(
	Yii::t('YiiShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('YiiShopModule.shop', 'Categories')=>array('index'),
	$model->title,
);

?>

<div class="span-15"> 
<h1> <?php echo $model->title; ?></h1>

<?php
	foreach($model->Products as $product) {
		$this->renderPartial('/products/_view', array('data' => $product));
}
?>
</div>

<div class="span-8 last"> 
<?php $this->beginWidget('zii.widgets.CPortlet',
        array('title' => Yii::t('YiiShopModule.shop', 'Product Categories'))); ?>
<?php $this->renderPartial('/category/index'); ?>
<?php $this->endWidget(); ?>

<?php $this->beginWidget('zii.widgets.CPortlet',
        array('title' => Yii::t('YiiShopModule.shop', 'Your Shopping Cart'))); ?>
<?php $this->renderPartial('/shoppingCart/index'); ?>
<?php $this->endWidget(); ?>
</div>



<div style="clear:both;"> </div>


