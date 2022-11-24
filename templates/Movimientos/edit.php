<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimiento $movimiento
 * @var string[]|\Cake\Collection\CollectionInterface $articulos
 * @var string[]|\Cake\Collection\CollectionInterface $familias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movimiento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Movimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientos form content">
            <?= $this->Form->create($movimiento) ?>
            <fieldset>
                <legend><?= __('Edit Movimiento') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('familia_id', ['options' => $familias]);
                    echo $this->Form->control('articulo_id', ['options' => $articulos]);
                    echo $this->Form->control('cantidad_vendidos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
