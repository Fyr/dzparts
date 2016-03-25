<?
	if ($breadcrumbs) {
?>
		<div class="breadcrumbs">
			<div class="container">
				<ul class="list-unstyled">
<?
		foreach($breadcrumbs as $title => $url) {
			if ($url) {
				$title = $this->Html->link($title, $url).'&nbsp;'.$this->element('icon', array('type' => 'angle-right')).'&nbsp;';
				echo $this->Html->tag('li', $title, array('escape' => false));
			} else {
				echo $this->Html->tag('li', $title);
			}
		}
?>
				</ul>
			</div>
		</div>
<?
	}
?>