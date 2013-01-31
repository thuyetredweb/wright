<?php

class WrightAdapterJoomlaHead
{
	public function render($args)
	{
	    // add viewport meta for tablets
	    $head = '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">';
	    $head .= "\n";
		$head .= '<jdoc:include type="head" />';
		
		$doc = Wright::getInstance();
		$head .= $doc->generateCSS();
		
		return $head;
	}
}
