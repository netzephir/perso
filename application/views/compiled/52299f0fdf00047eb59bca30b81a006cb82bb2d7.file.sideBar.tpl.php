<?php /* Smarty version Smarty-3.1.19, created on 2016-02-25 15:43:01
         compiled from "C:\wamp\www\perso\application\views\partials\sideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:693556cf12f52ea942-53026479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52299f0fdf00047eb59bca30b81a006cb82bb2d7' => 
    array (
      0 => 'C:\\wamp\\www\\perso\\application\\views\\partials\\sideBar.tpl',
      1 => 1456410307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '693556cf12f52ea942-53026479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cf12f5367965_53356873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cf12f5367965_53356873')) {function content_56cf12f5367965_53356873($_smarty_tpl) {?><aside class="sidebar-left">
        <a class="company-logo" href="<?php echo base_url();?>
">Logo</a>

        <div class="sidebar-links">
                <a class="link-blue <?php if (isMenuOn('')||isMenuOn("Resume")) {?>selected<?php }?>" href="<?php echo base_url();?>
Resume"><i class="fa fa-server"></i>Resume</a>
                <a class="link-red <?php if (isMenuOn("Project")) {?>selected<?php }?>" href="<?php echo base_url();?>
Project"><i class="fa fa-keyboard-o"></i>Projects</a>
                <a class="link-yellow <?php if (isMenuOn("Skill")) {?>selected<?php }?>" href="<?php echo base_url();?>
Skill"><i class="fa fa-bar-chart"></i>Skills</a>
                <a class="link-green <?php if (isMenuOn("Job")) {?>selected<?php }?>" href="<?php echo base_url();?>
Job"><i class="fa fa-building-o"></i>Jobs</a>
        </div>
</aside><?php }} ?>
