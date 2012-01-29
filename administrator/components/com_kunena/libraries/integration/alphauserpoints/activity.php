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
defined ( '_JEXEC' ) or die ( '' );

class KunenaActivityAlphaUserPoints extends KunenaActivity {
	protected $integration = null;

	public function __construct() {
		$aup = JPATH_SITE . '/components/com_alphauserpoints/helper.php';
		if (! file_exists ( $aup ))
			return;
		require_once ($aup);
		$this->priority = 50;
		$this->_config = KunenaFactory::getConfig ();
	}

	private function _getAUPversion() {
		if (class_exists('AlphaUserPointsHelper') && method_exists('AlphaUserPointsHelper', 'getAupVersion')) {
			return AlphaUserPointsHelper::getAupVersion();
		}
		return '1.5';
	}

	private function _checkPermissions($message) {
		if (empty ( $message->parent )) return false;

		$accesstype = $message->parent->accesstype;
		if ($accesstype != 'none' && $accesstype != 'joomla.level') {
			return false;
		}
		if (version_compare(JVERSION, '1.6','>')) {
			// FIXME: Joomla 1.6 can mix up groups and access levels
			if ($accesstype == 'joomla.level' && $message->parent->access <= 2) {
				return true;
			} elseif ($message->parent->pub_access == 1 || $message->parent->pub_access == 2) {
				return true;
			} elseif ($message->parent->admin_access == 1 || $message->parent->admin_access == 2) {
				return true;
			}
			return false;
		} else {
			// Joomla access levels: 0 = public,  1 = registered
			// Joomla user groups:  29 = public, 18 = registered
			if ($accesstype == 'joomla.level' && $message->parent->access <= 1) {
				return true;
			} elseif ($message->parent->pub_access == 0 || $message->parent->pub_access == - 1 || $message->parent->pub_access == 18 || $message->parent->pub_access == 29) {
				return true;
			} elseif ($message->parent->admin_access == 18 || $message->parent->admin_access == 29) {
				return true;
			}
			return false;
		}
	}

	private function _checkRuleEnabled($ruleName) {
		$ruleEnabled = AlphaUserPointsHelper::checkRuleEnabled($ruleName);
		return (bool) $ruleEnabled[0]->published;
	}

	private function _getPointsOnThankyou($ruleName) {
		$ruleEnabled = AlphaUserPointsHelper::checkRuleEnabled($ruleName);
		if ($ruleEnabled[0]->published) {
			if ( $this->_getAUPversion() < '1.6.0' ) {
				return $ruleEnabled[0]->content_items;
			} elseif ( $this->_getAUPversion() >= '1.6.0' ) {
				return $ruleEnabled[0]->points2;
			}
		}
		return;
	}

	public function onAfterPost($message) {
		// Check for permisions of the current category - activity only if public or registered
		if ( $this->_checkPermissions($message) ) {
			require_once KPATH_SITE.'/lib/kunena.link.class.php';
			$datareference = '<a href="' . CKunenaLink::GetMessageURL ( $message->get ( 'id' ), $message->get ( 'catid' ) ) . '">' . $message->get ( 'subject' ) . '</a>';
			$referreid = AlphaUserPointsHelper::getReferreid( $message->get ( 'userid' ) );
			if ( $this->_getAUPversion() < '1.5.12' ) {
				if ( $this->_checkRuleEnabled( 'plgaup_newtopic_kunena' ) ) {
					AlphaUserPointsHelper::newpoints ( 'plgaup_newtopic_kunena', $referreid, $message->get ( 'id' ), $datareference );
				} else {
					return;
				}
			} elseif ( $this->_getAUPversion() >= '1.5.12' ) {
				if ( $this->_checkRuleEnabled( 'plgaup_kunena_topic_create' ) ) {
					AlphaUserPointsHelper::newpoints ( 'plgaup_kunena_topic_create', $referreid, $message->get ( 'id' ), $datareference );
				} else {
					return;
				}
			}
		}
	}

