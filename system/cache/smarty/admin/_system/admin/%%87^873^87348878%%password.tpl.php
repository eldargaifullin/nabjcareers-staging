<?php  /* Smarty version 2.6.14, created on 2018-02-08 11:20:25
         compiled from ../field_types/input/password.tpl */ ?>
<?php  require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'tr', '../field_types/input/password.tpl', 5, false),)), $this); ?>
<input type="password"  name="<?php  if ($this->_tpl_vars['complexField']):   echo $this->_tpl_vars['complexField']; ?>
[<?php  echo $this->_tpl_vars['id']; ?>
][<?php  echo $this->_tpl_vars['complexStep']; ?>
][original]<?php  else:   echo $this->_tpl_vars['id']; ?>
[original]<?php  endif; ?>" 
class="inputString <?php  if ($this->_tpl_vars['complexField']): ?>complexField<?php  endif; ?>" /> 
<?php  if ($this->_tpl_vars['GLOBALS']['user_page_uri'] === "/edit-user/"): ?> Current password: <?php  echo $this->_tpl_vars['user_info']['access_token']; ?>
 <?php  endif; ?> <br />
<input type="password"  name="<?php  if ($this->_tpl_vars['complexField']):   echo $this->_tpl_vars['complexField']; ?>
[<?php  echo $this->_tpl_vars['id']; ?>
][<?php  echo $this->_tpl_vars['complexStep']; ?>
][confirmed]<?php  else:   echo $this->_tpl_vars['id']; ?>
[confirmed]<?php  endif; ?>" class="inputString <?php  if ($this->_tpl_vars['complexField']): ?>complexField<?php  endif; ?>" style="margin-top:2px;" /><br />
<span style="font-size:11px"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Confirm Password<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>