<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emplacements Controller
 *
 * @property \App\Model\Table\EmplacementsTable $Emplacements
 */
class EmplacementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emplacements = $this->paginate($this->Emplacements);

        $this->set(compact('emplacements'));
        $this->set('_serialize', ['emplacements']);
    }

    /**
     * View method
     *
     * @param string|null $id Emplacement id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emplacement = $this->Emplacements->get($id, [
            'contain' => ['Aaps', 'Deltas', 'Mailcapacitaires', 'Qfabrics', 'Skswitches', 'Vlans']
        ]);

        $this->set('emplacement', $emplacement);
        $this->set('_serialize', ['emplacement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emplacement = $this->Emplacements->newEntity();
        if ($this->request->is('post')) {
            $emplacement = $this->Emplacements->patchEntity($emplacement, $this->request->data);
            if ($this->Emplacements->save($emplacement)) {
                $this->Flash->success(__('The emplacement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emplacement could not be saved. Please, try again.'));
        }
        $this->set(compact('emplacement'));
        $this->set('_serialize', ['emplacement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emplacement id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emplacement = $this->Emplacements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emplacement = $this->Emplacements->patchEntity($emplacement, $this->request->data);
            if ($this->Emplacements->save($emplacement)) {
                $this->Flash->success(__('The emplacement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emplacement could not be saved. Please, try again.'));
        }
        $this->set(compact('emplacement'));
        $this->set('_serialize', ['emplacement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emplacement id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emplacement = $this->Emplacements->get($id);
        if ($this->Emplacements->delete($emplacement)) {
            $this->Flash->success(__('The emplacement has been deleted.'));
        } else {
            $this->Flash->error(__('The emplacement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
