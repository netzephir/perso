<?php /* Smarty version Smarty-3.1.19, created on 2016-02-25 15:43:01
         compiled from "C:\wamp\www\perso\application\views\templates\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2959056cf12f519e874-14952328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da4ff27ca287c50011c611718d836b712b10740' => 
    array (
      0 => 'C:\\wamp\\www\\perso\\application\\views\\templates\\default.tpl',
      1 => 1456409718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959056cf12f519e874-14952328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'titre' => 0,
    'css' => 0,
    'nom' => 0,
    'content' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cf12f5288ea0_92391481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cf12f5288ea0_92391481')) {function content_56cf12f5288ea0_92391481($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
" />
        <meta property="og:site_name" content="Site web de jonathan" />
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/bootstrap-material-design.min.css" />
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/font-awesome.min.css" />
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/ripples.min.css" />
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/sidebar-left.css" />
        <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/main.css" />
        <?php  $_smarty_tpl->tpl_vars['nom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nom']->key => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->_loop = true;
?>
            <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
.css" />
        <?php } ?>

        <script type="text/javascript" src="<?php echo base_url();?>
cfgen"></script>    
    <body>
        <div class="page-container" role="main"> 


            <div class="container-fluid">
                <div class="row">
                    <?php echo $_smarty_tpl->getSubTemplate ('partials/sideBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <div class="col-xs-12 col-md-10 col-lg-11 col-lg-offset-1 col-md-offset-2 col-xs-offset-0 main-header" >
                        <div class="col-xs-8">
                            <h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
                        </div>
                        <div class="col-xs-4 text-right">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-10 col-lg-11 col-lg-offset-1 col-md-offset-2 col-xs-offset-0">
                        <div class="row">
                            <div id="main-container" class="col-xs-12 main-content" style="padding-top: 20px;">
                                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo assets_url();?>
js/vendor/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo assets_url();?>
js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo assets_url();?>
js/vendor/material.min.js"></script>
        <script type="text/javascript" src="<?php echo assets_url();?>
js/vendor/ripples.min.js"></script>
        <script type="text/javascript" src="<?php echo assets_url();?>
js/main.js"></script>
        <?php  $_smarty_tpl->tpl_vars['nom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nom']->key => $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->_loop = true;
?>
            <script type="text/javascript" src="<?php echo assets_url();?>
js/<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
.js"></script>
        <?php } ?>
    </body>
</html>

<?php }} ?>
