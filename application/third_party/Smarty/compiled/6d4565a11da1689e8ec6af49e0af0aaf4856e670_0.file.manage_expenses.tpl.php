<?php /* Smarty version 3.1.27, created on 2017-02-01 19:58:40
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\expenses\manage_expenses.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3151658922fe001aa31_59813837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d4565a11da1689e8ec6af49e0af0aaf4856e670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\expenses\\manage_expenses.tpl',
      1 => 1485975518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3151658922fe001aa31_59813837',
  'variables' => 
  array (
    'expenses' => 0,
    'manage' => 0,
    'expense_types' => 0,
    'expense' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58922fe00a2dc1_93719782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58922fe00a2dc1_93719782')) {
function content_58922fe00a2dc1_93719782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3151658922fe001aa31_59813837';
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
                    <th>Reason</th>
                        <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['expenses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['manage'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['manage']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['manage']->value) {
$_smarty_tpl->tpl_vars['manage']->_loop = true;
$foreach_manage_Sav = $_smarty_tpl->tpl_vars['manage'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['manage']->value->expenses_reason;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['manage']->value->expenses_amount;?>
</td>
                        <td>
                            <a href="<?php echo site_url("expenses/edit_expenses/".((string)$_smarty_tpl->tpl_vars['manage']->value->expenses_id));?>
"
                               class="btn-form-modal btn btn-default"
                               data-url="<?php echo site_url("expenses/edit_type/".((string)$_smarty_tpl->tpl_vars['manage']->value->expenses_id));?>
"

                               >Edit</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['manage'] = $foreach_manage_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">reasons:</label>
                <input type="text" name="expenses_reason" class="form-control" id="manageexpenses_reason">
            </div>
              <div class="form-group">
                <label for="expenses_amount">Amount:</label>
                <input type="text" name="expenses_amount" class="form-control" id="manageexpenses_amount">
            </div>
            <div>
            <label>Select Expenses Type</label>
                <select name="expensestype_id">
                    <option>select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['expense_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['expense'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['expense']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['expense']->value) {
$_smarty_tpl->tpl_vars['expense']->_loop = true;
$foreach_expense_Sav = $_smarty_tpl->tpl_vars['expense'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['expense']->value->expensestype_id;?>
"><?php echo $_smarty_tpl->tpl_vars['expense']->value->expensestype_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['expense'] = $foreach_expense_Sav;
}
?>
                </select>
            </div>
             <div class="form-group">
                <label for="expenses_datetime">Amount:</label>
                <input type="date" name="expenses_datetime" class="form-control" id="expenses_datetime">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>