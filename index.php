<?php
require_once 'inc/config.inc.php';
require_once 'inc/std.inc.php';
require_once 'inc/auth.inc.php';
require_once 'header.php';

echo '<div id=content>';

$page = explode('/', $_REQUEST['string']);

switch($page[0])
{
	case 'contacts';
	require_once 'contacts.php';
	break;
	case 'items';
	require_once 'items.php';
	break;
	case 'income';
	require_once 'income.php';
	break;
	case 'expense';
	require_once 'expense.php';
	break;
	case 'reports';
	require_once 'reports.php';
	break;
	case 'dashboard';
	default;
	require_once 'dashboard.php';
	break;
}

echo '</div>';
