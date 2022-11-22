<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Familias Controller
 *
 * @property \App\Model\Table\FamiliasTable $Familias
 * @method \App\Model\Entity\Familia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FamiliasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $familias = $this->paginate($this->Familias);

        $this->set(compact('familias'));
    }

    /**
     * View method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $familia = $this->Familias->get($id, [
            'contain' => ['Articulos'],
        ]);

        $this->set(compact('familia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $familia = $this->Familias->newEmptyEntity();
        if ($this->request->is('post')) {
            $familia = $this->Familias->patchEntity($familia, $this->request->getData());
            if ($this->Familias->save($familia)) {
                $this->Flash->success(__('The familia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The familia could not be saved. Please, try again.'));
        }
        $this->set(compact('familia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $familia = $this->Familias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $familia = $this->Familias->patchEntity($familia, $this->request->getData());
            if ($this->Familias->save($familia)) {
                $this->Flash->success(__('The familia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The familia could not be saved. Please, try again.'));
        }
        $this->set(compact('familia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $familia = $this->Familias->get($id);
        if ($this->Familias->delete($familia)) {
            $this->Flash->success(__('The familia has been deleted.'));
        } else {
            $this->Flash->error(__('The familia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
