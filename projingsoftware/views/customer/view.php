<?php
$this->breadcrumbs=array(
	Yii::t('YiiShopModule.shop', 'Customers')=>array('index'),
	$model->customer_id,
);

?>
<h1> <?php echo Yii::t('YiiShopModule.shop', 'View Customer'); ?> #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'userid',
		'address',
		'zipcode',
		'city',
		'country',
		'email',
	),
)); ?>
