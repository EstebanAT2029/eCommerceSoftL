<img src="Productimages/<?php echo $model->filename; ?>">

<br />
<?php 
if(!Yii::app()->user->isGuest) 
echo CHtml::link(Yii::t('YiiShopModule.shop', 'Delete Image'), array('delete', 'id' => $model->id)); ?>
<br />
