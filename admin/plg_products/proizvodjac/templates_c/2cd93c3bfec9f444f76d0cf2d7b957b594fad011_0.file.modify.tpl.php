<?php
/* Smarty version 3.1.32, created on 2019-06-28 14:34:04
  from 'C:\wamp\www\reimstore\admin\plg_products\proizvodjac\templates\modify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d16093c6128a5_96874356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd93c3bfec9f444f76d0cf2d7b957b594fad011' => 
    array (
      0 => 'C:\\wamp\\www\\reimstore\\admin\\plg_products\\proizvodjac\\templates\\modify.tpl',
      1 => 1561551737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d16093c6128a5_96874356 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" language="javascript1.2">

	function modify_plugin() {
	}

<?php echo '</script'; ?>
>
<div id="content">	
	<form name="editcategory" id="inner" action="modify_final.php" method="post" enctype="multipart/form-data">
	<input name="mode" type="hidden" id="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">						
		<div class="row wrapper  page-heading">
			<div class="col-lg-8">
				<h2 id="modi_title"></h2>
			</div>
			<div class="col-lg-4">
				<div class="title-action">
					<div name="promeni" id="promeni" class="btn btn-primary "><i class="fa fa-check"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['PLG_SAVE']->value;?>
</div>
					<div class="btn btn-default close-modal" type="button"><i class="fa fa-times"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['PLG_CLOSE']->value;?>
</div>
				</div>
			</div>
		</div>			
		<div class="row">
            <div class="col-lg-12">
				<div class="panel-body">
                     <fieldset class="form-horizontal">
                           <div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['PLG_NAME']->value;?>
</label>
								<div class="col-sm-10">
											<input name="naziv" type="text" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" class="title form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['PLG_NAME']->value;?>
">
								</div>
                            </div>
							<div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['PLG_DESCRIPTION']->value;?>
</label>
                                <div class="col-sm-10">
											<textarea name="opis" rows="3" class="form-control"><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</textarea>
								</div>
                            </div>
                      </fieldset>
				</div>
			</div>
		</div>
							
		<input name="proizvodjacid" type="hidden" id="proizvodjacid" value="<?php echo $_smarty_tpl->tpl_vars['proizvodjacid']->value;?>
">

	</form>
</div><?php }
}
