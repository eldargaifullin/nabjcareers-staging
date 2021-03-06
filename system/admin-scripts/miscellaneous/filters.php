<?php

$tp = SJB_System::getTemplateProcessor();
$action = SJB_Request::getVar('action', '');
$htmltags = SJB_Settings::getSettingByName('htmltags');
$htmltags = (unserialize($htmltags));

if($action == 'Save') {
	$tags = SJB_Request::getVar('tags', false);
	$filter = '';
	if($tags) {
		foreach ($tags as $key => $val){
			if ($key == 'br') {
				$filter .= "<{$key}>,<{$key}/>,<{$key} />,";
			} else {
				$filter .= "<".$key.'>,';
			}
		}
		if($filter != '')
			$filter = substr($filter, 0, -1);
	}
	SJB_Settings::updateSetting("htmlFilter", $filter);
}
$savedFilters = SJB_Settings::getSettingByName('htmlFilter');

$savedFilters = $savedFilters?explode(',',$savedFilters):$savedFilters; 
$savedFilters = !empty($savedFilters)?str_replace('<', '', str_replace('>', '', $savedFilters)):array();
$savedFiltersArray = array();
$checkStyle = !empty($savedFilters)?"checked = checked":"";
foreach ($savedFilters as $key => $val) {
	$savedFiltersArray[$val] = 'checked';
}

$tp->assign('htmltags', $htmltags);
$tp->assign('checkStyle', $checkStyle);
$tp->assign('rowsInColumn', round(count($htmltags)/2)+1);
$tp->assign('savedFilters', $savedFiltersArray);
$tp->display('filters.tpl');



