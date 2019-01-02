<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'kinderdorf_schneckenmuehle';

    /**
     * Default PageTS for KinderdorfSchneckenmuehle
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Kinderdorf Schneckenmühle'
    );
});
