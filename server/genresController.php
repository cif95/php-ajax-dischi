<?php 
	include __DIR__ . "/data.php";

	header('Content-Type: application/json');

	$queryGenre = $_GET['genre'];
	$filteredAlbums = [];

	if ( isset($queryGenre) ) {
		foreach($albums as $album) {
			if ( strtolower($album['genre']) === strtolower($queryGenre) ) {
				array_push($filteredAlbums, $album ) ;
			}
		}
		echo json_encode(
			[
				'results' => $filteredAlbums,
				'lenght' => count($filteredAlbums),
			],
		);
	}
; ?>