<?php
defined('TYPO3_MODE') || die();
use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'T3element',
        'web',
        't3element',
        '',
        [
            \Crayon\T3element\Controller\ElementsController::class => 'index',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:t3element/Resources/Public/Icons/ic.png',
            'labels' => 'LLL:EXT:t3element/Resources/Private/Language/locallang_t3element.xlf',
        ]
    );

    ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3element_domain_model_elements', 'EXT:t3element/Resources/Private/Language/locallang_t3element.xlf');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_t3element_domain_model_elements');
    ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3element_domain_model_license', 'EXT:t3element/Resources/Private/Language/locallang_t3element.xlf');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_t3element_domain_model_license');
    ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3element_domain_model_themeconfig', 'EXT:t3element/Resources/Private/Language/locallang_t3element.xlf');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_t3element_domain_model_themeconfig');
})();

 
 