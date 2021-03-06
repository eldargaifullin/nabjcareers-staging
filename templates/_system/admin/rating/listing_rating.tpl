{breadcrumbs}<a href="{$GLOBALS.site_url}/manage-listings/?restore=1">Manage Listings</a> &#187; <a href="{$GLOBALS.site_url}/edit-listing/?listing_id={$listing_id}">Edit Listing</a> &#187; Listing Rating{/breadcrumbs}
<h1>Listing Rating</h1>
<script>
	var total = {$rating_num}
	{literal}
	function check_all() {
		for (i = 1; i <= total; i++) {
			if (checkbox = document.getElementById('checkbox_' + i))
				checkbox.checked = true;
		}
	}
	
	function uncheck_all() {
		for (i = 1; i <= total; i++) {
			if (checkbox = document.getElementById('checkbox_' + i))
				checkbox.checked = false;
		}
	}
	{/literal}
</script>

<form method="post" name="rating" action="{$GLOBALS.site_url}/listing-rating/">
	<input type="hidden" name="action" />
	<input type="hidden" name="listing_id" value="{$listing_id}" />
	<p>
		<a href="#" onclick="check_all(); return false">Check all</a> / <a href="#" onclick="uncheck_all(); return false">Uncheck all</a>
		Actions with Selected:
		<span class="deleteButtonEnd"><input onClick="if(!confirm('Are you sure you want to delete this comments?')) return false; document.forms['rating'].elements['action'].value = 'delete'; return true" value="Delete" class="deleteButton" type="submit"></span>
	</p>
	
	<table>
		<thead>
			<tr>
				<th align="center">#</th>
				<th>Author</th>
				<th>Date published</th>
				<th>Rating</th>
				<th colspan="1" class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$rating item=rating name=each_rating}
				<tr class="{cycle values = 'evenrow,oddrow'}">
					<td align="center"><input type="checkbox" name="rating[{$rating.id}]" id="checkbox_{$smarty.foreach.each_rating.iteration}" /></td>
					<td><a href="/admin/edit-user/?username={$rating.username}">{$rating.username}</a></td>
					<td>{$rating.ctime|date_format:"%d.%m.%Y, %H:%M"}</td>
					<td>{$rating.vote}</td>
					<td><a href="{$GLOBALS.site_url}/listing-rating/?action=Delete&amp;rating_id={$rating.id}" onClick="return confirm('Are you sure you want to delete this rating?')" title="Delete"><img src="{image}delete.png" border=0 alt="Delete"></a></td>
				</tr>
			{/foreach}
		</tbody>
	</table>
	
	<p>
		<a href="#" onclick="check_all();return false">Check all</a> / <a href="#" onclick="uncheck_all();return false">Uncheck all</a>
		Actions with Selected:
		<span class="deleteButtonEnd"><input onClick="if(!confirm('Are you sure you want to delete this rating?')) return false; document.forms['rating'].elements['action'].value = 'delete'; return true" value="Delete" class="deleteButton" type="submit"></span>
	</p>
</form>