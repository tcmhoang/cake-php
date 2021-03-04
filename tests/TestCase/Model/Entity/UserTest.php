<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\User;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\User Test Case
 */
class UserTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\User
     */
    protected $User;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->User = new User();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->User);

        parent::tearDown();
    }

    /**
     * Test log method
     *
     * @return void
     */
    public function testLog(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testGetName()
    {
        $this->User->firstname = 'Robert';
        $this->User->lastname = 'Wilson';
        $this->assertTextEquals('Robert Wilson', $this->User->name);
    }
}
