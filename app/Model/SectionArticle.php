<?php
App::uses('AppModel', 'Model');
App::uses('Article', 'Article.Model');
App::uses('Seo', 'Seo.Model');
App::uses('Section', 'Model');

class SectionArticle extends Article {
	protected $objectType = 'SectionArticle';
/*
	public $belongsTo = array(
		'Section' => array(
			'foreignKey' => 'cat_id'
		),
		'SectionCategory' => array(
			'className' => 'SectionArticle',
			'foreignKey' => 'subcat_id'
		)
	);
*/
	var $hasOne = array(
		'Media' => array(
			'class' => 'Media.Media',
			'foreignKey' => 'object_id',
			'conditions' => array('Media.media_type' => 'image', 'Media.object_type' => 'SectionArticle', 'Media.main' => 1),
			'dependent' => true
		),
		'Seo' => array(
			'className' => 'Seo.Seo',
			'foreignKey' => 'object_id',
			'conditions' => array('Seo.object_type' => 'Page'),
			'dependent' => true
		)
	);

	public function getOptions() {
		$conditions = array('SectionArticle.subcat_id' => 0);
		$order = 'SectionArticle.sorting';
		return $this->find('all', compact('conditions', 'order'));
	}
}
