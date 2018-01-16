<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LO.MediaLo',
            'Pi1',
            [
                'Media' => 'list, show, search',
                'Review' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Media' => 'search',
                'Review' => 'create, new'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LO.MediaLo',
            'Pi2',
            [
                'Author' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Media' => '',
                'Review' => 'create',
                'Author' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LO.MediaLo',
            'Pi3',
            [
                'Media' => 'recommend'
            ],
            // non-cacheable actions
            [
                'Media' => '',
                'Review' => 'create',
                'Author' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('media_lo') . 'Resources/Public/Icons/user_plugin_pi1.svg
                        title = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi1
                        description = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = medialo_pi1
                        }
                    }
                    pi2 {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('media_lo') . 'Resources/Public/Icons/user_plugin_pi2.svg
                        title = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi2
                        description = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = medialo_pi2
                        }
                    }
                    pi3 {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('media_lo') . 'Resources/Public/Icons/user_plugin_pi3.svg
                        title = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi3
                        description = LLL:EXT:media_lo/Resources/Private/Language/locallang_db.xlf:tx_media_lo_domain_model_pi3.description
                        tt_content_defValues {
                            CType = list
                            list_type = medialo_pi3
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
