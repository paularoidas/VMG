<?php
session_start();
define('ROOT_PATH', dirname(__FILE__));
$page = isset($_GET['page']) ? $_GET['page'] : FALSE;

switch ($page) {
	case 'vmg':
		require ROOT_PATH . '/views/vmg.php';
		break;

	case 'vmg2':
		require ROOT_PATH . '/views/vmg2.php';
		break;

	case 'sak':
		require ROOT_PATH . '/views/SAK.php';
		break;

	case 'sws':
		require ROOT_PATH . '/views/sws.php';
		break;		
	case 'output':
		require ROOT_PATH . '/outputs/output.php';
		break;
	case 'output2':
		require ROOT_PATH . '/outputs/output2.php';
		break;
	case 'output_sak':
		require ROOT_PATH . '/outputs/output_sak.php';
		break;

	case 'output_sws':
		require ROOT_PATH . '/outputs/output_sws.php';
		break;

	default:
		require ROOT_PATH . '/views/vmg.php';
        break;
    }