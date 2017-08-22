<?php
namespace Seuserpue\Simpleseeuser\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Puente, Nicolás <nicolaspuente@yahoo.de>
 */
class UserlistControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Seuserpue\Simpleseeuser\Controller\UserlistController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Seuserpue\Simpleseeuser\Controller\UserlistController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllUserlistsFromRepositoryAndAssignsThemToView()
    {

        $allUserlists = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $userlistRepository = $this->getMockBuilder(\Seuserpue\Simpleseeuser\Domain\Repository\UserlistRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $userlistRepository->expects(self::once())->method('findAll')->will(self::returnValue($allUserlists));
        $this->inject($this->subject, 'userlistRepository', $userlistRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('userlists', $allUserlists);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenUserlistToView()
    {
        $userlist = new \Seuserpue\Simpleseeuser\Domain\Model\Userlist();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('userlist', $userlist);

        $this->subject->showAction($userlist);
    }
}
