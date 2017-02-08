<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Skswitches Controller
 *
 * @property \App\Model\Table\SkswitchesTable $Skswitches
 */
class SkswitchesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emplacements',  'Qfabrics']
        ];
        $skswitches = $this->paginate($this->Skswitches);

        $this->set(compact('skswitches'));
        $this->set('_serialize', ['skswitches']);
    }

    /**
     * View method
     *
     * @param string|null $id Skswitch id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skswitch = $this->Skswitches->get($id, [
            'contain' => ['Emplacements',  'Qfabrics', 'Vlans', 'Skswitches', 'Deltas', 'Membres', 'Portchannels', 'Ports', 'Sanaliases', 'Sanzas', 'Sanzones']
        ]);

        $this->set('skswitch', $skswitch);
        $this->set('_serialize', ['skswitch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skswitch = $this->Skswitches->newEntity();
        if ($this->request->is('post')) {
            $skswitch = $this->Skswitches->patchEntity($skswitch, $this->request->data);
            if ($this->Skswitches->save($skswitch)) {
                $this->Flash->success(__('The skswitch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skswitch could not be saved. Please, try again.'));
        }
        $emplacements = $this->Skswitches->Emplacements->find('list', ['limit' => 200]);

        $qfabrics = $this->Skswitches->Qfabrics->find('list', ['limit' => 200]);
        $vlans = $this->Skswitches->Vlans->find('list', ['limit' => 200]);
        $this->set(compact('skswitch', 'emplacements', 'qfabrics', 'vlans'));
        $this->set('_serialize', ['skswitch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Skswitch id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skswitch = $this->Skswitches->get($id, [
            'contain' => ['Vlans']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skswitch = $this->Skswitches->patchEntity($skswitch, $this->request->data);
            if ($this->Skswitches->save($skswitch)) {
                $this->Flash->success(__('The skswitch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skswitch could not be saved. Please, try again.'));
        }
        $emplacements = $this->Skswitches->Emplacements->find('list', ['limit' => 200]);

        $qfabrics = $this->Skswitches->Qfabrics->find('list', ['limit' => 200]);
        $vlans = $this->Skswitches->Vlans->find('list', ['limit' => 200]);
        $this->set(compact('skswitch', 'emplacements',  'qfabrics', 'vlans'));
        $this->set('_serialize', ['skswitch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Skswitch id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skswitch = $this->Skswitches->get($id);
        if ($this->Skswitches->delete($skswitch)) {
            $this->Flash->success(__('The skswitch has been deleted.'));
        } else {
            $this->Flash->error(__('The skswitch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
