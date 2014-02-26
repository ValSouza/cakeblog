<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	//Finding all the records in the Post table and handind them over to the view
	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}
	//This function allow us to add to the posts database//
	public function add() {
		 
		//Checking if this is a HTTP post request//
		if ($this->request->is('post')) {
			 
			// Initializing the post Model//
			$this->Post->create();

			// handing the request object data to be saved by the post Model//
			if ($this->Post->save($this->request->data)) {
				 
				// This is a confirmation message that will flash on the screen//
				$this->Session->setFlash(__('Your post has been saved.'));

				//When you have updated your post it returns to Posts index action
				return $this->redirect(array('action' => 'index'));
			}
			// Flash message in case it doesn't save//
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	//Doesn't allow HTTP get request//
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	//else delete and show message//
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(
			__('The post with id: %s has been deleted.', h($id))
			);
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>