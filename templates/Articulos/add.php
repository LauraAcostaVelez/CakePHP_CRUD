<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 * @var \Cake\Collection\CollectionInterface|string[] $familias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Articulos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articulos form content">
            <?= $this->Form->create($articulo) ?>
            <fieldset>
                <legend><?= __('Add Articulo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('familia_id', ['options' => $familias]);
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('precio_compra');
                    echo $this->Form->control('precio_venta');
                    echo $this->Form->control('stock');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
