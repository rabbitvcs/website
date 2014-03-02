<?php
/**
 * DokuWiki RabbitVCS Template
 *
 * @link   http://rabbitvcs.org
 * @author Bruce van der Kooij <brucevdkooij@gmail.com>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

@include(dirname(__FILE__).'/header.php') ?>

<?php html_msgarea()?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>
    
    <div class="stylehead">
        <div class="bar" id="bar__top">
          <div class="bar-left" id="bar__topleft">
            <?php tpl_button('edit')?>
            <?php tpl_button('history')?>
            <?php tpl_button('subscribe')?>
            <?php tpl_button('subscribens')?>
          </div>
          
          <div class="bar-right" id="bar__topright">
            <?php tpl_button('recent')?>
          </div>

          <div class="clearer"></div>
        </div>
        
    </div>
    
    <?php flush()?>

    <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
    </div>

    <div class="clearer">&nbsp;</div>

    <?php flush()?>
    
    <div class="bar" id="bar__bottom">
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('index')?>
      </div>
      <div class="clearer"></div>
    </div>
    
<?php @include(dirname(__FILE__).'/footer.php') ?>
