<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Periods Controller
 *
 * @property \App\Model\Table\PeriodsTable $Periods
 * @method \App\Model\Entity\Period[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $periods = $this->paginate($this->Periods);

        $this->set(compact('periods'));
    }

    /**
     * View method
     *
     * @param string|null $id Period id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $period = $this->Periods->get($id, [
            'contain' => ['Classes'],
        ]);

        $this->set(compact('period'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $period = $this->Periods->newEmptyEntity();
        if ($this->request->is('post')) {
            $period = $this->Periods->patchEntity($period, $this->request->getData());
            if ($this->Periods->save($period)) {
                $this->Flash->success(__('The period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The period could not be saved. Please, try again.'));
        }
        $this->set(compact('period'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Period id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $period = $this->Periods->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $period = $this->Periods->patchEntity($period, $this->request->getData());
            if ($this->Periods->save($period)) {
                $this->Flash->success(__('The period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The period could not be saved. Please, try again.'));
        }
        $this->set(compact('period'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Period id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $period = $this->Periods->get($id);
        if ($this->Periods->delete($period)) {
            $this->Flash->success(__('The period has been deleted.'));
        } else {
            $this->Flash->error(__('The period could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
