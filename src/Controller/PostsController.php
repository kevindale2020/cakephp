<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController {

	public function initialize(): void {

        // $this->loadComponent('Blog');
        parent::initialize();
        $this->loadComponent('Flash');
    }

	public function index() {

		$posts = $this->Posts->find('all');

		$this->set(compact('posts'));

		// $this->set('person', 'John Doe');
		// $people = ['Kevin', 'Shania', 'Prometheus'];
		// $this->set('people', $people);

		// die($this->Blog->sayHello());

		// $posts = [
		// 	['id' => 1, 'title' => 'First Post', 'body' => 'This is my first post', 'image' => 'https://images.freeimages.com/images/large-previews/d0f/nuclear-power-plant-1314782.jpg'],
		// 	['id' => 2, 'title' => 'Second Post', 'body' => 'This is my second post', 'image' => 'https://images.freeimages.com/images/large-previews/566/green-frog-1361810.jpg'],
		// 	['id' => 3, 'title' => 'Third Post', 'body' => 'This is my third post', 'image' => 'https://images.freeimages.com/images/large-previews/9bd/buddha-4-1142506.jpg']
		// ];

		// $languages = [

		// 	'Languages' => [
		// 		'English' => [
		// 			'American',
		// 			'Canadian',
		// 			'British'
		// 		],
		// 		'Spanish',
		// 		'German'
		// 	]
		// ];

		// $languages = array(

		// 	'languages' => array(
		// 		'English' => array('American', 'Canadian', 'British'),
		// 		'Spanish',
		// 		'German',
		// 		'Nihongo'
		// 	)
		// );

		// $this->set('posts', $posts);

		// $this->set('languages', $languages);

		// $this->set('colors', $this->Blog->getColors());
	}

	public function view($id) {

		$post = [
			'id' => $id,
			'title' => ($id==1) ? 'First Post' : ($id==2) ? 'Second Post' : 'Third Post',
			'body' =>  ($id==1) ? 'This is my first post' : ($id==2) ? 'This is my second post' : 'This is my third post',
		];

		$this->set('post', $post);
	}

	// public function edit($id) {

	// 	echo "Edit ".$id;

	// 	exit;
	// }

	public function create() {

		$post = $this->Posts->newEmptyEntity();

		if($this->request->is('post')) {

			// $post = $this->Posts->patchEntity($post, $this->request->getData());
			$post->title = $this->request->getData('title');
			$post->body = $this->request->getData('body');
			$post->category = $this->request->getData('category');
			$post->author = $this->request->getData('author');

			if($this->Posts->save($post)) {

				$this->Flash->success(__('Post Created'));
				return $this->redirect(['action' => 'index']);
			} 
			
			$this->Flash->error(__('Unable to save post'));
		}

		$this->set('post', $post);

		$this->set('test', $this->request->getData('title'));
		
	}

	public function hello() {

		// die('Hi '.$this->request->getQuery('name'));
		// print_r($this->request->getQuery());

		// if($this->request->is('get')) {
		// 	echo "Hello World Kevin ".$this->request->getQuery('city');
		// } else {
		// 	echo "Hello";
		// }
		die();
	}

	public function edit($id) {

		// $posts = $this->Posts->find('all');
		// $this->set(compact('posts'));

		$post = $this->Posts->get($id);

		if($this->request->is(['post', 'put'])) {

			$post->title = $this->request->getData('title');
			$post->body = $this->request->getData('body');
			$post->category = $this->request->getData('category');
			$post->author = $this->request->getData('author');

			if($this->Posts->save($post)) {

				$this->Flash->success(__('Post Updated'));
				return $this->redirect(['action' => 'index']);
			} 
			
			$this->Flash->error(__('Unable to update post'));

		}

		$this->set('post', $post);
	}

	public function delete($id) {

		$this->request->allowMethod(['post', 'delete']);

		$post = $this->Posts->get($id);

		if($this->Posts->delete($post)) {

			$this->Flash->success(__('Post Deleted'));

			return $this->redirect(['action' => 'index']);

		}
	}

}
