<?php 
class testUsingBlankLayoutAction extends LtAction
{
	public function execute()
	{
		$this->responseType = 'tpl'; // ʹ��ģ������
		// $this->layout = 'top_navigator'; // ���ò���
	}	
}