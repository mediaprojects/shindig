<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Tag extends Sprig
{
	protected $_title_key = 'tag';
	protected $_table = 'tags';
	
	protected function _init()
	{
		$this->_fields += array(
			'id' => new Sprig_Field_Auto(array(
				'primary'=>TRUE,
			)),
			'tag' => new Sprig_Field_Char(array(
				'label' => __('Tag'),
			)),
			'slug' => new Sprig_Field_Char(array(
				'label' => __('Slug'),
				'edit' => FALSE,
			)),
			'posts' => new Sprig_Field_ManyToMany(array(
				'label' => __('Posts'),
				'model' => 'Shindig_Post',
			)),
		);
	}
}