<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 17:05:55
         compiled from "/opt/lampp/htdocs/prestashop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210307980351c9b1d3e98965-32242015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0bea68bd6ccdf9843a1aeb2e4acc2c7ec78793' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210307980351c9b1d3e98965-32242015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c9b1d3ea9044_59561975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c9b1d3ea9044_59561975')) {function content_51c9b1d3ea9044_59561975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/opt/lampp/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>