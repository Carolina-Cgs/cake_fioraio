<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Myflowers Controller
 *
 * @property \App\Model\Table\MyflowersTable $Myflowers
 * @method \App\Model\Entity\Myflower[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyflowersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Occasions'],
        ];
        $myflowers = $this->paginate($this->Myflowers);

        $this->set(compact('myflowers'));
    }

    /**
     * View method
     *
     * @param string|null $id Myflower id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myflower = $this->Myflowers->get($id, [
            'contain' => ['Occasions'],
        ]);

        $this->set('myflower', $myflower);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $myflower = $this->Myflowers->newEmptyEntity();
        if ($this->request->is('post')) {
            $myflower = $this->Myflowers->patchEntity($myflower, $this->request->getData());
            if ($this->Myflowers->save($myflower)) {
                $this->Flash->success(__('The myflower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myflower could not be saved. Please, try again.'));
        }
        $occasions = $this->Myflowers->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('myflower', 'occasions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myflower id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $myflower = $this->Myflowers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myflower = $this->Myflowers->patchEntity($myflower, $this->request->getData());
            if ($this->Myflowers->save($myflower)) {
                $this->Flash->success(__('The myflower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myflower could not be saved. Please, try again.'));
        }
        $occasions = $this->Myflowers->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('myflower', 'occasions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Myflower id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myflower = $this->Myflowers->get($id);
        if ($this->Myflowers->delete($myflower)) {
            $this->Flash->success(__('The myflower has been deleted.'));
        } else {
            $this->Flash->error(__('The myflower could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
