<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portchannels Controller
 *
 * @property \App\Model\Table\PortchannelsTable $Portchannels
 */
class PortchannelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Skswitches']
        ];
        $portchannels = $this->paginate($this->Portchannels);

        $this->set(compact('portchannels'));
        $this->set('_serialize', ['portchannels']);
    }

    /**
     * View method
     *
     * @param string|null $id Portchannel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portchannel = $this->Portchannels->get($id, [
            'contain' => ['Skswitches', 'Ports']
        ]);

        $this->set('portchannel', $portchannel);
        $this->set('_serialize', ['portchannel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portchannel = $this->Portchannels->newEntity();
        if ($this->request->is('post')) {
            $portchannel = $this->Portchannels->patchEntity($portchannel, $this->request->data);
            if ($this->Portchannels->save($portchannel)) {
                $this->Flash->success(__('The portchannel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portchannel could not be saved. Please, try again.'));
        }
        $skswitches = $this->Portchannels->Skswitches->find('list', ['limit' => 200]);
        $ports = $this->Portchannels->Ports->find('list', ['limit' => 200]);
        $this->set(compact('portchannel', 'skswitches', 'ports'));
        $this->set('_serialize', ['portchannel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Portchannel id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portchannel = $this->Portchannels->get($id, [
            'contain' => ['Ports']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portchannel = $this->Portchannels->patchEntity($portchannel, $this->request->data);
            if ($this->Portchannels->save($portchannel)) {
                $this->Flash->success(__('The portchannel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portchannel could not be saved. Please, try again.'));
        }
        $skswitches = $this->Portchannels->Skswitches->find('list', ['limit' => 200]);
        $ports = $this->Portchannels->Ports->find('list', ['limit' => 200]);
        $this->set(compact('portchannel', 'skswitches', 'ports'));
        $this->set('_serialize', ['portchannel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Portchannel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portchannel = $this->Portchannels->get($id);
        if ($this->Portchannels->delete($portchannel)) {
            $this->Flash->success(__('The portchannel has been deleted.'));
        } else {
            $this->Flash->error(__('The portchannel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
