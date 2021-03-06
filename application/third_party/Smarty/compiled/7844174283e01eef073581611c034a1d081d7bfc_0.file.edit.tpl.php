<?php /* Smarty version 3.1.27, created on 2016-12-29 11:52:36
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\featured\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30323586593b4db4464_87223151%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7844174283e01eef073581611c034a1d081d7bfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\featured\\views\\admin\\edit.tpl',
      1 => 1474552722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30323586593b4db4464_87223151',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'form' => 0,
    'items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_586593b4ebeec2_89977686',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_586593b4ebeec2_89977686')) {
function content_586593b4ebeec2_89977686 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '30323586593b4db4464_87223151';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo smarty_function_loop_errors(array('errors'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
    <?php echo smarty_function_action_title(array('title'=>'Edit Featred Items'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  
        <button class="btn btn-lg btn-default text-capitalize" data-toggle="collapse" data-parent="#accordion" href="#item-add-block"> 
            <span class="glyphicon glyphicon-plus"></span>
            <?php echo lang('verb_add');?>
 
        </button>
        <button type="button" class="btn btn-lg btn-info" data-toggle="popover" 
                data-placement="right"
                title="Drag and Drop" 
                data-content="Drag Items to reposition, then click save after arrangment">
            Tip!
        </button>
        <div class="pull-right"> 
            <button data-loading-text="saving..."  class="btn btn-success btn-lg " 
                        id="save-featured-btn"> <span class="glyphicon glyphicon-ok"></span>
                    <?php echo lang('verb_save');?>
 

            </button>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <div class="col-md-12">
        
        <div class="col-lg-8 collapse" id="item-add-block" >
            <?php echo nyra_form_open('',false,array('id'=>'featured-item-add-form'));?>

                <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

                <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

            <?php echo form_close();?>

        </div>
    </div>

        <div class="col-md-8">
            <ol class="sortable" id="featured-list">
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                    <li id="item_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" data-id_int="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">
                        <div>
                            <span class="pull-left item-handle glyphicon glyphicon-move" ></span> 
                            <span id='featured-item-<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
-title'><?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
</span>
                            <a data-toggle="collapse" data-parent="#accordion" href="#featured-item-data-<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="href-edit-item ">
                                <span class="glyphicon glyphicon-edit "></span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="#" class="featured-item-action-btn"  data-item-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"  
                               data-action="delete" ><span  class=" glyphicon glyphicon-trash  pull-right "></span>
                            </a>
                            <div id="featured-item-data-<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="collapse">
                                
                                <?php echo nyra_form_open('',true,array('class'=>'form-vertical','id'=>"item-edit-form-".((string)$_smarty_tpl->tpl_vars['i']->value->id)));?>

                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['i']->value,array('input_id_prefix'=>"input-featured-".((string)$_smarty_tpl->tpl_vars['i']->value->id)."-"));?>

                                    <button data-action="update"  data-loading-text="Updating" class="btn btn-default featured-item-action-btn" 
                                            id='btn-update-<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
' data-item-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Update
                                    </button>
                                    <span id="item-update-status"></span>
                                <?php echo form_close();?>

                            </div>
                        </div>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
            </ol>
        </div>
    </div>
    <?php echo smarty_function_theme_plugin(array('p'=>'jquery-nested_sortable'),$_smarty_tpl);?>
   
    <?php echo smarty_function_theme_plugin(array('p'=>'font-awesome'),$_smarty_tpl);?>
   
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo '<script'; ?>
 >
            
            $( document).ready( function(){
                 $('[data-toggle="popover"]').popover();
                // sortable 
                $( '.sortable' ).nestedSortable( {
                    items: 'li',
                    nested : false ,
                    maxLevels: 1 ,
                }); 
                
                $('#save-featured-btn').click( function( event , item ) {
                    var url = '<?php echo admin_url('featured/update_item_position_ajax',false);?>
' ; ;
                    var data = { 
                        'data' : $('ol.sortable').nestedSortable('serialize') 
                    };
                    Nyra.request.post( url , data  , null ,  '<?php echo lang('alert_update_success');?>
' );
                });
                    
                
                $('.featured-item-action-btn').click(  function( e ){
                    e.preventDefault() ;
                    var btn = $(this);
                    var action = btn.attr( 'data-action' ) ;
                    var btnHtml =  btn.html();
                    
                    if ( action == 'update'){
                        btn.removeClass('btn-success');
                    }
                    if ( action == 'delete' && ! confirm( "<?php echo lang('action_confirm_delete');?>
") ){
                        return ;
                    }
                    var itemId = btn.attr( 'data-item-id' ) ;
                    
                    if ( itemId ){
                        // get form data for current item
                        
                        var form = $('#item-edit-form-' + itemId );
                        Nyra.util.updateEditorData();
                        var data = form.serialize();
                        data += '&action=' + action + '&id=' + itemId ;
                        var options = { 
                                'done'  : function( response ) {
                                            
                                        if( response.success ){
                                            if( action === 'update' ){
                                                btn.removeClass('btn-warning');
                                                btn.addClass('btn-success');
                                                
                                                btn.html(btnHtml) ;
                                                /// get lates value
                                                var title = $('#input-featured-' + itemId +'-title' ).val();
                                                $('#featured-item-' + itemId+'-title' ).html( title );
                                                Nyra.util.alert(  response.success_message || '<?php echo lang('record_update_success_#','featured');?>
' );
                                            }
                                            if( action == 'delete'){
                                                 $('#item_' + itemId ).remove();
                                                 Nyra.util.alert(  '<?php echo lang('record_delete_success_#','featured');?>
' );
                                             }
                                        }
                                } , // done
                                'onError' : function( response){
                                         Nyra.util.alert( response.error_message);
                                         btn.removeClass('btn-success');
                                         btn.addClass('btn-warning').html(btnHtml);
                                }

                        }; // options
                        Nyra.request.post( '<?php echo admin_url('featured/update_ajax');?>
' , data  , options );
                    }// if item
                }); //click
                    //
            });// ready
        <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<?php }
}
?>