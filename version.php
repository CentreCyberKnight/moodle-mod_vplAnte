<?php // $Id: version.php,v 1.22 2013-07-11 16:47:04 juanca Exp $

defined('MOODLE_INTERNAL') || die();

$module->version = 2014031012;	//Current module version 3.0.1
$module->cron    = 300; 		//cron check this module every 5 minutes
$module->requires = 2012062500;
$module->maturity = MATURITY_STABLE;
$module->release = '3.0.1';
$module->component = 'mod_vpl';

?>