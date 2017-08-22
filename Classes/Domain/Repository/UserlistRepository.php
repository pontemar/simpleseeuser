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
	 * @param $theKat
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	*/
	public function findUser($theKat){
		// Create query object
		$query = $this->createQuery();

		$query->getQuerySettings()->setRespectStoragePage(TRUE);

		// Set plain SQL statement
		$sql = 'SELECT uid, usergroup, title, name, addridpub,
		address, zip, city, country, contacttelpub,
		telephone, handy, contactmailpub, email, linkpub,
		www, image
		from fe_users
		WHERE usergroup like("%5%") ORDER BY name ';

		$query->statement($sql);

		// Execute query
		return $query->execute();
	}

}
