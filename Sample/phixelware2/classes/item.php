<?php

	class Item{
		var $name;
		public function set_name($name) {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}
	}

?>