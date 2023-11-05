<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Event\EventInterface;
use Cake\Core\Configure;

class AppController extends Controller
{
    /**
     * @throws \Exception
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'logoutAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
// Permite a ação display, assim nosso pages controller
// continua a funcionar.
        $this->Auth->allow(['display']);
    }

    public function beforeRender(EventInterface $event)
    {
        $prefix = null;
        if ($this->request->getParam('prefix') !== null) {
            $prefix = $this->request->getParam('prefix');
        }

        if ($prefix == 'admin') {
            if (
                ($this->request->getParam(['action']) !== null) and (
                    ($this->request->getParam(['action']) == 'login') or (
                        $this->request->getParam(['action']) == 'cadastrar') or (
                        $this->request->getParam(['action']) == 'recuperarSenha') or (
                        $this->request->getParam(['action']) == 'atualizarSenha'))) {
                $this->viewBuilder()->setTheme('login');
            } else {
                $this->viewBuilder()->setLayout('default');
                //$id = null;
                $perfilUser = $this->Auth->user();
                $this->set(compact(['perfilUser']));
                //var_dump($perfilUser);

            }

        }

    }
//    public function beforeFilter(EventInterface $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow('add', 'logout', 'authorize', 'index');
//    }
}
