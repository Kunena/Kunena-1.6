<?php
/**
* @version $Id$
* Kunena Component - Kunena Factory
* @package Kunena
*
* @Copyright (C) 2009 www.kunena.org All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die('Restricted access');

require_once(KPATH_SITE.'/lib/kunena.smile.class.php');

abstract class KunenaParser {
	static $emoticons = null;

	function JSText($txt) {
		$txt = JText::_($txt);
		$txt = preg_replace('`\'`','\\\\\'', $txt);
		return $txt;
	}

	function parseText($txt, $len=0) {
		if (!$txt) return;
		if ($len && JString::strlen($txt) > $len) $txt = JString::substr ( $txt, 0, $len ) . ' ...';
		$txt = self::escape ( $txt );
		$txt = preg_replace('/(\S{30})/u', '\1&#8203;', $txt);
		$txt = self::prepareContent ( $txt );
		return $txt;
	}

	function parseBBCode($txt, $parent=null, $len=0) {
		if (!$txt) return;
		if (!self::$emoticons) self::$emoticons = smile::getEmoticons ( 0 );

		$config = KunenaFactory::getConfig ();
		$txt = smile::smileReplace ( $txt, 0, $config->disemoticons, self::$emoticons, $parent );
		$txt = nl2br ( $txt );
		$txt = str_replace ( "__KTAB__", "&#009;", $txt ); // For [code]
		$txt = str_replace ( "__KRN__", "\n", $txt ); // For [code]
		$txt = self::prepareContent ( $txt );
		$txt = self::truncate($txt, $len);
		return $txt;
	}

	function stripBBCode($txt, $len=0) {
		if (!$txt) return;
		if (!self::$emoticons) self::$emoticons = smile::getEmoticons ( 0 );

		$txt = smile::purify ( $txt );
		if ($len && JString::strlen($txt) > $len) $txt = JString::substr ( $txt, 0, $len ) . '...';
		$txt = self::escape ( $txt );
		$txt = self::prepareContent ( $txt );
		return $txt;
	}

	/**
	 * Truncates text blocks over the specified character limit and closes
	 * all open HTML tags. The behavior will not truncate an individual
	 * word, it will find the first space that is within the limit and
	 * truncate at that point. This method is UTF-8 safe.
	 *
	 * From Joomla 1.6+: JHtmlString
	 *
	 * @param   string   $text		The text to truncate.
	 * @param   integer  $length		The maximum length of the text.
	 * @return  string   The truncated text.
	 */
	public static function truncate($text, $length = 0)
	{
		// Truncate the item text if it is too long.
		if ($length > 0 && JString::strlen($text) > $length)
		{
			// Find the first space within the allowed length.
			$tmp = JString::substr($text, 0, $length);
			$offset = JString::strrpos($tmp, ' ');
			if(JString::strrpos($tmp, '<') > JString::strrpos($tmp, '>'))
			{
				$offset = JString::strrpos($tmp, '<');
			}
			$tmp = JString::substr($tmp, 0, $offset);

			// If we don't have 3 characters of room, go to the second space within the limit.
			if (JString::strlen($tmp) >= $length - 3) {
				$tmp = JString::substr($tmp, 0, JString::strrpos($tmp, ' '));
			}

			// Put all opened tags into an array
			preg_match_all ( "#<([a-z][a-z0-9]?)( .*)?(?!/)>#iU", $tmp, $result );
			$openedtags = $result[1];
			$openedtags = array_diff($openedtags, array("img", "hr", "br"));
			$openedtags = array_values($openedtags);

			// Put all closed tags into an array
			preg_match_all ( "#</([a-z]+)>#iU", $tmp, $result );
			$closedtags = $result[1];
			$len_opened = count ( $openedtags );
			// All tags are closed
			if( count ( $closedtags ) == $len_opened )
			{
				return $tmp.'...';
			}
			$openedtags = array_reverse ( $openedtags );
			// Close tags
			for( $i = 0; $i < $len_opened; $i++ )
			{
				if ( !in_array ( $openedtags[$i], $closedtags ) )
				{
					$tmp .= "</" . $openedtags[$i] . ">";
				} else {
					unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );
				}
			}
			$text = $tmp.'...';
		}

		return $text;
	}

	function &prepareContent(&$content)
	{
		$config = KunenaFactory::getConfig();

		if ($config->jmambot)
		{
			$row = new stdClass();
			$row->text =& $content;
			$params = new JParameter( '' );
			$params->set('ksource', 'kunena');

			$dispatcher = JDispatcher::getInstance();
			JPluginHelper::importPlugin('content');
			if (KUNENA_JOOMLA_COMPAT == '1.5') {
				$results = $dispatcher->trigger('onPrepareContent', array (&$row, &$params, 0));
			} else {
				$results = $dispatcher->trigger('onContentPrepare', array ('text', &$row, &$params, 0));
			}
			$content = $row->text;
		}
		return $content;
	}


	function escape($string) {
		return htmlspecialchars($string, ENT_COMPAT, 'UTF-8');
	}
}