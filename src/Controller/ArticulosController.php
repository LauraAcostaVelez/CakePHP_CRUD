<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articulos Controller
 *
 * @property \App\Model\Table\ArticulosTable $Articulos
 * @method \App\Model\Entity\Articulo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticulosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key');
        if($key){
            $query = $this->Articulos->find('all')->where(['Or'=>['articulos.nombre like' => '%'.$key.'%', 'articulos.codigo like' => '%'.$key.'%']]);
        }else{
            $query = $this->Articulos;
        }
        $this->paginate = [
            'contain' => ['Familias'],
        ];
        $articulos = $this->paginate($query);

        $this->set(compact('articulos'));
    }

    /**
     * View method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articulo = $this->Articulos->get($id, [
            'contain' => ['Familias', 'Movimientos'],
        ]);

        $this->set(compact('articulo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articulo = $this->Articulos->newEmptyEntity();
        if ($this->request->is('post')) {
            $articulo = $this->Articulos->patchEntity($articulo, $this->request->getData());
            if ($this->Articulos->save($articulo)) {
                $this->Flash->success(__('The articulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulo could not be saved. Please, try again.'));
        }
        $familias = $this->Articulos->Familias->find('list', ['limit' => 200])->all();
        $this->set(compact('articulo', 'familias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articulo = $this->Articulos->get($id, [
            'contain' => [],
        ]);
        /*
        $articulo = $this->Articulos
            ->findBySlug($slug)
            ->contain('Familias')
            ->firstOrFail();*/
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articulo = $this->Articulos->patchEntity($articulo, $this->request->getData());
            if ($this->Articulos->save($articulo)) {
                $this->Flash->success(__('The articulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulo could not be saved. Please, try again.'));
        }
        $familias = $this->Articulos->Familias->find('list', ['limit' => 200])->all();
        $this->set(compact('articulo', 'familias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articulo = $this->Articulos->get($id);
        if ($this->Articulos->delete($articulo)) {
            $this->Flash->success(__('The articulo has been deleted.'));
        } else {
            $this->Flash->error(__('The articulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
