<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhoneTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhoneTypesTable Test Case
 */
class PhoneTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PhoneTypesTable
     */
    public $PhoneTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.phone_types',
        'app.phones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PhoneTypes') ? [] : ['className' => PhoneTypesTable::class];
        $this->PhoneTypes = TableRegistry::get('PhoneTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PhoneTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
