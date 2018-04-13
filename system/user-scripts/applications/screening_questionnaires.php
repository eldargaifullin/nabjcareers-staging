<?php

require_once 'applications/ScreeningQuestionnaires.php';

$tp = SJB_System::getTemplateProcessor();
$errors = array();
$action = SJB_Request::getVar('action','list');
$sid = SJB_Request::getVar('sid',null);
if (SJB_Acl::getInstance()->isAllowed('use_screening_questionnaires')) {
	switch ($action) {
		case 'delete':
			if (SJB_ScreeningQuestionnaires::isUserOwnerQuestionnaire(SJB_UserManager::getCurrentUserSID(), $sid)) {
				SJB_ScreeningQuestionnaires::deleteQuestionnaireBySID($sid);
			}
			$action = 'list';
			break;
	}
	
	$tp->assign('questionnaires', SJB_ScreeningQuestionnaires::getList(SJB_UserManager::getCurrentUserSID()));
	$tp->assign('action', $action);
	$tp->display('screening_questionnaires.tpl');
}
else {
	$tp->assign('authorized', SJB_Authorization::isUserLoggedIn());
	$tp->display("add_questionnaire_error.tpl");
}