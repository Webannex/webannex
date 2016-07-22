<?php

/**
 * @author Nicholas Kobets <wemadefoxnever@gmail.com>
 * @copyright 365-solutions.com
 * @license http://365-solutions.com/general-license
 */
$packages = array(
	
	/**
	 * System
	 */
	'bootstrap' => array(
		'basePath' => 'webroot.packages.bootstrap',
		'js' => array(
			DEV_MODE ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
		),
		'css' => DEV_MODE ? array('css/bootstrap.css') : array('css/bootstrap.min.css'),
		'depends' => array('jquery'),
	),
	'admin_theme' => array(
		'basePath' => 'webroot.themes.admin',
		'js' => array(
			'js/vendor/modernizr-respond.min.js',
		),
		'css' => array('css/bootstrap.min.css', 'css/plugins.css', 'css/main.css', 'css/themes.css'),
		'depends' => array('jquery'),
	),
	'ajaxForm' => array(
		'basePath' => 'webroot.packages.ajaxForm',
		'js' => array('jquery.form.js'),
		'depends' => array('yiiactiveform', 'jquery'),
	),
	'ajaxRender' => array(
		'basePath' => 'webroot.packages.history',
		'js' => array('ajax_render.js', 'jquery.history.js'),
		'depends' => array('jquery'),
	),
	'confirm' => array(
		'basePath' => 'webroot.packages.confirm',
		'js' => array('jquery.confirm.min.js'),
		'depends' => array('jquery'),
	),
	
	/**
	 * Gallery
	 */
	'lightbox' => array(
		'basePath' => 'webroot.packages.lightbox',
		'js' => array('lightbox.js'),
		'css' => array('lightbox.css'),
		'depends' => array('jquery'),
	),
	'photobox' => array(
		'basePath' => 'webroot.packages.photobox',
		'js' => array('photobox.js'),
		'css' => array('photobox.css'),
		'depends' => array('jquery'),
	),

	/**
	 * Sliders
	 */
	'jcarousel' => array(
		'basePath' => 'webroot.packages.jcarousel',
		'js' => array('jquery.jcarousel.min.js'),
		'css' => array('jcarousel.css'),
		'depends' => array('jquery'),
	),
	'revolution' => [
        'basePath' => 'webroot.packages.revolution',
        'js' => array('js/jquery.themepunch.revolution.min.js', 'js/jquery.themepunch.tools.min.js'),
        'css' => array('css/settings.css'),
        'depends' => array('jquery'),
    ],
    'slick' => [
        'basePath' => 'webroot.packages.slick',
        'js' => array('slick.min.js'),
        'css' => array('slick.css', 'slick-theme.css'),
        'depends' => array('jquery'),
    ],
	
	/**
	 * Helpers
	 */
	'searchHighlights' => array(
		'basePath' => 'webroot.packages.searchHighlights',
		'js' => array('jquery.highlight-3.js'),
		'depends' => array('jquery'),
	),
	
	'jscrop' => [
		'basePath' => 'webroot.packages.jscrop',
		'js' => ['jquery.jcrop.min.js'],
		'css' => ['jquery.jcrop.min.css'],
		'depends' => ['jquery'],
	],
	'isotope' => [
		'basePath' => 'webroot.packages.isotope',
		'js' => ['jquery.isotope.min.js'],
		'depends' => ['jquery'],
	],

);

return $packages;
