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
	if ($aArticles) {
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
<?
	} else {
?>
		<div class="row" style="padding: 30px 0;">
			<?=__('No articles in this section')?>
		</div>
<?
	}
?>
	</div>
</section>