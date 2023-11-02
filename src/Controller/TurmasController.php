<?php
declare(strict_types=1);

namespace App\Controller;


class TurmasController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Sectors'],
        ];
        $turmas = $this->paginate($this->Turmas);

        $this->set(compact('turmas'));
    }

    public function view($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => ['Instructors', 'Courses', 'Sectors', 'Periods'],
        ]);

        $this->set(compact('turma'));
    }

    public function add()
    {
        $turma = $this->Turmas->newEmptyEntity();
        //        $instructors = $this->Turmas->Instructors->find('list', ['limit' => 200])->all();
        $courses = $this->Turmas->Courses->find('list', ['limit' => 200])->all();
        $periods = $this->Turmas->Periods->find('list', ['limit' => 200])->all();
        $sectors = $this->Turmas->Sectors->find('list', ['limit' => 200])->all();
        $teachers = $this->Turmas->Teachers->find('list', ['limit' => 200])->all();

        if ($this->request->is('post')) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());
            if ($this->Turmas->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turma could not be saved. Please, try again.'));
        }


        $this->set(compact(['turma', 'courses', 'sectors', 'periods', 'teachers']));
        //$this->set(compact('turma', 'instructors', 'courses', 'sectors', 'periods'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());
            if ($this->Turmas->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turma could not be saved. Please, try again.'));
        }
//        $instructors = $this->Turmas->Instructors->find('list', ['limit' => 200])->all();
        $courses = $this->Turmas->Courses->find('list', ['limit' => 200])->all();
        $sectors = $this->Turmas->Sectors->find('list', ['limit' => 200])->all();
        $periods = $this->Turmas->Periods->find('list', ['limit' => 200])->all();
        $teachers = $this->Turmas->Teachers->find('list', ['limit' => 200])->all();

        $this->set(compact(['turma', 'courses', 'sectors', 'periods', 'teachers']));
        //$this->set(compact('turma', 'instructors', 'courses', 'sectors', 'periods'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turma = $this->Turmas->get($id);
        if ($this->Turmas->delete($turma)) {
            $this->Flash->success(__('The turma has been deleted.'));
        } else {
            $this->Flash->error(__('The turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
