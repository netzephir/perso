<?php /* Smarty version Smarty-3.1.19, created on 2015-05-23 11:43:27
         compiled from "/var/www/html/perso/application/views/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2604912755604bbf2edaa9-37090957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd3adcd2d0fb8a36ce598a00ea25bc576496857' => 
    array (
      0 => '/var/www/html/perso/application/views/templates/default.tpl',
      1 => 1432374159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2604912755604bbf2edaa9-37090957',
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
  'unifunc' => 'content_55604bbf3184a1_49179054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55604bbf3184a1_49179054')) {function content_55604bbf3184a1_49179054($_smarty_tpl) {?><!DOCTYPE html>
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
css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/material-fullpalette.min.css" />
    <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/ripples.min.css" />
    <link rel="stylesheet" media="screen" href="<?php echo assets_url();?>
css/vendor/roboto.min.css" />
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
            <header class="header-mobile visible-xs visible-sm visible-lg">
                
            </header>
          <div class="col-sm-3 col-md-3 col-lg-1 hidden-xs hidden-sm">
              <?php echo $_smarty_tpl->getSubTemplate ('partials/sideBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 ">
            <div class="row">
              <div id="main-container" class="col-xs-12 main-content" style="padding-top: 20px;">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

              </div>
            </div>
            <div class="row">
              
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
