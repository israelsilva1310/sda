<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Disponibilities Controller
 *
 * @property \App\Model\Table\DisponibilitiesTable $Disponibilities
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisponibilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers', 'Hours'],
        ];
        $disponibilities = $this->paginate($this->Disponibilities);

        $this->set(compact('disponibilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Disponibility id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disponibility = $this->Disponibilities->get($id, [
            'contain' => ['Teachers', 'Hours'],
        ]);

        $this->set(compact('disponibility'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disponibility = $this->Disponibilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $disponibility = $this->Disponibilities->patchEntity($disponibility, $this->request->getData());
            if ($this->Disponibilities->save($disponibility)) {
                $this->Flash->success(__('The disponibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disponibility could not be saved. Please, try again.'));
        }
        $teachers = $this->Disponibilities->Teachers->find('list', ['limit' => 200])->all();
        $hours = $this->Disponibilities->Hours->find('list', ['limit' => 200])->all();
        $this->set(compact('disponibility', 'teachers', 'hours'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disponibility id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disponibility = $this->Disponibilities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disponibility = $this->Disponibilities->patchEntity($disponibility, $this->request->getData());
            if ($this->Disponibilities->save($disponibility)) {
                $this->Flash->success(__('The disponibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disponibility could not be saved. Please, try again.'));
        }
        $teachers = $this->Disponibilities->Teachers->find('list', ['limit' => 200])->all();
        $hours = $this->Disponibilities->Hours->find('list', ['limit' => 200])->all();
        $this->set(compact('disponibility', 'teachers', 'hours'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disponibility id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disponibility = $this->Disponibilities->get($id);
        if ($this->Disponibilities->delete($disponibility)) {
            $this->Flash->success(__('The disponibility has been deleted.'));
        } else {
            $this->Flash->error(__('The disponibility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
