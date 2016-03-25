<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, '600x');
    $objectType = $this->ArticleVars->getObjectType($article);
    if ($objectType == 'Dealer') {
        echo $this->element('Article/index_Dealer', compact('article'));
    } else {
?>
<div class="main-news">
<?
        if ($src) {
?>
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
<?
    }
?>
    <div class="main-news-title">
<?
        if (!$src) {
            echo $this->Html->tag('small', date('d.m.Y', strtotime($article[$objectType]['created']))).'<br/>';
        }
?>
        <a href="<?=$url?>">
            <?=$title?>
        </a>
    </div>
    <div class="main-news-description">
        <p><?=$teaser?></p>
    </div>
</div>
<?
    }
?>