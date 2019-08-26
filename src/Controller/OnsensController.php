<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Onsens Controller
 *
 * @property \App\Model\Table\OnsensTable $Onsens
 *
 * @method \App\Model\Entity\Onsen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OnsensController extends AppController
{

  public $paginate = [
  	'limit' => 50
  ];

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $this->Auth->allow(['index','view']);
  }

  public function isAuthorized($user = null){
    $action = $this->request->parames['action'];

      if(in_array($action,['index','view','add','logout'])){
      return true;
    }

    if($user['role'] === 'admin'){
      return true;
    }
  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->paginate($this->Onsens);
        $this->set(compact('onsens'));

    }

    /**
     * View method
     *
     * @param string|null $id Onsen id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewbuilder()->layout('detail_layout');

        $onsen = $this->Onsens->get($id, [
            'contain' => []
        ]);

        $onsen->time_opne = $this->_timesubstr($onsen->time_opne);
        $onsen->time_close = $this->_timesubstr($onsen->time_close);
        $onsen->w_time_opne = $this->_timesubstr($onsen->w_time_opne);
        $onsen->w_time_close = $this->_timesubstr($onsen->w_time_close);
        $onsen->h_a_fee = $this->_fee($onsen->h_a_fee);
        $onsen->h_c_fee = $this->_fee($onsen->h_c_fee);
        $onsen->prefectureint =  $this->_prefecture($onsen->prefectureint);
        $this->set('onsen', $onsen);

        $eq = '=';
        $map = '1UXV_NEtZycFB5aQ4_-54dC_G6Me2rsga&ll';
        $this->set(compact('eq','map'));
    }

    public function serch()
    {
        $this->viewbuilder()->layout('my_layout');
        $str = $this->request->data();
        $new = $this->Onsens->find()->where(['prefectureint' => $str['filed']]);
        $this->set('onsens', $new);

        foreach($new as $news){
        $prefecture  = $news->prefecture;
        }
        $this->set(compact('prefecture'));
    }


    public function type($id = null)
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->Onsens->find('all')
        ->where(['eat'=>'◯']);
        $this->set(compact('onsens'));
    }

    public function type1($id = null)
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->Onsens->find('all')
        ->where(['sauna'=>'◯']);
        $this->set(compact('onsens'));
    }

    public function type2($id = null)
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->Onsens->find('all')
        ->where(['towel'=>'◯']);
        $this->set(compact('onsens'));
    }

    public function type3($id = null)
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->Onsens->find('all')
        ->where(['hot_stone'=>'◯']);
        $this->set(compact('onsens'));
    }

    public function type4($id = null)
    {
        $this->viewbuilder()->layout('my_layout');

        $onsens = $this->Onsens->find('all')
        ->where(['open_bath'=>'◯']);
        $this->set(compact('onsens'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $onsen = $this->Onsens->newEntity();
        if ($this->request->is('post')) {
            $onsen = $this->Onsens->patchEntity($onsen, $this->request->getData());
              $onsen->jaf_url = mb_substr($onsen['jaf_url'],46);
              $onsen->nifty_url = mb_substr($onsen['nifty_url'],24);
              $onsen->url = mb_substr($onsen['url'],30);
              $onsen->blog_url = mb_substr($onsen['blog_url'],31);
            if ($this->Onsens->save($onsen)) {
                $this->Flash->success(__('The onsen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The onsen could not be saved. Please, try again.'));
        }
        $this->set(compact('onsen'));

        $maxonsen = $this->Onsens->find('all')->count();
        $max = ($maxonsen + 1);
        $this->set(compact('max'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Onsen id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $onsen = $this->Onsens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $onsen = $this->Onsens->patchEntity($onsen, $this->request->getData());
            if ($this->Onsens->save($onsen)) {
                $this->Flash->success(__('The onsen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The onsen could not be saved. Please, try again.'));
        }
        $this->set(compact('onsen'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Onsen id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $onsen = $this->Onsens->get($id);
        if ($this->Onsens->delete($onsen)) {
            $this->Flash->success(__('The onsen has been deleted.'));
        } else {
            $this->Flash->error(__('The onsen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * 独自定義関数
     *
     */

  public function _timesubstr($var){
    return  mb_substr($var,8,14);
    }

  public function _fee($var){
    if($var === ''){
      return  '平日料金と同じ';
    }else {
      return $var.'円';
    }
    }

  public function _prefecture($var){
    switch ($var) {
      case   1:
      return  $result = 'kanagawa';
        break;
      case 2:
      return  $result = 'sizuoka';
        break;
      case 3:
      return  $result = 'yamanasi';
    }
  }

}
