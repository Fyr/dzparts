<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, '200x');
?>
<section class="news">
    <div class="main-news">
        <div class="main-news-title">
            <?=$this->Html->link($title, $url)?>
        </div>
        <div class="main-news-description">
<?
    if ($src) {
?>
            <img src="<?=$src?>" alt="<?=$title?>" style="float: right; margin: 0 0 10px 10px" />
<?
    }
?>
            <?=$this->element('dealer_details', array('article' => $article))?>
            <div class="clear"></div>
            <?=$teaser?>
        </div>
    </div>
</section>