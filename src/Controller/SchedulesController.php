<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

class SchedulesController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Teachers', 'Disciplines'],
        ];
        $schedules = $this->paginate($this->Schedules);

        $weekGrid = [
            'day' => [
                'segunda' => 'segunda',
                'terça' => 'terça',
                'quarta' => 'quarta',
                'quinta' => 'quinta',
                'sexta' => 'sexta'],
            'hour' => [
                '07:00 - 07:50' => '07:00 - 07:50',
                '07:50 - 08:40' => '07:50 - 08:40',

                '09:00 - 09:50' => '09:00 - 09:50',
                '09:50 - 10:40' => '09:50 - 10:40',
                '10:40 - 11:30' => '10:40 - 11:30',

                '13:10 - 14:00' => '13:10 - 14:00',
                '14:00 - 14:50' => '14:00 - 14:50',

                '15:20 - 16:10' => '15:20 - 16:10',
                '16:10 - 17:00' => '16:10 - 17:00',

                '19:00 - 19:50' => '19:00 - 19:50',
                '19:50 - 20:40' => '19:50 - 20:40',

                '20:50 - 21:40' => '20:50 - 21:40',
                '21:40 - 22:30' => '21:40 - 22:30',
            ]
        ];
        $this->set(compact('schedules', 'weekGrid'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedule = $this->Schedules->get($id, [
            'contain' => ['Courses', 'Teachers', 'Disciplines'],
        ]);

        $this->set(compact('schedule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedule = $this->Schedules->newEmptyEntity();
        if ($this->request->is('post')) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $weekGrid = [
            'day' => [
                'segunda' => 'segunda',
                'terça' => 'terça',
                'quarta' => 'quarta',
                'quinta' => 'quinta',
                'sexta' => 'sexta'],
            'hour' => [
                '07:00 - 07:50' => '07:00 - 07:50',
                '07:50 - 08:40' => '07:50 - 08:40',

                '09:00 - 09:50' => '09:00 - 09:50',
                '09:50 - 10:40' => '09:50 - 10:40',
                '10:40 - 11:30' => '10:40 - 11:30',

                '13:10 - 14:00' => '13:10 - 14:00',
                '14:00 - 14:50' => '14:00 - 14:50',

                '15:20 - 16:10' => '15:20 - 16:10',
                '16:10 - 17:00' => '16:10 - 17:00',

                '19:00 - 19:50' => '19:00 - 19:50',
                '19:50 - 20:40' => '19:50 - 20:40',

                '20:50 - 21:40' => '20:50 - 21:40',
                '21:40 - 22:30' => '21:40 - 22:30',
            ]
        ];
        $courses = $this->Schedules->Courses->find('list', ['limit' => 200])->all();
        $teachers = $this->Schedules->Teachers->find('list', ['limit' => 200])->all();
        $disciplines = $this->Schedules->Disciplines->find('list', ['limit' => 200])->all();
        //$periods = $this->Schedules->Periods->find('list', ['limit' => 20])->all();
        $this->set(compact('schedule', 'courses', 'teachers', 'disciplines', 'weekGrid'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schedule = $this->Schedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $weekGrid = [
            'day' => [
                'segunda' => 'segunda',
                'terça' => 'terça',
                'quarta' => 'quarta',
                'quinta' => 'quinta',
                'sexta' => 'sexta'],
            'hour' => [
                '07:00 - 07:50' => '07:00 - 07:50',
                '07:50 - 08:40' => '07:50 - 08:40',

                '09:00 - 09:50' => '09:00 - 09:50',
                '09:50 - 10:40' => '09:50 - 10:40',
                '10:40 - 11:30' => '10:40 - 11:30',

                '13:10 - 14:00' => '13:10 - 14:00',
                '14:00 - 14:50' => '14:00 - 14:50',

                '15:20 - 16:10' => '15:20 - 16:10',
                '16:10 - 17:00' => '16:10 - 17:00',

                '19:00 - 19:50' => '19:00 - 19:50',
                '19:50 - 20:40' => '19:50 - 20:40',

                '20:50 - 21:40' => '20:50 - 21:40',
                '21:40 - 22:30' => '21:40 - 22:30',
            ]
        ];
        $timetable = [
            'segunda'

        ];
        $courses = $this->Schedules->Courses->find('list', ['limit' => 200])->all();
        $teachers = $this->Schedules->Teachers->find('list', ['limit' => 200])->all();
        $disciplines = $this->Schedules->Disciplines->find('list', ['limit' => 200])->all();
        $this->set(compact('schedule', 'courses', 'teachers', 'disciplines', 'weekGrid'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedule = $this->Schedules->get($id);
        if ($this->Schedules->delete($schedule)) {
            $this->Flash->success(__('The schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function drafting()
    {

        $courses = TableRegistry::getTableLocator()
            ->get('Courses')
            ->find('list');
        $periods = ['1', '2', '3', '4', '6', '7', '8', '9', '10'
        ];
        $teachers = TableRegistry::getTableLocator()
            ->get('Teachers')
            ->find('list');
        $disciplines = TableRegistry::getTableLocator()
            ->get('Disciplines')
            ->find('list');

        $weekGrid = [
            'day' => [
                'segunda',
                'terça',
                'Quarta',
                'Quinta',
                'Sexta'],
            'hour' => [
                '07:00 - 07:50' => '07:00 - 07:50',
                '07:50 - 08:40' => '07:50 - 08:40',

                '09:00 - 09:50' => '09:00 - 09:50',
                '09:50 - 10:40' => '09:50 - 10:40',
                '10:40 - 11:30' => '10:40 - 11:30',

                '13:10 - 14:00' => '13:10 - 14:00',
                '14:00 - 14:50' => '14:00 - 14:50',

                '15:20 - 16:10' => '15:20 - 16:10',
                '16:10 - 17:00' => '16:10 - 17:00',

                '19:00 - 19:50' => '19:00 - 19:50',
                '19:50 - 20:40' => '19:50 - 20:40',

                '20:50 - 21:40' => '20:50 - 21:40',
                '21:40 - 22:30' => '21:40 - 22:30',
            ]
        ];

//        if ($this->request->is('post')) {
//            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
//            if ($this->Teachers->save($teacher)) {
//                $this->Flash->success(__('The teacher has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
//        }
        // $this->disableAutoRender();

        $this->set(compact(['courses', 'periods', 'teachers', 'disciplines', 'weekGrid']));
    }
}