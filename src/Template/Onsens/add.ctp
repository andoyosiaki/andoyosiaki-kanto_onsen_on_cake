<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Onsen $onsen
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Onsens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="onsens form large-9 medium-8 columns content">
    <?= $this->Form->create($onsen) ?>
    <fieldset>
        <legend><?= __('Add Onsen') ?></legend>
        <?php
            echo $this->Form->control('name',['placeholder'=>'温泉名']);
            echo $this->Form->control('map',['placeholder'=>'マップurl']);
            echo $this->Form->control('picint',['placeholder'=> $max]);
            echo $this->Form->control('prefecture',['placeholder'=>'神奈川,静岡,山梨']);
            echo $this->Form->control('prefectureint',['placeholder'=>'神奈川=1,静岡=2,山梨=3']);
            echo $this->Form->control('adress');
            echo $this->Form->control('eat',['placeholder'=>'◯ or ×']);
            echo $this->Form->control('sauna',['placeholder'=>'◯ or ×']);
            echo $this->Form->control('towel',['placeholder'=>'◯ or ×']);
            echo $this->Form->control('towel_text');
            echo $this->Form->control('hot_stone',['placeholder'=>'◯ or ×']);
            echo $this->Form->control('open_bath',['placeholder'=>'◯ or ×']);
            echo $this->Form->control('time_opne', ['empty' => true]);
            echo $this->Form->control('time_close', ['empty' => true]);
            echo $this->Form->control('w_time_opne', ['empty' => true]);
            echo $this->Form->control('w_time_close', ['empty' => true]);
            echo $this->Form->control('h_time_opne', ['empty' => true]);
            echo $this->Form->control('h_time_close', ['empty' => true]);
            echo $this->Form->control('w_a_fee');
            echo $this->Form->control('w_c_fee');
            echo $this->Form->control('h_a_fee');
            echo $this->Form->control('h_c_fee');
            echo $this->Form->control('close_text',['placeholder'=>'曜日']);
            echo $this->Form->control('close',['placeholder'=>'補足']);
            echo $this->Form->control('jaf_url',['placeholder'=>'url']);
            echo $this->Form->control('nifty_url',['placeholder'=>'url']);
            echo $this->Form->control('onsen_url',['placeholder'=>'url']);
            echo $this->Form->control('blog_url',['placeholder'=>'url']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
