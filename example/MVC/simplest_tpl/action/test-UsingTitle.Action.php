<?php
class testUsingTitleAction extends LtAction
{
	public function execute()
	{
		$this->data['title'] = "How to use title";

		$this->responseType = 'tpl'; // ʹ��ģ������
		$this->layout = 'top_navigator';
	}
}