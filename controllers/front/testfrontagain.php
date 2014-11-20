<?php
/**
 * Link to access the controller : $link->getModuleLink('testgit', 'testfrontagain')
 */

class testgittestfrontagainModuleFrontController extends ModuleFrontController
{
	public function __construct()
	{
		$this->display_column_left = false;
		$this->display_column_right = false;
		parent::__construct();
		$this->context = Context::getContext();

	}

	public function postProcess()
	{
		parent::postProcess();
	}

	public function init()
	{
		parent::init();
	}

	public function initContent()
	{
		parent::initContent();

		// Init smarty content and set template to display

		$this->setTemplate('testfrontagain.tpl');
	}

	public function setMedia()
	{
		parent::setMedia();		
		$this->addCSS(__PS_BASE_URI__.'modules/testgit/views/css/testfrontagain.css');
	}
}
