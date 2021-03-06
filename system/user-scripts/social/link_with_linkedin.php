<?php

if ( SJB_Authorization::isUserLoggedIn() && class_exists('SJB_SocialPlugin') && ! SJB_SocialPlugin::getProfileObject() && $aPlugins = SJB_SocialPlugin::getAvailablePlugins())
{
	$tp = SJB_System::getTemplateProcessor();
	
	$userGroupInfo = SJB_UserGroupManager::getUserGroupInfoBySID(SJB_UserManager::getCurrentUser()->user_group_sid);
	
	/**
	 * delete from plugins array plugins that are not allowed 
	 * for this userGroup registration
	 */
	SJB_SocialPlugin::preparePluginsThatAreAvailableForRegistration($aPlugins, $userGroupInfo['id']);

	if(empty($aPlugins))
	{
		return null;
	}

	if ($userGroupID)
	{
		$tp->assign('user_group_id', $userGroupID);
	}
	$tp->assign('label', 'link');
	$tp->assign('social_plugins', $aPlugins);
	$tp->display('social_plugins.tpl');
	
}