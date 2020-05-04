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
            <?= $this->Html->link(__('Edit Myflower'), ['action' => 'edit', $myflower->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Myflower'), ['action' => 'delete', $myflower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myflower->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Myflowers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Myflower'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="myflowers view content">
            <h3><?= h($myflower->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($myflower->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occasion') ?></th>
                    <td><?= $myflower->has('occasion') ? $this->Html->link($myflower->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $myflower->occasion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($myflower->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($myflower->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($myflower->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($myflower->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($myflower->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
