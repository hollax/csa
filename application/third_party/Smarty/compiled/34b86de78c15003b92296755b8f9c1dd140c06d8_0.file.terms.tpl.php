<?php /* Smarty version 3.1.27, created on 2017-02-01 10:51:43
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\terms.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:251835891afaf200a00_90699683%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b86de78c15003b92296755b8f9c1dd140c06d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\terms.tpl',
      1 => 1485942699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251835891afaf200a00_90699683',
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891afaf285471_69575716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891afaf285471_69575716')) {
function content_5891afaf285471_69575716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '251835891afaf200a00_90699683';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <h3>HOME</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['terms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['term'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['term']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
$foreach_term_Sav = $_smarty_tpl->tpl_vars['term'];
?>
            <p><?php echo $_smarty_tpl->tpl_vars['term']->value->term_name;?>
  
                <a href="<?php echo site_url("school/edit_term/".((string)$_smarty_tpl->tpl_vars['term']->value->term_id));?>
">Edit</a>
                <a href="<?php echo site_url("school/delete_term/".((string)$_smarty_tpl->tpl_vars['term']->value->term_id));?>
">Delete</a>

            </p>
        <?php
$_smarty_tpl->tpl_vars['term'] = $foreach_term_Sav;
}
?>
    </div>

    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="session_id" class="col-sm-2 control-label">
                    Session ID:   
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="session_id" placeholder="Enter Session ID">
                </div>
            </div>

            <div class="form-group">
                <label for="term_name" class="col-sm-2 control-label">
                    Term Name:   
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" 
                           name="term_name" placeholder="Enter Term Name">
                </div>
            </div>

            <div class="form-group">
                <label for="default" class="col-sm-2 control-label">
                    Default:   
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" 
                           name="def" placeholder="Default">
                </div>
            </div>

            <div class="form-group">
                <label for="create_id" class="col-sm-2 control-label">
                    Create ID:   
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="create_id" placeholder="Create ID">
                </div>
            </div>

            <div class="form-group">
                <label for="term_start" class="col-sm-2 control-label">
                    Term Start:   
                </label>
                <div class="col-sm-10 date">
                    <div class="input-group input-append">
                        <input type="date" class="form-control" id = date name="date">
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="term_end" class="col-sm-2 control-label">
                    Term End:   
                </label>
                <div class="col-sm-10 date">
                    <div class="input-group input-append">
                        <input type="date" class="form-control" id = date name="date">
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="user_id" class="col-sm-2 control-label">
                    User ID:   
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="user_id" placeholder="User ID">
                </div>
            </div>

            <div class="form-group">
                <label for="term_order" class="col-sm-2 control-label">
                    Term Order:   
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="term_order" placeholder="Term Order">
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

</div><?php }
}
?>