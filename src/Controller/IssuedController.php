<?php
declare(strict_types=1);

namespace App\Controller;

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
            'contain' => ['Members'],
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
            'contain' => ['Members'],
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
            'books' => 'Books', 
            'magazines' => 'Magazines', 
            'newspapers' => 'Newspapers'
        ];

        $item_condition = ['good', 'bad'];

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
        $issued = $this->Issued->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $issued = $this->Issued->patchEntity($issued, $this->request->getData());
            if ($this->Issued->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }
        $members = $this->Issued->Members->find('list', ['limit' => 200])->all();
        $this->set(compact('issued', 'members'));
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
}
