<?php


require_once "I18N/LanguageActionFactory.php";
require_once "ObjectMother.php";

$errors = array();

if (isset($_REQUEST['action']))
{
	$action_name = $_REQUEST['action']; 
	$params = $_REQUEST;
	
	$action = SJB_LanguageActionFactory::get($action_name, $params);
	
	if ($action->canPerform())
	{
		$action->perform();
		die;
	}	
	else
	{
		$errors = $action->getErrors();
	}
}

$i18n = SJB_ObjectMother::createI18N();

$langs_data = $i18n->getLanguagesData();

$template_processor = SJB_System::getTemplateProcessor();
$template_processor->assign('languages', $langs_data);
$template_processor->assign('errors', $errors);
$template_processor->display('export_language.tpl');

