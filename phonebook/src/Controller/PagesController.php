<?php

namespace App\Controller;

use App\Form\SearchContactForm;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param null $id
     *
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function contact()
    {
        $this->viewBuilder()->setLayout('public');

        $searchContact = new SearchContactForm();

        $this->loadModel('Contacts');
        $this->paginate = [
            'contain' => ['Phones' => ['PhoneTypes']]
        ];

        $query = $this->Contacts->find('all');
        if ($searchContact->execute($this->getRequest()->getQuery())) {
            $query = $this->Contacts->find('custom', $this->getRequest()->getQuery());
        } else {
            $this->Flash->error(__('Search parameter should be more than 3 char.'));
        }

        $contacts = $this->paginate($query);

        $this->set(compact('contacts'));
    }
}
