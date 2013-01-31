<?php  
/*------------------------------------------------------------------------
# author    redWeb ApS
# copyright Copyright © 2013 redweb.dk All rights reserved.
# license  	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# website   http://www.redweb.dk
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the framework
require(dirname(__FILE__).'/'.'wright'.'/'.'wright.php');

// Initialize the framework and
$tpl = Wright::getInstance();
$tpl->display();
?>


