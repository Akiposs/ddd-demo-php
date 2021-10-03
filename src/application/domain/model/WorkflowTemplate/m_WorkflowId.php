<?php

namespace domain\model\WorkflowTemplate;


class m_WorkflowId {
	private string $value;
	 public function __construct($id=null){
		if(empty($id)){
			$this->value = uniqid();
		}else{
			$this->value = $id;
		}
	}

	public function equal($value){
		return ($this->value == $value);
	}
}