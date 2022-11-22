<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Familia $familia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Familia'), ['action' => 'edit', $familia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Familia'), ['action' => 'delete', $familia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Familias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Familia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="familias view content">
            <h3><?= h($familia->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($familia->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($familia->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($familia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($familia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($familia->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($familia->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Articulos') ?></h4>
                <?php if (!empty($familia->articulos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Precio Compra') ?></th>
                            <th><?= __('Precio Venta') ?></th>
                            <th><?= __('Stock') ?></th>
                            <th><?= __('Familia Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($familia->articulos as $articulos) : ?>
                        <tr>
                            <td><?= h($articulos->id) ?></td>
                            <td><?= h($articulos->nombre) ?></td>
                            <td><?= h($articulos->codigo) ?></td>
                            <td><?= h($articulos->descripcion) ?></td>
                            <td><?= h($articulos->precio_compra) ?></td>
                            <td><?= h($articulos->precio_venta) ?></td>
                            <td><?= h($articulos->stock) ?></td>
                            <td><?= h($articulos->familia_id) ?></td>
                            <td><?= h($articulos->created) ?></td>
                            <td><?= h($articulos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Articulos', 'action' => 'view', $articulos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Articulos', 'action' => 'edit', $articulos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articulos', 'action' => 'delete', $articulos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulos->id)]) ?>
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
