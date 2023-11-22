<?php
declare(strict_types=1);

namespace App\Controller\Ghif;

use App\Controller\AppController;

/**
 * Restricaos Controller
 *
 * @property \App\Model\Table\RestricaosTable $Restricaos
 * @method \App\Model\Entity\Restricao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RestricaosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers'],
        ];
        $restricaos = $this->paginate($this->Restricaos);

        $this->set(compact('restricaos'));
    }

    /**
     * View method
     *
     * @param string|null $id Restricao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $restricao = $this->Restricaos->get($id, [
            'contain' => ['Teachers'],
        ]);

        $this->set(compact('restricao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $restricao = $this->Restricaos->newEmptyEntity();
        if ($this->request->is('post')) {
            $restricao = $this->Restricaos->patchEntity($restricao, $this->request->getData());
            if ($this->Restricaos->save($restricao)) {
                $this->Flash->success(__('The restricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restricao could not be saved. Please, try again.'));
        }
        $teachers = $this->Restricaos->Teachers->find('list', ['limit' => 200])->all();
        $this->set(compact('restricao', 'teachers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Restricao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $restricao = $this->Restricaos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $restricao = $this->Restricaos->patchEntity($restricao, $this->request->getData());
            if ($this->Restricaos->save($restricao)) {
                $this->Flash->success(__('The restricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restricao could not be saved. Please, try again.'));
        }
        $teachers = $this->Restricaos->Teachers->find('list', ['limit' => 200])->all();
        $this->set(compact('restricao', 'teachers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Restricao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $restricao = $this->Restricaos->get($id);
        if ($this->Restricaos->delete($restricao)) {
            $this->Flash->success(__('The restricao has been deleted.'));
        } else {
            $this->Flash->error(__('The restricao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
