<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliasTable Test Case
 */
class FamiliasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliasTable
     */
    protected $Familias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Familias',
        'app.Articulos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Familias') ? [] : ['className' => FamiliasTable::class];
        $this->Familias = $this->getTableLocator()->get('Familias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Familias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FamiliasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
