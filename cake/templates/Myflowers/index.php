<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myflower[]|\Cake\Collection\CollectionInterface $myflowers
 */
?>
<div class="myflowers index content">
    <?= $this->Html->link(__('New Myflower'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Myflowers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('occasion_id') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($myflowers as $myflower): ?>
                <tr>
                    <td><?= $this->Number->format($myflower->id) ?></td>
                    <td><?= h($myflower->name) ?></td>
                    <td><?= $myflower->has('occasion') ? $this->Html->link($myflower->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $myflower->occasion->id]) : '' ?></td>
                    <td><?= $this->Number->format($myflower->price) ?></td>
                    <td><?= $this->Number->format($myflower->quantity) ?></td>
                    <td><?= h($myflower->created) ?></td>
                    <td><?= h($myflower->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $myflower->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myflower->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myflower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myflower->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
