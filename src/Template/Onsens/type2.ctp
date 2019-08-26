<header class="jumbotron-fluid header2">
  <div class="container header_box">
    <div class="header_text">
      <p class='type_p'><?= $this->Html->link('関東温泉',['action'=>'index']);  ?></p>
      <h1 class="type_h1">タオルのレンタルあり</h1>
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
                  <p class="<?php echo $this->element('functions', ["var" => $onsen->prefectureint]); ?>"><?= $onsen->prefecture ?></p>
                </div>
                <p class="front-img"><?= $this->Html->image($onsen->picint.'.jpg', [
                                    'url' => ['controller' => 'onsens', 'action' => 'view',$onsen->id]
                                    ]);  ?></p>
          </div>
      </div>
    <?php endforeach; ?>
  </article>
</div>
