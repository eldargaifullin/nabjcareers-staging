<?php  /* Smarty version 2.6.14, created on 2018-02-08 14:55:18
         compiled from ../users/registration_form.tpl */ ?>
<?php  require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'tr', '../users/registration_form.tpl', 11, false),array('function', 'module', '../users/registration_form.tpl', 60, false),array('function', 'input', '../users/registration_form.tpl', 117, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/system/ext/jquery/jquery-ui.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/system/ext/jquery/jquery.bgiframe.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/system/ext/jquery/jquery.form.js"></script>


<script type="text/javascript" language="JavaScript">
<?php  echo '
$.ui.dialog.defaults.bgiframe = true;
function popUpWindow(url, widthWin, heightWin, title){

	$("#messageBox").dialog( \'destroy\' ).html(\''; ?>
<img style="vertical-align: middle;" src="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/system/ext/jquery/progbar.gif" alt="<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please, wait ...<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please, wait ...<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);   echo '\');
	$("#messageBox").dialog({
		width: widthWin,
		height: heightWin,
		modal: true,
		title: title
	}).dialog( \'open\' );
	
	$.get(url, function(data){
		$("#messageBox").html(data);  
	});
	return false;
}
function checkField( obj, name ){
    if(obj.val()!=""){
        var options = {
            data: { isajaxrequest: \'true\', type: name },
            success: showResponse
        };
        $("#registr-form").ajaxSubmit( options );
    }
    function showResponse(responseText, statusText, xhr, $form){
        var mes="";
        switch(responseText){
            case \'NOT_VALID_EMAIL_FORMAT\':
                mes = "';   $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email format is not valid<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);   echo '";
                break;
            case \'NOT_UNIQUE_VALUE\':
                mes = "';   $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>this value is already used in the system<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);   echo '";
                break;
            case \'HAS_BAD_WORDS\':
                mes = "';   $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>has bad words<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);   echo '";
                break;
            case \'1\':
                mes = "";
                break;
        }
        $("#am_"+name).text(mes);
    }
};
'; ?>

</script>

<h1><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['user_group_info']['name'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h1>
<div class="soc_reg_form">
<?php  echo $this->_plugins['function']['module'][0][0]->module(array('name' => 'social','function' => 'social_plugins'), $this);?>

</div>
<?php  $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_caption'] => $this->_tpl_vars['error']):
?>
	<p class="error">
    	<?php  if ($this->_tpl_vars['error'] == 'EMPTY_VALUE'): ?>
    		<?php  if ($this->_tpl_vars['field_caption'] == 'Enter code from image'): ?>
            	<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter Security code<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php  else: ?>
    			'<?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['field_caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>is empty<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    		<?php  endif; ?>
    	<?php  elseif ($this->_tpl_vars['error'] == 'NOT_UNIQUE_VALUE'): ?>
    		'<?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['field_caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>this value is already used in the system<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    	<?php  elseif ($this->_tpl_vars['error'] == 'NOT_CONFIRMED'): ?>
    		'<?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['field_caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>not confirmed<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    	<?php  elseif ($this->_tpl_vars['error'] == 'NOT_VALID_ID_VALUE'): ?>
    		<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can use only alphanumeric characters for<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> '<?php  echo $this->_tpl_vars['field_caption']; ?>
'
    	<?php  elseif ($this->_tpl_vars['error'] == 'NOT_VALID_EMAIL_FORMAT'): ?>
    		<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email format is not valid<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    	<?php  elseif ($this->_tpl_vars['error'] == 'NOT_VALID'): ?>
    		<?php  if ($this->_tpl_vars['field_caption'] == 'Enter code from image'): ?>
            	<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Security code is not valid<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php  else: ?>
    			'<?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['field_caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>is not valid<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    		<?php  endif; ?>
		<?php  elseif ($this->_tpl_vars['error'] == 'HAS_BAD_WORDS'): ?>
			'<?php  echo $this->_tpl_vars['field_caption']; ?>
' <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>has bad words<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php  else: ?>
			<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['error'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    	<?php  endif; ?>
	</p>
<?php  endforeach; endif; unset($_from);   if ($this->_tpl_vars['socialRegistration']): ?>
<p><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You’re almost registered on our site! Please complete the form below to finish the registration.<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
<?php  endif; ?>
<br/><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fields marked with an asterisk (<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><font color="red">*</font><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>) are mandatory<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/>
<form method="post" action="" enctype="multipart/form-data" onsubmit="return checkform();" id="registr-form">
<input type="hidden" name="action" value="register" />
	<?php  $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['form_field']):
?>
		<?php  if ($this->_tpl_vars['user_group_info']['show_mailing_flag'] == 0 && $this->_tpl_vars['form_field']['id'] == 'sendmail'): ?>
		
		
		<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'sendemailnewsletter'): ?>
		333
		
		<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'billingInformationCheckbox'): ?>
			<fieldset>
				<br><br><br>
				<div class="inputName billingAddressBlock"></div>
				<div class="inputReq  billingAddressBlock">&nbsp;<?php  if ($this->_tpl_vars['form_field']['is_required']): ?>*<?php  endif; ?></div>
				<div class="inputField  billingAddressBlock billingPartCaption"><span><?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['form_field']['caption'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['form_field']['caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><span></div>
				<?php  if ($this->_tpl_vars['form_field']['instructions']):   $this->assign('instructionsExist', '1');   $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../classifieds/instructions.tpl", 'smarty_include_vars' => array('form_field' => $this->_tpl_vars['form_field'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
   endif; ?>
			</fieldset>
			
			<fieldset>
				<div id="billingFillingBlock" class="inputName billingPartMiddleText">&nbsp;Same as above?&nbsp;<?php  echo $this->_plugins['function']['input'][0][0]->tpl_input(array('property' => $this->_tpl_vars['form_field']['id'],'template' => 'billingCheckbox.tpl'), $this);?>
</div>
				<div class="inputReq ">&nbsp;<?php  if ($this->_tpl_vars['form_field']['is_required']): ?>*<?php  endif; ?></div>
				<div class="inputField"></div>
			</fieldset>
			<fieldset>
				<div class="billingPartSubText">&nbsp;(Do not complete the following form if the same)</div>
				
				<div class="inputField"></div>
			</fieldset><br>
			
			
					<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'JobCredits30'): ?>								<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'JobCredits60'): ?>
					<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'JobCredits90'): ?>
					<?php  elseif ($this->_tpl_vars['form_field']['id'] == 'resume_bonus_days'): ?>
		
			
		<?php  else: ?>
			<fieldset>
				<div class="inputName"><?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['form_field']['caption'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['form_field']['caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
				<div class="inputReq">&nbsp;<?php  if ($this->_tpl_vars['form_field']['is_required']): ?>*<?php  endif; ?></div>
				<div class="inputField"><?php  echo $this->_plugins['function']['input'][0][0]->tpl_input(array('property' => $this->_tpl_vars['form_field']['id']), $this);?>
</div>
				<?php  if ($this->_tpl_vars['form_field']['instructions']):   $this->assign('instructionsExist', '1');   $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../classifieds/instructions.tpl", 'smarty_include_vars' => array('form_field' => $this->_tpl_vars['form_field'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
   endif; ?>
			</fieldset>
		<?php  endif; ?>
	<?php  endforeach; endif; unset($_from); ?>
	<?php  if ($this->_tpl_vars['terms_of_use_check'] != 0): ?>
		<fieldset>
			<div class="inputName"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Accept terms of use<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
			<div class="inputReq">*</div>
			<div class="inputField">
				<input type="checkbox" name="terms" <?php  if ($_POST['terms']): ?>checked<?php  endif; ?> id="terms" />
				<a style='cursor:pointer; color: #666666; text-decoration:underline;' onclick="popUpWindow('<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/terms-of-use-pop/', 512, 600, '<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Terms of use<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>')"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Read terms of use<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
			</div>
		</fieldset>
	<?php  endif; ?>
		<fieldset>
			<div class="inputName">&nbsp;</div>
			<div class="inputReq">&nbsp;</div>
			<div class="inputField"><input type="hidden" name="user_group_id" value="<?php  echo $this->_tpl_vars['user_group_info']['id']; ?>
" /> <input type="submit" value="<?php  $this->_tag_stack[] = array('tr', array('mode' => 'raw')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Register<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></div>
		</fieldset>
</form>
<?php  if ($this->_tpl_vars['instructionsExist']):   echo '
<script type="text/javascript">
	$("document").ready(function(){
		var elem = $(".instruction").prev();
		elem.children().focus(function(){
			$(this).parent().next(".instruction").children(".instr_block").show();
		});
		elem.children().blur(function(){
			$(this).parent().next(".instruction").children(".instr_block").hide();
		});
	});
	function FCKeditor_OnComplete(editorInstance){
		editorInstance.Events.AttachEvent( \'OnFocus\', function(){
				$("#instruction_"+editorInstance.Name).show();
			} ) ;
		editorInstance.Events.AttachEvent( \'OnBlur\', function(){
				$("#instruction_"+editorInstance.Name).hide();
			} ) ;
		return;
	}
</script>
'; ?>

<?php  endif; ?>
<script language='JavaScript' type='text/javascript'>
function checkform() {

<?php  if ($this->_tpl_vars['terms_of_use_check'] != 0): ?>
	if(!document.getElementById('terms').checked) { 
		alert('<?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Read terms of use<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');
		return false;
	}
<?php  endif; ?>

	return true;
	
}
</script>


<script type="text/javascript">
	<?php  echo '
			/* Country - State select script*/
		if (		$("select[name=Country] option:selected").val() == "United States" 			) 
		{
			$ ("select[name=State]").closest("fieldset").css({\'display\':\'block\'});
		}
		
		else 
		{
			$("select[name=State]").closest("fieldset").css({\'display\':\'none\'});
		}
		
	/*	$("select[name=Country]").bind("click", function (e) {	- doesn\'t work on mobile browsers in Ipad/android  */
		$("select[name=Country]").bind("change", function (e) {
		
			if ( $("select[name=Country] option:selected").val() == "United States" ) {
				$("select[name=State]").closest("fieldset").css({\'display\':\'block\'});
			}
			else {
				$("select[name=State]").val(\'No State-Outside of the US\');
				$("select[name=State]").closest("fieldset").css({\'display\':\'none\'});	
			}			
		});
		
		
		
		
		
		
		if ($("select[name=billingCountry] option:selected").val() == "United States" ) 
		{
			$ ("select[name=billingState]").closest("fieldset").css({\'display\':\'block\'});
		}
		else 
		{
			$("select[name=billingState]").closest("fieldset").css({\'display\':\'none\'});
		}
		
		$("select[name=billingCountry]").bind("change", function (e) {	
			if ( $("select[name=billingCountry] option:selected").val() == "United States" ) {
				$("select[name=billingState]").closest("fieldset").css({\'display\':\'block\'});
			}
			else {
				$("select[name=billingState]").val(\'No State-Outside of the US\');
				$("select[name=billingState]").closest("fieldset").css({\'display\':\'none\'});	
			}
		});
		
		/* Billing Info Auto-fill script*/		
//		$("#yesButton").change(refillBillingInfo);
//		$("#noButton").change(refillBillingInfo);
		
		function refillBillingInfo() {
			// var billingInfoCheckbox = $("#billingInformationCheckbox").is(\':checked\');
			var yesStatus=$("#yesButton").is(":checked");		

			if (yesStatus) { // if checked - get attributes from contact fields and set to correspondig billing fields
					// get values
				var companyName = $(\'input[name=CompanyName]\').val();	
				var contactName = $(\'input[name=ContactName]\').val();
				var emailOrig = document.getElementsByName("email[original]");
				emailOrig = emailOrig[0].value;
				var country = $(\'select[name=Country] option:selected\').val();
				var state = $(\'select[name=State] option:selected\').val();
				
				var city = $(\'input[name=City]\').val();	
				var zipCode = $(\'input[name=ZipCode]\').val();
				var address = $(\'input[name=Address]\').val();
				var phoneNumber = $(\'input[name=PhoneNumber]\').val();
				
				// set values				var bilCompanyName = $(\'*[name=billingCompany]\').val();
				$(\'input[name=billingCompany]\').attr("value", companyName);
				$(\'input[name=billingFirstName]\').attr("value", contactName);
				//				$(\'input[name=billingFLastName]\').attr("value", "");
				$(\'input[name=billingAddress]\').attr("value", address);
				$(\'input[name=billingCity]\').attr("value", city);			
			
				$("select[name=billingCountry]").val(country);		
				$("select[name=billingState]").val(state);			
		
				$(\'input[name=billingZip]\').attr("value", zipCode);
				$(\'input[name=billingPhone]\').attr("value", phoneNumber);
				$(\'input[name=billingEmail]\').attr("value", emailOrig);
			}
			else { // clear billing fields
				$(\'input[name=billingCompany]\').attr("value", "");
				$(\'input[name=billingFirstName]\').attr("value", "");
				$(\'input[name=billingFLastName]\').attr("value", "");
				$(\'input[name=billingAddress]\').attr("value", "");
				$(\'input[name=billingCity]\').attr("value", "");			
			
				$("select[name=billingCountry]").val(\'Select Billing Country\');		
				$("select[name=billingState]").val(\'Select Billing State\');			
		
				$(\'input[name=billingZip]\').attr("value", "");
				$(\'input[name=billingPhone]\').attr("value", "");
				$(\'input[name=billingEmail]\').attr("value", "");
			}
		}
	'; ?>

</script>