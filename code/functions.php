<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Joomlashack / Meritage Assets
 * @author		Jeremy Wilken - Joomlashack
 * @package		Wright
 *
 * Use this file to add any PHP to the template before it is executed
 */
 
// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

class TemplateParam
{
	private $param;

	/**
	 * Instance
	 * @return RedShop
	 */
	public static function getInstance()
	{
		static $inst = null;
		if ($inst === null) {
			$inst = new TemplateParam();
		}
		return $inst;
	}
	
	/**
	 * Constructor
	 *
	 * @param null
	 *
	 * @return void
	 */
	public function __construct()
	{
		$doc = JFactory::getDocument();
		
		$left_columns = 1;
		if($doc->countModules('sidebar1') == 0)
		{
			$left_columns = 0;
		}
		$this->param['left_columns'] = $left_columns;
		
		$right_columns = 1;
		if($doc->countModules('sidebar2') == 0)
		{
			$right_columns = 0;
		}
		$this->param['right_columns'] = $right_columns;
		
		$params = $doc->params->toArray();
		
		if(count($params) > 0)
		{
			foreach($params as $name=>$value)
			{
				if(strpos($name, 'grid') !== FALSE)
				{
					if($value > 12 || strpos($name, 'Margin') !== FALSE)
					{
						$value .= "px";
					}
					$this->param[$name] = $value;
				}
			}
		}
	
	}
	
	public function getParams()
	{
		return $this->param;
	}
	
}