<?php
namespace Seuserpue\Simpleseeuser\Domain\Repository;

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
 * The repository for Userlists
 */
class UserlistRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
    /**
     * findUser
     *
     * @param int $theKat
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findUser($theKat)
    {
        // Create query object
        $query = $this->createQuery();
        //$query->getQuerySettings()->setRespectStoragePage(TRUE);
        // Set plain SQL statement
        $sql = 'SELECT uid, pid, usergroup, title, name, puespaltenaddredpub,
		address, zip, city, country, puespaltencontacttelpub,
		telephone, puespaltenhandypub, puespaltenhandy, puespaltencontactmailpub, email, puespaltenlinkpub,
		www, image
		from fe_users
		WHERE usergroup like("%5%") ORDER BY name ';
        $query->statement($sql);

        // add the pid constraint
        $query->getQuerySettings()->setRespectStoragePage(TRUE);

        #$query->matching($query->equals('uid', $uid));

        // ORDER BY
        $query->setOrderings(array("name" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING)); // array

        // Execute query
        return $query->execute();
    }
}
