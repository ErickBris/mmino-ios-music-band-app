<?php
class DB_Functions {
	private $db_conx;
    function __construct() {
        include_once ('db_conx.php');
        $this->db_conx = DBC::connect();
    }
    function __destruct() {}
	
    /**
     * Start SERIES ------------------------------------------------------------
     */
    public function getAllArtists() {
	$sql = "Select * From artists";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveArtists() {
	$sql = "Select * From artists Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllArtists($img, $name, $bio, $bio2, $fb, $tt, $web, $visible, $id) {
	$sql = "Update artists Set IMAGE = '$img', ARTIST = '$name', BIO = '$bio', BIO2 = '$bio2', "
                . "FACEBOOK = '$fb', TWITTER = '$tt', WEBSITE = '$web', "
                . "isActive = '$visible' WHERE id = '$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End SERIES --------------------------------------------------------------
     */
    
    /**
     * Start EVENTS ------------------------------------------------------------
     */
    public function getAllEvents() {
	$sql = "Select * From events";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveEvents() {
	$sql = "Select * From events Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllEvents($thumb, $banner, $title, $desc, $sDate, $eDate, $date, $url, $loc, $notes, $signup, $email, $number, $feat, $visible, $id) {
	$sql = "Update events Set THUMBNAIL='$thumb', BANNER='$banner', TITLE='$title', DESCRIPTION='$desc', START_DATE='$sDate', END_DATE='$eDate', DATE='$date', "
                . "URL='$url', LOCATION='$loc', NOTES='$notes', BOOK='$signup', EMAIL='$email', PHONE='$number', FEATURED='$feat', isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End EVENTS --------------------------------------------------------------
     */
    
    /**
     * Start MORE TAB -----------------------------------------------------
     */
    public function getAllMore() {
	$sql = "Select * From more";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveMore() {
	$sql = "Select * From more Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllMore($img, $title, $web, $desc, $visible, $id) {
	$sql = "Update more Set IMAGE='$img', TITLE='$title', WEBSITE='$web', TEXT='$desc', "
                . "isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End MORE TAB -------------------------------------------------------
     */
    
    /**
     * Start VIDEOS -----------------------------------------------------
     */
    public function getAllVideos() {
	$sql = "Select * From videos";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveVideos() {
	$sql = "Select * From videos Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllVideos($thumbnail, $title, $artist, $desc, $video, $year, $visible, $id) {
	$sql = "Update videos Set THUMBNAIL='$thumbnail', TITLE='$title', ARTIST='$artist', "
                . "DES='$desc', VIDEO='$video', YEAR='$year', "
                . "isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End VIDEOS -------------------------------------------------------
     */
    
    /**
     * Start VIDEOS -----------------------------------------------------
     */
    public function getAllSongs() {
	$sql = "Select * From songs";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveSongs() {
	$sql = "Select * From songs Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllSongs($img, $banner, $title, $artist, $feat, $year, $sc, $web, $visible, $id) {
	$sql = "Update songs Set IMAGE='$img', BANNER='$banner', TITLE='$title', ARTIST='$artist', "
                . "FEAT='$feat', YEAR='$year', SOUNDCLOUD='$sc', WEBSITE='$web',"
                . "isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End VIDEOS -------------------------------------------------------
     */
    
    /**
     * Start STREAM --------------------------------------------------------------
     */
    public function getAllStream() {
	$sql = "Select * From stream";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveStream() {
	$sql = "Select * From stream Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllStream($img, $stream, $visible, $id) {
	$sql = "Update stream Set IMAGE='$img', STREAM='$stream', isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    

    /**
     * End STREAM ----------------------------------------------------------------
     */
    
    /**
     * Start WEBPAGES --------------------------------------------------------------
     */
    public function getAllWebpages() {
	$sql = "Select * From webpages";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllWebpages($book, $website, $id) {
	$sql = "Update webpages Set EVENT_BOOK='$book', EVENT_WEBSITE='$website' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End WEBPAGES ----------------------------------------------------------------
     */
    
}

?>