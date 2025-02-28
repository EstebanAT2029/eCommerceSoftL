<?php
$this->breadcrumbs=array(
	Yii::t('YiiShopModule.shop', 'Categories')=>array('index'),
	Yii::t('YiiShopModule.shop', 'Create'),
);

?>
	<h1> <?php echo Yii::t('YiiShopModule.shop', 'Create Category'); ?> </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
