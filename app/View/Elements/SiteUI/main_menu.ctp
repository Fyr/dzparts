<ul class="list-unstyled hidden-xs hidden-sm">
<?
	foreach($aMenu as $id => $menu) {
		$href = (isset($menu['submenu'])) ? 'javascript: void(0)' : $menu['href'];
?>
	<li class="<?=(($id == $currMenu) ? 'active' : '')?>">
		<a href="<?=$href?>"><span><?=$menu['title']?></span> </a>
<?
		if (isset($menu['submenu'])) {
?>
		<ul class="navigation-dropdown">
<?
			foreach($menu['submenu'] as $i => $submenu) {
?>
			<li><a href="<?=$submenu['href']?>"><?=$submenu['title']?></a></li>
<?
			}
?>
		</ul>
<?
		}
?>
	</li>
<?
	}
?>
</ul>
