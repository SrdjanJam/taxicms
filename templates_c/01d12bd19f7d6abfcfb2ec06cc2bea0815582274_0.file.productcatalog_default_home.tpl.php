<?php
/* Smarty version 3.1.32, created on 2023-10-17 09:25:25
  from 'C:\wamp\www\taxicms\templates\products\productcatalog_default_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_652e36e54345f7_49224880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d12bd19f7d6abfcfb2ec06cc2bea0815582274' => 
    array (
      0 => 'C:\\wamp\\www\\taxicms\\templates\\products\\productcatalog_default_home.tpl',
      1 => 1694591105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e36e54345f7_49224880 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- productcatalog_default START-->
<section class="product-categories-area">
  <div class="container">
    <div class="row">
        <?php
$__section_cnt_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value['menuItem']['items']) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_6_total = $__section_cnt_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_6_total !== 0) {
for ($__section_cnt_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_6_iteration <= $__section_cnt_6_total; $__section_cnt_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
        <div class="col-md-6 itemheight mb-5">
          <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['menuItem']['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['link'];?>
" class="product-category-item">
            <div class="product-category-thumb">
                        <h5 class="product-category-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['menuItem']['items'][(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['title'];?>
</h5>
            </div>
          </a>
        </div>
        <?php
}
}
?>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <a class="carousel-button" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_WEB']->value;
echo $_smarty_tpl->tpl_vars['lang']->value;
echo $_smarty_tpl->tpl_vars['PLG_LINK_PRODUCTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PLG_PRODUCT_ORDER']->value;?>
</a>
        </div>
      </div>
  </div>
</section>
<!--  productcatalog_default END -->
<?php }
}
