<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Disciplines Controller
 *
 * @property \App\Model\Table\DisciplinesTable $Disciplines
 * @method \App\Model\Entity\Discipline[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisciplinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Rooms'],
        ];
        $disciplines = $this->paginate($this->Disciplines);

        $this->set(compact('disciplines'));
    }

    /**
     * View method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discipline = $this->Disciplines->get($id, [
            'contain' => ['Courses', 'Rooms', 'Teachers', 'TeacherDisciplines'],
        ]);

        $this->set(compact('discipline'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discipline = $this->Disciplines->newEmptyEntity();
        if ($this->request->is('post')) {
            $discipline = $this->Disciplines->patchEntity($discipline, $this->request->getData());
            if ($this->Disciplines->save($discipline)) {
                $this->Flash->success(__('The discipline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discipline could not be saved. Please, try again.'));
        }
        $courses = $this->Disciplines->Courses->find('list', ['limit' => 200])->all();
        $rooms = $this->Disciplines->Rooms->find('list', ['limit' => 200])->all();
        $this->set(compact('discipline', 'courses', 'rooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discipline = $this->Disciplines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discipline = $this->Disciplines->patchEntity($discipline, $this->request->getData());
            if ($this->Disciplines->save($discipline)) {
                $this->Flash->success(__('The discipline has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discipline could not be saved. Please, try again.'));
        }
        $courses = $this->Disciplines->Courses->find('list', ['limit' => 200])->all();
        $rooms = $this->Disciplines->Rooms->find('list', ['limit' => 200])->all();
        $this->set(compact('discipline', 'courses', 'rooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discipline id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discipline = $this->Disciplines->get($id);
        if ($this->Disciplines->delete($discipline)) {
            $this->Flash->success(__('The discipline has been deleted.'));
        } else {
            $this->Flash->error(__('The discipline could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
