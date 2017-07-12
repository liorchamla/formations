<?php

class Input {
	public $name;
	public $id;
	public $class;
	public $placeholder;
	public $value;

	public function __construct($name, $id, $class, $placeholder, $value){
		$this->name        = $name;
		$this->id          = $id;
		$this->class       = $class;
		$this->placeholder = $placeholder;
		$this->value       = $value;
	}

	public function display(){
		return "<input type='text' name='$this->name' id='$this->id' class='$this->class' placeholder='$this->placeholder' value='$this->value'>";
	}
}

?>