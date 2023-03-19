<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewspapersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewspapersTable Test Case
 */
class NewspapersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewspapersTable
     */
    protected $Newspapers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Newspapers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Newspapers') ? [] : ['className' => NewspapersTable::class];
        $this->Newspapers = $this->getTableLocator()->get('Newspapers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Newspapers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewspapersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
