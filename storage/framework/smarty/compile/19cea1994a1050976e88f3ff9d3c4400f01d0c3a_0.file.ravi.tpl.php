<?php
/* Smarty version 3.1.33, created on 2019-10-30 19:27:40
  from '/Users/kumarravi/Documents/nagarro/ais/smarty/resources/views/ravi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db9e42cd927d0_93182698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19cea1994a1050976e88f3ff9d3c4400f01d0c3a' => 
    array (
      0 => '/Users/kumarravi/Documents/nagarro/ais/smarty/resources/views/ravi.tpl',
      1 => 1572463413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db9e42cd927d0_93182698 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
