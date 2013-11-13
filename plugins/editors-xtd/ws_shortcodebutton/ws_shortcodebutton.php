<?php

/**

 * @version   	1.1

 * @package     Joomla

 * @subpackage  System

 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.

 * @license     GNU GPL v2.0

 */

 

defined('_JEXEC') or die;



class plgButtonWs_Shortcodebutton extends JPlugin

{

    function onDisplay($name)

    {

		$txt = $this->params->get('custom_text', '[set your custom text in plugin parameters]');

		$label = $this->params->get('label', 'Custom Text');

		$jsCode = "

                function insertCustText(editor) {

                    jInsertEditorText('".$txt."', editor);

                }

				";

				

		$doc = JFactory::getDocument();

		$doc->addScriptDeclaration($jsCode);

		
		$link = '../plugins/editors-xtd/ws_shortcodebutton/helper/index.html';

		$button = new JObject();
		$button->set('modal', true);
		$button->set('link', $link);
		$button->set('text', 'WS Shortcode System');
		$button->set('name', 'readmore');
		$button->set('options', "{handler: 'iframe', size: {x: 800, y: 800}}");

        return $button;

    }

}

?>