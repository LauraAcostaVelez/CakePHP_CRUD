<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Articulo'), ['action' => 'edit', $articulo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Articulo'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articulos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Articulo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Download PDF'), ['action' => 'pdf', $articulo->id ], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articulos view content">
            <h3><?= h($articulo->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($articulo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($articulo->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Familia') ?></th>
                    <td><?= $articulo->has('familia') ? $this->Html->link($articulo->familia->nombre, ['controller' => 'Familias', 'action' => 'view', $articulo->familia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($articulo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Compra') ?></th>
                    <td><?= $this->Number->format($articulo->precio_compra) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Venta') ?></th>
                    <td><?= $this->Number->format($articulo->precio_venta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $this->Number->format($articulo->stock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($articulo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($articulo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($articulo->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Movimientos') ?></h4>
                <?php if (!empty($articulo->movimientos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Articulo Id') ?></th>
                            <th><?= __('Cantidad Vendidos') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($articulo->movimientos as $movimientos) : ?>
                        <tr>
                            <td><?= h($movimientos->id) ?></td>
                            <td><?= h($movimientos->fecha) ?></td>
                            <td><?= h($movimientos->articulo_id) ?></td>
                            <td><?= h($movimientos->cantidad_vendidos) ?></td>
                            <td><?= h($movimientos->created) ?></td>
                            <td><?= h($movimientos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movimientos', 'action' => 'view', $movimientos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movimientos', 'action' => 'edit', $movimientos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movimientos', 'action' => 'delete', $movimientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
