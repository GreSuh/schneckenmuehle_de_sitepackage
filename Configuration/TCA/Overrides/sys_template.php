<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'kinderdorf_schneckenmuehle';

    /**
     * Default TypoScript for KinderdorfSchneckenmuehle
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Kinderdorf Schneckenmühle'
    );
});
