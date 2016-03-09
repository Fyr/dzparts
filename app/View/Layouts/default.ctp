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
        'app'
        // 'doc_ready'
    ));
    echo $this->Html->script($scripts);

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');

    if (isset($cat_autoOpen)) {
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cat-nav<?=$cat_autoOpen?> > a').click();
    });
</script>
<?
    }
?>
</head>

<body>

<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="header-banner">BANNER IMAGE</div>
        </div>
        <div class="container header-navbar">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#" class="logo">
                        <img class="img-responsive" src="/img/logo.png" alt="<?=Configure::read('demain.title')?>">
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-5">
                            <form class="header-search hidden-sm" action="#">
                                <label for="headerSearch" class="sr-only"></label>
                                <input type="text" class="form-control" id="headerSearch" placeholder="Enter spere number or its name...">
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


        <div class="breadcrumbs">
            <div class="container">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Home</a>
                        <?=$this->element('icon', array('type' => 'angle-right'))?>
                    </li>
                    <li>Spares</li>
                </ul>
            </div>
        </div>


        <section class="container">
            <h1>catalog</h1>
            <div class="row catalog-items">
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element" href="#">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-1.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element" href="#">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-2.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element" href="#">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-3.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element" href="#">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-4.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element" href="#">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-5.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="catalog-element last" href="javascript:void(0);">
                        <img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-last.jpg" alt="">
				<span class="catalog-element-content">
					<span>All directory partitions
                        <?=$this->element('icon', array('type' => 'angle-double-right'))?>
                    </span>
				</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="download-catalog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <img class="img-responsive download-catalog-banner" src="/img/temp/banner-catalog.jpg" alt="">
                    </div>
                    <div class="col-sm-5 col-md-4 col-lg-3">
                        <a href="#">
                            <figure>
                                <span><img class="img-responsive" src="/img/temp/catalog-preview.jpg" alt=""></span>
                                <figcaption><span>Download <br> catalog</span>
                                    <?=$this->element('icon', array('type' => 'angle-double-right'))?>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <h1>spare parts</h1>
            <div class="row catalog-parts">
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-1.jpg" alt="">
                            <figcaption>Iveco</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-2.jpg" alt="">
                            <figcaption>Volvo</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-3.jpg" alt="">
                            <figcaption>Deutz</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-4.jpg" alt="">
                            <figcaption>Fiat</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-5.jpg" alt="">
                            <figcaption>Renault Trucks</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element last">
                        <img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-last.jpg" alt="">
				<span class="catalog-parts-element-content">
					<span>All directory partitions
                        <?=$this->element('icon', array('type' => 'angle-double-right'))?>
                    </span>
				</span>
                    </a>
                </div>
            </div>
        </section>
        <hr class="hr-section">
        <section class="container">
            <h1>Parts for commercial vehicles</h1>
            <div class="row catalog-parts">
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-1.jpg" alt="">
                            <figcaption>FORD Transit</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-2.jpg" alt="">
                            <figcaption>RENAULT Mastre</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-3.jpg" alt="">
                            <figcaption>PEUGEOT Boxer</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-4.jpg" alt="">
                            <figcaption>IVECO Daily</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-5.jpg" alt="">
                            <figcaption>FIAT Ducato</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-auto/catalog-auto-6.jpg" alt="">
                            <figcaption>MERCEDES Sprinter</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        <hr class="hr-section">
        <section class="container">
            <h1>Parts for autotrucks</h1>
            <div class="row catalog-parts">
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-trucks/catalog-trucks-1.jpg" alt="">
                            <figcaption>DAF</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-trucks/catalog-trucks-2.jpg" alt="">
                            <figcaption>IVECO</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="#" class="catalog-parts-element">
                        <figure>
                            <img class="img-responsive" src="/img/temp/catalog-trucks/catalog-trucks-3.jpg" alt="">
                            <figcaption>MAN</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        <div class="our-certificates">
            <div class="container">
                <h1>Our certificates</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="/img/temp/certificates-one.jpg" alt="">
                            </div>
                            <div class="col-xs-6">
                                <img class="img-responsive" src="/img/temp/certificates-two.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="certificate-banner">
                            <img class="img-responsive" src="/img/temp/banner.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="news">
            <div class="container">
                <h1>Company news and reviews</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="main-news">
                            <div class="main-news-image">
                                <a href="#">
                                    <img class="img-responsive" src="/img/temp/news/news-image-1.jpg" alt="">
                                    <span class="main-news-time">01/16 <span class="day">26</span></span>
                                </a>
                            </div>
                            <div class="main-news-title">
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                    animi assumenda cumque dolore.Adipisci animi assumenda cumque dolore.
                                </a>
                            </div>
                            <div class="main-news-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque illum ipsum
                                    minus nisi quos repellendus voluptas, voluptates! Animi at cum et explicabo illum mollitia
                                    necessitatibus pariatur quasi repellendus ut.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque illum ipsum
                                    minus nisi quos repellendus voluptas, voluptates! Animi at cum et explicabo illum mollitia
                                    necessitatibus pariatur quasi repellendus ut.
                                </p>
                            </div>
                            <div class="main-news-more">
                                <a href="#">All news
                                    <?=$this->element('icon', array('type' => 'angle-double-right'))?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="small-news">
                            <div class="row small-news-item">
                                <div class="col-xs-5 col-sm-6">
                                    <div class="small-news-image">
                                        <a href="#">
                                            <img class="img-responsive" src="/img/temp/news/news-image-2.jpg" alt="">
                                            <div class="small-news-time">
                                                <span>01/16 <span class="day">26</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <a href="#" class="small-news-title dot-ellipsis dot-resize-update">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos
                                        doloremque eius et, exercitationem expedita fugiat in laboriosam minima odio
                                        quisquam recusandae sed sit tempore ut vel voluptatum. Maiores, pariatur.
                                    </a>
                                </div>
                            </div>
                            <div class="row small-news-item">
                                <div class="col-xs-5 col-sm-6">
                                    <div class="small-news-image">
                                        <a href="#">
                                            <img class="img-responsive" src="/img/temp/news/news-image-3.jpg" alt="">
                                            <div class="small-news-time">
                                                <span>01/16 <span class="day">26</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <a href="#" class="small-news-title dot-ellipsis dot-resize-update">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos
                                        doloremque eius et, exercitationem expedita fugiat in laboriosam minima odio
                                        quisquam recusandae sed sit tempore ut vel voluptatum. Maiores, pariatur.
                                    </a>
                                </div>
                            </div>
                            <div class="row small-news-item">
                                <div class="col-xs-5 col-sm-6">
                                    <div class="small-news-image">
                                        <a href="#">
                                            <img class="img-responsive" src="/img/temp/news/news-image-4.jpg" alt="">
                                            <div class="small-news-time">
                                                <span>01/16 <span class="day">26</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <a href="#" class="small-news-title dot-ellipsis dot-resize-update">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos
                                        doloremque eius et, exercitationem expedita fugiat in laboriosam minima odio
                                        quisquam recusandae sed sit tempore ut vel voluptatum. Maiores, pariatur.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="hr-section">
        <div class="partners">
            <div class="container">
                <h1>Our partners</h1>
                <div class="list-unstyled partners-slider">
<?
    foreach($aBrands as $article) {
        $this->ArticleVars->init($article, $url, $title, $teaser, $src, 'noresize');
?>
                        <div class="partners-element">
                            <a href="<?=$url?>" target="_blank"><span><img class="img-responsive grayscale" src="<?=$src?>" alt="<?=$title?>"></span></a>
                        </div>
<?
    }
?>

                </div>
            </div>
        </div>

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
                    <img class="img-responsive" src="/img/footer-left-figure.png" alt="">
                </div>
            </div>
            <div class="col-sm-8 col-lg-6">
                <nav class="footer-nav">
                    <div class="row">
<?
    $aCols = $this->Articlevars->divideColumns($aBottomLinks, 2);
?>
                        <div class="col-xs-6 col-sm-3">
                            <?=$this->element('SiteUI/bottom_links', array('aBottomLinks' => $aCols[0], 'currLink' => 'home'))?>
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
                    <img class="img-responsive" src="/img/footer-right-figure.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
