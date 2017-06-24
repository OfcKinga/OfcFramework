<?php

if( ACTIVE_APP == App::get() )
{
	return array(
		'count' => 5804
	);
} else
{
	return array(
		'count' => 'Количество новостей доступно только в контролере новостей.'
	);
}