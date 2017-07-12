<?php

require_once('01-input.php');

class Textarea extends Input {
	public function display() {
		return "<textarea name='$this->name' id='$this->id' class='$this->class' placeholder='$this->placeholder'>$this->value</textarea>";
	}
}
