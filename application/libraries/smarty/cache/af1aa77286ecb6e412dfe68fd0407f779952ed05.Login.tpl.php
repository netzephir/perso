<?php /*%%SmartyHeaderCode:1264853e8825aa723e6-93825331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1aa77286ecb6e412dfe68fd0407f779952ed05' => 
    array (
      0 => 'application\\views\\Login.tpl',
      1 => 1407514162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264853e8825aa723e6-93825331',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e8825aae86a8_10111780',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e8825aae86a8_10111780')) {function content_53e8825aae86a8_10111780($_smarty_tpl) {?><div class="container">
	<div class="row">
    <div class="span12">
  		<div class="" id="loginModal">
          <h3>Authentification</h3>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane active in" id="login">
                <form class="form-horizontal" action='connect' method="POST">
                  <fieldset>
                    <div class="control-group">
                      <!-- Username -->
                      <label class="control-label"  for="username">Username</label>
                      <div class="controls">
                        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                      </div>
                    </div>

                    <div class="control-group">
                      <!-- Password-->
                      <label class="control-label" for="password">Password</label>
                      <div class="controls">
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                      </div>
                    </div>
                    <br/>

                    <div class="control-group">
                      <!-- Button -->
                      <div class="controls">
                        <button class="btn btn-success">Login</button>
                      </div>
                    </div>
                  </fieldset>
                </form>        

              <a href="registerMail">Create Account</a>        
              </div>
            </div>    	
          </div>
    </div>
  </div>
</div><?php }} ?>
