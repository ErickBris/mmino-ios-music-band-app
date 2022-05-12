angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider



  .state('aeTabsController', {
    url: '/aeTabs',
    templateUrl: 'templates/aeTabsController.html',
    abstract:true
  })

  .state('ambitiouzEntertainment', {
    url: '/welcome',
    templateUrl: 'templates/ambitiouzEntertainment.html',
    controller: 'ambitiouzEntertainmentCtrl'
  })

   .state('aeTabsController.songList', {
    url: '/songList',
    views: {
      'tab1': {
        templateUrl: 'templates/songList.html',
        controller: 'songListCtrl'
      }
    }
  })

  .state('aeTabsController.song', {
    url: '/songInfo/:id',
    views: {
      'tab1': {
        templateUrl: 'templates/song.html',
        controller: 'songCtrl'
      }
    }
  })

  .state('aeTabsController.videoList', {
    url: '/videoList',
    views: {
      'tab2': {
        templateUrl: 'templates/videoList.html',
        controller: 'videoListCtrl'
      }
    }
  })

  .state('aeTabsController.video', {
    url: '/videoInfo/:id',
    views: {
      'tab2': {
        templateUrl: 'templates/video.html',
        controller: 'videoCtrl'
      }
    }
  })

  .state('aeTabsController.artistList', {
    url: '/artistList',
    views: {
      'tab3': {
        templateUrl: 'templates/artistList.html',
        controller: 'artistListCtrl'
      }
    }
  })

  .state('aeTabsController.artist', {
    url: '/artistInfo/:id',
    views: {
      'tab3': {
        templateUrl: 'templates/artist.html',
        controller: 'artistCtrl'
      }
    }
  })

  .state('aeTabsController.eventList', {
    url: '/eventList',
    views: {
      'tab4': {
        templateUrl: 'templates/eventList.html',
        controller: 'eventListCtrl'
      }
    }
  })

  .state('aeTabsController.event', {
    url: '/eventInfo/:id',
    views: {
      'tab4': {
		templateUrl: 'templates/event.html',
		controller: 'eventCtrl'
      }
    }
  })

  .state('aeTabsController.eventUri', {
    url: '/eventUri/:id',
    views: {
      'tab4': {
		templateUrl: 'templates/eventUri.html',
		controller: 'eventUriCtrl'
      }
    }
  })

  .state('aeTabsController.moreList', {
    url: '/moreList',
    views: {
      'tab5': {
		templateUrl: 'templates/moreList.html',
		controller: 'moreListCtrl'
      }
    }
  })

  .state('aeTabsController.more', {
    url: '/moreInfo/:id',
    views: {
      'tab5': {
		templateUrl: 'templates/more.html',
		controller: 'moreCtrl'
      }
    }
  })

  .state('aeTabsController.stream', {
    url: '/stream',
    views: {
      'tab5': {
		templateUrl: 'templates/stream.html',
		controller: 'streamCtrl'
      }
    }
  });

$urlRouterProvider.otherwise('/welcome');

});
