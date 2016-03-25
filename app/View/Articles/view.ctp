<?
	if ($objectType == 'SectionArticle') {

		if (isset($currSubcat)) {
			$breadcrumbs = array(
				__('Home') => '/',
				$category['SectionArticle']['title'] => SiteRouter::url($category),
				$article['SectionArticle']['title'] => ''
			);
		} else {
			$breadcrumbs = array(
				__('Home') => '/',
				$category['SectionArticle']['title'] => '',
			);
			//$this->ObjectType->getTitle('view', $objectType) => ''
		}
	} else {
		$breadcrumbs = array(
			__('Home') => '/',
			$this->ObjectType->getTitle('index', $objectType) => array('controller' => 'Articles', 'action' => 'index', 'objectType' => $objectType),
			$this->ObjectType->getTitle('view', $objectType) => ''
		);
	}
	echo $this->element('breadcrumbs', array('breadcrumbs' => $breadcrumbs));
	if ($objectType == 'Dealer') {
		echo $this->element('/Article/view_Dealer', compact('article'));
	} else {
?>

<section class="news">
	<div class="container">
		<?= $this->element('title', array('title' => $article[$objectType]['title'])) ?>
		<div class="main-news">
			<div class="main-news-description">
				<?= $this->ArticleVars->body($article) ?>
			</div>
		</div>
	</div>
</section>

<?
	}
?>