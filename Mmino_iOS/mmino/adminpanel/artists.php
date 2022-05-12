<?php
	include_once ('includes/db_functions.php');
	$db = new DB_Functions();
	//Update All Episodes
	$message = "Nothing updated";
	if(isset($_POST["update_artist"])){
            if(isset($_POST["artist"])){
                $img = $_POST["image"];
                $name = $_POST["artist"];
                $bio = $_POST["bio"];
                $bio2 = $_POST["bio2"];
                $fb = $_POST["fb"];
                $tt = $_POST["tt"];
                $web = $_POST["web"];
                $id = $_POST["id"];
                if(isset($_POST["visible"])){
                    $updateArtists = $db->updateAllArtists($img, $name, $bio, $bio2, $fb, $tt, $web, 'y', $id);
                    $message = $name." - Updated successfully";
                }else{
                    $updateArtists = $db->updateAllArtists($img, $name, $bio, $bio2, $fb, $tt, $web, 'n', $id);
                    $message = $name." - Updated successfully";
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
        	<h1><a href="index.php">Mmino - Band App <span>v1.0</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">Mmino - Admin Panel</div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
            	<li class="active"><a href="index.php"><span class="icon-home"></span> Welcome</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-eye-open"></span> Artists</a>
                	<ul style="display: block;">
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
                	<ul style="display: none;">
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
                <li class="active">All Artists</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>All Artists</h1> <span>Here you update your artists</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Update Artists <span style="float:right"><?php echo $message; ?></span></h4>
                <div class="widgetcontent">
                    <ol class="devices">
                    <?php
                        $allArtists = $db->getAllArtists();
                        while ($row = mysqli_fetch_array($allArtists)) {
                            ?>
                        <li>
                            <form id="<?php echo $row["id"] ?>" class="stdform" name="" method="post">
                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                <p>
                                    <label>Artist Image Url</label>
                                    <span class="field"><input type="text" name="image" class="input-xxlarge" value="<?php echo $row["IMAGE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Artist Name</label>
                                    <span class="field"><input type="text" name="artist" class="input-large" value="<?php echo $row["ARTIST"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Artist Bio</label>
                                    <span class="field">
                                    	<textarea id="autoResizeTA" name="bio" cols="80" rows="5" class="span5" style="resize: vertical">
											<?php echo $row["BIO"] ?>
                                        </textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>Artist Bio 2</label>
                                    <span class="field">
                                    	<textarea id="autoResizeTA" name="bio2" cols="80" rows="5" class="span5" style="resize: vertical">
											<?php echo $row["BIO2"] ?>
                                        </textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>Artist Facebook Page</label>
                                    <span class="field"><input type="text" name="fb" class="input-xxlarge" value="<?php echo $row["FACEBOOK"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Artist Twitter Page</label>
                                    <span class="field"><input type="text" name="tt" class="input-xxlarge" value="<?php echo $row["TWITTER"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Artist Website</label>
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
                                    <button name="update_artist" class="btn btn-primary">Update Artist</button>
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