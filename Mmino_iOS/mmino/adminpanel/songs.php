<?php
	include_once ('includes/db_functions.php');
	$db = new DB_Functions();
	//Update All Episodes
	$message = "Nothing updated";
	if(isset($_POST["update_songs"])){
            if(isset($_POST["title"])){
                $img = $_POST["image"];
                $banner = $_POST["banner"];
                $title = $_POST["title"];
                $artist = $_POST["artist"];
                $feat = $_POST["feat"];
                $year = $_POST["year"];
                $sc = $_POST["sc"];
                $web = $_POST["web"];
                $id = $_POST["id"];
                if(isset($_POST["visible"])){
                    $updateVideos = $db->updateAllSongs($img, $banner, $title, $artist, $feat, $year, $sc, $web, 'y', $id);
                    $message = $title." - Updated successfully";
                }else{
                    $updateVideos = $db->updateAllSongs($img, $banner, $title, $artist, $feat, $year, $sc, $web, 'n', $id);
                    $message = $title." - Updated successfully";
                }
            }
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Mmino Admin Panel</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" type="text/css" />
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1><a href="index.php">Mmino - Band App  - c_o_d_e_l_i_s_t_._c_c <span>v1.0</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">Mmino - Admin Panel</div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
            	<li class="active"><a href="index.php"><span class="icon-home"></span> Welcome</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-eye-open"></span> Artists</a>
                	<ul style="display: none;">
                    	<li><a href="artists.php">All Artists</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-calendar"></span> Events</a>
                	<ul style="display: none;">
                        <li><a href="events.php">All Events</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> More</a>
                	<ul style="display: none;">
                        <li><a href="more.php">More Tab</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Songs</a>
                	<ul style="display: block;">
                        <li><a href="songs.php">All Songs</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Videos</a>
                	<ul style="display: none;">
                        <li><a href="videos.php">All Videos</a></li>
                    </ul>
                </li>
                <li><a href="stream.php"><span class="iconfa-exclamation-sign"></span> Stream</a>
                </li>
                <li><a href="webpages.php"><span class="iconfa-align-justify"></span> Featured Event</a>
                </li>
             </ul>
        </div><!--leftmenu-->
        
    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="skins">
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="index.php">Welcome</a> <span class="divider">/</span></li>
                <li class="active">Videos</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Videos</h1> <span>Here you update your videos</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Update Videos <span style="float:right"><?php echo $message; ?></span></h4>
                <div class="widgetcontent">
                    <ol class="devices">
                    <?php
                        $allSongs = $db->getAllSongs();
                        while ($row = mysqli_fetch_array($allSongs)) {
                            ?>
                        <li>
                            <form id="<?php echo $row["id"] ?>" class="stdform" name="" method="post">
                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                <p>
                                    <label>Song Image Url</label>
                                    <span class="field"><input type="text" name="image" class="input-xxlarge" value="<?php echo $row["IMAGE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Song Banner url</label>
                                    <span class="field"><input type="text" name="banner" class="input-xxlarge" value="<?php echo $row["BANNER"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Song Title</label>
                                    <span class="field"><input type="text" name="title" class="input-large" value="<?php echo $row["TITLE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Song Artist</label>
                                    <span class="field"><input type="text" name="artist" class="input-large" value="<?php echo $row["ARTIST"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Contributing Artists</label>
                                    <span class="field"><input type="text" name="feat" class="input-small" value="<?php echo $row["FEAT"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Song Year</label>
                                    <span class="field"><input type="text" name="year" class="input-small" value="<?php echo $row["YEAR"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Soundcloud Url</label>
                                    <span class="field"><input type="text" name="sc" class="input-small" value="<?php echo $row["SOUNDCLOUD"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Website</label>
                                    <span class="field"><input type="text" name="web" class="input-large" value="<?php echo $row["WEBSITE"] ?>" /></span>
                                </p>
                                <p>
                                    <span class="formwrapper">
                                    	<?php
                                            if($row["isActive"] == 'y'){
                                        ?>
                                                <input type="checkbox" name="visible" checked /> Make visible On App<br />
                                        <?php	
                                            }else{
                                        ?>
                                                <input type="checkbox" name="visible" /> Make visible On App<br />
                                        <?php	
                                            }
                                        ?>
                                    </span>
                                </p>              
                                <p class="stdformbutton">
                                    <button name="update_songs" class="btn btn-primary">Update Songs</button>
                                    <!--button type="reset" class="btn">Reset Button</button-->
                                </p>
                            </form>
                            <hr>
                            <br>
                        </li>
                    <?php }?> 
                    </ol>
                    </div><!--widgetcontent-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">Mmino Admin Template v1.0</div>
    	<div class="footerright">&copy; 2016 - Mmino</div>
    </div><!--footer-->

    
</div><!--mainwrapper-->
</body>
</html>