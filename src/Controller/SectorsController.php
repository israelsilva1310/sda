<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sectors Controller
 *
 * @property \App\Model\Table\SectorsTable $Sectors
 * @method \App\Model\Entity\Sector[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SectorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $sectors = $this->paginate($this->Sectors);

        $this->set(compact('sectors'));
    }

    /**
     * View method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sector = $this->Sectors->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sector'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sector = $this->Sectors->newEmptyEntity();
        if ($this->request->is('post')) {
            $sector = $this->Sectors->patchEntity($sector, $this->request->getData());
            if ($this->Sectors->save($sector)) {
                $this->Flash->success(__('The sector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sector could not be saved. Please, try again.'));
        }
        $this->set(compact('sector'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sector = $this->Sectors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sector = $this->Sectors->patchEntity($sector, $this->request->getData());
            if ($this->Sectors->save($sector)) {
                $this->Flash->success(__('The sector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sector could not be saved. Please, try again.'));
        }
        $this->set(compact('sector'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sector = $this->Sectors->get($id);
        if ($this->Sectors->delete($sector)) {
            $this->Flash->success(__('The sector has been deleted.'));
        } else {
            $this->Flash->error(__('The sector could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
