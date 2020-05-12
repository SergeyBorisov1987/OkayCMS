<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-12 21:59:04
         compiled from "/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3080205615ebaf1f83059c4-00774117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40acab63db651eafdf85a415ce4a07f37f5f034' => 
    array (
      0 => '/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/blog.tpl',
      1 => 1589308921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3080205615ebaf1f83059c4-00774117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_post' => 0,
    'page' => 0,
    'posts' => 0,
    'lang_link' => 0,
    'post' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ebaf1f839af85_80725695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebaf1f839af85_80725695')) {function content_5ebaf1f839af85_80725695($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['type_post']->value=="blog") {?>
    <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/news", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php }?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></h1>


<div class="blog clearfix">
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <div class="blog_item no_padding col-sm-6 col-lg-4 col-xl-3">

            
            <a class="blog_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['type_post']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                    <img class="blog_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,360,360,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php }?>
            </a>

            <div class="blog_content">
                
                <div class="h5">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['type_post']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </div>

                
                <div class="blog_date"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date,"d cFR Y, cD");?>
</span></div>

                
                <?php if ($_smarty_tpl->tpl_vars['post']->value->annotation) {?>
                    <div class="blog_annotation">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>

                    </div>
                <?php }?>        
            </div>
        </div>
    <?php } ?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
