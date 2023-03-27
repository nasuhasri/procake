<?php
declare(strict_types=1);

namespace App\Controller;

use DateTime;

/**
 * Issued Controller
 *
 * @property \App\Model\Table\IssuedTable $Issued
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IssuedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
        ];
        $issues = $this->paginate($this->Issued);

        $this->set(compact('issues'));
    }

    /**
     * View method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $issued = $this->Issued->get($id, [
            // from issued table, pass the variable here so that page can display
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
        ]);

        $this->set(compact('issued'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $issued = $this->Issued->newEmptyEntity();
        if ($this->request->is('post')) {
            $issued = $this->Issued->patchEntity($issued, $this->request->getData());
            if ($this->Issued->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }
        $members = $this->Issued->Members->find('list', ['keyField' => 'id', 'valueField' => 'member_name'])->all();
        $item_category = [
            'books'      => 'Books', 
            'magazines'  => 'Magazines', 
            'newspapers' => 'Newspapers'
        ];

        $item_condition = [
            'good' => 'good',
            'bad'  => 'bad'
        ];

        $this->set(compact('issued', 'members', 'item_category', 'item_condition'));
    }

    public function getItemLists($category){
        switch ($category) {
            case 'books':
                $this->Books = $this->fetchTable('Books');
                $items = $this->Books->find('list')->all();
                break;
            case 'magazines':
                $this->Magazines = $this->fetchTable('Magazines');
                $items = $this->Magazines->find('list')->all();
                break;
            case 'newspapers':
                $this->Newspapers = $this->fetchTable('Newspapers');
                $items = $this->Newspapers->find('list')->all();
                break;
            default:
                break;
        }
        
        // pr($items->toArray());exit;
        echo json_encode($items);
        exit;
    }

    /**
     * Edit method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Books = $this->fetchTable('Books');
        $this->Magazines = $this->fetchTable('Magazines');
        $this->Newspapers = $this->fetchTable('Newspapers');
        $this->Members = $this->fetchTable('Members');

        $issued = $this->Issued->get($id, [
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
        ]);

        // to display field name on edit page
        // cake automatically get its value name
        if(!empty($issued->book)){
            $itemList = $this->Books->find('list');
        }
        elseif(!empty($issued->magazine)){
            $itemList = $this->Magazines->find('list');
        }
        elseif(!empty($issued->newspaper)){
            $itemList = $this->Newspapers->find('list');
        }

        $membersName = '';

        if(!empty($issued->member)){
            $membersName = $this->Members->find('list', [
                'keyField' => 'id',
                'valueField' => 'member_name'
            ]);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $issued = $this->Issued->patchEntity($issued, $this->request->getData());
            if ($this->Issued->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }

        $item_category = [
            'books'      => 'Books', 
            'magazines'  => 'Magazines', 
            'newspapers' => 'Newspapers'
        ];

        $item_condition = [
            'good' => 'good',
            'bad'  => 'bad'
        ];

        $this->set(compact('issued', 'item_category', 'item_condition', 'itemList', 'membersName'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $issued = $this->Issued->get($id);
        if ($this->Issued->delete($issued)) {
            $this->Flash->success(__('The issued has been deleted.'));
        } else {
            $this->Flash->error(__('The issued could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function return($id = null){
        $this->paginate = [
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
            'conditions' => [
                'Issued.date_return IS NOT NULL'
            ]
        ];
        $issues = $this->paginate($this->Issued);

        $this->set(compact('issues'));
    }

    public function notReturn(){
        $this->paginate = [
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
            'conditions' => [
                'Issued.date_return IS NULL',
            ],
        ];
        $issues = $this->paginate($this->Issued);

        $this->set(compact('issues'));

    }

    public function returnItem($id = null){
        $issued = $this->Issued->get($id, [
            'contain' => ['Members', 'Books', 'Magazines', 'Newspapers'],
        ]);

        $item_condition = [
            'good' => 'good',
            'bad'  => 'bad'
        ];

        $fineStatus = [
            'unpaid' => 'unpaid',
            'paid' => 'paid',
        ];

        $status = [
            'issued' => 'issued',
            'completed' => 'completed'
        ];

        $fine = 0;

        if(date('Y-m-d') > $issued->due_date->format('Y-m-d')){
            $today = new DateTime(date('Y-m-d'));
            $due_date = new DateTime($issued->due_date->format('Y-m-d'));

            $duration = $today->diff($due_date);
            $duration = $duration->days;

            $fine = $duration * 0.2;
            
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $issued = $this->Issued->patchEntity($issued, $data);
            if ($this->Issued->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));

                return $this->redirect(['action' => 'return']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }

        $this->set(compact('issued', 'item_condition', 'fineStatus', 'status', 'fine'));
    }

    public function addMultiple(){
        $data = $this->request->getData();

        // pr($data['member_name']); die;
        $item_category = [
            'books' => 'Books',
            'magazines' => 'Magazines',
            'newspapers' => 'Newspapers',
        ];

        $issued = $this->Issued->newEmptyEntity();
        // if ($this->request->is('post')) {
        //     $issued = $this->Issued->patchEntity($issued, $this->request->getData());
        //     if ($this->Issued->save($issued)) {
        //         $this->Flash->success(__('The issued has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        // }
        // $members = $this->Issued->Members->find('list', ['keyField' => 'id', 'valueField' => 'member_name'])->all();
        

        $this->set(compact('issued', 'item_category'));
    }
}
