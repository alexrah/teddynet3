<?php

/*
# -------------------------------------------------------------------------
# WS Shortcode System
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2012 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemWS_Shortsystem extends JPlugin
{
	protected static $modules = array();
	protected static $mods = array();
	public function onAfterRender()
	{
		$app = JFactory::getApplication();
		if ($app->getName() == 'administrator' ) {
			return true;
		}      

$tags['message'] = 'message';
$tags['/message'] = '/message';
$tags['panel-white'] = 'panel-white';
$tags['panel-templatecolor'] = 'panel-templatecolor';
$tags['/panel'] = '/panel';
$tags['tooltip'] = 'tooltip';
$tags['button'] = 'button';
$tags['button-blank'] = 'button-blank';
$tags['button-data'] = 'button-data';
$tags['button-icon'] = 'button-icon';
$tags['link-data'] = 'link-data';
$tags['image-data'] = 'image-data';
$tags['row'] = 'row';
$tags['/row'] = '/row';
$tags['col1'] = 'col1';
$tags['col2'] = 'col2';
$tags['col3'] = 'col3';
$tags['col4'] = 'col4';
$tags['col5'] = 'col5';
$tags['col6'] = 'col6';
$tags['col7'] = 'col7';
$tags['col8'] = 'col8';
$tags['col9'] = 'col9';
$tags['col10'] = 'col10';
$tags['col11'] = 'col11';
$tags['col12'] = 'col12';
$tags['/col'] = '/col';
$tags['blockquote'] = 'blockquote';
$tags['/blockquote-name'] = '/blockquote-name';
$tags['/blockquote'] = '/blockquote';
$tags['icon'] = 'icon';
$tags['list'] = 'list';
$tags['/list'] = '/list';
$tags['listing'] = 'listing';
$tags['/listing'] = '/listing';
$tags['spacer'] = 'spacer';
$tags['liner'] = 'liner';
$tags['line'] = 'line';
$tags['vimeo'] = 'vimeo';
$tags['youtube'] = 'youtube';
$tags['youtube-wide'] = 'youtube-wide';
$tags['iframe'] = 'iframe';
$tags['/iframe'] = '/iframe';
$tags['toggle'] = 'toggle';
$tags['/toggle'] = '/toggle';
$tags['label'] = 'label';
$tags['progress'] = 'progress';
$tags['testimonial'] = 'testimonial';
$tags['testimonial-name'] = 'testimonial-name';
$tags['module-in-module'] = 'module-in-module';

    $body =& JResponse::getBody();
    $pattern = '`{(.*?)}`';
    preg_match_all($pattern, $body, $matches);
    $a = count($matches[0]);
    
    for($x=0;$x < $a ;$x++) { 
      $real_tag = substr($matches[0][$x], 1, -1);
      $ersatz = '';
      $zerlegt = explode('|', $real_tag);

$b = count($zerlegt);
     for($y=0;$y < $b;$y++) { $zerlegt[$y] = trim($zerlegt[$y]); }

      switch($zerlegt[0]) {


case $tags['message']:
if(isset($zerlegt[1])) { $ersatz = '<div class="alert-box '.$zerlegt[1].'">';}
break;

case $tags['/message']:
$ersatz = '<a class="close" data-dismiss="alert" href="#">&times;</a></div>';
break;

case $tags['panel-white']:
$ersatz = '<div class="panel">';
break;

case $tags['panel-templatecolor']:
$ersatz = '<div class="panel callout">';
break;

case $tags['/panel']:
$ersatz = '</div>';
break;

case $tags['tooltip']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3]) && isset($zerlegt[4])) { $ersatz = '<a href="'.$zerlegt[1].'" title="'.$zerlegt[2].'" class="has-tipsy-'.$zerlegt[3].'">'.$zerlegt[4].'</a>';}
break;
 
case $tags['button']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3])) { $ersatz = '<a class="button '.$zerlegt[1].'" href="'.$zerlegt[2].'">'.$zerlegt[3].'</a>';}
break;

case $tags['button-blank']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3])) { $ersatz = '<a target="_blank" class="button '.$zerlegt[1].'" href="'.$zerlegt[2].'">'.$zerlegt[3].'</a>';}
break;

case $tags['button-data']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3]) && isset($zerlegt[4])) { $ersatz = '<a class="button '.$zerlegt[1].'" href="'.$zerlegt[2].'" '.$zerlegt[4].'>'.$zerlegt[3].'</a>';}
break;

case $tags['button-icon']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3]) && isset($zerlegt[4])) { $ersatz = '<a class="button '.$zerlegt[1].'" href="'.$zerlegt[2].'"><i class="'.$zerlegt[4].'"></i>'.$zerlegt[3].'</a>';}
break;

case $tags['link-data']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3]) && isset($zerlegt[4])) { $ersatz = '<a class="'.$zerlegt[1].'" href="'.$zerlegt[2].'" '.$zerlegt[4].'>'.$zerlegt[3].'</a>';}
break;

case $tags['image-data']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3]) && isset($zerlegt[4])) { $ersatz = '<div class="article_media"><a class="'.$zerlegt[1].'" href="'.$zerlegt[2].'" '.$zerlegt[4].'><img src="'.$zerlegt[3].'" alt="" /></a></div>';}
break;

case $tags['row']:
$ersatz = '<div class="row">';
break;  

case $tags['/row']:
$ersatz = '</div>';
break;  
  
case $tags['col1']:
$ersatz = '<div class="one columns">';
break;  
  
case $tags['col2']:
$ersatz = '<div class="two columns">';
break;    

case $tags['col3']:
$ersatz = '<div class="three columns">';
break;  

case $tags['col4']:
$ersatz = '<div class="four columns">';
break;  

case $tags['col5']:
$ersatz = '<div class="five columns">';
break;

case $tags['col6']:
$ersatz = '<div class="six columns">';
break;

case $tags['col7']:
$ersatz = '<div class="seven columns">';
break;

case $tags['col8']:
$ersatz = '<div class="eight columns">';
break;

case $tags['col9']:
$ersatz = '<div class="nine columns">';
break;

case $tags['col10']:
$ersatz = '<div class="ten columns">';
break;

case $tags['col11']:
$ersatz = '<div class="eleven columns">';
break;

case $tags['col12']:
$ersatz = '<div class="twelve columns">';
break;

case $tags['/col']:
$ersatz = '</div>';
break;

case $tags['blockquote']:
$ersatz = '<blockquote>';
break;

case $tags['/blockquote-name']:
if(isset($zerlegt[1])) { $ersatz = '<cite>'.$zerlegt[1].'</cite></blockquote>';}
break; 

case $tags['/blockquote']:
$ersatz = '</blockquote>';
break;

case $tags['icon']:
if(isset($zerlegt[1])) { $ersatz = '<i class="'.$zerlegt[1].'"></i>';}
break;

case $tags['list']:
$ersatz = '<ul class="'.$zerlegt[1].'">';
break;

case $tags['/list']:
$ersatz = '</ul>';
break;

case $tags['listing']:
$ersatz = '<li>';
break; 

case $tags['/listing']:
$ersatz = '</li>';
break;

case $tags['spacer']:
if(isset($zerlegt[1])) { $ersatz = '<div class="spacer" style="height:'.$zerlegt[1].'"></div>';}
break;

case $tags['liner']:
if(isset($zerlegt[1])) { $ersatz = '<div class="row"><div class="twelve columns"><hr style="margin:'.$zerlegt[1].' !important" /></div></div>';}
break;

case $tags['line']:
$ersatz = '<div class="row"><div class="twelve columns"><hr /></div></div>';
break;
 
case $tags['vimeo']:
if(isset($zerlegt[1])) { $ersatz = '<div class="article_media"><div class="flex-video widescreen vimeo"><iframe src="http://player.vimeo.com/video/'.$zerlegt[1].'?color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></div>';}
break;

case $tags['youtube']:
if(isset($zerlegt[1])) { $ersatz = '<div class="article_media"><div class="flex-video"><iframe frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen src="http://www.youtube.com/embed/'.$zerlegt[1].'"></iframe></div></div>';}
break;

case $tags['youtube-wide']:
if(isset($zerlegt[1])) { $ersatz = '<div class="article_media"><div class="flex-video widescreen"><iframe frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen src="http://www.youtube.com/embed/'.$zerlegt[1].'"></iframe></div></div>';}
break;

case $tags['iframe']:
$ersatz = '<div class="flex-video">';
break;

case $tags['/iframe']:
$ersatz = '</div>';
break;

case $tags['toggle']:
if(isset($zerlegt[1])) { $ersatz = '<ul class="toggle-view"><li><h2>'.$zerlegt[1].'</h2><span><i class="icon-plus"></i></span><div class="toggle-content" style="display:none;">';}
break;

case $tags['/toggle']:
$ersatz = '</div></li></ul>';
break;

case $tags['label']:
if(isset($zerlegt[1]) && isset($zerlegt[2]) && isset($zerlegt[3])) { $ersatz = '<span class="'.$zerlegt[1].' '.$zerlegt[2].' label" >'.$zerlegt[3].'</span>';}
break;

case $tags['progress']:
if(isset($zerlegt[1]) && isset($zerlegt[2])) { $ersatz = '<p class="bottom0">'.$zerlegt[1].' <span>'.$zerlegt[2].'%</span></p><div class="nice primary progress"><span class="meter progress'.$zerlegt[2].'"></span></div>';}
break;

case $tags['testimonial']:
$ersatz = '<div class="testimonial-item"><div class="testimonial-content"><p>';
break;

case $tags['testimonial-name']:
if(isset($zerlegt[1])) { $ersatz = '</p></div><p>'.$zerlegt[1].'</p></div>';}
break;

case $tags['module-in-module']:
$ersatz = $this->_slomoload($zerlegt[1]);
break;

      	default:
      	  $ersatz = '';
      }

      if(in_array($zerlegt[0], $tags)) {
      	$body = str_replace($matches[0][$x], $ersatz, $body);
     	}

    }

    JResponse::setBody($body);

		return true;
	}
	
	

	protected function _slomoload($position, $style = 'none')
	{
		if (!isset(self::$modules[$position])) {
			self::$modules[$position] = '';
			$document	= JFactory::getDocument();
			$renderer	= $document->loadRenderer('module');
			$modules	= JModuleHelper::getModules($position);
			$params		= array('style' => $style);
			ob_start();

			foreach ($modules as $module) {
				echo $renderer->render($module, $params);
			}

			self::$modules[$position] = ob_get_clean();
		}
		return self::$modules[$position];
	}

	protected function _slomoloadmod($module, $title, $style = 'none')
	{
		if (!isset(self::$mods[$module])) {
			self::$mods[$module] = '';
			$document	= JFactory::getDocument();
			$renderer	= $document->loadRenderer('module');
			$mod		= JModuleHelper::getModule($module, $title);
			if (!isset($mod)){
				$name = 'mod_'.$module;
				$mod  = JModuleHelper::getModule($name, $title);
			}
			$params = array('style' => $style);
			ob_start();

			echo $renderer->render($mod, $params);

			self::$mods[$module] = ob_get_clean();
		}
		return self::$mods[$module];
	}
}
