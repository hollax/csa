<?php /* Smarty version 3.1.27, created on 2017-02-01 12:50:59
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\sessions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159405891cba3df72f0_35642614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b7a6929ed9e1d7ded35e1dfe9308ac39dd76ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\sessions.tpl',
      1 => 1485949857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159405891cba3df72f0_35642614',
  'variables' => 
  array (
    'sessions' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891cba3e95f73_83432092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891cba3e95f73_83432092')) {
function content_5891cba3e95f73_83432092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159405891cba3df72f0_35642614';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['sessions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['session'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['session']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->_loop = true;
$foreach_session_Sav = $_smarty_tpl->tpl_vars['session'];
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['session']->value->session_name;?>
  
                        </td>
                        <td>
                            <a href="<?php echo site_url("school/edit_session/".((string)$_smarty_tpl->tpl_vars['session']->value->session_id));?>
">Edit</a>
                            <a href="<?php echo site_url("school/delete_session/".((string)$_smarty_tpl->tpl_vars['session']->value->session_id));?>
">Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
}
?>
            </tbody>
        </table>
    </div>

    <div id="add" class="tab-pane fade">
        <div class="col-xs-12 col-sm-9">
            <form class="form-horizontal" role="form" method="POST">
            
                <div class="form-group">
                    <label for="session_name" class="col-sm-2 control-label">
                     Session Name:   
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="session_name" placeholder="Enter Session Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="user_id" class="col-sm-2 control-label">
                     User ID:   
                    </label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" 
                        name="user_id" placeholder="Enter User ID">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                        Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</div>
<?php }
}
?>