<?php 

$model = new Category();

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		array(
			'class'=>'CButtonColumn', 
			'viewButtonUrl' => 'Yii::app()->createUrl("/YiiShop/category/view", array("id" => $data->category_id))',
			'updateButtonUrl' => 'Yii::app()->createUrl("/YiiShop/category/update", array("id" => $data->category_id))',
			'deleteButtonUrl' => 'Yii::app()->createUrl("/YiiShop/category/delete", array("id" => $data->category_id))',
		),
	),
)); 

echo CHtml::link(Yii::t('YiiShopModule.shop', 'Create a new Category'), array('category/create'));

?>
