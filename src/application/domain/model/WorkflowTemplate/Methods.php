<?php

namespace domain\model\WorkflowTemplate;


trait Methods {
	public function name(){
		return $this->name;
	}
	public function input_items(){
		return $this->input_items;
	}

	public function equalName($name){
		return ($this->name == $name);
	}

	public function equalInputItems($input_items){
		if(count($this->input_items) != count($input_items)){
			return false;
		}
		foreach($input_items as $input_item){
			foreach($this->input_items as $inner_item){
				if(!$inner_item->equal($input_item)){
					return false;
				}
			}
		}
		return true;
	}
}