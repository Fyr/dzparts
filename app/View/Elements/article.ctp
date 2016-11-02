<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb600x300');
    $objectType = $this->ArticleVars->getObjectType($article);
    if ($objectType == 'Dealer') {
        echo $this->element('Article/index_Dealer', compact('article'));
    } else {
        if (!$src) {
            $src = '/img/logo3.png';
        }
?>
<div class="main-news">
    <div class="main-news-image">
        <a href="<?=$url?>">
            <img class="img-responsive" src="<?=$src?>" alt="<?=$title?>" />
            <div class="small-news">
                <div class="small-news-time">
                    <?=$this->ArticleVars->date($article[$objectType]['created'])?>
                </div>
            </div>
        </a>
    </div>
    <div class="main-news-title">
        <a href="<?=$url?>"><?=$title?></a>
    </div>
    <div class="main-news-description">
        <p><?=$teaser?></p>
    </div>
</div>
<?
    }
?>