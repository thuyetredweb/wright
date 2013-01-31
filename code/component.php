<?php
/*------------------------------------------------------------------------
# author    redWeb ApS
# copyright Copyright © 2013 redweb.dk All rights reserved.
# license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.redweb.dk
-------------------------------------------------------------------------*/

// No direct access.
defined('_JEXEC') or die;

require dirname(__FILE__).DS.'/lib/redweb.php';
$rebweb = RedWeb::Instance();
$rebweb->init();

$rebweb->document->addStyleSheet($this->template_url . '/css/print.css');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<!--
	##########################################
	## RedWeb.dk                            ##
	## Blangstedgaardsvej 1.	            ##
	## 5220 Odense SØ                       ##
	## Danmark                              ##
	## email@redweb.dk                      ##
	## http://www.redweb.dk                 ##
	## Date: 2013-01-01                     ##
	##########################################	
-->
<head>
	<jdoc:include type="head" />
	
</head>
<body class="component-body">
	<div class="component-content">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
</body>
</html>
