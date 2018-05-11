<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Phones Controller
 *
 * @property \App\Model\Table\PhonesTable $Phones
 *
 * @method \App\Model\Entity\Phone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contacts', 'PhoneTypes']
        ];
        $phones = $this->paginate($this->Phones);

        $this->set(compact('phones'));
    }

    /**
     * View method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $phone = $this->Phones->get($id, [
            'contain' => ['Contacts', 'PhoneTypes']
        ]);

        $this->set('phone', $phone);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $phone = $this->Phones->newEntity();
        if ($this->getRequest()->is('post')) {
            $phone = $this->Phones->patchEntity($phone, $this->request->getData());
            if ($this->Phones->save($phone)) {
                $this->Flash->success(__('The phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The phone could not be saved. Please, try again.'));
        }
        $contacts = $this->Phones->Contacts->find('list', ['keyField' => 'id', 'valueField' => function ($row) {
            return $row['first_name'] . ' ' . $row['last_name'];
        }])->toArray();
        $phoneTypes = $this->Phones->PhoneTypes->find('list', ['limit' => 200]);
        $this->set(compact('phone', 'contacts', 'phoneTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $phone = $this->Phones->get($id, [
            'contain' => ['Contacts']
        ]);

        if ($this->getRequest()->is(['patch', 'post', 'put'])) {
            $phone = $this->Phones->patchEntity($phone, $this->getRequest()->getData());
            if ($this->Phones->save($phone)) {
                $this->Flash->success(__('The phone has been saved.'));

                return $this->redirect(['action' => 'view', $phone->id]);
            }
            $this->Flash->error(__('The phone could not be saved. Please, try again.'));
        }

        $contacts = $this->Phones->Contacts->find('list', ['limit' => 200]);
        $phoneTypes = $this->Phones->PhoneTypes->find('list', ['limit' => 200]);
        $this->set(compact('phone', 'contacts', 'phoneTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->getRequest()->allowMethod(['post', 'delete']);
        $phone = $this->Phones->get($id);

        if ($this->Phones->findByContactId($phone->contact_id)->count() <= 1) {
            $this->Flash->info(__('Please leave atleast one phone per profile.'));

            return $this->redirect(['controller' => 'contacts', 'action' => 'index']);
        }

        if ($this->Phones->delete($phone)) {
            $this->Flash->success(__('The phone has been deleted.'));
        } else {
            $this->Flash->error(__('The phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'contacts', 'action' => 'index']);
    }
}
