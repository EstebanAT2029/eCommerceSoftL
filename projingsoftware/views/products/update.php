<?php
$this->breadcrumbs=array(
	Yii::t('shop', 'Products')=>array('index'),
	$model->title=>array('view','id'=>$model->product_id),
	Yii::t('shop', 'Update'),
);

?>

<h1><?php echo Yii::t('shop', 'Update'); ?> <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
