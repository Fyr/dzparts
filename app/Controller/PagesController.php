<?php
App::uses('AppController', 'Controller');
App::uses('AppModel', 'Model');
App::uses('Page', 'Model');
App::uses('News', 'Model');
App::uses('Product', 'Model');

class PagesController extends AppController {
	public $name = 'Pages';
	public $uses = array('Page', 'News', 'Category', 'Product');
	public $helpers = array('ArticleVars', 'Media.PHMedia', 'Core.PHTime', 'Media');

	public function home() {
		$this->set('isHomePage', true);

		$conditions = array('News.published' => 1);
		/*
		if ($this->aEvents) {
			$conditions['NOT'] = array('News.id' => Hash::extract($this->aEvents, '{n}.News.id'));
		}
		*/
		$aNews = $this->News->find('all', array(
			'conditions' => $conditions,
			'order' => array('News.featured DESC', 'News.sorting ASC', 'News.created DESC'),
			'limit' => 4
		));
		$aNews = array();
		$this->set('aHomePageNews', $aNews);

		$conditions = array('Category.object_type' => 'Category', 'Category.export_bg' => 1);
		$aCategories = $this->Category->find('all', compact('conditions'));

		$cat_ids = Hash::extract($aCategories, '{n}.Category.id');

		$aProducts = $this->Product->find('all', array(
			'conditions' => array('Product.published' => 1, 'Product.cat_id' => $cat_ids),
			'order' => array('Product.featured DESC', 'Product.created DESC'),
			'limit' => 5
		));
		$this->set('aProducts', $aProducts);

		$aArticle = $this->Page->findBySlug('home');
		$this->set('contentArticle', $aArticle);
		
		if (!(isset($aArticle['Seo']) & isset($aArticle['Seo']['title']) && $aArticle['Seo']['title'])) {
			$aArticle['Seo']['title'] = $aArticle['Page']['title'];
		}
		$this->seo = $aArticle['Seo'];
		$this->currMenu = 'home';
		$this->currLink = 'home';
	}
	
	public function show($slug) {
		$aArticle = $this->Page->findBySlug($slug);
		if (!$aArticle) {
			$this->redirect404();
			return;
		}
		$this->set('aArticle', $aArticle);
		
		if (!(isset($aArticle['Seo']) & isset($aArticle['Seo']['title']) && $aArticle['Seo']['title'])) {
			$aArticle['Seo']['title'] = $aArticle['Page']['title'];
		}
		$this->seo = $aArticle['Seo'];
		$this->currMenu = $slug;
	}

	public function nonExist() {
		$this->render('/Errors/error400');
	}
}
