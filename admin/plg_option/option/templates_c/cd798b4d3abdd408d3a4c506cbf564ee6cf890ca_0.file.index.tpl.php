<?php
/* Smarty version 3.1.32, created on 2023-08-28 11:00:55
  from 'C:\wamp\www\taxicms\admin\plg_option\option\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_64ec6247bfbf47_07107490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd798b4d3abdd408d3a4c506cbf564ee6cf890ca' => 
    array (
      0 => 'C:\\wamp\\www\\taxicms\\admin\\plg_option\\option\\templates\\index.tpl',
      1 => 1693213236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ec6247bfbf47_07107490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp\\www\\taxicms\\common\\libs\\plugins\\function.html_table_advanced.php','function'=>'smarty_function_html_table_advanced',),));
echo '<script'; ?>
>

	function table_plugin() {

		var nc = $("select[name='optioncategoryid'] option:selected").val();
		if (!(nc==-1)) {
			move_rows(nc);
		}
	}

<?php echo '</script'; ?>
>

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

					<a class="btn btn-success buttons-html5" tabindex="0" href="modify.php?mode=insert">
						<i class="fa fa-file-text-o" ></i> <span><?php echo $_smarty_tpl->tpl_vars['PLG_ADD']->value;?>
</span>
					</a>

			</div>
		</div>
		<div class="table-responsive">
		   <div id="content">
					<?php echo smarty_function_html_table_advanced(array('filter'=>$_smarty_tpl->tpl_vars['filter']->value,'cnt_all_rows'=>$_smarty_tpl->tpl_vars['tbl_all_rows_count']->value,'browseString'=>$_smarty_tpl->tpl_vars['tbl_browseString']->value,'scriptName'=>$_smarty_tpl->tpl_vars['scriptName']->value,'cnt_rows'=>$_smarty_tpl->tpl_vars['tbl_row_count']->value,'rowOffset'=>$_smarty_tpl->tpl_vars['tbl_offset']->value,'tr_attr'=>$_smarty_tpl->tpl_vars['tbl_tr_attributes']->value,'td_attr'=>$_smarty_tpl->tpl_vars['tbl_td_attributes']->value,'loop'=>$_smarty_tpl->tpl_vars['tbl_content']->value,'cols'=>$_smarty_tpl->tpl_vars['tbl_cols_count']->value,'tableheader'=>$_smarty_tpl->tpl_vars['tbl_header']->value,'table_attr'=>'cellspacing=0 class="index" id="normal"','message'=>$_smarty_tpl->tpl_vars['poruka']->value),$_smarty_tpl);?>


			</div>
		</div>
	</div>
</div>
<?php }
}
