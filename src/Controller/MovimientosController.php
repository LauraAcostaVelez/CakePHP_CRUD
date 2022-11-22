<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movimientos Controller
 *
 * @property \App\Model\Table\MovimientosTable $Movimientos
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MovimientosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulos'],
        ];
        $movimientos = $this->paginate($this->Movimientos);

        $this->set(compact('movimientos'));
    }

    /**
     * View method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movimiento = $this->Movimientos->get($id, [
            'contain' => ['Articulos'],
        ]);

        $this->set(compact('movimiento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movimiento = $this->Movimientos->newEmptyEntity();
        if ($this->request->is('post')) {
            $movimiento = $this->Movimientos->patchEntity($movimiento, $this->request->getData());
            if ($this->Movimientos->save($movimiento)) {
                $this->Flash->success(__('The movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimiento could not be saved. Please, try again.'));
        }
        $articulos = $this->Movimientos->Articulos->find('list', ['limit' => 200])->all();
        $this->set(compact('movimiento', 'articulos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movimiento = $this->Movimientos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movimiento = $this->Movimientos->patchEntity($movimiento, $this->request->getData());
            if ($this->Movimientos->save($movimiento)) {
                $this->Flash->success(__('The movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimiento could not be saved. Please, try again.'));
        }
        $articulos = $this->Movimientos->Articulos->find('list', ['limit' => 200])->all();
        $this->set(compact('movimiento', 'articulos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movimiento = $this->Movimientos->get($id);
        if ($this->Movimientos->delete($movimiento)) {
            $this->Flash->success(__('The movimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The movimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
