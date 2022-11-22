<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimiento $movimiento
 * @var \Cake\Collection\CollectionInterface|string[] $articulos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientos form content">
            <?= $this->Form->create($movimiento) ?>
            <fieldset>
                <legend><?= __('Add Movimiento') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('articulo_id', ['options' => $articulos]);
                    echo $this->Form->control('cantidad_vendidos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
