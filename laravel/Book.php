<?php

	class Book extends Eloquent {
		
		public function user(){
			return $this->belondsTo('User');
		}
		
	}

?>