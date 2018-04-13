<?php  /* Smarty version 2.6.14, created on 2014-03-07 07:09:50
         compiled from display_job.tpl */ ?>
<?php  require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'display_job.tpl', 1, false),array('block', 'keywords', 'display_job.tpl', 2, false),array('block', 'description', 'display_job.tpl', 3, false),array('block', 'tr', 'display_job.tpl', 7, false),array('function', 'display', 'display_job.tpl', 22, false),)), $this); ?>
<?php  $this->_tag_stack[] = array('title', array()); $_block_repeat=true;$this->_plugins['block']['title'][0][0]->_tpl_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php  echo $this->_tpl_vars['listing']['Title']; ?>
 <?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['title'][0][0]->_tpl_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php  $this->_tag_stack[] = array('keywords', array()); $_block_repeat=true;$this->_plugins['block']['keywords'][0][0]->_tpl_keywords($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php  echo $this->_tpl_vars['listing']['Title']; ?>
 <?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['keywords'][0][0]->_tpl_keywords($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php  $this->_tag_stack[] = array('description', array()); $_block_repeat=true;$this->_plugins['block']['description'][0][0]->_tpl_description($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php  echo $this->_tpl_vars['listing']['Title']; ?>
 <?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['description'][0][0]->_tpl_description($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php  if ($this->_tpl_vars['errors']): ?>
    <?php  $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error_code'] => $this->_tpl_vars['error_message']):
?>
		<font size="3" class="error">
			<?php  if ($this->_tpl_vars['error_code'] == 'UNDEFINED_LISTING_ID'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Listing ID is not defined<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php  elseif ($this->_tpl_vars['error_code'] == 'WRONG_LISTING_ID_SPECIFIED'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There is no listing in the system with the specified ID<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php  elseif ($this->_tpl_vars['error_code'] == 'LISTING_IS_NOT_ACTIVE'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Listing with specified ID is not active<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php  elseif ($this->_tpl_vars['error_code'] == 'NOT_OWNER'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You're not the owner of this posting<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php  elseif ($this->_tpl_vars['error_code'] == 'LISTING_IS_NOT_APPROVED'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Listing with specified ID is not approved by admin<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php  elseif ($this->_tpl_vars['error_code'] == 'WRONG_DISPLAY_TEMPLATE'): ?> <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Wrong template to display listing<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php  endif; ?>
		</font>
	<?php  endforeach; endif; unset($_from); ?>
<?php  else: ?>
	<div class="topLinksListing"><?php  if ($this->_tpl_vars['acl']->isAllowed('apply_for_a_job')): ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url'];   if ($this->_tpl_vars['listing']['company_name']): ?>/apply-now-external/?listing_id=<?php  echo $this->_tpl_vars['listing']['id'];   else: ?>/apply-now/?listing_id=<?php  echo $this->_tpl_vars['listing']['id'];   endif;   if ($this->_tpl_vars['isApplied']): ?>&params=isApplied<?php  endif; ?>&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Apply now<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <?php  endif;   if ($this->_tpl_vars['GLOBALS']['current_user']['logged_in']): ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/saved-ads/?listing_id=<?php  echo $this->_tpl_vars['listing']['id']; ?>
&listing_type=job&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
" class="action"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save this Job<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <?php  endif; ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/tell-friends/?listing_id=<?php  echo $this->_tpl_vars['listing']['id']; ?>
&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
" class="action"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email this job<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url'];   echo $this->_tpl_vars['search_uri']; ?>
?action=search&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
#listing_<?php  echo $this->_tpl_vars['listing']['id']; ?>
"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to Results<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
	<div class="clr"><br/></div>
	
	<h2><?php  echo $this->_tpl_vars['listing']['Title']; ?>
</h2>
	<strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['listing']['State'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['State'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>, <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['City'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<br/><strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Employment Type<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  echo $this->_plugins['function']['display'][0][0]->tpl_display(array('property' => 'EmploymentType'), $this);?>

	<br/><strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job Category<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  echo $this->_plugins['function']['display'][0][0]->tpl_display(array('property' => 'JobCategory'), $this);?>

	<br/><strong><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Salary<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  if ($this->_tpl_vars['listing']['Salary']['value'] != '' && $this->_tpl_vars['listing']['Salary']['value'] != 0):   echo $this->_tpl_vars['listing']['Salary']['currency_sign']; ?>
 <?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['Salary']['value'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['listing']['SalaryType'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['SalaryType'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);   endif; ?>
	<br/><strong><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Posted<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['listing']['activation_date'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['activation_date'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<h3><?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['form_fields']['Occupations']['caption'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['form_fields']['Occupations']['caption'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</h3>
	<?php  echo $this->_plugins['function']['display'][0][0]->tpl_display(array('property' => 'Occupations'), $this);?>

	
	<h3><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job Description<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</h3>
	<?php  echo $this->_tpl_vars['listing']['JobDescription']; ?>

	
	<h3><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job Requirements<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</h3>
	<?php  echo $this->_tpl_vars['listing']['JobRequirements']; ?>

	
	<div class="clr"><br/></div>
	<div class="headerBox">
		<h1><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Company Info<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h1>
	</div>
	<?php  if (empty ( $this->_tpl_vars['listing']['company_name'] )): ?>
	<br /><strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  echo $this->_tpl_vars['listing']['user']['Address']; ?>

	<br /><strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  $this->_tag_stack[] = array('tr', array('metadata' => $this->_tpl_vars['METADATA']['listing']['user']['State'])); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();   echo $this->_tpl_vars['listing']['user']['State'];   $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>, <?php  echo $this->_tpl_vars['listing']['user']['City']; ?>

	<br /><strong><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  echo $this->_tpl_vars['listing']['user']['email']; ?>

	<br/><strong><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <?php  echo $this->_tpl_vars['listing']['user']['PhoneNumber']; ?>

	<br/><strong><?php  $this->_tag_stack[] = array('tr', array('domain' => 'FormFieldCaptions')); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Web<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> <a href="<?php  if (strpos ( $this->_tpl_vars['listing']['user']['WebSite'] , 'http://' ) === false): ?>http://<?php  endif;   echo $this->_tpl_vars['listing']['user']['WebSite']; ?>
" target="_blank"><?php  echo $this->_tpl_vars['listing']['user']['WebSite']; ?>
</a>
	<?php  else: ?>
	<br /><strong>Company Name:</strong> <?php  echo $this->_tpl_vars['listing']['company_name']; ?>

	<?php  endif; ?>
	
	<div class="clr"><br/></div>
	<div class="topLinksListing"><?php  if ($this->_tpl_vars['acl']->isAllowed('apply_for_a_job')): ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url'];   if ($this->_tpl_vars['listing']['company_name']): ?>/apply-now-external/?listing_id=<?php  echo $this->_tpl_vars['listing']['id'];   else: ?>/apply-now/?listing_id=<?php  echo $this->_tpl_vars['listing']['id'];   endif;   if ($this->_tpl_vars['isApplied']): ?>&params=isApplied<?php  endif; ?>&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Apply now<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <?php  endif;   if ($this->_tpl_vars['GLOBALS']['current_user']['logged_in']): ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/saved-ads/?listing_id=<?php  echo $this->_tpl_vars['listing']['id']; ?>
&params=job&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
" class="action"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save this Job<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <?php  endif; ?><a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url']; ?>
/tell-friends/?listing_id=<?php  echo $this->_tpl_vars['listing']['id']; ?>
" class="action"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email this job<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <a href="<?php  echo $this->_tpl_vars['GLOBALS']['site_url'];   echo $this->_tpl_vars['search_uri']; ?>
?action=search&amp;searchId=<?php  echo $this->_tpl_vars['searchId']; ?>
&amp;page=<?php  echo $this->_tpl_vars['page']; ?>
#listing_<?php  echo $this->_tpl_vars['listing']['id']; ?>
"><?php  $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;$this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to Results<?php  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['tr'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
<?php  endif; ?>