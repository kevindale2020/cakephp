<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table {

	public function initialize(array $config): void {

		$this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator): Validator {

		$validator
			->requirePresence('title')
			->notEmpty('title', 'Title field is required')
			->requirePresence('body')
			->notEmpty('body', 'Body field is required');

		return $validator;

	}
}