<?
	$indexUrl = array(
		'controller' => 'Products', 
		'action' => 'index',
		'objectType' => 'Product',
	);
	$title = 'Результаты поиска';
	$breadcrumbs = array();
	$relatedArticle = array();
	if (isset($subcategory)) {
		$title = $subcategory['Subcategory']['title'];
		$breadcrumbs = array(
			__('Home') => '/',
			$this->ObjectType->getTitle('index', 'Product') => $indexUrl,
			$subcategory['Category']['title'] => SiteRouter::url(array('Category' => $subcategory['Category'])),
			$title => ''
		);
		$relatedArticle = $subcategory;
	} elseif (isset($category)) {
		$title = $category['Category']['title'];
		$breadcrumbs = array(
			__('Home') => '/',
			$this->ObjectType->getTitle('index', 'Product') => $indexUrl,
			$title => ''
		);
		$relatedArticle = $category;
	} else {
		$title = $this->ObjectType->getTitle('index', 'Product');
		$breadcrumbs = array(
			__('Home') => '/',
			$this->ObjectType->getTitle('index', 'Product') => ''
		);
	}
	if ($breadcrumbs) {
		echo $this->element('breadcrumbs', compact('breadcrumbs'));
	}
?>

<div class="container container-catalog">
	<?=$this->element('title', compact('title'))?>
	<div class="row">
		<div class="col-sm-9">
<?
	if (!$aArticles) {
?>
			<section class="news">
				<div class="container">
					<div class="main-news">
						<div class="main-news-description">
							<b>Не найдено ни одного продукта</b>
							<p>
								Пож-ста, измените параметры поиска или нажмите
								<a href="<?=Router::url($indexUrl)?>">сюда</a>,
								чтобы просмотреть весь каталог продукции.
							</p>
						</div>
					</div>
				</div>
			</section>
<?
	} else {
?>
			<section>
				<div class="row catalog-parts">

<?
		foreach($aArticles as $article) {
			$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb400x250', $featured);
			$alt = $article['Product']['code'] . ' ' . $article['Product']['title'];
			$brand_id = $article['Product']['brand_id'];
			if (!$src) {
				if (isset($aBrands[$brand_id])) {
					$src = $this->Media->imageUrl($aBrands[$brand_id], 'thumb400x250');
				}
			}
?>
					<div class="col-xs-6 col-sm-4">
						<a href="<?=$url?>" class="catalog-parts-element">
							<figure>
<?
			if ($article['Product']['brand_id'] && isset($aBrands[$brand_id])) {
				if (isset($directSearch) && $directSearch) {
?>
								<small class="brand">
									<?=$article['Category']['title']?>
									<?=$this->element('icon', array('type' => 'angle-right'))?>
									<?=$article['Subcategory']['title']?>
								</small>
<?
				}
			}

			$style = '';
			if (!$src) {
				$src = '/img/default_product100.png';
			}
?>
								<img class="img-responsive" src="<?=$src?>" alt="<?=$title?>"/>
								<figcaption>
									<div class="inner">
									<?=$article['Product']['code']?><br />
									<?=$title?>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>
<?
		}
?>
				</div>
			</section>
			<hr class="hr-section">

<?
	}
	echo $this->element('paginate');

	if ($relatedArticle) {
		/*
?>
			<section class="news">
					<div class="main-news">
						<div class="main-news-description">
							<?=$this->ArticleVars->body($relatedArticle)?>
						</div>
					</div>
			</section>
<?
		*/
	}
?>
		</div>

		<div class="col-sm-3">
			<?=$this->element('sb_categories')?>
		</div>
	</div>
</div>


