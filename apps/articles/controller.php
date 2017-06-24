<?php

class Articles_Controller extends Controller {

	public function main($args)
	{
		$articles = array();

		render('main', array(
			'articles_list' => $articles_list));
	}

	public function read($args)
	{
		$articles_object = $args['1'];

		render('read', array(
			'articles_object' => $articles_object,
			'id' => $args['1']));
	}

}