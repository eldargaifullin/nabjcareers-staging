<?php

class SJB_Settings
{
    private static $settings = array();
	
	public static function addSetting($name, $value)
	{
	    if (empty(self::$settings))
	        self::loadSettings();
	    self::$settings[$name] = $value;
		return SJB_DB::query("INSERT INTO `settings` SET `name` = ?s, `value` = ?s", $name, $value);
	}
	
	public static function loadSettings()
	{
	    self::$settings = array();
		$settingsInfo = SJB_DB::query("SELECT * FROM `settings`");
		foreach ($settingsInfo as $settingInfo)
			self::$settings[$settingInfo['name']] = $settingInfo['value'];
	}
	
	public static function getSettings()
	{
	    if (empty(self::$settings))
	        self::loadSettings();
		return self::$settings;
	}
	
	public static function updateSettings($settings)
	{
	    if (empty(self::$settings))
	        self::loadSettings();
	   
		foreach ($settings as $name => $value) {
			if ($name == 'disable_bots') {
				$ds	= DIRECTORY_SEPARATOR;
				$path = SJB_BASE_DIR."system{$ds}cache{$ds}agents_bots.txt";
				$result = file_put_contents($path, $value);
			}
			else 
			{
				// convert array value to string for multilist
				if (is_array($value)) {
					$value = implode(',', $value);
				}
			    if (self::getValue($name, false) === false)
			    	self::addSetting($name, $value);
			    else
					SJB_DB::query("UPDATE `settings` SET `value` = ?s WHERE `name` = ?s", $value, $name);
				self::$settings[$name] = $value;
			}
		}
	}
	
	public static function getSettingByName($name)
	{
	    if (empty(self::$settings))
	        self::loadSettings();
	    if (isset(self::$settings[$name]))
	        return self::$settings[$name];
		return false;
	}
	
	public static function updateSetting($name, $value)
	{
	    if (empty(self::$settings))
	        self::loadSettings();
	    self::$settings[$name] = $value;
		return SJB_DB::query("UPDATE `settings` SET `value` = ?s WHERE `name` = ?s", $value, $name);
	}
	
	public static function setValue($name, $value)
	{
		self::updateSetting($name, $value);
	}
	
	public static function getValue($name, $default = "")
	{
		$setting = self::getSettingByName($name);
		if ( $setting === false ) {
			return $default;
		}
		return $setting;
	}
}

