<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Articulo> $articulos
 */
?>
<div class="articulos index content">
    <?= $this->Html->link(__('New Articulo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Listado de articulos') ?></h3>

    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('key', ['label' => 'Buscar', 'value' => $this->request->getQuery('key')]) ?>
    <?= $this->Form->submit() ?>
    <?= $this->Form->end() ?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('familia_id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('precio_compra') ?></th>
                    <th><?= $this->Paginator->sort('precio_venta') ?></th>
                    <th><?= $this->Paginator->sort('stock') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articulos as $articulo): ?>
                <tr>
                    <td><?= $this->Number->format($articulo->id) ?></td>
                    <td><?= h($articulo->nombre) ?></td>
                    <td><?= $articulo->has('familia') ? $this->Html->link($articulo->familia->nombre, ['controller' => 'Familias', 'action' => 'view', $articulo->familia->id]) : '' ?></td>
                    <td><?= h($articulo->codigo) ?></td>
                    <td><?= $this->Number->format($articulo->precio_compra) ?></td>
                    <td><?= $this->Number->format($articulo->precio_venta) ?></td>
                    <td><?= $this->Number->format($articulo->stock) ?></td>
                    <td><?= h($articulo->created) ?></td>
                    <td><?= h($articulo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $articulo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articulo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?>
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
