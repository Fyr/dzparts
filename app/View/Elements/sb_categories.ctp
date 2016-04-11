<div class="panel-group catalog-panel" id="catalog-accordion" aria-multiselectable="true">
<?
	foreach($aCategories[0] as $id => $article) {
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb400x250');
		$lCatOpen = (isset($aSubcategories[$id]) && $aSubcategories[$id]) && (isset($category) && $category) && $id == $category['Category']['id'];
?>

	<div class="panel panel-default">
		<div class="panel-heading" id="cat_<?=$id?>">
			<h4 class="panel-title">
<?
		if (isset($aSubcategories[$id]) && $aSubcategories[$id]) {
?>
				<span href="#collapse_cat_<?=$id?>" class="panel-arrow <?=($lCatOpen) ? '' : 'collapsed'?>" data-toggle="collapse" data-parent="#catalog-accordion" aria-expanded="false" aria-controls="collapse_cat_<?=$id?>">
					<?= $this->element('icon', array('type' => 'angle-right')) ?>
					<?= $this->element('icon', array('type' => 'angle-down')) ?>
				</span>
<?
		}
?>
				<a href="<?=$url?>"><?=$title?></a>
			</h4>
		</div>
		<div id="collapse_cat_<?=$id?>" class="panel-collapse collapse <?=($lCatOpen) ? 'in' : ''?>" aria-labelledby="cat_<?=$id?>">
			<div class="panel-body">
<?
		if (isset($aSubcategories[$id]) && $aSubcategories[$id]) {
?>
				<ul>
<?
			foreach($aSubcategories[$id] as $subcat_id => $_article) {
				$objectType = $this->ArticleVars->getObjectType($_article);
				$url = SiteRouter::url($_article);
				$title = ($objectType == 'SectionArticle') ? $_article[$objectType]['section'] : $_article[$objectType]['title'];
				$active = isset($subcategory) && $subcategory['Subcategory']['id'] == $_article[$objectType]['id'] ? 'class="active"' : '';
?>
			<li><a <?=$active?> href="<?=$url?>"><?=$title?></a></li>
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