<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<?
    echo $this->Html->charset();
    echo $this->Html->meta('icon');
    echo $this->element('Seo.seo_info', array('data' => $seo));
    echo $this->Html->css(array('bootstrap', 'style', 'fonts', 'extra', 'jquery.fancybox'));

    $scripts = array(
        'vendor/jquery/jquery-1.10.2.min',
        'vendor/jquery/jquery-ui-1.10.3.custom.min',
    );
    if ($disableCopy) {
        $scripts[] = 'vendor/jquery/jquery.select.js';
    }
    $scripts = array_merge($scripts, array(
        'vendor/jquery/jquery.mousewheel.min',
        'vendor/jquery/jquery.kinetic.min',
        'vendor/jquery/jquery.smoothdivscroll-1.3-min',
        'vendor/jquery/jquery.nivo.slider.pack',
        'vendor/jquery/jquery.fancybox.pack',
        'vendor/jquery/jquery.dotdotdot',
        'vendor/jquery/jquery.accordion',
        'app',
        'doc_ready'
    ));
    echo $this->Html->script($scripts);

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
?>
</head>

<body>

<div class="wrapper">

    <header class="header">
        <div class="container header-navbar">
            <div class="row">
                <div class="col-sm-3">
                    <a href="/" class="logo">
                        <img class="img-responsive" src="/img/logo.png" alt="<?=Configure::read('demain.title')?>">
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-5">
                            <form class="header-search hidden-sm" action="<?=Router::url(array('controller' => 'products', 'action' => 'index'))?>" method="get">
                                <label for="headerSearch" class="sr-only"></label>
                                <input type="text" class="form-control" id="headerSearch" name="q" value="<?=$this->request->query('q')?>" placeholder="Enter spere number or its name...">
                                <button type="submit">
                                    <?=$this->element('icon', array('type' => 'search'))?>
                                </button>
                            </form>
                        </div>
                        <div class="col-sm-7">
                            <div class="header-phones">
                                <?=$this->element('icon', array('type' => 'mobile'))?>
                                <div>
                                    <a href="tel:<?=str_replace(array('(', ')', ' ', '-'), '', Configure::read('Settings.phone1'))?>"><?=Configure::read('Settings.phone1')?></a> <br>
                                    <a href="tel:<?=str_replace(array('(', ')', ' ', '-'), '', Configure::read('Settings.phone2'))?>"><?=Configure::read('Settings.phone2')?></a>
                                </div>
                            </div>
                            <div class="header-contact">
                                <a href="mailto:<?=Configure::read('Settings.email')?>">
                                    <?=$this->element('icon', array('type' => 'envelope'))?>
                                    <?=Configure::read('Settings.email')?>
                                </a>
                                <a href="skype:<?=Configure::read('Settings.skype')?>">
                                    <?=$this->element('icon', array('type' => 'skype'))?>
                                    <?=Configure::read('Settings.skype')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="navigation-button visible-xs visible-sm">
                    <span></span>
                    <div class="navigation-button-title">Меню</div>
                </div>
                <?=$this->element('SiteUI/main_menu')?>
            </div>
        </nav>
    </header>

    <main class="content">

        <?=$this->fetch('content')?>

    </main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-lg-3">
                <a href="#" class="logo-footer">
                    <img class="img-responsive" src="/img/logo-footer.png" alt="<?=Configure::read('demain.title')?>">
                </a>
                <div class="footer-left hidden-xs">
                    <img class="img-responsive" src="/img/footer-left-figure.png" alt="" />
                </div>
            </div>
            <div class="col-sm-8 col-lg-6">
                <nav class="footer-nav">
                    <div class="row">
<?
    $aCols = $this->Articlevars->divideColumns($aBottomLinks, 2);
?>
                        <div class="col-xs-6 col-sm-3">
                            <?=$this->element('SiteUI/bottom_links', array('aBottomLinks' => $aCols[0], 'currLink' => $currLink))?>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <?=$this->element('SiteUI/bottom_links', array('aBottomLinks' => $aCols[1], 'currLink' => $currLink))?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="footer-phones">
                                <?=$this->element('icon', array('type' => 'mobile'))?>
                                <div>
                                    <a href="tel:<?=str_replace(array('(', ')', ' ', '-'), '', Configure::read('Settings.phone1'))?>"><?=Configure::read('Settings.phone1')?></a> <br>
                                    <a href="tel:<?=str_replace(array('(', ')', ' ', '-'), '', Configure::read('Settings.phone2'))?>"><?=Configure::read('Settings.phone2')?></a>
                                </div>
                            </div>
                            <div class="footer-contact">
                                <a href="mailto:<?=Configure::read('Settings.email')?>">
                                    <?=$this->element('icon', array('type' => 'envelope'))?>
                                    <?=Configure::read('Settings.email')?>
                                </a>
                                <a href="skype:<?=Configure::read('Settings.skype')?>">
                                    <?=$this->element('icon', array('type' => 'skype'))?>
                                    <?=Configure::read('Settings.skype')?>
                                </a>
                            </div>
                            <div class="footer-address">
                                <?=$this->element('icon', array('type' => 'map-marker'))?>
                                <?=nl2br(Configure::read('Settings.address'))?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-3">
                <div class="footer-right">
                    <img class="img-responsive" src="/img/footer-right-figure.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
