<?php 
defined('TYPO3_MODE') || die();
     call_user_func(function() 
     {
       
         $extensionKey = 't3element';
         
         \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
             $extensionKey,
             'Configuration/TsConfig/Page/All.tsconfig',
             $extensionKey
         );
     });
     