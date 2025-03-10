<?php 

$model = new Products();

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		'price',
		'unit',
		array(
			'class'=>'CButtonColumn', 
			'template' => '{view}{update}{delete}{images}',
			'viewButtonUrl' => 'Yii::app()->createUrl("/YiiShop/products/view", array("id" => $data->product_id))',
			'updateButtonUrl' => 'Yii::app()->createUrl("/YiiShop/products/update", array("id" => $data->product_id))',
			'deleteButtonUrl' => 'Yii::app()->createUrl("/YiiShop/products/delete", array("id" => $data->product_id))',
			'buttons' => array(
				'images' => array(
					'label' => Yii::t('shop', 'images'),
					'url' => 'Yii::app()->createUrl("/YiiShop/image/admin", array("product_id" => $data->product_id))',
				),
			),
		),
	)
)
); 


echo CHtml::link(Yii::t('shop', 'Create a new Product'), array('products/create'));
?>
