<?php
$this->breadcrumbs=array(
	Yii::t('shop', 'Product')=>array('index'),
	Yii::t('shop', 'Create'),
);
?>

	<h1><?echo Yii::t('Create Product', 'Create a new Product'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
