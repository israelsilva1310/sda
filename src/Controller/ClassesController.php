<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Classes Controller
 *
 * @property \App\Model\Table\ClassesTable $Classes
 * @method \App\Model\Entity\Class[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Instructors', 'Courses', 'Sectors', 'Periods'],
        ];
        $classes = $this->paginate($this->Classes);

        $this->set(compact('classes'));
    }

    /**
     * View method
     *
     * @param string|null $id Class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $class = $this->Classes->get($id, [
            'contain' => ['Instructors', 'Courses', 'Sectors', 'Periods'],
        ]);

        $this->set(compact('class'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $class = $this->Classes->newEmptyEntity();
        if ($this->request->is('post')) {
            $class = $this->Classes->patchEntity($class, $this->request->getData());
            if ($this->Classes->save($class)) {
                $this->Flash->success(__('The class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class could not be saved. Please, try again.'));
        }
        $instructors = $this->Classes->Instructors->find('list', ['limit' => 200])->all();
        $courses = $this->Classes->Courses->find('list', ['limit' => 200])->all();
        $sectors = $this->Classes->Sectors->find('list', ['limit' => 200])->all();
        $periods = $this->Classes->Periods->find('list', ['limit' => 200])->all();
        $this->set(compact('class', 'instructors', 'courses', 'sectors', 'periods'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Class id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $class = $this->Classes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $class = $this->Classes->patchEntity($class, $this->request->getData());
            if ($this->Classes->save($class)) {
                $this->Flash->success(__('The class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class could not be saved. Please, try again.'));
        }
        $instructors = $this->Classes->Instructors->find('list', ['limit' => 200])->all();
        $courses = $this->Classes->Courses->find('list', ['limit' => 200])->all();
        $sectors = $this->Classes->Sectors->find('list', ['limit' => 200])->all();
        $periods = $this->Classes->Periods->find('list', ['limit' => 200])->all();
        $this->set(compact('class', 'instructors', 'courses', 'sectors', 'periods'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Class id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $class = $this->Classes->get($id);
        if ($this->Classes->delete($class)) {
            $this->Flash->success(__('The class has been deleted.'));
        } else {
            $this->Flash->error(__('The class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
