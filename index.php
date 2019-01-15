<?php
	session_start();

	$_SESSION['connected'] = false;
	$_SESSION['message'] = "";

	include 'security.php';

	$query =
		'SELECT
			id,
			titre,
			sous_titre,
			corps,
			date_publication
		FROM article
		INNER JOIN authors
		ORDER BY date_creation DESC';

	$result = $pdo -> query($query);
	$posts = $result -> fetchAll();

	$template = 'index';
	include 'home.phtml';
