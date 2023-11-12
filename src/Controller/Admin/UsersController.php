<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [
                'Address',
                'Addresses',
                'AppCreditCards',
                'AppInvoices',
                'AppOrders',
                'AppSubscriptions',
                'AppWallets',
                'Notifications'],
        ]);

        $this->set(compact('user'));
    }

    public function add()
    {
        $roles = TableRegistry::getTableLocator()
            ->get('Roles')
            ->find('list');

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registro Salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro Tente novamente.'));
        }
        $this->set(compact(['user', 'roles']));
    }

    public function edit($id = null)
    {
        $roles = TableRegistry::getTableLocator()
            ->get('Roles')
            ->find('list');

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registro Salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro Tente novamente.'));
        }
        $this->set(compact(['user', 'roles']));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuario Deletado.'));
        } else {
            $this->Flash->error(__('Erro, Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
                $this->Flash->success('Bem Vindo!');
            } else {
                $this->Flash->error('Seu email ou senha estão incorretos.');
            }
        }
    }

    public function logout()
    {
        $this->Flash->success('Voce Foi deslogado.');
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $user = $this->Users->newEntity($this->request->getData());
        if ($this->Users->save($user)) {
            $this->Auth->setUser($user->toArray());
            return $this->redirect([
                'controller' => 'Users',
                'action' => 'home'
            ]);
        }
    }
}
