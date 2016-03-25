<?
	$objectType = $this->ArticleVars->getObjectType($aArticle);
	if ($objectType == 'Page') {
		$breadcrumbs = array(__('Home') => '/', __('Repair') => '');
	} else {
		$breadcrumbs = array(
			__('Home') => '/',
			__('Repair') => $this->Html->url(array('controller' => 'Repair', 'action' => 'index')),
			$aArticle[$objectType]['title'] => ''
		);
	}
	echo $this->element('breadcrumbs', compact('breadcrumbs'));
?>
	<section class="news">
		<div class="container">
			<?=$this->element('title', array('title' => $aArticle[$objectType]['title']))?>
			<div class="main-news">
				<div class="main-news-description">
					<?=$this->ArticleVars->body($aArticle)?>
				</div>
			</div>
		</div>
	</section>
<?
/*
	foreach($articles as $article) {
			$this->ArticleVars->init($article, $url, $title, $teaser, $src, '150x', $featured, $id);
?>
	<div class="block clearfix">
<?
		if ($src) {
?>
		<a href="<?=$url?>"><img src="<?=$src?>" alt="<?=$title?>" class="thumb"/></a>
<?
		}
?>
		<a href="<?=$url?>" class="title"><?=$title?></a>
		<div class="description"><?=$teaser?></div>
		<div class="more">
			<?=$this->element('more', compact('url'))?>
		</div>
	</div>
<?
	}
*/
?>

<section class="news">
	<div class="container">
<?
	$aCols = $this->ArticleVars->divideColumns($articles, 2);
?>
		<div class="row">
			<div class="col-sm-6">
<?
	foreach($aCols[0] as $article) {
		echo $this->element('article', compact('article'));
	}
?>
			</div>
			<div class="col-sm-6">
<?
	foreach($aCols[1] as $article) {
		echo $this->element('article', compact('article'));
	}
?>
			</div>
		</div>
	</div>
</section>