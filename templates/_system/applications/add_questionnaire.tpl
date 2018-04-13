<h1>[[Create New Questionnaire]]</h1>
{foreach from=$errors item=error key=field_caption}
	{if $error eq 'EMPTY_VALUE'}
		<p class="error">'{$field_caption}' [[is empty]]</p>
	{elseif $error eq 'NOT_UNIQUE_VALUE'}
		<p class="error">'{$field_caption}' [[this value is already used in the system]]</p>
	{elseif $error eq 'NOT_FLOAT_VALUE'}
		<p class="error">'{$field_caption}' [[is not an float value]]</p>
	{elseif $error eq 'NOT_VALID_ID_VALUE'}
		<p class="error">'{$field_caption}' [[is not valid]]</p>
	{elseif $error eq 'CAN_NOT_EQUAL_NULL'}
		<p class="error">'{$field_caption}' [[can not equal "0"]]</p>
	{/if}
{/foreach}
<form method="POST">
{if $action == 'edit'}
	<input type="hidden" name="submit" value="edit" />
{else}
	<input type="hidden" name="submit" value="add" />
{/if}
{foreach from=$form_fields item=form_field}
	{if $form_field.id == 'email_text_more'}
		<fieldset id="email_text_more" {if $request.send_auto_reply_more != 1}style='display:none'{/if}>
			<div class="inputName">[[$form_field.caption]]</div>
			<div class="inputReq">&nbsp;{if $form_field.is_required}*{/if}</div>
			<div class="inputField">{input property=$form_field.id}</div>
		</fieldset>
	{elseif $form_field.id == 'email_text_less'}
		<fieldset id="email_text_less" {if $request.send_auto_reply_less != 1}style="display:none"{/if} >
			<div class="inputName">[[$form_field.caption]]</div>
			<div class="inputReq">&nbsp;{if $form_field.is_required}*{/if}</div>
			<div class="inputField">{input property=$form_field.id}</div>
		</fieldset>
	{elseif $form_field.id == "send_auto_reply_more"}
		<p><strong>[[Send Auto-Reply email to candidates whose score is]]</strong></p>
		<fieldset>
			<div class="inputName">[[$form_field.caption]]</div>
			<div class="inputReq">&nbsp;{if $form_field.is_required}*{/if}</div>
			<div class="inputField">{input property=$form_field.id}</div>
		</fieldset>
	{else}
		<fieldset>
			<div class="inputName">[[$form_field.caption]]</div>
			<div class="inputReq">&nbsp;{if $form_field.is_required}*{/if}</div>
			<div class="inputField">{input property=$form_field.id}</div>
		</fieldset>
	{/if}
{/foreach}
<fieldset>
	<div class="inputName">&nbsp;</div>
	<div class="inputReq">&nbsp;</div>
	{if $action == 'edit'}
	<div class="inputField"><input type="submit" name="action_add" value="[[Edit:raw]]" class="button" /></div>
	{else}
	<div class="inputField"><input type="submit" name="action_add" value="[[Add:raw]]" class="button" /></div>
	{/if}
</fieldset>
</form>
{literal}
<script type="text/javascript">
<!--
$("#send_auto_reply_more").bind("click", function(){
    if(document.getElementById("send_auto_reply_more").checked) 
    	$("#email_text_more").css('display', 'block');
    else
    	$("#email_text_more").css('display', 'none');
})

$("#send_auto_reply_less").bind("click", function(){
    if(document.getElementById("send_auto_reply_less").checked) 
    	$("#email_text_less").css('display', 'block');
    else
    	$("#email_text_less").css('display', 'none');
})
//-->
</script>
{/literal}