angular.module('app.controllers', [])

.controller('songListCtrl', function($scope, SongsService) {
    "use strict";
  	SongsService.getSongImages().then(function(response){
  		$scope.songs = response.data;
  	});
})

.controller('songCtrl', function($scope, $stateParams, $cordovaSocialSharing, $timeout, $cordovaFileTransfer, SongsService) {
  "use strict";
  var fileTransfer = new FileTransfer();
  SongsService.getSongs($stateParams.id).then(function(res){
    for(var i = 0; i < res.data.length; i++){
      if($stateParams.id < 100){
        $scope.banner = res.data[i].BANNER;
        $scope.songTitle = res.data[i].TITLE;
        $scope.artist = res.data[i].ARTIST;
        $scope.soundcloud = res.data[i].SOUNDCLOUD;
        $scope.feat = res.data[i].FEAT;
        $scope.album = res.data[i].ALBUM;
        $scope.year = res.data[i].YEAR;
        /*$scope.shareFacebook = function() {
            $cordovaSocialSharing
            .shareViaFacebook(res.data[i].TITLE, res.data[i].IMAGE, "") ;
        };
        $scope.shareTwitter = function() {
            $cordovaSocialSharing
            .shareViaTwitter(res.data[i].TITLE, res.data[i].IMAGE, "") ;
        };*/
        $scope.shareAll = function() {
             $cordovaSocialSharing
             .share(res.data[i].TITLE, res.data[i].ARTIST, res.data[i].IMAGE, "") ;
         };
          $scope.download = function(){
            var url = res.data[i].DOWNLOAD;
            var filename = url.split("/").pop();
            alert(filename);
            var targetPath = cordova.file.externalRootDirectory + filename;
            var trustHosts = true
            var options = {};
            alert(cordova.file.externalRootDirectory);
            $cordovaFileTransfer.download(url, targetPath, options, trustHosts)
              .then(function(result) {
                // Success!
                alert(JSON.stringify(result));
              }, function(error) {
                // Error
                alert(JSON.stringify(error));
              }, function (progress) {
                $timeout(function () {
                  $scope.downloadProgress = (progress.loaded / progress.total) * 100;
                })
              });
          };
        if(res.data[i].id == $stateParams.id){ break; }
      }
		}
  });
})

.controller('videoListCtrl', function($scope, VideoService) {
	"use strict";
  VideoService.getVideoList().then(function(res){
    $scope.videos = res.data;
  });
})

.controller('videoCtrl', function($scope, $stateParams, VideoService) {
	"use strict";
    var yID = "https://www.youtube.com/embed/";
    VideoService.getVideo().then(function(res){
      for(var i = 0; i < res.data.length; i++){
        if($stateParams.id < 100){
          $scope.artist = res.data[i].ARTIST;
          $scope.title = res.data[i].TITLE;
          $scope.embedVid = yID;
          $scope.embedVid += res.data[i].VIDEO;
          $scope.desc = res.data[i].DES;
          if(res.data[i].DESC == ""){
            $scope.feat = "There is no description for this video";
          }
          if(res.data[i].id == $stateParams.id){ break; }
        }
      }
    });
})

.controller('artistListCtrl', function($scope, ArtistService) {
    "use strict";
    ArtistService.getArtistImages().then(function(res){
      $scope.artists = res.data;
    });
})

.controller('artistCtrl', function($scope, $stateParams, $cordovaSocialSharing, ArtistService) {
    "use strict";
    ArtistService.getArtist().then(function(res){
  	 for(var i = 0; i < res.data.length; i++){
  		 if($stateParams.id < 100){
          $scope.img = res.data[i].IMAGE;
          $scope.artist = res.data[i].ARTIST;
          $scope.bio = res.data[i].BIO;
          $scope.bio2 = res.data[i].BIO2;
          $scope.facebook = res.data[i].FACEBOOK;
          $scope.twitter = res.data[i].TWITTER;
          $scope.shareAll = function() {
               $cordovaSocialSharing
               .share(res.data[i].TITLE, res.data[i].ARTIST, res.data[i].IMAGE, res.data[i].WEBSITE) ;
           };
          if(res.data[i].id == $stateParams.id){ break; }
       }
     }
    });
})

.controller('ambitiouzEntertainmentCtrl', function($scope, $state, StreamService) {
	"use strict";
    StreamService.getStream().then(function(res){
      $scope.fvideo = res.data[2].STREAM;
      $scope.fevent = res.data[3].IMAGE;
      if(res.data[0].isActive == "y"){
          $scope.isActive = "block";
          $scope.image = res.data[0].IMAGE;
      }else {
        $scope.display = "none";
      }
      if(res.data[1].isActive == "y"){
        $scope.isActive = "block";
        $scope.image = res.data[1].IMAGE;
      }else {
        $scope.display = "none";
      }
  });
  $scope.openSongs = function () {
    $state.go('aeTabsController.songList');
  };
  $scope.openVideos = function () {
    $state.go('aeTabsController.videoList');
  };
  $scope.openArtists = function () {
    $state.go('aeTabsController.artistList');
  };
  $scope.openMore = function () {
    $state.go('aeTabsController.moreList');
  };
})

