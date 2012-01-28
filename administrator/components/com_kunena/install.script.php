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

jimport( 'joomla.filesystem.file' );

class Com_KunenaInstallerScript {

	function install($parent) {
		$app = JFactory::getApplication();
		$app->setUserState('com_kunena.install.step', 0);

		// Install English and default language
		require_once(JPATH_ADMINISTRATOR . '/components/com_kunena/install/model.php');
		$installer = new KunenaModelInstall();
		$success = $installer->installLanguage('en-GB');
		if (!$success) $app->enqueueMessage('Installing Kunena language (en-GB) failed!', 'notice');
		$lang = JFactory::getLanguage();
		$tag = $lang->getTag();
		if ($tag != 'en-GB') {
			$success = $installer->installLanguage($tag);
			if (!$success) $app->enqueueMessage("Installing Kunena language ({$tag}) failed!", 'notice');
		}
	}

	function update($parent) {
		self::install($parent);
	}

	function uninstall($parent) {
		require_once (JPATH_ADMINISTRATOR . '/components/com_kunena/api.php');
		$lang = JFactory::getLanguage();
		$lang->load('com_kunena.install', JPATH_ADMINISTRATOR) || $lang->load('com_kunena.install', KPATH_ADMIN);

		require_once(KPATH_ADMIN . '/install/model.php');
		$installer = new KunenaModelInstall();
		$installer->uninstallPlugin('system', 'kunena');
		$installer->deleteMenu();
	}

	function preflight($type, $parent) {
		// Remove deprecated manifest.xml (K1.5)
		$manifest = JPATH_ADMINISTRATOR . '/components/com_kunena/manifest.xml';
		if (JFile::exists($manifest)) {
			JFile::delete($manifest);
		}
	}

	function postflight($type, $parent) {
		// Run only in Joomla 1.6+
		$installer = $parent->getParent();

		// Rename kunena.j16.xml to kunena.xml
		$adminpath = KPATH_ADMIN;
		if (JFile::exists("{$adminpath}/kunena.j16.xml")) {
			if ( JFile::exists("{$adminpath}/kunena.xml")) JFile::delete("{$adminpath}/kunena.xml");
			JFile::move("{$adminpath}/kunena.j16.xml", "{$adminpath}/kunena.xml");
		}

		$installer->set('redirect_url', JURI::base () . 'index.php?option=com_kunena&view=install');
	}
}