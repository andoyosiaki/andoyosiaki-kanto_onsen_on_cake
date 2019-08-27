<header class="jumbotron-fluid header1">
  <div class="title">
    <h1 class="front_h1">関東温泉</h1>
  </div>
  <div class="author_box">
    <?= $this->Html->link('管理画面',['controller'=>'Users','action'=>'login']) ?>
  </div>
    <div class="container">
      <div class="serch_box">
        <?= $this->Form->create('null',['type'=>'post','action'=>'serch','class'=>'form-group']) ?>
        <?= $this->Form->select('filed',[1=>'神奈川県', 2=>'静岡県', 3=>'山梨県'],['class'=>'form-control','id'=>'form_option'])  ?>
        <div class="serch_btn">
        <?= $this->Form->submit('送信',['class'=>'serch_button','id'=>'serch_option']); ?>
        <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
    <div class="feature_box">
      <p class="feature_p">特徴別に探す</p>
    </div>
    <div class="type_wrapper-box">
      <div class="type_box type_0">
        <div class="media">
            <?= $this->Html->image('eat.png',['url'=>['controller' => 'Onsens','action' => 'type']])  ?>
          <div class="media-body">
            <a href="<?= $this->Url->build(['action'=>'type']) ?>"><h3 class="mt-0">食事処あり</h3></a>
            <p>温泉からあがって美味しい食事が頂けるお店はこちら。地域の食材を使ったひと手間くわえたメニューが沢山あります。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_1">
        <div class="media">
            <?= $this->Html->image('sauna.png',['url'=>['controller' => 'Onsens','action' => 'type1']])  ?>
          <div class="media-body">
            <a href=<?= $this->Url->build(['action'=>'type1']) ?>><h3 class="mt-0">サウナあり</h3></a>
            <p>サウナに入ってリフレッシュ！ミストサウナやドライサウナなど種類も沢山あります
          。今話題のロウリュもあるかも。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_2">
        <div class="media">
          <?= $this->Html->image('towel.png',['url'=>['controller' => 'Onsens','action' => 'type2']])  ?>
          <div class="media-body">
            <a href=<?= $this->Url->build(['action'=>'type2']) ?>><h3 class="mt-0">タオルのレンタル可能</h3></a>
            <p>出先で急に温泉に入りたくなってもタオル持ってない・・。そんなときでも大丈夫。タオルのレンタル/販売してる温泉はこちら。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="type_wrapper-box down">
      <div class="type_box type_3">
        <div class="media">
          <?= $this->Html->image('hot_stone.png',['url'=>['controller' => 'Onsens','action' => 'type3']])  ?>
          <div class="media-body">
            <a href=<?= $this->Url->build(['action'=>'type3']) ?>><h3 class="mt-0">岩盤浴あり</h3></a>
            <p>岩盤浴でじっくり体を温めてデトックス！基本は有料サービスですが、なかには無料で使える温泉も・・・。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_4">
        <div class="media">
          <?= $this->Html->image('open_bath.png',['url'=>['controller' => 'Onsens','action' => 'type4']])  ?>
          <div class="media-body">
            <a href=<?= $this->Url->build(['action'=>'type4']) ?>><h3 class="mt-0">露天風呂あり</h3></a>
            <p>温泉と言えばやっぱり露天風呂！大規模施設の色々な種類の露天風呂や、温泉地の静かな露天風呂まで多種多様にあります。</p>
          </div>
        </div>
      </div>
    </div>
</header>
<div class="contaienr main_section">
  <article class="animated">
    <?php foreach ($onsens as $onsen): ?>
      <div class="article_box animated">
          <div class="article_inner-box animated">
              <h2><a href="<?= $this->Url->build(['action'=>'view',$onsen->id]); ?>"><?= h($onsen->name);?></a></h2>
                <div class="p_box">
                  <p class="<?= $this->element('functions', ["var" => $onsen->prefectureint]); ?>"><?= $onsen->prefecture ?></p>
                </div>
                <p class="front-img"><?= $this->Html->image($onsen->picint.'.jpg', [
                                    'url' => ['controller' => 'onsens', 'action' => 'view',$onsen->id]
                                    ]);  ?></p>
          </div>
      </div>
    <?php endforeach; ?>
  </article>
</div>
