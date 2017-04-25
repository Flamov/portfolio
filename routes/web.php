<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/photography[/{album}]', function ($album = 'portfolio') {

	// Key the album ID from the URL query key
	$target_album = app('db')->table('albums')
		->where('key', '=', $album)
		->value('id');

	if ($target_album !== null) {

		$result = app('db')->table('mapping')
			->join('albums', 'mapping.album_id', '=', 'albums.id')
			->join('photos', 'mapping.photo_id', '=', 'photos.id')
			->where('mapping.album_id', '=', $target_album)
			->get();

		if (count($result) === 0) {
			return 'No photos found';
		}
		else {
			return $result;
		}

	}
	else {
		return 'No album found';
	}

    return view('welcome', [
    	'photos' => $photos
    ]);

});
