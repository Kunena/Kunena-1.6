<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die();

// This isn't called because of redirect
$this->parent->copyManifest();

function com_install() {
	if (version_compare ( phpversion (), '5.0.0', '<' )) {
		echo "ERROR: PHP 5.2 REQUIRED!";
		return false;
	}

	// Joomla 1.7 compatibility (class already exists)
	if (!class_exists('JVersion')) {
		// Joomla 1.5 and 1.6 compatibility (jimport needed)
		jimport ( 'joomla.version' );
	}
	$jversion = new JVersion ();
	if ($jversion->RELEASE != '1.5') {
		echo "ERROR: WRONG MANIFEST FILE LOADED, PLEASE TRY AGAIN WITH THE LATEST VERSION OF JOOMLA!";
		return false;
	}

	// Emulate J1.6 installer
	include_once(dirname(__FILE__).'/install.script.php');
	Com_KunenaInstallerScript::preflight( null, null );
	Com_KunenaInstallerScript::install ( null );

	// Redirect to Kunena Installer
	header ( "HTTP/1.1 303 See Other" );
	header ( "Location: " . JURI::base () . "index.php?option=com_kunena&view=install" );
}