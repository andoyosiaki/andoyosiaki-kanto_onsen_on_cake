<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Onsen $onsen
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $onsen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $onsen->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Onsens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="onsens form large-9 medium-8 columns content">
    <?= $this->Form->create($onsen) ?>
    <fieldset>
        <legend><?= __('Edit Onsen') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('map');
            echo $this->Form->control('picint');
            echo $this->Form->control('prefecture');
            echo $this->Form->control('prefectureint');
            echo $this->Form->control('adress');
            echo $this->Form->control('eat');
            echo $this->Form->control('sauna');
            echo $this->Form->control('towel');
            echo $this->Form->control('towel_text');
            echo $this->Form->control('hot_stone');
            echo $this->Form->control('open_bath');
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
            echo $this->Form->control('close_text');
            echo $this->Form->control('close');
            echo $this->Form->control('jaf_url');
            echo $this->Form->control('nifty_url');
            echo $this->Form->control('onsen_url');
            echo $this->Form->control('blog_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
