<div class="row">
    <div class="column-responsive column-80">
        <div class="articulos pdf content">
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
                    <td><?= h($articulo->familia_id) ?></td>
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
        </div>
    </div>
</div>