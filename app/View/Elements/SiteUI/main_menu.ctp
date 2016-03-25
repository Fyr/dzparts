<ul class="list-unstyled hidden-xs hidden-sm">
<?
	foreach($aMenu as $id => $menu) {
		$url = (isset($menu['submenu'])) ? 'javascript: void(0)' : $this->Html->url($menu['href']);
?>
	<li class="<?=(($id == $currMenu) ? 'active' : '')?>">
		<a href="<?=$url?>"><span><?=$menu['title']?></span> </a>
<?
		if (isset($menu['submenu'])) {
?>
		<ul class="navigation-dropdown">
<?
			foreach($menu['submenu'] as $i => $submenu) {
				echo $this->Html->tag('li',
					$this->Html->link($submenu['title'], $submenu['href'])
				);
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
