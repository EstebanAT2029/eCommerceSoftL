<?php

class Customer extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return Yii::app()->controller->module->customerTable;
	}

	public function rules()
	{
		return array(
			array('customer_id, email, address, zipcode, city, country', 'required'),
			array('customer_id, userid', 'numerical', 'integerOnly'=>true),
			array('address, zipcode, city, country, email', 'length', 'max'=>45),
			array('email', 'CEmailValidator'),
			array('customer_id, userid, address, zipcode, city, country, email', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'Orders' => array(self::HAS_MANY, 'Order', 'customer_id'),
			'ShoppingCarts' => array(self::HAS_MANY, 'ShoppingCart', 'customer_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'customer_id' => Yii::t('shop', 'Customer'),
			'userid' => Yii::t('shop', 'Userid'),
			'address' => Yii::t('shop', 'Address'),
			'zipcode' => Yii::t('shop', 'Zipcode'),
			'city' => Yii::t('shop', 'City'),
			'country' => Yii::t('shop', 'Country'),
			'email' => Yii::t('shop', 'Email'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('customer_id',$this->customer_id);

		$criteria->compare('userid',$this->userid);

		$criteria->compare('address',$this->address,true);

		$criteria->compare('zipcode',$this->zipcode,true);

		$criteria->compare('city',$this->city,true);

		$criteria->compare('country',$this->country,true);

		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider('Customer', array(
			'criteria'=>$criteria,
		));
	}
}
