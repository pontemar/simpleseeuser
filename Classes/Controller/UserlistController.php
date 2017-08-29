<?php
namespace Seuserpue\Simpleseeuser\Controller;

/***
 *
 * This file is part of the "To see user" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Puente, Nicolás <nicolaspuente@yahoo.de>
 *
 ***/

/**
 * UserlistController
 */
class UserlistController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
    /**
     * userlistRepository
     *
     * @var \Seuserpue\Simpleseeuser\Domain\Repository\UserlistRepository
     * @inject
     */
    //protected $userlistRepository = null;
    protected $userlistRepository;

    protected $extName = 'tx_simpleseeuser_userlisting'; // simpleseeuser
    public $theKat = null;
    public $thestoragePid = 0;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()     {
        $action = $this->request->getControllerActionName();
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($action, 'action');

        //storagePid
        $the->thestoragePid = $this->settings['storagePid'];


        $userkategorie = $this->userlistRepository->findKategorie($the->thestoragePid, $this->theKat);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($userkategorie, 'userkategorie');

        $this->view->assign('userkategorie', $userkategorie);

        $userlists = $this->userlistRepository->findUser($the->thestoragePid, $this->theKat);
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($userlists, 'userlists');

        $this->view->assign('userlists', $userlists);
    }

    /**
     * action show
     *
     * @param \Seuserpue\Simpleseeuser\Domain\Model\Userlist $userlist
     * @return void
     */
    public function showAction(\Seuserpue\Simpleseeuser\Domain\Model\Userlist $userlist)     {
        $this->view->assign('userlist', $userlist);
    }
}