<?php
App::uses('AppHelper', 'View/Helper');
App::uses('SiteRouter', 'Lib/Routing');
class ArticleVarsHelper extends AppHelper {
	public $helpers = array('Media');

	public function init($article, &$url, &$title, &$teaser = '', &$src = '', $size = 'noresize', &$featured = false, &$id = '') {
		$objectType = $this->getObjectType($article);
		$id = $article[$objectType]['id'];
		
		$url = SiteRouter::url($article);
		
		$title = $article[$objectType]['title'];
		$field = (Configure::read('domain.zone') == 'ru' && in_array($objectType, array('Brand', 'Category', 'Subcategory'))) ? 'teaser_ru' : 'teaser';
		$teaser = nl2br($article[$objectType][$field]);
		$src = $this->Media->imageUrl($article, $size);
		$featured = $article[$objectType]['featured'];
	}

	public function body($article) {
		$objectType = $this->getObjectType($article);
		$field = (Configure::read('domain.zone') == 'ru' && in_array($objectType, array('Brand', 'Category', 'Subcategory'))) ? 'body_ru' : 'body';
		return $article[$this->getObjectType($article)][$field];
	}

	public function divideColumns($items, $cols) {
		$aCols = array();
		for($i = 0; $i < $cols; $i++) {
			$aCols[$i] = array();
		}
		$col = 0;
		$count = 0;
		$total = ceil(count($items) / $cols) ;
		$i = 0;
		foreach($items as $key => $item) {
			$aCols[$col][$key] = $item;
			$count++;
			$i++;
			if ($count >= $total && $i < count($items)) {
				$col++;
				$total = ceil((count($items) - $i) / ($cols - $col));
				$count = 0;
			}
		}
		return $aCols;
	}

	public function date($date) {
		$date = strtotime($date);
		return '<span>'.date('m/Y', $date).' <span class="day">'.date('d', $date).'</span></span>';
	}
}
