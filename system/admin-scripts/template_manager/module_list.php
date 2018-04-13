<?php

include_once ('template_manager/TemplateEditor.php');

$template_processor = SJB_System::getTemplateProcessor ();
$module_name = isset ($_REQUEST['module_name']) ? $_REQUEST['module_name'] : "";
$template_editor = new SJB_TemplateEditor();
$template_processor->assign('module_name', $module_name);
$modules = $template_editor->getModuleWithTemplatesList();
ksort($modules);
$template_processor->assign('module_list', $modules);
$template_processor->display('module_list.tpl');
