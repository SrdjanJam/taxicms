<script>
{literal}
	function table_plugin() {	
		$('.ibox-content #button').click(function() {
				
			$.ajax({
                type: 'POST',
                url: 'plg_backup/insert_backup.php',
                data: param,
                    success: function(data) {
						var klasa = $(data).attr('class');					
						toastr[klasa](data); //prikaz poruke o izvrsenju
						table('plg_backup/index.php');// ucitavanje pokaznog menija	
					}
			})		
		})
 //href="insert_backup.php"	
 

	}
{/literal}
</script>

<div class="ibox float-e-margins">
	<div class="ibox-title">
		
		<div class="ibox-tools">
			<a class="collapse-link">
					<i class="fa fa-chevron-up"></i>
			</a>
			<a class="fullscreen-link">
                <i class="fa fa-expand"></i>
            </a>
			<a class="close-link">
				<i class="fa fa-times"></i>
			</a>
		</div>
	</div>
	<div class="ibox-content">
		<div class="html5buttons">
			<div class="dt-buttons btn-group">
					<a id='button' class="btn btn-success buttons-html5" tabindex="0" >
						<i class="fa fa-file-text-o" ></i> <span>{$PLG_ADD}</span>
					</a>
			</div>
		</div>		
		<div class="table-responsive">
			<div id="content">
				{html_table_advanced
					filter=$filter
					cnt_all_rows=$tbl_all_rows_count
					browseString=$tbl_browseString
					scriptName=$scriptName
					cnt_rows=$tbl_row_count
					rowOffset=$tbl_offset
					tr_attr=$tbl_tr_attributes
					td_attr=$tbl_td_attributes
					loop=$tbl_content
					cols=$tbl_cols_count
					tableheader=$tbl_header
					table_attr='cellspacing=0 class="index" id="normal"'
					message=$poruka
				}
			</div>
		</div>
	</div>
</div>