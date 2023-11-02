<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Imports Controller
 *
 * @method \App\Model\Entity\Import[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $imports = '$this->paginate($this->Imports)';

        $this->set(compact('imports'));
    }

    /**
     * View method
     *
     * @param string|null $id Import id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $import = $this->Imports->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('import'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $import = $this->Imports->newEmptyEntity();
        if ($this->request->is('post')) {
            $import = $this->Imports->patchEntity($import, $this->request->getData());
            if ($this->Imports->save($import)) {
                $this->Flash->success(__('The import has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The import could not be saved. Please, try again.'));
        }
        $this->set(compact('import'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Import id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $import = $this->Imports->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $import = $this->Imports->patchEntity($import, $this->request->getData());
            if ($this->Imports->save($import)) {
                $this->Flash->success(__('The import has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The import could not be saved. Please, try again.'));
        }
        $this->set(compact('import'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Import id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $import = $this->Imports->get($id);
        if ($this->Imports->delete($import)) {
            $this->Flash->success(__('The import has been deleted.'));
        } else {
            $this->Flash->error(__('The import could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
