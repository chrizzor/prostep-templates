<?php

if ( ! defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['extDirs']['1_templates'] =
  'EXT:templates/Resources/Private/Extensions/';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['confDirs']['1_templates'] =
  'EXT:templates/Resources/Private/Config/';

?>