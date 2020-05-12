<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-12 21:59:04
         compiled from "/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13113943675ebaf1f8461014-19197007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8de691ea8d9d4f474ebe478505ae72a5b67e2be' => 
    array (
      0 => '/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/breadcrumb.tpl',
      1 => 1589308921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13113943675ebaf1f8461014-19197007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'lang_link' => 0,
    'config' => 0,
    'lang' => 0,
    'level' => 0,
    'category' => 0,
    'keyword' => 0,
    'cat' => 0,
    'brand' => 0,
    'page' => 0,
    'product' => 0,
    'order' => 0,
    'type_post' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ebaf1f8594841_35249349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebaf1f8594841_35249349')) {function content_5ebaf1f8594841_35249349($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(1, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['module']->value!="MainView") {?>
    <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">

        
        <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>" data-language="breadcrumb_home">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
        </li>

        
        <?php if ($_GET['module']=="ProductsView") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                        </li>
                    <?php }?>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands" data-language="breadcrumb_brands">
                        <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                    </a>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" data-language="breadcrumb_search">
                    <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_search;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>

        
        <?php } elseif ($_GET['module']=="BrandsView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="ProductView") {?>
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                    </li>
                <?php }?>
            <?php } ?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="FeedbackView"||$_GET['module']=="PageView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="CartView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name" data-language="breadcrumb_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="OrderView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumb_order">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="LoginView"&&$_GET['action']=="password_remind") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumbs_password_remind">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="LoginView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumbs_enter">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="RegisterView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumbs_registration">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="UserView") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumbs_user">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

        
        <?php } elseif ($_GET['module']=="BlogView") {?>
            <?php if ($_GET['url']) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['type_post']->value;?>
" data-language="breadcrumbs_blog">
                        <span itemprop="name">
                            <?php if ($_smarty_tpl->tpl_vars['type_post']->value=="news") {?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                            <?php }?>
                        </span>
                    </a>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" data-language="breadcrumbs_blog">
                    <span itemprop="name">
                    <?php if ($_smarty_tpl->tpl_vars['type_post']->value=="news") {?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                    <?php }?>
                    </span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>
        <?php } elseif ($_GET['module']=='ComparisonView') {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumb_comparison">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>
        <?php } elseif ($_GET['module']=='WishlistView') {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" data-language="breadcrumb_wishlist">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>
        <?php }?>
    </ol>
<?php }?>
<?php }} ?>
