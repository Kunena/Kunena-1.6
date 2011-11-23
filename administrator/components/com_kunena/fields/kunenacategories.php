<?php
/**
 * @version $Id: api.php 3864 2010-11-05 16:23:40Z fxstein $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ( '' );

jimport('joomla.html.html');
jimport('joomla.form.formfield');

class JFormFieldKunenaCategories extends JFormField {
	protected $type = 'KunenaCategories';

	protected function getInput() {
		if (!class_exists('Kunena') || !Kunena::installed()) {
			echo '<a href="index.php?option=com_kunena">PLEASE COMPLETE KUNENA INSTALLATION</a>';
			return;
		}

		$kunena_db = JFactory::getDBO ();

		require_once (KUNENA_PATH . '/class.kunena.php');
		$items = JJ_categoryArray ();

		$sections = $this->element['sections'];
		$none = $this->element['none'];
		$options = Array ();
		$options [] = JHTML::_ ( 'select.option', '0', $none ? JText::_ ( $none ) : '&nbsp;' );
		foreach ( $items as $cat ) {
			$options [] = JHTML::_ ( 'select.option', $cat->id, $cat->treename, 'value', 'text', ! $sections && $cat->section );
		}
		$size = $this->element['size'];
		$class = $this->element['class'];

		$attribs = ' ';
		if ($size) {
			$attribs .= 'size="' . $size . '"';
		}
		if ($class) {
			$attribs .= 'class="' . $class . '"';
		} else {
			$attribs .= 'class="inputbox"';
		}
		if (!empty($this->element['multiple'])) {
			$attribs .= ' multiple="multiple"';
		}

		return JHTML::_ ( 'select.genericlist', $options, $this->name, $attribs, 'value', 'text', $this->value );
	}
}
