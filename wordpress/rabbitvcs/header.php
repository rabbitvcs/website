<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="http://rabbitvcs.org/style.css" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page">
            <div id="page-head">
                <div id="page-logo">
                    <h1><a href="http://rabbitvcs.org/">RabbitVCS</a></h1>
                </div>
                
                <div id="page-locationbar">
                    <ul>
                        <li id="link-home"><a href="http://rabbitvcs.org/">Home</a></li>
                        <li id="link-download"><a href="http://wiki.rabbitvcs.org/wiki/download">Download</a></li>
                        <li id="link-about"><a href="http://wiki.rabbitvcs.org/wiki/about">About</a></li>
                        <li id="link-blog"><a href="http://blog.rabbitvcs.org/">Blog</a></li>
                        <li id="link-contribute"><a href="http://wiki.rabbitvcs.org/wiki/contribute">Contribute</a></li>
                        <li id="link-support"><a href="http://wiki.rabbitvcs.org/wiki/support">Support</a></li>
                        <li id="link-wiki"><a href="http://wiki.rabbitvcs.org/wiki">Wiki</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="page-content">
            
