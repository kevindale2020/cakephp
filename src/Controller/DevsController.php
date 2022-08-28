<?php

namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController {

	public function initialize(): void {

        $this->loadComponent('Blog');
    }

	public function index() {

		$this->set('colors', $this->Blog->getColors());

		$this->set('password', $this->Blog->generatePassword());

		$posts = $this->loadModel('Posts')->find('all');;

		$this->set('posts', $posts);
	}
}
