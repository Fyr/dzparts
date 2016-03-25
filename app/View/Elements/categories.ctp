<section class="container">
	<?=$this->element('title', compact('title'))?>
	<div class="row catalog-parts">
<?
	foreach($aCategories as $id => $article) {
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb400x250');
		/*
		if (!$src) {
			$src = '/img/default_product100.png';
		}
		*/
?>
		<div class="col-xs-6 col-sm-4">
			<a href="<?=$url?>" class="catalog-parts-element">
				<figure>
<?
	if ($src) {
		echo $this->Html->image($src, array('class' => 'img-responsive', 'alt' => $title));
	} else {
		echo $this->Html->image('/img/default_product100.png', array('style' => 'height: 250px', 'alt' => $title));
	}
?>

					<figcaption><?=$title?></figcaption>
				</figure>
			</a>
		</div>
<?
	}
?>
		<!--div class="col-xs-6 col-sm-4">
			<a href="#" class="catalog-parts-element last">
				<img class="img-responsive" src="/img/temp/catalog-spare-part/catalog-spare-part-last.jpg" alt="">
				<span class="catalog-parts-element-content">
					<span>All directory partitions
						<?=$this->element('icon', array('type' => 'angle-double-right'))?>
					</span>
				</span>
			</a>
		</div-->
	</div>
</section>
<hr class="hr-section">
