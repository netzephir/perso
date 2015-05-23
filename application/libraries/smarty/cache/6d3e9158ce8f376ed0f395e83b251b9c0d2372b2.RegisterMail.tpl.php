<?php /*%%SmartyHeaderCode:319253e882ea329ef9-78927532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3e9158ce8f376ed0f395e83b251b9c0d2372b2' => 
    array (
      0 => 'application\\views\\RegisterMail.tpl',
      1 => 1407515291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319253e882ea329ef9-78927532',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e882ea480545_47390943',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e882ea480545_47390943')) {function content_53e882ea480545_47390943($_smarty_tpl) {?><div class="container">
  <div class="row">
    <div class="span12">
      <div class="" id="registerModal">
        <h3>Register using e-mail address</h3>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane active in" id="register">
            <form class="form-horizontal" action='connect' method="POST">
              <fieldset>
                <div class="control-group">
                  <!-- Adresse mail -->
                  <label class="control-label"  for="email">E-mail</label>
                  <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                  </div>
                </div>
              </fieldset>
            </form>    
            <a href="registerMail">Register</a>        
          </div>
        </div>      
      </div>
    </div>
  </div>
</div><?php }} ?>
