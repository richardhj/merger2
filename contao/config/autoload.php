<?php

/**
 * Merger² - Module Merger for Contao Open Source CMS
 *
 * Copyright (C) 2013 bit3 UG
 *
 * @package merger2
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license LGPL-3.0+
 */


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'merger_default' => 'system/modules/merger2/templates',
	'mod_merger2'    => 'system/modules/merger2/templates',
));
