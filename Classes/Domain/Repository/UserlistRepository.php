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
//class UserlistRepository extends \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository {
    /**
     * findUser
     *
     * @param int $theKat, $thestoragePid
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
    */
    public function findUser($thestoragePid, $theKat) {
        // Create query object
        $query = $this->createQuery();

        // Set plain SQL statement
        $sql = "SELECT uid, pid, usergroup, title, name, puespaltenaddredpub,
        address, zip, city, country, puespaltencontacttelpub,
        telephone, puespaltenhandypub, puespaltenhandy, puespaltencontactmailpub, email, puespaltenlinkpub,
        www, image
        from fe_users
        WHERE pid in ('".$thestoragePid."') ORDER BY name";

        $query->statement($sql);

        // add the pid constraint
        #$query->getQuerySettings()->setStoragePageIds($thestoragePid);

        // ORDER BY
        //$query->setOrderings(array("name" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING)); // array

        // Execute query
        return $query->execute();
    }

    /**
     * findKategorie
     *
     * @param int $theKat, $thestoragePid
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
    */
    public function findKategorie($thestoragePid, $theKat){
        // Create query object
        $query = $this->createQuery();

        $sql = "SELECT uid, puespaltengrptxt
        FROM tx_puespalten_domain_model_grpforadr
        WHERE pid in ('".$thestoragePid."') ORDER BY puespaltengrpsort ";

        $query->statement($sql);

        // Execute query
        return $query->execute();
    }
}
