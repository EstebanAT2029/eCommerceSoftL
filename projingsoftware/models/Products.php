<?php

class Products extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return Yii::app()->controller->module->productsTable;
	}

	public function rules()
	{
		return array(
			array('title, category_id', 'required'),
			array('product_id, category_id', 'numerical', 'integerOnly'=>true),
			array('title, price, color, weight, material, size, unit, language', 'length', 'max'=>45),
			array('description', 'safe'),
			array('product_id, title, description, price, color, weight, material, size, unit, category_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'Orders' => array(self::MANY_MANY, 'Order', 'YiiShopProductOrder(order_id, product_id)'),
			'Category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'Images' => array(self::HAS_MANY, 'Image', 'product_id'),
			'ShoppingCarts' => array(self::HAS_MANY, 'ShoppingCart', 'product_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'product_id' => Yii::t('shop', 'Product'),
			'title' => Yii::t('shop', 'Title'),
			'description' => Yii::t('shop', 'Description'),
			'price' => Yii::t('shop', 'Price'),
			'color' => Yii::t('shop', 'Color'),
			'weight' => Yii::t('shop', 'Weight'),
			'material' => Yii::t('shop', 'Material'),
			'size' => Yii::t('shop', 'Size'),
			'unit' => Yii::t('shop', 'Unit'),
			'category_id' => Yii::t('shop', 'Category'),
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider('Products', array(
			'criteria'=>$criteria,
		));
	}
}
