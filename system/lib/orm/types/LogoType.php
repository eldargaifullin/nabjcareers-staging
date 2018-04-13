<?php

require_once('orm/types/UploadFileType.php');
require_once('miscellaneous/UploadPictureManager.php');

class SJB_LogoType extends SJB_UploadFileType
{
	function SJB_LogoType($property_info)
	{
		parent::SJB_UploadFileType($property_info);
		$this->default_template = 'logo.tpl';
	}
	
	function getPropertyVariablesToAssign()
	{
		$propertyVariables = parent::getPropertyVariablesToAssign();
		$upload_manager = new SJB_UploadPictureManager();
		$upload_manager->setFileGroup("pictures");
		
		$newPropertyVariables =  array(						
						'value'	=> array(
							'file_url' => $upload_manager->getUploadedFileLink($this->property_info['value']),
							'file_name' => $upload_manager->getUploadedFileName($this->property_info['value']),
						),
					);
		return array_merge($newPropertyVariables, $propertyVariables);
	}
	
	function getValue()
	{
		$upload_manager = new SJB_UploadPictureManager();
		$upload_manager->setFileGroup("pictures");
		return array('file_url' => $upload_manager->getUploadedFileLink($this->property_info['value']),
					'file_name' => $upload_manager->getUploadedFileName($this->property_info['value']),
					'thumb_file_url' => $upload_manager->getUploadedFileLink($this->property_info['value']."_thumb"),
					'thumb_file_name' => $upload_manager->getUploadedFileName($this->property_info['value']."_thumb"),
					);
	}

	function isValid()
	{
		$file_id = $this->property_info['id'] . "_" .$this->object_sid;
		$this->property_info['value'] = $file_id;
		$upload_manager = new SJB_UploadPictureManager();
		if ($upload_manager->isValidUploadedPictureFile($this->property_info['id'])) {
			return true;
		}
		
		return $upload_manager->getError();
	}
	
	function getSQLValue()
	{
		$file_id = $this->property_info['id'] . "_" .$this->object_sid;
		$this->property_info['value'] = $file_id;
		$upload_manager = new SJB_UploadPictureManager();
		$upload_manager->setUploadedFileID($file_id);
		$upload_manager->setHeight($this->property_info['height']);
		$upload_manager->setWidth($this->property_info['width']);
		$upload_manager->setStorageMethod($this->property_info['storage_method']);
		$upload_manager->uploadPicture($this->property_info['id'], $this->property_info);
		if (SJB_UploadPictureManager::doesFileExistByID($file_id)) {
			return "'".$file_id."'";
		}
		return "''";
	}
	
	function getFieldExtraDetails()
	{
		return array(
			array(
				'id'		=> 'width',
				'caption'	=> 'Width', 
				'type'		=> 'float',
				'minimum'	=> '1',
				'value'		=> 100,
				'is_required'=> false,
				),
			array(
				'id'		=> 'height',
				'caption'	=> 'Height', 
				'type'		=> 'float',
				'minimum'	=> '1',
				'value'		=> '100',
				'is_required'=> false,
				),
			array(
				'id'		=> 'second_width',
				'caption'	=> 'Width', 
				'type'		=> 'float',
				'minimum'	=> '1',
				'value'		=> 100,
				'is_required'=> false,
				),
			array(
				'id'		=> 'second_height',
				'caption'	=> 'Height', 
				'type'		=> 'float',
				'minimum'	=> '1',
				'value'		=> '100',
				'is_required'=> false,
				),
			array(
				'id'		=> 'storage_method',
				'caption'	=> 'Storage Method',
				'type'		=> 'list',
				'list_values' => array(
										array(
											'id' => 'file_system',
											'caption' => 'File System',
										),
										array(
											'id' => 'database',
											'caption' => 'Database',
										),
									),
				'length'	=> '',
				'is_required'=> true,
				'value'=> 'file_system',
				),
		);
	}
}
