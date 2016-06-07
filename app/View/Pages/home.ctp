<section class="container">
	<?=$this->element('title', array('title' => __('Catalog')))?>
	<div class="row catalog-parts">
<?
	foreach($aProducts as $article) {
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb400x250', $featured);
		$title = $article['Product']['code'].' '.$article['Product']['title'];
		$brand_id = $article['Product']['brand_id'];
		if (!$src) {
			if (isset($aBrands[$brand_id])) {
				$src = $this->Media->imageUrl($aBrands[$brand_id], 'noresize');
			}
		}
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
					<figcaption>
						<?=$article['Product']['code']?><br />
						<?=$article['Product']['title']?>
					</figcaption>
				</figure>
			</a>
		</div>
<?
	}
?>
		<div class="col-xs-6 col-sm-4">
			<a class="catalog-element last" href="<?=$this->Html->url(array('controller' => 'Products', 'action' => 'index', 'objectType' => 'Product'))?>">
				<img class="img-responsive" src="/img/temp/catalog-elements/catalog-images-last.jpg" alt="">
				<span class="catalog-element-content">
					<span>
						<?=__('All products')?>
						<?=$this->element('icon', array('type' => 'angle-double-right'))?>
                    </span>
				</span>
			</a>
		</div>
	</div>
</section>
<hr class="hr-section">
<!--section class="download-catalog">
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
</section-->
<?
	if (Configure::read('Settings.sectionizer')) {
		foreach($aSections2 as $section_id => $title) {
			echo $this->element('categories', array(
				'title' => $title,
				'aCategories' => $aCategories2[$section_id],
				'aSubcategories' => $aSubcategories2
			));
		}
	}
?>
<!--div class="our-certificates">
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
</div-->
<?
	if ($aHomePageNews) {
?>
<section class="news">
	<div class="container">
		<?=$this->element('title', array('title' => __('News of our company')))?>
<?
		$article = array_shift($aHomePageNews);
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, '600x');
?>
		<div class="row">
			<div class="col-sm-6">
				<?=$this->element('article', compact('article'))?>
				<div class="main-news">
					<div class="main-news-more">
						<a href="<?=$this->Html->url(array('controller' => 'Articles', 'action' => 'index', 'objectType' => 'News'))?>"> <?=__('All news')?>
							<?=$this->element('icon', array('type' => 'angle-double-right'))?>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="small-news">
<?
		foreach($aHomePageNews as $article) {
			$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb300x200');
?>
					<div class="row small-news-item">
						<div class="col-xs-5 col-sm-6">
							<div class="small-news-image">
								<a href="<?=$url?>">
<?
			if ($src) {
?>
									<img class="img-responsive" src="<?=$src?>" alt="<?=$title?>" />
<?
			}
?>
									<div class="small-news-time">
										<?=$this->ArticleVars->date($article['News']['created'])?>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-7 col-sm-6">
							<a href="<?=$url?>" class="small-news-title dot-ellipsis dot-resize-update"><?=$teaser?></a>
						</div>
					</div>
<?
		}
?>
				</div>
			</div>
		</div>
	</div>
</section>
<?
	}
?>
<!--
<?=$this->element('title', array('title' => $contentArticle['Page']['title']))?>
<div class="block main article clearfix">
	<?=$this->ArticleVars->body($contentArticle)?>
</div>
-->