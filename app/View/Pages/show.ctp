<?
	$breadcrumbs = array(__('Home') => '/', $aArticle['Page']['title'] => '');
	echo $this->element('breadcrumbs', compact('breadcrumbs'));
?>
<section class="news">
	<div class="container">
		<?= $this->element('title', array('title' => $aArticle['Page']['title'])) ?>
		<div class="main-news">
			<div class="main-news-description">
				<?=$this->ArticleVars->body($aArticle)?>
			</div>
		</div>
	</div>
</section>