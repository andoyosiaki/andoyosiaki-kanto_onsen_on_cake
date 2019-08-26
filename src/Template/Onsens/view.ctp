<div class="<?= $onsen->prefectureint; ?> sub">
  <div class="header_box">
    <div class="header_text">
      <p class="title"><?= $this->Html->link('関東温泉',['controller'=>'onsens','action'=>'index']) ?></p>
      <h3 class="d-h3"><?= $onsen->prefecture; ?></h3>
    </div>
  </div>
</div>
<article>
    <div class="container section1">
        <div class="onsen_title_box">
          <div class="onsen_title">
              <h1 class="animated slideInLeft"><?= $onsen->name; ?></h1>
          </div>
          <div class="onsen_adress">
              <h2 class="animated slideInRight">所在地:<?= $onsen->prefecture; ?></h2>
              <address class="animated slideInRight">住所:<?= $onsen->adress; ?></address>
          </div>
        </div>
        <p class="front-img">
          <?= $this->Html->image($onsen->picint.'.jpg') ?>
        </p>
    </div>
    <div class="container btn_box">
      <div class="inner-btn_box">
        <button type="button" class="blog_btn animated tada" id="blog"><?= $this->Html->link('温泉訪問レポート','https://onsenfujisan.com/onsen/'.$onsen->blog_url,['target' => 'blank']) ?></button>
        <button type="button" class="blog_btn"><?= $this->Html->link('公式ホームページ',$onsen->onsen_url,['target' => 'blank']) ?></button>
      </div>
    </div>
    <div class="info_section animated">
      <div class="onsen_data1">
<!-- --------------------------- -->
<!-- 店舗情報 -->
<!-- --------------------------- -->
        <div class="onsen_info_section1">
          <dl class="info_ul">
            <dt>店舗情報</dt>
            <dd>食事処：<?= $onsen->eat; ?></dd>
            <dd>サウナ：<?=  $onsen->sauna; ?></dd>
            <dd>岩盤浴：<?= $onsen->hot_stone; ?></dd>
            <dd>露天風呂：<?= $onsen->open_bath; ?></dd>
            <dd>タオルのレンタルor販売：<?= $onsen->towel; ?></dd>
            <dd class="text"><?= $onsen->towel_text; ?></dd>
          </dl>
        </div>
<!-- --------------------------- -->
<!-- 料金 -->
<!-- --------------------------- -->
        <div class="onsen_info_section2">
          <dl class="Fee_info">
            <dt>基本料金</dt>
            <dd class="before_info">平日・大人料金：<?= $onsen->w_a_fee,"円"; ?></dd>
            <dd class="before_info">平日・子供料金：<?= $onsen->w_c_fee,"円"; ?></dd>
            <dd class="after_info">休日・大人料金：<?= $onsen->h_a_fee; ?>
            </dd>
            <dd class="after_info">休日・子供料金：<?= $onsen->h_c_fee; ?>
            </dd>
            <span class="info_text">( 詳しい料金体系は店舗公式ホームページをご覧下さい。)</span>
          </dl>
        </div>
      </div>
    </div>
<!-- --------------------------- -->
<!-- 営業時間 -->
<!-- --------------------------- -->
    <div class="info_section">
      <div class="onsen_data1">
        <div class="col-12 col-md-4">
          <dl class="open_time">
            <dt>営業時間</dt>
            <dd class="open_weekday">平日　<?= $onsen->time_opne; ?> - <?=  $onsen->time_close; ?></dd>
            <dd class="open_holiday">休日　<?= $onsen->w_time_opne; ?> - <?= $onsen->w_time_close; ?>
            </dd>
          </dl>
        </div>
<!-- --------------------------- -->
<!-- 休店日 -->
<!-- --------------------------- -->
        <div class="col-12 col-md-4">
          <dl class="holiday">
            <dt>休店日</dt>
            <dd><?= $onsen->close; ?></dd>
            <dd class="text"><?= $onsen->close_text; ?></dd>
          </dl>
        </div>
<!-- --------------------------- -->
<!-- 割引情報 -->
<!-- --------------------------- -->
        <div class="col-12 col-md-4">
          <dl class="dis_info">
            <dt>割引情報</dt>
            <dd class="jaf">JAF割引：
                <?php if($onsen->jaf_url === ''){echo "割引情報はありません";}else { ?><a href="https://jafnavi.jp/web/facility.php?sisetu_id=<?= $onsen->jaf_url; ?>">割引内容</a><?php } ?>
            </dd>
            <dd class="nifty">Nfty割引：
                <?php if($onsen->nifty_url ===''){echo "割引情報はありません";}else { ?><a href="https://onsen.nifty.com/<?= $onsen->nifty_url; ?>">割引内容</a><?php } ?>
            </dd>
          </dl>
        </div>
      </div>
        <div class="map">
          <iframe src=https://www.google.com/maps/d/embed?mid<?= $eq,$map,$eq,$onsen->map; ?>></iframe>
        </div>
    </div>
    <div class="return">
      <?= $this->Html->link('戻る',['controller'=>'onsens','action'=>'index']) ?>
    </div>
</article>
