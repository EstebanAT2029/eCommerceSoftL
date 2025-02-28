<?php
$this->breadcrumbs=array(
	'Images'=>array('index'),
	Yii::t('YiiShopModule.shop', 'Manage'),
);

?>

<h1>Images for <?php echo $product->title; ?></h1>

<?php
if(!$images) foreach($images as $image) {
	echo $image->title;
	$this->renderPartial('view', array('model' => $image));
}


echo CHtml::link(Yii::t('YiiShopModule.shop', 'Upload new Image'), array('create', 'product_id' => $product->product_id));
?>
