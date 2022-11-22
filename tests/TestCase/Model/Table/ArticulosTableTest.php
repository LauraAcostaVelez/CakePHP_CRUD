<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticulosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticulosTable Test Case
 */
class ArticulosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticulosTable
     */
    protected $Articulos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Articulos',
        'app.Familias',
        'app.Movimientos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Articulos') ? [] : ['className' => ArticulosTable::class];
        $this->Articulos = $this->getTableLocator()->get('Articulos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Articulos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArticulosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ArticulosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