	public function onAfterReply($message) {
		// Check for permisions of the current category - activity only if public or registered
		if ( $this->_checkPermissions($message) ) {
			require_once KPATH_SITE.'/lib/kunena.link.class.php';
			$datareference = '<a href="' . CKunenaLink::GetMessageURL ( $message->get ( 'id' ), $message->get ( 'catid' ) ) . '">' . $message->get ( 'subject' ) . '</a>';
			$referreid = AlphaUserPointsHelper::getReferreid( $message->get ( 'userid' ) );
			if ($this->_config->alphauserpointsnumchars > 0) {
				// use if limit chars for a response
				if (JString::strlen ( $message->get ( 'message' ) ) > $this->_config->alphauserpointsnumchars) {
					if ( $this->_getAUPversion() < '1.5.12' ) {
						if ( $this->_checkRuleEnabled( 'plgaup_reply_kunena' ) ) {
							AlphaUserPointsHelper::newpoints ( 'plgaup_reply_kunena', $referreid, $message->get ( 'id' ), $datareference );
						} else {
							return;
						}
					} elseif ( $this->_getAUPversion() >= '1.5.12' ) {
						if ( $this->_checkRuleEnabled( 'plgaup_kunena_topic_reply' ) ) {
							AlphaUserPointsHelper::newpoints ( 'plgaup_kunena_topic_reply', $referreid, $message->get ( 'id' ), $datareference );
						} else {
							return;
						}
					}
				}
			} else {
				if ( $this->_getAUPversion() < '1.5.12' ) {
					if ( $this->_checkRuleEnabled( 'plgaup_reply_kunena' ) ) {
						AlphaUserPointsHelper::newpoints ( 'plgaup_reply_kunena', $referreid, $message->get ( 'id' ), $datareference );
					} else {
						return;
					}
				} elseif ( $this->_getAUPversion() >= '1.5.12' ) {
					if ( $this->_checkRuleEnabled( 'plgaup_kunena_topic_reply' ) ) {
						AlphaUserPointsHelper::newpoints ( 'plgaup_kunena_topic_reply', $referreid, $message->get ( 'id' ), $datareference );
					} else {
						return;
					}
				}
			}
		}
	}

	public function onAfterDelete($message) {
		// Check for permisions of the current category - activity only if public or registered
		if ( $this->_checkPermissions($message) ) {
			$aupid = AlphaUserPointsHelper::getAnyUserReferreID( $message->parent->userid );
			if ( $aupid ) {
				if ( $this->_getAUPversion() < '1.5.12' ) {
					if ( $this->_checkRuleEnabled( 'plgaup_delete_post_kunena' ) ) {
						AlphaUserPointsHelper::newpoints( 'plgaup_delete_post_kunena', $aupid);
					} else {
						return;
					}
				} elseif ( $this->_getAUPversion() >= '1.5.12' ) {
					if ( $this->_checkRuleEnabled( 'plgaup_kunena_message_delete' ) ) {
						AlphaUserPointsHelper::newpoints( 'plgaup_kunena_message_delete', $aupid);
					} else {
						return;
					}
				}
			}
		}
	}

	public function onAfterThankyou($target, $actor, $message) {
		$infoTargetUser = (JText::_ ( 'COM_KUNENA_THANKYOU_GOT' ).': ' . KunenaFactory::getUser($target)->username );
		$infoRootUser = ( JText::_ ( 'COM_KUNENA_THANKYOU_SAID' ).': ' . KunenaFactory::getUser($actor)->username );
		if ( $this->_checkPermissions($message) ) {
			$auptarget = AlphaUserPointsHelper::getAnyUserReferreID( $target );
			$aupactor = AlphaUserPointsHelper::getAnyUserReferreID( $actor );

			if ( $this->_getAUPversion() < '1.5.12' ) {
				$ruleName = 'plgaup_thankyou_kunena';
			} elseif ( $this->_getAUPversion() >= '1.5.12' ) {
				$ruleName = 'plgaup_kunena_message_thankyou';
			}

			$usertargetpoints = intval($this->_getPointsOnThankyou($ruleName));

			if ( $usertargetpoints && $this->_checkRuleEnabled($ruleName) ) {
				// for target user
				if ($auptarget) AlphaUserPointsHelper::newpoints($ruleName , $auptarget, '', $infoTargetUser, $usertargetpoints);
				// for who has gived the thank you
				if ($aupactor) AlphaUserPointsHelper::newpoints($ruleName , $aupactor, '', $infoRootUser );
			}
		}
	}

	function escape($var) {
		return htmlspecialchars ( $var, ENT_COMPAT, 'UTF-8' );
	}

	public function getUserMedals($userid) {
		if ($userid == 0)
			return false;

		if (! defined ( "_AUP_MEDALS_LIVE_PATH" )) {
			define ( '_AUP_MEDALS_LIVE_PATH', JURI::base ( true ) . '/components/com_alphauserpoints/assets/images/awards/icons/' );
		}

		$aupmedals = AlphaUserPointsHelper::getUserMedals ( '', $userid );
		$medals = array ();
		foreach ( $aupmedals as $medal ) {
			$medals [] = '<img src="' . _AUP_MEDALS_LIVE_PATH . $this->escape ( $medal->icon ) . '" alt="' . $this->escape ( $medal->rank ) . '" title="' . $this->escape ( $medal->rank ) . '" />';
		}

		return $medals;
	}

	public function getUserPoints($userid) {
		if ($userid == 0)
			return false;
		$_db = JFactory::getDBO ();

		$_db->setQuery ( "SELECT points FROM #__alpha_userpoints WHERE `userid`='" . ( int ) $userid . "'" );
		$userpoints = $_db->loadResult ();
		KunenaError::checkDatabaseError ();
		return $userpoints;
	}
}
