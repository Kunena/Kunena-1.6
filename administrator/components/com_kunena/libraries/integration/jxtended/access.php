<?php
/**
 * @version $Id: access.php 4050 2010-12-21 17:59:50Z mahagr $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 *
 **/
//
// Dont allow direct linking
defined( '_JEXEC' ) or die('');

require_once KPATH_ADMIN . '/libraries/integration/joomla15/access.php';

class KunenaAccessJXtended extends KunenaAccessJoomla15 {
	public function __construct() {
		if (KUNENA_JOOMLA_COMPAT != '1.5') {
			// Do not use in Joomla 1.6+
			$this->priority = -1;
			return;
		}
		if (KunenaFactory::getConfig()->integration_access != 'jxtended') {
			// Deprecated: do not list in new installations
			$this->priority = -1;
			return;
		}

		$loader = JPATH_ADMINISTRATOR . '/components/com_artofuser/libraries/loader.php';
		if (is_file($loader)) {
			require_once $loader;
		}
		if (!function_exists('juimport') || !function_exists('jximport'))
			return null;

		$this->priority = 40;
	}
}