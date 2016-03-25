<?
	$title = $this->ObjectType->getTitle('index', $objectType);
	$breadcrumbs = array(
		'Home' => '/',
		$title => ''
	);
	echo $this->element('breadcrumbs', compact('breadcrumbs'));
?>
<section class="news">
	<div class="container">
<?
	echo $this->element('title', compact('title'));
	$aCols = $this->ArticleVars->divideColumns($aArticles, 2);
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
		<?=$this->element('paginate')?>
	</div>
</section>