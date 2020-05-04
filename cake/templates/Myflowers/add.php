<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myflower $myflower
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Myflowers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="myflowers form content">
            <?= $this->Form->create($myflower) ?>
            <fieldset>
                <legend><?= __('Add Myflower') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('occasion_id', ['options' => $occasions]);
                    echo $this->Form->control('price');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
