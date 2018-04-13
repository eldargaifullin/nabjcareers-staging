<?php

require_once('orm/types/EmailType.php');

class SJB_UniqueEmailType extends SJB_EmailType
{
	
	var $email_confirmation;

    function isValid()
    {
    	if (!ereg("^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}\$",  $this->property_info['value']['original'] ))
    		return 'NOT_VALID_EMAIL_FORMAT';
    	if ($this->email_confirmation == 1 && $this->property_info['value']['original'] != $this->property_info['value']['confirmed'])
            return 'NOT_CONFIRMED';
    	if ($this->property_info['is_system']) {
			$count = SJB_DB::query("SELECT count(*) FROM ?w WHERE ?w = ?s AND sid <> ?n",
				$this->property_info['table_name'], $this->property_info['id'], $this->property_info['value']['original'], $this->object_sid);
		} else {
			$count = SJB_DB::query("SELECT COUNT(*) FROM ?w WHERE id = ?s AND value = ?s AND object_sid <> ?n",
				$this->property_info['table_name'] . "_properties", $this->property_info['id'], $this->property_info['value']['original'], $this->object_sid);
		}
		
		$count = array_pop(array_pop($count));

		if ($count) {
			return 'NOT_UNIQUE_VALUE';
		}
		return true;
    }
    
    function getPropertyVariablesToAssign()
    {
		$value = $this->property_info['value'];
		if (is_array($value) && isset($value['original'])) {
			if($value['confirmed'] == $value['original'])
				$confirmed = $value['confirmed'];
			$value = $value['original'];
		}
		
		return array(	'id'			=> $this->property_info['id'],
						'value'			=> $value,
						'confirmed' 	=> $confirmed,
						'isUsername' 	=> true,
						'isRequireConfirmation' => $this->email_confirmation);
	}
    
	function getSavableValue()
	{
		$value = $this->property_info['value'];
		if (is_array($value) && isset($value['original']))
			$value = $value['original'];
       	return $value;
	}
      
	function getSQLValue()
	{
		$value = $this->property_info['value'];
		if (is_array($value) && isset($value['original']))
			$value = $value['original'];
       	return "'" . mysql_real_escape_string(trim($value)) . "'";
	}

	function getEmailConfirmation()
	{
		return $this->email_confirmation;
	}

	function disableEmailConfirmation()
	{
		$this->email_confirmation = false;
	}

	function isEmpty()
	{
		$value_is_empty = false;
		if (is_array($this->property_info['value'])) {
			foreach ($this->property_info['value'] as $field => $field_value) {
				if ('confirmed' == $field && !$this->email_confirmation) { // if its "unique email" checking via ajax confirmation is not required
					continue;
				}
				$field_value = trim($field_value);

				if ($field_value == '') {
					$value_is_empty = true;
					break;
				}
			}
		}
		else {
			$this->property_info['value'] = trim($this->property_info['value']);
			$value_is_empty = ($this->property_info['value'] == '');
		}

		return $value_is_empty;
	}

}

