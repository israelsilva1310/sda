<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Teacher;
use Cake\ORM\TableRegistry;

class DashboardController extends AppController
{
    /**
     * @return void
     */

    public function index(): void
    {
        $teachers = TableRegistry::getTableLocator()
            ->get('Teachers')
            ->find('list', ['limit' => 200]);

        foreach ($teachers as $teacher) {
        }
        $disciplines = TableRegistry::getTableLocator()
            ->get('Disciplines')
            ->find();
        foreach ($disciplines as $discipline) {
        }
        $rooms = TableRegistry::getTableLocator()->get('Rooms')->find();
        foreach ($rooms as $room) {
        }
        $disciplinas = TableRegistry::getTableLocator()->get('Courses')->find();
        foreach ($disciplinas as $disciplina) {
        }
        $hours = TableRegistry::getTableLocator()->get('Hours')->find();
        foreach ($hours as $hour) {
        }
        $count['teacher'] = $teachers->count();
        $count['course'] = $disciplinas->count();
        $count['room'] = $rooms->count();
        $count['discipline'] = $disciplines->count();
        $kanban = [
            'teachers' => $teachers,
            'rooms' => $rooms,
            'disciplines' => $disciplines,
            'hours' => $hours];

        $allGrid = [
            'teachers' => array($teacher),
            'discipline' => array($discipline),
            'room' => array($room),
            'course' => array($disciplina),
            'hour' => [
                'morning' => [
                    '1' => '07:00 - 07:50',
                    '2' => '07:50 - 08:40',
                    '3' => '09:00 - 09:50',
                    '4' => '09:50 - 10:50',
                    '5' => '10:40 - 11:30',
                    'interval' => '08:40 - 09:00',
                    'lunch' => '11:30 - 13:10',
                ],
                'afternoon' => [
                    '6' => '13:10 - 14:00',
                    '7' => '14:00 - 14:50',
                    'interval' => '14:50 - 15:20',
                    '8' => '15:20 - 16:10',
                    '9' => '16:10 - 17:00',
                    'jantar' => '17:00 - 19:00',
                ],
                'night' => [
                    '10' => '19:00 - 19:50',
                    '11' => '19:50 - 20:40',
                    'interval' => '20:40 - 20:50',
                    '12' => '20:50 - 21:40',
                    '13' => '21:40 - 22:30',

                ],
            ],
        ];

        $this->set(compact(['count', 'teachers', 'allGrid']));
    }

    /**
     * @return void
     */
    public function admin(): void
    {
        $teachers = (new Teacher());

        $this->set(compact('teachers'));
    }

    /**
     * @return void
     */
    public function hoursClass(): void
    {
        $teachers = TableRegistry::getTableLocator()->get('Teachers')->find('list', ['limit' => 200]);
        $disciplines = TableRegistry::getTableLocator()->get('Disciplines')->find();
        $rooms = TableRegistry::getTableLocator()->get('Rooms')->find();
        $disciplinas = TableRegistry::getTableLocator()->get('Courses')->find();
        $hours = TableRegistry::getTableLocator()->get('Hours')->find();

        $grid = [
            'professor' => [$teachers],
            'disciplinas' => [$disciplines],
            'sala' => [$rooms],
            'curso' => [$disciplinas],
            'horario' => [
                'manha' => [
                    '1' => '07:00 - 07:50',
                    '2' => '07:50 - 08:40',
                    '3' => '07:00 - 07:50',
                    '4' => '07:00 - 07:50',
                    '5' => '07:00 - 07:50',
                ],
                'tarde' => [

                ],
                'noite' => [

                ],
            ],
        ];
        $this->set(compact($grid));
    }

    public function hoursTeachers(): void
    {
    }
}
