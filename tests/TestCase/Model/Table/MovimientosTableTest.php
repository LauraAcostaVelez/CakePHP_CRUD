<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimientosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimientosTable Test Case
 */
class MovimientosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimientosTable
     */
    protected $Movimientos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Movimientos',
        'app.Articulos',
        'app.Familias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Movimientos') ? [] : ['className' => MovimientosTable::class];
        $this->Movimientos = $this->getTableLocator()->get('Movimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Movimientos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MovimientosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MovimientosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
