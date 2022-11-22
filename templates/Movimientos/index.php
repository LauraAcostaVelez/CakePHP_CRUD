<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Movimiento> $movimientos
 */
?>
<div class="movimientos index content">
    <?= $this->Html->link(__('New Movimiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movimientos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('articulo_id') ?></th>
                    <th><?= $this->Paginator->sort('cantidad_vendidos') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movimientos as $movimiento): ?>
                <tr>
                    <td><?= $this->Number->format($movimiento->id) ?></td>
                    <td><?= h($movimiento->fecha) ?></td>
                    <td><?= $movimiento->has('articulo') ? $this->Html->link($movimiento->articulo->nombre, ['controller' => 'Articulos', 'action' => 'view', $movimiento->articulo->id]) : '' ?></td>
                    <td><?= $this->Number->format($movimiento->cantidad_vendidos) ?></td>
                    <td><?= h($movimiento->created) ?></td>
                    <td><?= h($movimiento->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movimiento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimiento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id)]) ?>
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
