<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Membres Controller
 *
 * @property \App\Model\Table\MembresTable $Membres
 */
class MembresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Typemembres', 'Skswitches']
        ];
        $membres = $this->paginate($this->Membres);

        $this->set(compact('membres'));
        $this->set('_serialize', ['membres']);
    }

    /**
     * View method
     *
     * @param string|null $id Membre id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membre = $this->Membres->get($id, [
            'contain' => ['Typemembres', 'Skswitches', 'Extensions']
        ]);

        $this->set('membre', $membre);
        $this->set('_serialize', ['membre']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membre = $this->Membres->newEntity();
        if ($this->request->is('post')) {
            $membre = $this->Membres->patchEntity($membre, $this->request->data);
            if ($this->Membres->save($membre)) {
                $this->Flash->success(__('The membre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membre could not be saved. Please, try again.'));
        }
        $typemembres = $this->Membres->Typemembres->find('list', ['limit' => 200]);
        $skswitches = $this->Membres->Skswitches->find('list', ['limit' => 200]);
        $extensions = $this->Membres->Extensions->find('list', ['limit' => 200]);
        $this->set(compact('membre', 'typemembres', 'skswitches', 'extensions'));
        $this->set('_serialize', ['membre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Membre id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membre = $this->Membres->get($id, [
            'contain' => ['Extensions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membre = $this->Membres->patchEntity($membre, $this->request->data);
            if ($this->Membres->save($membre)) {
                $this->Flash->success(__('The membre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membre could not be saved. Please, try again.'));
        }
        $typemembres = $this->Membres->Typemembres->find('list', ['limit' => 200]);
        $skswitches = $this->Membres->Skswitches->find('list', ['limit' => 200]);
        $extensions = $this->Membres->Extensions->find('list', ['limit' => 200]);
        $this->set(compact('membre', 'typemembres', 'skswitches', 'extensions'));
        $this->set('_serialize', ['membre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Membre id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membre = $this->Membres->get($id);
        if ($this->Membres->delete($membre)) {
            $this->Flash->success(__('The membre has been deleted.'));
        } else {
            $this->Flash->error(__('The membre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
