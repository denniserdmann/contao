<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add back end modules
$GLOBALS['BE_MOD']['content']['faq'] = array
(
	'tables' => array('tl_faq_category', 'tl_faq')
);

// Front end modules
$GLOBALS['FE_MOD']['faq'] = array
(
	'faqlist'   => 'Contao\ModuleFaqList',
	'faqreader' => 'Contao\ModuleFaqReader',
	'faqpage'   => 'Contao\ModuleFaqPage'
);

// Style sheet
if (defined('TL_MODE') && TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaofaq/faq.min.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Contao\ModuleFaq', 'getSearchablePages');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';