.controller('eventListCtrl', function($scope, EventService) {
	"use strict";
	EventService.getEvent().then(function(res){
	 $scope.events = res.data;
	});
})

.controller('eventCtrl', function($scope, $stateParams, $cordovaCalendar, $cordovaSocialSharing, EventService) {
	"use strict";
	var sParts = ""; var eParts = "";
	EventService.getEvent($stateParams.id).then(function(res){
	 for(var i = 0; i < res.data.length; i++){
		 if($stateParams.id < 100){
			 $scope.evImageUrl = res.data[i].BANNER;
			 $scope.evDateTime = res.data[i].DATE;
			 $scope.evLocation = res.data[i].LOCATION;
			 $scope.evNotes = res.data[i].NOTES;
			 $scope.evDesc = res.data[i].DESCRIPTION;
			 $scope.evWebsite = res.data[i].URL;
       /*$scope.shareFacebook = function() {
           $cordovaSocialSharing
           .shareViaFacebook(res.data[i].TITLE, res.data[i].IMAGE, res.data[i].URL) ;
       };
       $scope.shareTwitter = function() {
           $cordovaSocialSharing
           .shareViaTwitter(res.data[i].TITLE, res.data[i].IMAGE, res.data[i].URL) ;
       };*/
			 $scope.shareAll = function() {
				$cordovaSocialSharing
				.share(res.data[i].DESCRIPTION, res.data[i].TITLE, res.data[i].THUMBNAIL, res.data[i].URL);
			 };
			 $scope.makeCall = function () {
				 var call = "tel:+" + res.data[i].PHONE;
				 alert('Calling ' + call );
				 document.location.href = call;
			 };
       $scope.sendEmail = function(){
         $cordovaSocialSharing
         .shareViaEmail(res.data[i].TITLE, res.data[i].THUMBNAIL, res.data[i].URL);
       }
			 sParts = res.data[i].START_DATE.split(',');
			 eParts = res.data[i].END_DATE.split(',');
			 $scope.addEvent = function(){
				$cordovaCalendar.createEvent({
				title: res.data[i].TITLE,
				location: res.data[i].LOCATION,
				notes: res.data[i].NOTES,
				startDate: new Date(sParts[0], parseInt(sParts[1])-1, sParts[2], sParts[3], sParts[4], sParts[5], sParts[6]),
				endDate: new Date(eParts[0], parseInt(eParts[1])-1, eParts[2], eParts[3], eParts[4], eParts[5], eParts[6])
				}).then(function () {
					alert("Thank you for adding "+res.data[i].TITLE+" to your calendar!");
				}, function (err) {
					alert("Some's wrong! "+err);
				});
			 };
			 if(res.data[i].id == $stateParams.id){ break; }
		 }
		 }
	 });
})

.controller('eventUriCtrl', function($scope, $stateParams, EventUriService, $timeout) {
	"use strict";
	EventUriService.getEventUri($stateParams.id).then(function(res){
  	 for(var i = 0; i < res.data.length; i++){
        if($stateParams.id == 1){
          $scope.openWeb = res.data[i].EVENT_BOOK;
        }else
        if($stateParams.id == 2){
          $scope.openWeb = res.data[i].EVENT_WEBSITE;
        }
     }
   });
})

.controller('moreListCtrl', function($scope, MoreService, $ionicSlideBoxDelegate) {
    "use strict";
    MoreService.getMore().then(function(res){
     $scope.more = res.data;
     setTimeout(function() {
               $ionicSlideBoxDelegate.slide(0);
               $ionicSlideBoxDelegate.update();
               $scope.$apply();
           });
    });
})

.controller('moreCtrl', function($scope, $stateParams, MoreService) {
  "use strict";
  MoreService.getMore().then(function(res){
    if($stateParams.id == "1"){
      $scope.openWeb = res.data[0].WEBSITE;
    }else
    if($stateParams.id == "2"){
      $scope.openWeb = res.data[1].WEBSITE;
    }else
    if($stateParams.id == "3"){
      $scope.openWeb = res.data[2].WEBSITE;
    }else
    if($stateParams.id == "4"){
      $scope.openWeb = res.data[3].WEBSITE;
    }else
    if($stateParams.id == "5"){
      $scope.openWeb = res.data[4].WEBSITE;
    }else
    if($stateParams.id == "6"){
      $scope.openWeb = res.data[5].WEBSITE;
    }else
    if($stateParams.id == "7"){
      $scope.openWeb = res.data[6].WEBSITE;
    }
  });
})

.controller('streamCtrl', function($scope, StreamService) {
  "use strict";
  StreamService.getStream().then(function(res){
      if(res.data[0].isActive == "y"){
          $scope.audioStream = res.data[0].STREAM;
            $scope.streamAudio = "block";
      }else{
        $scope.streamAudio = "none";
      }
      if(res.data[1].isActive == "y"){
        $scope.videoStream = res.data[1].STREAM;
          $scope.streamVideo = "block";
      }else{
        $scope.streamVideo = "none";
      }
  });
})
