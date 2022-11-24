<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientosFixture
 */
class MovimientosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'fecha' => '2022-11-23',
                'articulo_id' => 1,
                'cantidad_vendidos' => 1,
                'created' => '2022-11-23 14:58:43',
                'modified' => '2022-11-23 14:58:43',
                'familia_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
