<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->customer_id=>array('view','id'=>$model->customer_id),
	Yii::t('YiiShopModule.shop', 'Update'),
);

?>
<h1> <?php echo Yii::t('YiiShopModule.shop', 'Update Customer'); ?> <?php echo $model->customer_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
