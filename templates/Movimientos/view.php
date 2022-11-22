<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimiento $movimiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movimiento'), ['action' => 'edit', $movimiento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movimiento'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movimiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientos view content">
            <h3><?= h($movimiento->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Articulo') ?></th>
                    <td><?= $movimiento->has('articulo') ? $this->Html->link($movimiento->articulo->nombre, ['controller' => 'Articulos', 'action' => 'view', $movimiento->articulo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movimiento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad Vendidos') ?></th>
                    <td><?= $this->Number->format($movimiento->cantidad_vendidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($movimiento->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($movimiento->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($movimiento->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
