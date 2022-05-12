<?php
	include_once ('../gc_functions.php');
	$gc = new GC_Functions();
	
	$weGET = $_GET['get'];
	
	if($weGET == "artists"){
		$showArtists = $gc->jsonAllArtists();
	}else
	if($weGET == "events"){
		$showEvents = $gc->jsonAllEvents();
	}else
	if($weGET == "more"){
		$showPlan = $gc->jsonAllMore();
	}else
	if($weGET == "videos"){
		$showPlan = $gc->jsonAllVideos();
	}else
	if($weGET == "songs"){
		$showPlan = $gc->jsonAllSongs();
	}else
	if($weGET == "stream"){
		$showPlan = $gc->jsonAllStream();
	}else
	if($weGET == "webpages"){
		$showPlan = $gc->jsonAllWebpages();
	}
?>