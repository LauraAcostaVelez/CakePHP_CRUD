<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articulo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo
 * @property string $descripcion
 * @property float $precio_compra
 * @property float $precio_venta
 * @property int $stock
 * @property int $familia_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\Movimiento[] $movimientos
 */
class Articulo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nombre' => true,
        'codigo' => true,
        'descripcion' => true,
        'precio_compra' => true,
        'precio_venta' => true,
        'stock' => true,
        'familia_id' => true,
        'created' => true,
        'modified' => true,
        'familia' => true,
        'movimientos' => true,
    ];
}
