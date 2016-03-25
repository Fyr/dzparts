<div class="panel-group catalog-panel" id="catalog-accordion" aria-multiselectable="true">
<?
	foreach($aCategories as $id => $article) {
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb400x250');
?>

	<div class="panel panel-default">
		<div class="panel-heading" id="cat_<?=$id?>">
			<h4 class="panel-title">
<?
		if (isset($aSubcategories[$id]) && $aSubcategories[$id]) {
?>
				<span href="#collapse_cat_<?=$id?>" class="panel-arrow" data-toggle="collapse" data-parent="#catalog-accordion" aria-expanded="false" aria-controls="collapse_cat_<?=$id?>">
					<?= $this->element('icon', array('type' => 'angle-right')) ?>
					<?= $this->element('icon', array('type' => 'angle-down')) ?>
				</span>
<?
		}
?>
				<a href="<?=$url?>"><?=$title?></a>
			</h4>
		</div>
		<div class="panel-collapse collapse <?=(isset($aSubcategories[$id]) && $aSubcategories[$id]) ? 'in' : ''?>" aria-labelledby="cat_<?=$id?>">
			<div class="panel-body">
<?
		if (isset($aSubcategories[$id]) && $aSubcategories[$id]) {
?>
				<ul>
<?
			foreach($aSubcategories[$id] as $subcat_id => $_article) {
				$objectType = $this->ArticleVars->getObjectType($_article);
				$url = SiteRouter::url($_article);
				$active = (isset($currSubcat) && $currSubcat == $_article[$objectType]['id']) ? 'class="active"' : '';
				$title = ($objectType == 'SectionArticle') ? $_article[$objectType]['section'] : $_article[$objectType]['title'];
?>
			<li><a href="<?=$url?>"><?=$title?></a></li>
<?
			}
?>
				</ul>
<?
		}
?>

			</div>
		</div>
	</div>
<?
	}
?>
</div>