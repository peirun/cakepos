<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vlans Controller
 *
 * @property \App\Model\Table\VlansTable $Vlans
 */
class VlansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emplacements']
        ];
        $vlans = $this->paginate($this->Vlans);

        $this->set(compact('vlans'));
        $this->set('_serialize', ['vlans']);
    }

    /**
     * View method
     *
     * @param string|null $id Vlan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vlan = $this->Vlans->get($id, [
            'contain' => ['Emplacements', 'Aapsinterfaces', 'Skswitches', 'Aapsifs', 'Portvlans', 'Snatpools', 'Virtualvlans']
        ]);

        $this->set('vlan', $vlan);
        $this->set('_serialize', ['vlan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vlan = $this->Vlans->newEntity();
        if ($this->request->is('post')) {
            $vlan = $this->Vlans->patchEntity($vlan, $this->request->data);
            if ($this->Vlans->save($vlan)) {
                $this->Flash->success(__('The vlan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vlan could not be saved. Please, try again.'));
        }
        $emplacements = $this->Vlans->Emplacements->find('list', ['limit' => 200]);
        $aapsinterfaces = $this->Vlans->Aapsinterfaces->find('list', ['limit' => 200]);
        $skswitches = $this->Vlans->Skswitches->find('list', ['limit' => 200]);
        $this->set(compact('vlan', 'emplacements', 'aapsinterfaces', 'skswitches'));
        $this->set('_serialize', ['vlan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vlan id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vlan = $this->Vlans->get($id, [
            'contain' => ['Aapsinterfaces', 'Skswitches']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vlan = $this->Vlans->patchEntity($vlan, $this->request->data);
            if ($this->Vlans->save($vlan)) {
                $this->Flash->success(__('The vlan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vlan could not be saved. Please, try again.'));
        }
        $emplacements = $this->Vlans->Emplacements->find('list', ['limit' => 200]);
        $aapsinterfaces = $this->Vlans->Aapsinterfaces->find('list', ['limit' => 200]);
        $skswitches = $this->Vlans->Skswitches->find('list', ['limit' => 200]);
        $this->set(compact('vlan', 'emplacements', 'aapsinterfaces', 'skswitches'));
        $this->set('_serialize', ['vlan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vlan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vlan = $this->Vlans->get($id);
        if ($this->Vlans->delete($vlan)) {
            $this->Flash->success(__('The vlan has been deleted.'));
        } else {
            $this->Flash->error(__('The vlan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
