<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ports Controller
 *
 * @property \App\Model\Table\PortsTable $Ports
 */
class PortsController extends AppController
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
        $ports = $this->paginate($this->Ports);

        $this->set(compact('ports'));
        $this->set('_serialize', ['ports']);
    }

    /**
     * View method
     *
     * @param string|null $id Port id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $port = $this->Ports->get($id, [
            'contain' => ['Skswitches', 'Portchannels', 'Portvlans']
        ]);

        $this->set('port', $port);
        $this->set('_serialize', ['port']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $port = $this->Ports->newEntity();
        if ($this->request->is('post')) {
            $port = $this->Ports->patchEntity($port, $this->request->data);
            if ($this->Ports->save($port)) {
                $this->Flash->success(__('The port has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The port could not be saved. Please, try again.'));
        }
        $skswitches = $this->Ports->Skswitches->find('list', ['limit' => 200]);
        $portchannels = $this->Ports->Portchannels->find('list', ['limit' => 200]);
        $this->set(compact('port', 'skswitches', 'portchannels'));
        $this->set('_serialize', ['port']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Port id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $port = $this->Ports->get($id, [
            'contain' => ['Portchannels']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $port = $this->Ports->patchEntity($port, $this->request->data);
            if ($this->Ports->save($port)) {
                $this->Flash->success(__('The port has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The port could not be saved. Please, try again.'));
        }
        $skswitches = $this->Ports->Skswitches->find('list', ['limit' => 200]);
        $portchannels = $this->Ports->Portchannels->find('list', ['limit' => 200]);
        $this->set(compact('port', 'skswitches', 'portchannels'));
        $this->set('_serialize', ['port']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Port id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $port = $this->Ports->get($id);
        if ($this->Ports->delete($port)) {
            $this->Flash->success(__('The port has been deleted.'));
        } else {
            $this->Flash->error(__('The port could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
