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
    }

    public
    function beforeRender(EventInterface $event)
    {
//        $prefix = null;
//        if ($this->request->getParam('prefix') !== null) {
//            //  $prefix = $this->request->getParam(array('prefix'));
//        }

//        if ($prefix == 'admin' || $prefix == 'suporte' || $prefix == 'site') {
//            if (($this->request->getParam(['action']) !== null) and (($this->request->getParam(['action']) == 'login') or ($this->request->getParam(['action']) == 'cadastrar') or ($this->request->getParam(['action']) == 'recuperarSenha') or ($this->request->getParam(['action']) == 'atualizarSenha'))) {
//                $this->viewBuilder()->setLayout('login');
//            } else {
//                //$id = null;
//                $perfilUser = $this->Auth->user();
//                $this->set(compact(['perfilUser']));
//                //var_dump($perfilUser);
//
////                $this->viewBuilder()->setTheme('AdminLTE');
////                $this->viewBuilder()->setClassName('AdminLTE.AdminLTE');
//            }
//        } else {
//            $this->viewBuilder()->setLayout('site');
//            //$this->viewBuilder()->setTheme('AdminLTE');
//            //$this->viewBuilder()->setClassName('AdminLTE.AdminLTE');
//        }
//    }

        /**
         * @param Event $event
         * @return void
         */
//    public function beforeFilter(EventInterface $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow('add', 'logout', 'authorize', 'index');
//    }
        $this->viewBuilder()->setLayout('default');
    }
}
