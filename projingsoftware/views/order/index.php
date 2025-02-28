<?php
$this->breadcrumbs=array(
	Yii::t('YiiShopModule.shop','Orders'),
);

?>
<h1>My Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
