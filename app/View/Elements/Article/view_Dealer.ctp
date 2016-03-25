<?
	$this->ArticleVars->init($article, $url, $title, $teaser, $src, '200x');
?>
<section class="news">
	<div class="container">
		<?=$this->element('title', array('title' => $article[$objectType]['title'])) ?>
		<div class="main-news">
			<div class="main-news-description">
<?
	if ($src) {
?>
				<img src="<?=$src?>" alt="<?=$title?>" style="float: right; margin: 0 0 10px 10px" />
<?
	}
?>
				<?=$this->element('dealer_details', array('article' => $article))?>
				<?= $this->ArticleVars->body($article) ?>
			</div>
		</div>
	</div>
</section>