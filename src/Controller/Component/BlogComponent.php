<?php

namespace App\Controller\Component;;

use Cake\Controller\Component;

class BlogComponent extends Component {

	public function sayHello() {

		return 'Hello';
	}

	public function getColors() {

		$colors = ['Red', 'Blue', 'Green'];

		return $colors;
	}

	public function generatePassword() {

		$password = '';
		$desired_length = rand(8, 12);

		for($i=0; $i<$desired_length; $i++) {

			$password.=chr(rand(32, 126));
		}

		return $password;
	}
}