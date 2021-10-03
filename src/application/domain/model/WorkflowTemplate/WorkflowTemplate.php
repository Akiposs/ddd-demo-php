<?php

namespace domain\model\WorkflowTemplate;

require_once "application/domain/model/Assert.php";
require_once "application/domain/model/WorkflowTemplate/m_WorkflowId.php";
require_once "application/domain/model/WorkflowTemplate/Methods.php";
use domain\model\WorkflowTemplate\m_WorkflowId as WorkflowId;
use domain\model\WorkflowTemplate\Methods;
use domain\model\Assert;

class WorkflowTemplate {
	use Methods;
	private WorkflowId $id;
	private string $name;
	private array $input_items;

	public function __construct($id, $name, $input_items){
		Assert::MatchClassRecursive($input_items, 'ワークフロー入力項目', 'domain\model\WorkflowTemplate\m_InputItem');
		$this->id = $id;
		$this->name = $name;
		$this->input_items = $input_items;
	}
	
	public function reBuild($name, $input_items){
		return new static(
			$this->id,
			(!$this->equalName($name)) ? $name:$this->name,
			(!$this->equalInputItems($input_items)) ? $input_items:$this->input_items
		);
	}
}