<?php
namespace App\Test\TestCase\Form;

use App\Form\SearchContactForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\SearchContactForm Test Case
 */
class SearchContactFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\SearchContactForm
     */
    public $SearchContact;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->SearchContact = new SearchContactForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SearchContact);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
