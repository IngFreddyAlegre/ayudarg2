<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','logout');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->User->recursive = 2;
                $user = $this->User->read(null,$this->Auth->user('id'));
                $this->Session->write('User', $user);
                $institutions = array();
                foreach ($user['InstitutionDirector'] as $inst) {
                    $institutions[$inst['id']] = $inst;
                }
                foreach ($user['InstitutionManager'] as $inst) {
                    $institutions[$inst['id']] = $inst;
                }
                foreach ($user['InstitutionContact'] as $inst) {
                    $institutions[$inst['id']] = $inst;
                }
                $this->Session->write('Institutions',$institutions);
                if (count($institutions) > 0) {
                    reset($institutions);
                    $this->Session->write('Institutions.current', current($institutions));
                }
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        $this->Session->destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard() {

    }
}
