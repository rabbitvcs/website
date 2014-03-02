<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
        <title><?php echo strip_tags($conf['title'])?> » <?php tpl_pagetitle()?></title>
        <?php tpl_metaheaders()?>
        <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />
        <link rel="stylesheet" href="http://rabbitvcs.org/style.css" type="text/css" media="screen" />
    </head>
    <body>
        <div id="page">
            <div id="page-head">
                <div id="page-logo">
                    <h1>
                        <a href="http://rabbitvcs.org/"><?php echo strip_tags($conf['title']); ?></a>
                    </h1>
                </div>
                
                <div id="page-profilebar">
                    <?php tpl_button('admin')?>
                    <?php tpl_button('profile')?>
                    <?php tpl_button('login')?>
                </div>
                
                <div id="page-locationbar" class="wiki">
                    <ul>
                        <li id="link-home"><a href="http://rabbitvcs.org/">Home</a></li>
                        <li id="link-download"><?php tpl_link(wl('download'), 'Download'); ?></li>
                        <li id="link-about"><?php tpl_link(wl('about'), 'About'); ?></li>
                        <li id="link-blog"><a href="http://blog.rabbitvcs.org/">Blog</a></li>
                        <li id="link-contribute"><?php tpl_link(wl('contribute'), 'Contribute'); ?></li>
                        <li id="link-support"><?php tpl_link(wl('support'), 'Support'); ?></li>
                        <li id="link-wiki"><a href="http://wiki.rabbitvcs.org/wiki">Wiki</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="page-content" class="dokuwiki">
