<?php
class GC_Functions {
	function __construct() {}
	function __destruct() {}
	
	public function jsonAllArtists(){
		include_once ('db_functions.php');
		$db = new DB_Functions();
		$artists = $db->getActiveArtists();
		$emparray = array();
		while($row =mysqli_fetch_assoc($artists))
		{
			$emparray[] = $row;
		}
		echo json_encode($emparray);
	}
	
	public function jsonAllEvents(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $events = $db->getActiveEvents();
            $emparray = array();
            while($row =mysqli_fetch_assoc($events))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllMore(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $more = $db->getActiveMore();
            $emparray = array();
            while($row =mysqli_fetch_assoc($more))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllVideos(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $videos = $db->getActiveVideos();
            $emparray = array();
            while($row =mysqli_fetch_assoc($videos))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllSongs(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $songs = $db->getActiveSongs();
            $emparray = array();
            while($row =mysqli_fetch_assoc($songs))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllStream(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $stream = $db->getAllStream();
            $emparray = array();
            while($row =mysqli_fetch_assoc($stream))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllWebpages(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $wallpapers = $db->getAllWebpages();
            $emparray = array();
            while($row =mysqli_fetch_assoc($wallpapers))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
}
?>