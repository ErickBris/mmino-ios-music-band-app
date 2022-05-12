<?php
	include_once ('includes/db_functions.php');
	$db = new DB_Functions();
	//Update All Episodes
	$message = "Nothing updated";
	if(isset($_POST["update_events"])){
            if(isset($_POST["title"])){
                $thumb = $_POST["thumbnail"];
                $banner = $_POST["banner"];
                $title = $_POST["title"];
                $desc = $_POST["desc"];
                $sDate = $_POST["sdate"];
                $eDate = $_POST["edate"];
                $date = $_POST["date"];
                $url = $_POST["url"];
                $loc = $_POST["loc"];
                $notes = $_POST["notes"];
                $signup = $_POST["book"];
                $email = $_POST["email"];
                $number = $_POST["number"];
                $id = $_POST["id"];
                
                if(isset($_POST["visible"]) && !isset($_POST["featured"])){
                    $updateEvents = $db->updateAllEvents($thumb, $banner, $title, $desc, $sDate, $eDate, $date, $url, $loc, $notes, $signup, $email, $number, 'n', 'y', $id);
                    $message = $title." - Updated successfully";
                }else
                if(isset($_POST["featured"])){
                    $updateEvents = $db->updateAllEvents($thumb, $banner, $title, $desc, $sDate, $eDate, $date, $url, $loc, $notes, $signup, $email, $number, 'y', 'y', $id);
                    $message = $title." - Updated successfully";
                }  else {
                    $updateEvents = $db->updateAllEvents($thumb, $banner, $title, $desc, $sDate, $eDate, $date, $url, $loc, $notes, $signup, $email, $number, 'n', 'n', $id);
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
        	<h1><a href="index.php">Mmino - Band App <span>v1.0</span></a></h1>
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
                	<ul style="display: block;">
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
                <li class="active">All Events</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>All Events</h1> <span>Here you update your artists</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Update Events <span style="float:right"><?php echo $message; ?></span></h4>
                <div class="widgetcontent">
                    <ol class="devices">
                    <?php
                        $allEvents = $db->getAllEvents();
                        while ($row = mysqli_fetch_array($allEvents)) {
                            ?>
                        <li>
                            <form id="<?php echo $row["id"] ?>" class="stdform" name="" method="post">
                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                <p>
                                    <label>Event Thumbnail Url</label>
                                    <span class="field"><input type="text" name="thumbnail" class="input-xxlarge" value="<?php echo $row["THUMBNAIL"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Event Banner Url</label>
                                    <span class="field"><input type="text" name="banner" class="input-xxlarge" value="<?php echo $row["BANNER"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Event Title</label>
                                    <span class="field"><input type="text" name="title" class="input-large" value="<?php echo $row["TITLE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Event Description</label>
                                    <span class="field">
                                    	<textarea id="autoResizeTA" name="desc" cols="80" rows="5" class="span5" style="resize: vertical">
                                            <?php echo $row["DESCRIPTION"] ?>
                                        </textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>Event Start Date</label>
                                    <span class="field"><input type="text" name="sdate" class="input-large" value="<?php echo $row["START_DATE"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event End Date</label>
                                    <span class="field"><input type="text" name="edate" class="input-large" value="<?php echo $row["END_DATE"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event Date</label>
                                    <span class="field"><input type="text" name="date" class="input-large" value="<?php echo $row["DATE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Event Website Url</label>
                                    <span class="field"><input type="text" name="url" class="input-xxlarge" value="<?php echo $row["URL"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event Location</label>
                                    <span class="field"><input type="text" name="loc" class="input-xxlarge" value="<?php echo $row["LOCATION"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event Notes</label>
                                    <span class="field"><input type="text" name="notes" class="input-xxlarge" value="<?php echo $row["NOTES"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Event Ticket Url</label>
                                    <span class="field"><input type="text" name="book" class="input-xxlarge" value="<?php echo $row["BOOK"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event Email</label>
                                    <span class="field"><input type="text" name="email" class="input-large" value="<?php echo $row["EMAIL"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Event Phone</label>
                                    <span class="field"><input type="text" name="number" class="input-large" value="<?php echo $row["PHONE"] ?>" /></span>
                                </p>
                                <p>
                                    <span class="formwrapper">
                                    	<?php
                                            if($row["FEATURED"] == 'y'){
                                        ?>
                                                <input type="checkbox" name="featured" checked /> Make Featured Event<br />
                                        <?php	
                                            }else{
                                        ?>
                                                <input type="checkbox" name="featured" /> Make Featured Event<br />
                                        <?php	
                                            }
                                        ?>
                                    </span>
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
                                    <button name="update_events" class="btn btn-primary">Update Event</button>
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