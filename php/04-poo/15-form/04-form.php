<?php

class Form {
	public $name;
	public $id;
	public $action;
	public $method;
	public $class;
	private $fields = [];

	public function __construct($name, $id, $action, $method, $class){
		$this->name = $name;
		$this->id = $id;
		$this->action = $action;
		$this->method = $method;
		$this->class = $class;
	}

	public function addField($field){
		array_push($this->fields, $field);
	}

	public function display(){
		$code = "<form name='$this->name' id='$this->id' class='$this->class' action='$this->action' method='$this->method'>";
		foreach($this->fields as $field){
			$code = $code . $field->display();
		}
		$code = $code . "</form>";
		return $code;
	}
}

?>