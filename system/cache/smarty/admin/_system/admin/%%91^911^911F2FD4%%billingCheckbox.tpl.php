<?php  /* Smarty version 2.6.14, created on 2018-02-08 11:20:26
         compiled from ../field_types/input/billingCheckbox.tpl */ ?>
<?php  require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'tr', '../field_types/input/billingCheckbox.tpl', 2, false),)), $this); ?>
<?php  if ($this->_tpl_vars['GLOBALS']['user_page_uri'] == "/registration/"): ?>
	<input id="yesButton" name="<?php  echo $this->_tpl_vars['id']; ?>
" value="1" type="radio" onclick="refillBillingInfo();" /><span><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
	<input id="noButton" name="<?php  echo $this->_tpl_vars['id']; ?>
" value="2" type="radio" onclick="refillBillingInfo();" /><span><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
<?php  else: ?>

	<input id="yesButton" <?php  if ($this->_tpl_vars['GLOBALS']['current_user']['billingInformationCheckbox'] == 1): ?>checked="checked"<?php  endif; ?> name="<?php  echo $this->_tpl_vars['id']; ?>
" value="1" type="radio" onclick="refillBillingInfo();" /><span><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
	<input id="noButton" <?php  if ($this->_tpl_vars['GLOBALS']['current_user']['billingInformationCheckbox'] == 0): ?>checked="checked"<?php  endif; ?> name="<?php  echo $this->_tpl_vars['id']; ?>
" value="2" type="radio" onclick="refillBillingInfo();" /><span><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>	
<?php  endif; ?>
