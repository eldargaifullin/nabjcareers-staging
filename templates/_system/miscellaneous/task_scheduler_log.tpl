*****	{$smarty.now|date_format}	*****

Expired Listings: {foreach from=$expired_listings_id item=listing_id name=expired_listings}{$listing_id}{if $smarty.foreach.expired_listings.iteration < $smarty.foreach.expired_listings.total}, {/if}{foreachelse}none{/foreach}


Expired Contracts: {foreach from=$expired_contracts_id item=contract_id name=expired_contracts}{$contract_id}{if $smarty.foreach.expired_contracts.iteration < $smarty.foreach.expired_contracts.total}, {/if}{foreachelse}none{/foreach}


Notified Saved Searches: {foreach from=$notified_saved_searches_id item=search_id name=searches}{$search_id}{if $smarty.foreach.searches.iteration < $smarty.foreach.searches.total}, {/if}{foreachelse}none{/foreach}


Activated jobs : {foreach from=$activated_listings_ids item=activated_listing_id name=activated_listings}{$activated_listing_id}{if $smarty.foreach.activated_listings.iteration < $smarty.foreach.activated_listings.total}, {/if}{foreachelse}none{/foreach}

***********   ***************