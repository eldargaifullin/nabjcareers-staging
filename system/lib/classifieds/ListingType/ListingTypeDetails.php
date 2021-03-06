<?php

require_once("orm/ObjectDetails.php");
require_once("orm/ObjectProperty.php");

class SJB_ListingTypeDetails extends SJB_ObjectDetails
{
	function SJB_ListingTypeDetails($listing_type_info) {
		$details_info = SJB_ListingTypeDetails::getDetails();
		foreach ($details_info as $detail_info) {
			if (isset($listing_type_info[$detail_info['id']])) {
				$detail_info['value'] = $listing_type_info[$detail_info['id']];
			} else { 
				$detail_info['value'] = '';
			}
			$this->properties[$detail_info['id']] = new SJB_ObjectProperty($detail_info);
		}
	}
	
	public static function getDetails()
	{
		return array(
				array(
					'id'		=> 'id',
					'caption'	=> 'ID', 
					'type'		=> 'unique_string',
					'length'	=> '20',
                    'table_name'=> 'listing_types',
					'is_required'=> true,
					'is_system'	=> true,
				),
				array(
					'id'		=> 'name',
					'caption'	=> 'Name', 
					'type'		=> 'string',
					'length'	=> '20',
                    'table_name'=> 'listing_types',
					'is_required'=> true,
					'is_system'	=> false,
				),
				array(
					'id'		=> 'waitApprove',
					'caption'	=> 'Approve Postings by Admin', 
					'type'		=> 'boolean',
					'length'	=> '',
                    'table_name'=> 'listing_types_properties',
					'comment'	=> 'Enable this setting if you want postings of this type<br /> to be approved by admin, before appearing on the site',
					'is_required'=> false,
					'is_system'	=> false,
				),
				array(
					'id'		=> 'show_brief_or_detailed',
					'caption'	=> 'Enable Brief/Detailed Search Results option', 
					'type'		=> 'boolean',
					'length'	=> '',
                    'table_name'=> 'listing_types_properties',
					'is_required'=> false,
					'is_system'	=> false,
				),
			   );		
	}
}

