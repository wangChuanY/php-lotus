<?php 
class testUsingComponentAction extends LtAction
{
	public function execute()
	{
		$this->code = 200;
		$this->message = "Welcome, please signin";
		$this->data["username"] = "lotusphp";
		$this->data['title'] = "Welcome Lotusphp ";

		$this->responseType = 'tpl'; // ʹ��ģ������
		$this->layout = 'top_navigator';
	}
}