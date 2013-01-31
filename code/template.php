<?php
/*------------------------------------------------------------------------
# author    redWeb ApS
# copyright Copyright © 2013 redweb.dk All rights reserved.
# license  	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# website   http://www.redweb.dk
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}

$bodyclass = "";
if ($this->countModules('toolbar')) {
	$bodyclass = "toolbarpadding";
}

$this->addJSScript('js');

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<!--
	##########################################
	## redWeb.dk                            ##
	## Blangstedgaardsvej 1.	            ##
	## 5220 Odense SØ                       ##
	## Danmark                              ##
	## email@redweb.dk                      ##
	## http://www.redweb.dk                 ##
	## Date: 2013-01-01                     ##
	##########################################	
-->
<head>
	<w:head />
</head>

<body<?php if ($bodyclass != "") :?> class="<?php echo $bodyclass?>"<?php endif; ?>>
	
	<?php if ($this->countModules('toolbar')) : ?>
   	<!-- menu -->
	<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
    <?php endif; ?>
    
    <div class="<?php echo $containerClass ?>">
    	<?php if($this->countModules('top') > 0): ?>
		<!-- top  -->
		<div id="top">
			<w:module type="none" name="top" chrome="xhtml" />
		</div>
		<?php endif;?>
		
		<!-- header -->
		<header id="header">
			<div class="<?php echo $gridMode; ?> clearfix">
	        	<w:logo name="header" />
	        	<div class="clear"></div>
	    	</div>
	    </header>
		
		<?php if ($this->countModules('menu')) : ?>
       	<!-- menu -->
   		<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>"  name="menu" />
        <?php endif; ?>
        
        <!-- above main -->
        <?php if ($this->countModules('above-main')) : ?>
        <div id="above-main">
            <w:module type="none" name="above-main" chrome="xhtml" />
        </div>
        <?php endif; ?>
        
        <div id="main-content" class="<?php echo $gridMode; ?>">
            <!-- sidebar1 -->
            <aside id="sidebar1">
            	<w:module name="sidebar1" chrome="xhtml" />
            </aside>
            <!-- main -->
            <section id="main">
                <?php if ($this->countModules('above-content')) : ?>
                <!-- above-content -->
                <div id="above-content">
                    <w:module type="none" name="above-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
            	<?php if ($this->countModules('breadcrumbs')) : ?>
                <!-- breadcrumbs -->
            	<div id="breadcrumbs">
            		<w:module type="single" name="breadcrumbs" chrome="none" />
            	</div>
            	<?php endif; ?>
            	<!-- component -->
            	<w:content />
                <?php if ($this->countModules('below-content')) : ?>
                <!-- below-content -->
                <div id="below-content">
                    <w:module type="none" name="below-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
            </section>
            <!-- sidebar2 -->
            <aside id="sidebar2">
            	<w:module name="sidebar2" chrome="xhtml" />
            </aside>
        </div>
         
        <!-- below main -->
        <?php if ($this->countModules('below-main')) : ?>
        <div id="below-main">
            <w:module type="none" name="below-main" chrome="xhtml" />
        </div>
        <?php endif; ?>
    </div>
    
    <!-- footer -->
    <div class="wrapper-footer">
	    <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>
	    	 <div class="<?php echo $containerClass ?>">
	    		<?php if ($this->countModules('footer')) : ?>
					<w:module type="<?php echo $gridMode; ?>" name="footer" chrome="wrightflexgrid" />
			 	<?php endif; ?>
			</div>
	    </footer>
    </div>

	<w:footer />
</body>

</html>