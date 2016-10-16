<?php
$lotusHome = substr(__FILE__, 0, strpos(__FILE__, "unittest"));
require_once $lotusHome . "runtime/MVC/Action.php";
require_once $lotusHome . "runtime/MVC/Component.php";
require_once $lotusHome . "runtime/MVC/Context.php";
require_once $lotusHome . "runtime/MVC/Dispatcher.php";
require_once $lotusHome . "runtime/MVC/TemplateView.php";
require_once $lotusHome . "runtime/MVC/View.php";
require_once $lotusHome . "runtime/ObjectUtil/ObjectUtil.php";


/**
 * �������� LtTemplateView �� protected ���Ժͷ�����¶��������
 */
class LtTemplateViewProxy extends LtTemplateView
{
	public function __construct()
	{
		parent::__construct();
	}

	public function __get($prop)
	{
		if (isset($this->$prop))
		{
			return $this->$prop;
		}
	}

	public function parse($str)
	{
		return parent::parse($str);
	}
}
