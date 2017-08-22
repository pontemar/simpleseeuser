<?php
namespace Seuserpue\Simpleseeuser\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Puente, Nicolás <nicolaspuente@yahoo.de>
 */
class UserlistTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Seuserpue\Simpleseeuser\Domain\Model\Userlist
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Seuserpue\Simpleseeuser\Domain\Model\Userlist();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
