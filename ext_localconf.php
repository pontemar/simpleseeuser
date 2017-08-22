<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Seuserpue.Simpleseeuser',
            'Userlisting',
            [
                'Userlist' => 'list'
            ],
            // non-cacheable actions
            [
                'Userlist' => 'list'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					userlisting {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_userlisting.svg
						title = LLL:EXT:simpleseeuser/Resources/Private/Language/locallang_db.xlf:tx_simpleseeuser_domain_model_userlisting
						description = LLL:EXT:simpleseeuser/Resources/Private/Language/locallang_db.xlf:tx_simpleseeuser_domain_model_userlisting.description
						tt_content_defValues {
							CType = list
							list_type = simpleseeuser_userlisting
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
