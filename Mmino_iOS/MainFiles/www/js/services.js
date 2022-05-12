angular.module('app.services', [])

.factory('consUrl', function() {
	return "http://vakaweb.co.za/adminpanel/mmino/includes/encode/index.php/?get=";
})

.factory('StreamService', function($http, $stateParams, consUrl) {
		"use strict";
		var get_url = consUrl;
		return {
			getStream: function(){
				var stream = [];
				return $http.get(get_url+"stream").then(function(response){
					stream = response;
					return stream;
				});
			}
	};
})

.factory('SongsService', function($http, $stateParams, consUrl) {
		"use strict";
		var get_url = consUrl;
		return {
			getSongImages: function(){
				var images = [];
				return $http.get(get_url+"songs").then(function(response){
					images = response;
					return images;
				});
			},
		getSongs: function(id){
			var songs = [];
			id = $stateParams.id;
			if (id < 100) {
				return $http.get(get_url+"songs").then(function(response){
					songs = response;
					return songs;
				});
			}
		}
	};
})

.factory('VideoService', function($http, $stateParams, consUrl) {
	"use strict";
	var get_url = consUrl;
	return {
		getVideoList: function(){
			var videos = [];
			return $http.get(get_url+"videos").then(function(response){
				videos = response;
				return videos;
			});
		},
		getVideo: function(id){
			var videos = [];
			id = $stateParams.id;
			if (id < 100) {
				return $http.get(get_url+"videos").then(function(response){
					videos = response;
				return videos;
			});
			}
		}
	};
})

.factory('ArtistService', function($http, $stateParams, consUrl) {
		"use strict";
		var get_url = consUrl;
		return {
			getArtistImages: function(){
				var images = [];
				return $http.get(get_url+"artists").then(function(response){
					images = response;
					return images;
				});
			},
		getArtist: function(id){
			var songs = [];
			id = $stateParams.id;
			if (id < 100) {
				return $http.get(get_url+"artists").then(function(response){
					songs = response;
					return songs;
				});
			}
		}
	};
})

.factory('EventService', function($http, consUrl) {
	"use strict";
	var get_url = consUrl;
	return {
		getEvent: function(){
		var events = [];
		return $http.get(get_url+"events").then(function(response){
		   events = response;
		   return events;
		   });
		}
	};
})

.factory('EventUriService', function($http, consUrl) {
	"use strict";
	var get_url = consUrl;
	return {
		getEventUri: function(){
		var webpages = [];
		return $http.get(get_url+"webpages").then(function(response){
		   webpages = response;
		   return webpages;
		   });
		}
	};
})

.factory('MoreService', function($http, consUrl) {
	"use strict";
	var get_url = consUrl;
	return {
		getMore: function(){
		var more = [];
		return $http.get(get_url+"more").then(function(response){
		   more = response;
		   return more;
		   });
		}
	};
});
