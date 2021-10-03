<?php

namespace domain\model\WorkflowTemplate;


class m_InputItem {
	private string $name;
	private int $input_type;
	 public function __construct(string $name, int $input_type){
		$this->name = $name;
		$this->input_type = $input_type;
	}

	public function equal(self $input_type){
		foreach(array_keys(get_object_vars($this)) as $prop){
			if($this->$prop != $input_type->$prop){
				return false;
			}
		}
		return true;
	}
}