<?php

class YiiShopModule extends CWebModule
{
	// Is the Shop in debug Mode?
	public $debug = false;

  // Whether the installer should install some demo data
	public $installDemoData = true;

	// Name of the category Table
	public $categoryTable = 'YiiShopCategory';

	// Name of the products Table
	public $productsTable = 'YiiShopProducts';

	// Name of the shopping Cart Table
	public $shoppingCartTable = 'YiiShopShoppingCart';

	// Name of the order Table
	public $orderTable = 'YiiShopOrder';

	// Name of the customer Table
	public $customerTable = 'YiiShopCustomer';

	// Name of the image Table
	public $imageTable = 'YiiShopImage';

	// Where the uploaded product images are stored:
	public $productImagesFolder = '/Productimages'; // Approot/...

	public function init()
	{
		$this->setImport(array(
			'YiiShop.models.*',
			'YiiShop.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			return true;
		}
		else
			return false;
	}
}
