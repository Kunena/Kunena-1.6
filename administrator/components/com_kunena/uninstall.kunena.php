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

function com_uninstall() {
	// Joomla 1.7 compatibility (class already exists)
	if (!class_exists('JVersion')) {
		// Joomla 1.5 and 1.6 compatibility (jimport needed)
		jimport ( 'joomla.version' );
	}
	$jversion = new JVersion ();
	if ($jversion->RELEASE != '1.5') return;
	include_once(dirname(__FILE__).'/install.script.php');
	Com_KunenaInstallerScript::uninstall ( null );
}