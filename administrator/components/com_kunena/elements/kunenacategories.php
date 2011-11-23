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
defined ( '_JEXEC' ) or die ( '' );

class JElementKunenaCategories extends JElement {
	var $_name = 'KunenaCategories';

	function fetchElement($name, $value, &$node, $control_name) {
		if (!class_exists('Kunena') || !Kunena::installed()) {
			echo '<a href="index.php?option=com_kunena">PLEASE COMPLETE KUNENA INSTALLATION</a>';
			return;
		}

		$kunena_db = JFactory::getDBO ();

		require_once (KUNENA_PATH . '/class.kunena.php');
		$items = JJ_categoryArray ();

		$sections = $node->attributes ( 'sections' );
		$none = $node->attributes ( 'none' );
		$ctrl = $control_name . '[' . $name . ']';
		$options = Array ();
		$options [] = JHTML::_ ( 'select.option', '0', $none ? JText::_ ( $none ) : '&nbsp;' );
		foreach ( $items as $cat ) {
			$options [] = JHTML::_ ( 'select.option', $cat->id, $cat->treename, 'value', 'text', ! $sections && $cat->section );
		}
		$ctrl = $control_name . '[' . $name . ']';
		$size = $node->attributes ( 'size' );
		$class = $node->attributes ( 'class' );

		$attribs = ' ';
		if ($size) {
			$attribs .= 'size="' . $size . '"';
		}
		if ($class) {
			$attribs .= 'class="' . $class . '"';
		} else {
			$attribs .= 'class="inputbox"';
		}
		if ($node->attributes ( 'multiple' )) {
			$attribs .= ' multiple="multiple"';
			$ctrl .= '[]';
		}

		return JHTML::_ ( 'select.genericlist', $options, $ctrl, $attribs, 'value', 'text', $value, $control_name . $name );
	}
}
