<?php
$this->breadcrumbs=array(
	Yii::t('shop', 'Products')=>array('index'),
	$model->title,
);

?>

<div class="span-15">

<h1><?php echo $model->title; ?></h1>

<h2><?php echo $model->description; ?></h2>

<?php foreach($model->Images as $image) {
	$this->renderPartial('/image/view', array( 'model' => $image)); 
} ?>

</div>

<div class="span-8 last">
<p> <?php echo Yii::t('shop', 'Product Properties'); ?> </p>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'title',
		'description',
		'price',
		'color',
		'weight',
		'material',
		'size',
		'unit',
		'Category.title',
	),
)); ?>
<hr />
<?php $this->renderPartial('/products/addToCart', array('model' => $model)); ?>
</div>

<div style="clear:both;">  </div>


