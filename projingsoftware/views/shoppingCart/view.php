<?php
$this->breadcrumbs=array(
	'Shopping Carts'=>array('index'),
	$model->cart_id,
);

$this->menu=array(
	array('label'=>Yii::t('YiiShopModule.shop', 'List') . ' ShoppingCart', 'url'=>array('index')),
	array('label'=>Yii::t('YiiShopModule.shop', 'Create') . ' ShoppingCart', 'url'=>array('create')),
	array('label'=>Yii::t('YiiShopModule.shop', 'Update') . ' ShoppingCart', 'url'=>array('update', 'id'=>$model->cart_id)),
	array('label'=>Yii::t('YiiShopModule.shop', 'Delete') . ' ShoppingCart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cart_id),'confirm'=>Yii::t('YiiShopModule.shop', 'Are you sure to delete this item?'))),
	array('label'=>Yii::t('YiiShopModule.shop', 'Manage') . ' ShoppingCart', 'url'=>array('admin')),
);
?>

<h1>View ShoppingCart #<?php echo $model->cart_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cart_id',
		'amount',
		'product_id',
		'customer_id',
	),
)); ?>
