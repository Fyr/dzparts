<ul class="list-unstyled">
<?
	foreach($aBottomLinks as $id => $item) {
		$class = (strtolower($id) == strtolower($currLink)) ? 'active' : '';
?>
	<li>
		<a class="<?=$class?>" href="<?=$this->Html->url($item['href'])?>">
			<?=$this->element('icon', array('type' => 'angle-double-left'))?>
			<?=$item['title']?>
		</a>
	</li>
<?
	}
?>
</ul>