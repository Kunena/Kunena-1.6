<?php
/**
 * @version $Id$
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

class KunenaLoginJoomla16 extends KunenaLogin
{
	public function __construct() {
		if (version_compare(JVERSION, '1.6', '<'))
			return;
		$this->priority = 25;
		require_once JPATH_SITE.'/components/com_users/helpers/route.php';
	}

	public function getLoginFormFields() {
		return array (
			'form'=>'form-login',
			'field_username'=>'username',
			'field_password'=>'password',
			'field_remember'=>'remember',
			'field_return'=>'return',
			'option'=>'com_users',
			'task'=>'user.login'
		);
	}

	public function getLogoutFormFields() {
		return array (
			'form'=>'form-login',
			'field_return'=>'return',
			'option'=>'com_users',
			'task'=>'user.logout'
		);
	}

	public function getLoginURL()
	{
		$Itemid = UsersHelperRoute::getLoginRoute();
		return JRoute::_('index.php?option=com_users&view=login'.($Itemid ? "&Itemid={$Itemid}" : ''));
	}

	public function getLogoutURL()
	{
		$Itemid = UsersHelperRoute::getLoginRoute();
		return JRoute::_('index.php?option=com_users&view=login'.($Itemid ? "&Itemid={$Itemid}" : ''));
	}

	public function getRegistrationURL()
	{
		$usersConfig = JComponentHelper::getParams ( 'com_users' );
		if ($usersConfig->get ( 'allowUserRegistration' )) {
			$Itemid = UsersHelperRoute::getRegistrationRoute();
			return JRoute::_('index.php?option=com_users&view=registration'.($Itemid ? "&Itemid={$Itemid}" : ''));
		}
	}

	public function getResetURL()
	{
		$Itemid = UsersHelperRoute::getResendRoute();
		return JRoute::_('index.php?option=com_users&view=reset'.($Itemid ? "&Itemid={$Itemid}" : ''));
	}

	public function getRemindURL()
	{
		$Itemid = UsersHelperRoute::getRemindRoute();
		return JRoute::_('index.php?option=com_users&view=remind'.($Itemid ? "&Itemid={$Itemid}" : ''));
	}
}
