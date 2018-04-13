<?php


class LangData
{
	var $id;
	var $caption;	
	var $meta;	
	var $error_text;	
	
	function LangData()
	{
		$this->meta = array
		(
			'active'				=> false,
			'is_default'			=> false,
			'theme'					=> null,
			'date_format'			=> null,
			'decimal_separator'		=> null,
			'thousands_separator'	=> null,
			'decimals'				=> null,
			'rightToLeft'			=> null
		);
	}
	
	function createLangDataFromClient($lang_data)
	{
		$langData = new LangData();
		$langData->setID($lang_data['languageId']);
		$langData->setCaption($lang_data['caption']);
		$langData->setActive(isset($lang_data['active']) ? $lang_data['active'] : null);
		$langData->setTheme($lang_data['theme']);
		$langData->setDateFormat($lang_data['date_format']);
		$langData->setDecimalSeparator($lang_data['decimal_separator']);
		$langData->setThousandsSeparator($lang_data['thousands_separator']);
		$langData->setDecimals($lang_data['decimals']);
		$langData->setRightToLeft($lang_data['rightToLeft']);
		return $langData;
	}
	
	function setID($id) 								{ $this->id = $id; }
	function setCaption($caption) 						{ $this->caption = $caption; }
	function setActive($active) 						{ $this->meta['active'] = $active; }
	function setTheme($theme) 							{ $this->meta['theme'] = $theme; }
	function setDateFormat($date_format) 				{ $this->meta['date_format'] = $date_format; }
	function setDecimalSeparator($decimal_separator) 	{ $this->meta['decimal_separator'] = $decimal_separator; }
	function setThousandsSeparator($thousands_separator){ $this->meta['thousands_separator'] = $thousands_separator; }
	function setDecimals($value)						{ $this->meta['decimals'] = $value; }
	function setRightToLeft($value)						{ $this->meta['rightToLeft'] = $value; }

	function getID() 				{ return $this->id; }
	function getCaption() 			{ return $this->caption; }
	function getActive() 			{ return $this->meta['active']; }
	function getTheme() 			{ return $this->meta['theme']; }
	function getDateFormat() 		{ return $this->meta['date_format']; }
	function getDecimalSeparator() 	{ return $this->meta['decimal_separator']; }
	function getThousandsSeparator(){ return $this->meta['thousands_separator']; }
	function getDecimals()			{ return $this->meta['decimals']; }
	function getRightToLeft()			{ return $this->meta['rightToLeft']; }

	
	public static function createLangDataFromServer($lang_data)
	{
		$langData = new LangData();
		
		$langData->setID($lang_data['lang_id']);
		$langData->setCaption($lang_data['name']);
		$langData->setMeta($lang_data['meta']);
		$langData->setErrorText($lang_data['error_text']);
		
		return $langData;
	}
	
	function setMeta($meta) 	 		{ if(!empty($meta)) $this->meta = array_merge($this->meta, unserialize($meta)); }
	function setErrorText($error_text)	{ $this->error_text = $error_text; }
	
	function getMeta() 		{ return serialize($this->meta); }
	function getErrorText() { return $this->error_text; }	
}
