<?php  /* Smarty version 2.6.14, created on 2014-10-26 01:31:45
         compiled from browse_by_category.tpl */ ?>
<?php  require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'browse_by_category.tpl', 6, false),array('modifier', 'truncate', 'browse_by_category.tpl', 6, false),array('block', 'tr', 'browse_by_category.tpl', 6, false),)), $this); ?>
<?php  $this->assign('empty', 'true'); ?>
<ul class="browseListing">
	<?php  $_from = $this->_tpl_vars['browseItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['browseItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['browseItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['browseItem']):
        $this->_foreach['browseItems']['iteration']++;
?>
		<?php  if ($this->_tpl_vars['browseItem']['count'] > 0): ?>
			<?php  $this->assign('empty', 'false'); ?>
			<li><a class='brByCategoryLink'  href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/browse-by-category/<?php  echo ((is_array($_tmp=$this->_tpl_vars['browseItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
/"><?php  $this->_tag_stack[] = array('tr', array('domain' => 'Property_JobCategory')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo ((is_array($_tmp=$this->_tpl_vars['browseItem']['caption'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 28, "...", true) : smarty_modifier_truncate($_tmp, 28, "...", true));   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <span class="blue">(<?php  echo $this->_tpl_vars['browseItem']['count']; ?>
)</span></a></li>
			<?php  if (!($this->_foreach['browseItems']['iteration'] % $this->_tpl_vars['columns'])): ?></ul><ul class="browseListing"><?php  endif; ?>
		<?php  endif; ?>
	<?php  endforeach; endif; unset($_from); ?>		
	<?php  if ($this->_tpl_vars['empty'] == 'true'): ?>
		<li><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no listings with requested parameters in the system.<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
	<?php  endif; ?>
</ul>