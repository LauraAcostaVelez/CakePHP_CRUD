<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Familia> $familias
 */
?>
<div class="familias index content">
    <?= $this->Html->link(__('New Familia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Familias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($familias as $familia): ?>
                <tr>
                    <td><?= $this->Number->format($familia->id) ?></td>
                    <td><?= h($familia->nombre) ?></td>
                    <td><?= h($familia->codigo) ?></td>
                    <td><?= h($familia->created) ?></td>
                    <td><?= h($familia->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $familia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $familia->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $familia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id)]) ?>
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
