<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialAccountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialAccountsTable Test Case
 */
class SocialAccountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialAccountsTable
     */
    public $SocialAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.social_accounts',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SocialAccounts') ? [] : ['className' => SocialAccountsTable::class];
        $this->SocialAccounts = TableRegistry::get('SocialAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialAccounts);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
