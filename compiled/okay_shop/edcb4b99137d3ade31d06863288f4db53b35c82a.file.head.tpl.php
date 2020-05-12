<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-12 21:44:08
         compiled from "/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295676475ebaee78f17266-94020492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edcb4b99137d3ade31d06863288f4db53b35c82a' => 
    array (
      0 => '/home/pro/www/workSpace/OkayCMS/design/okay_shop/html/head.tpl',
      1 => 1589308921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295676475ebaee78f17266-94020492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_filter_pattern' => 0,
    'meta_title' => 0,
    'filter_meta' => 0,
    'lang' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'config' => 0,
    'total_pages_num' => 0,
    'current_page_num' => 0,
    'rel_prev_next' => 0,
    'lang_link' => 0,
    'canonical' => 0,
    'product' => 0,
    'settings' => 0,
    'currency' => 0,
    'post' => 0,
    'sort_canonical' => 0,
    'languages' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ebaee79161b11_93940494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebaee79161b11_93940494')) {function content_5ebaee79161b11_93940494($_smarty_tpl) {?>
    <script>
        ut_tracker = {
            start: function(name) {
                performance.mark(name + ':start');
            },
            end: function(name) {
                performance.mark(name + ':end');
                performance.measure(name, name + ':start', name + ':end');
                console.log(name + ' duration: ' + performance.getEntriesByName(name)[0].duration);
            }
        }
    </script>



<title><?php if ($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->title) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if ($_GET['page']&&$_GET['page']!='all') {?><?php echo $_smarty_tpl->tpl_vars['lang']->value->meta_page;?>
 <?php echo $_GET['page'];?>
<?php }?></title>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php if ((!empty($_smarty_tpl->tpl_vars['meta_description']->value)||!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->description)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->keywords)||!empty($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->meta_description)||!empty($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->keywords))&&!$_GET['page']) {?>

    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->meta_description) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->description, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />

    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->keywords) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView') {?>
    <?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
        <meta name="robots" content="noindex,nofollow">
    <?php } elseif ($_GET['page']||$_GET['sort']) {?>
        <meta name="robots" content="noindex,follow">
    <?php } elseif (isset($_GET['keyword'])) {?>
        <meta name="robots" content="noindex,follow">
    <?php } else { ?>
        <meta name="robots" content="index,follow">
    <?php }?>
<?php } elseif ($_GET['module']=="RegisterView"||$_GET['module']=="LoginView"||$_GET['module']=="UserView"||$_GET['module']=="CartView") {?>
    <meta name="robots" content="noindex,follow">
<?php } elseif ($_GET['module']=="OrderView") {?>
    <meta name="robots" content="noindex,nofollow">
<?php } else { ?>
    <meta name="robots" content="index,follow">
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="generator" content="OkayCMS <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
">


<?php if ($_GET['module']=="BlogView"&&$_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>2),$_smarty_tpl);?>
"/>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
"/>
    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>



<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:description" content='<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
    <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
    <link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
    
    <meta name="twitter:card" content="product"/>
    <meta name="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
    <meta name="twitter:site" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
    <meta name="twitter:data1" content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
">
    <meta name="twitter:label1" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,null,false);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:data2" content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->meta_organization;?>
">
    <meta name="twitter:label2" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['module']->value=='BlogView'&&$_smarty_tpl->tpl_vars['post']->value) {?>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
        <link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
    <?php } else { ?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    <?php }?>
    <meta property="og:description" content='<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
<?php } else { ?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
">
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php } elseif ($_GET['sort']) {?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sort_canonical']->value;?>
">
<?php }?>


<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['l']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['l']->index++;
 $_smarty_tpl->tpl_vars['l']->first = $_smarty_tpl->tpl_vars['l']->index === 0;
?>
    <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
        <link rel="alternate" hreflang="<?php if ($_smarty_tpl->tpl_vars['l']->first) {?>x-default<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['l']->value->href_lang;?>
<?php }?>" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
    <?php }?>
<?php } ?>

<script>ut_tracker.start('render:recaptcha');</script>
<?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
    <script type="text/javascript">
        var onloadCallback = function() {
            mysitekey = "<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha;?>
";
            if($('#recaptcha1').length>0){
                grecaptcha.render('recaptcha1', {
                    'sitekey' : mysitekey
                });
            } 
            if($('#recaptcha2').length>0){
                grecaptcha.render('recaptcha2', {
                    'sitekey' : mysitekey
                });
            }
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>
    <script>
        function onSubmit(token) {
            document.getElementById("captcha_id").submit();
        }
        function onSubmitCallback(token) {
            document.getElementById("fn_callback").submit();
        }
        function onSubmitBlog(token) {
            document.getElementById("fn_blog_comment").submit();
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<?php }?>
<script>ut_tracker.end('render:recaptcha');</script>
<?php }} ?>
