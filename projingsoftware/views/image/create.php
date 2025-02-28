<?php
$this->breadcrumbs=array(
	'Images'=>array('index'),
	Yii::t('YiiShopModule.shop', 'Create'),
);

?>
	<h1> <?php Yii::t('YiiShopModule.shop', 'Upload Image'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
