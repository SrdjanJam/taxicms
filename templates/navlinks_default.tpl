{if count($data.page_headers) gt 0}

<div class="row add-navlinks-default-row">
	{section name=cnt loop=$data.page_headers}
		<div class="col-md-12">
			<a {if $data.page_ids[cnt] eq $data.current_pageid} class="selected" {/if} href="{$data.links_arr[cnt]}">{$data.page_headers[cnt]}</a>
		</div>	
	{/section}
</div>
{/if}
