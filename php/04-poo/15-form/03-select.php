<?php

class Select {
	public $name;
	public $id;
	public $class;
	private $options = [];

	public function __construct($name, $id, $class){
		$this->name = $name;
		$this->id = $id;
		$this->class = $class;
	}

	public function setOptions($options){
		$this->options = $options;
	}

	public function addOption($option){
		array_push($this->options, $option);
	}

	public function addOptions($options){
		$this->options = array_merge($this->options, $options);
	}

	public function display(){
		$code = "<select name='$this->name' id='$this->id' class='$this->class'>";
		// $code = "pipi";
		foreach($this->options as $option){
			$code = $code . $option->display();
			// $code = $code . "caca";
		}
		$code = $code . "</select>";
		// $code = $code . "pipi";
		return $code;
	}
}

class Option {
	public $value;
	public $text;

	public function __construct($value, $text){
		$this->value = $value;
		$this->text = $text;
	}

	public function display(){
		return "<option value='$this->value'>$this->text</option>";
	}
}

?>