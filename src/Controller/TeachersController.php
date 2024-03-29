<?php
declare(strict_types=1);

namespace App\Controller;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

/**
 * Teachers Controller
 *
 * @property \App\Model\Table\TeachersTable $Teachers
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeachersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Disciplines'],
        ];
        $teachers = $this->paginate($this->Teachers);

        $this->set(compact('teachers'));
    }

    /**
     * View method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => ['Disciplines', 'Turmas'],
        ]);

        $this->set(compact('teacher'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $teacher = $this->Teachers->newEmptyEntity();
        $teacher->qrcode = 'teste';
        $teacher->created_at = date("Y-m-d H:i:s");

        //var_dump($teacher);

        if ($this->request->is('post', 'put')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('Registro salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            //var_dump($teacher);
            $this->Flash->error(__('Não foi possivel salvar, Tente novamente.'));
        }

        $disciplines = $this->Teachers->Disciplines->find('list', ['limit' => 200])->all();

        $this->set(compact('teacher', 'disciplines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            $teacher->acronym = '';
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não segui alterar o registro, tente novamente.'));
        }
        $disciplines = $this->Teachers->Disciplines->find('list', ['limit' => 200])->all();
        $this->set(compact('teacher', 'disciplines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teacher = $this->Teachers->get($id);
        if ($this->Teachers->delete($teacher)) {
            $this->Flash->success(__('Registro excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Não consegui excluir o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function print()
    {
        $this->set(compact(['teacher']));
        $this->disableAutoRender();
    }
}
