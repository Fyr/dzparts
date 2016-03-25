<?
	if ($this->Paginator->numbers()) {
		$this->Paginator->options(array('url' => array(
			'objectType' => $this->request->param('objectType'),
			'category' => $this->request->param('category'),
			'subcategory' => $this->request->param('subcategory')
		)));
		
		// $this->Paginator->options(array('url' => $options));
?>
<div class="pagination">
		<?=__('Pages')?>: <?=$this->Paginator->numbers(array('separator' => ' '))?>
</div>
<?
	}
?>