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
		for($i = 0; $i < count($aArticles); $i+= 2) {
			$article = $aArticles[$i];
?>
		<div class="row">
			<div class="col-sm-6">
				<?=$this->element('article', compact('article'))?>
			</div>
			<div class="col-sm-6">
<?
			if (isset($aArticles[$i + 1])) {
				$article = $aArticles[$i + 1];
				echo $this->element('article', compact('article'));
			}
?>
			</div>
		</div>
<?
		}
?>
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