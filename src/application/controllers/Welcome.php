<?php


require_once "application/domain/model/WorkflowTemplate/WorkflowTemplate.php";
require_once "application/domain/model/WorkflowTemplate/m_WorkflowId.php";
require_once "application/domain/model/WorkflowTemplate/m_InputItem.php";
use domain\model\WorkflowTemplate\WorkflowTemplate;
use domain\model\WorkflowTemplate\m_WorkflowId as WorkflowId;
use domain\model\WorkflowTemplate\m_InputItem as InputItem;

class Welcome extends CI_Controller {


	public function index()
	{
		$input_items=[];
		foreach(['日付', '理由'] as $item_name){
			$input_items[] = new InputItem($item_name, 1);
		}
		$WorkflowTemplate = new WorkflowTemplate(
			new WorkflowId(),
			'休暇申請',
			$input_items
		);
		echo "<pre>";
		var_dump(get_object_vars($WorkflowTemplate));
		var_dump($WorkflowTemplate);
		echo "<pre>";

		exit;
		$this->load->view('welcome_message');
	}
}
