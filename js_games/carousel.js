//Flickr Carousel

	var strip = document.getElementById('strip');
	var displacement = 0;
	var myInterval;
	var isPlaying = false;

	function init() {
		getFlickrData();
		var btnPlay = document.getElementById('play');
		var btnNew = document.getElementById('new-images');
		var btnStop = document.getElementById('stop');

		btnPlay.addEventListener('click', function() {
			if (isPlaying === false) {
				isPlaying = true;
				myInterval = setInterval(goNext, 1800);
			};
		});

		btnStop.addEventListener('click', endPlay);

		btnNew.addEventListener('click', getNew);
	}

	function clearImages() {
		while (strip.childNodes.length >= 1) {
			strip.removeChild(strip.firstChild);
		};
		clearInterval(myInterval);
	}

	function getNew() {
		// console.log("getNew");
		isPlaying = false;
		clearImages();
		getFlickrData();
	}

	function goNext() {
		console.log("goNext");
		displacement = displacement - 400;

		if (displacement === -8000) {
			displacement = 0;
		}
		
		strip.style.left = displacement + "px";

	}

	function endPlay() {
		console.log("endPlay");
		isPlaying = false;
		clearInterval(myInterval);
	}


	function doIt(data) {

		var items = data.items;

		for (i = 0; i < items.length; i++) {

			var currentPhoto = items[i];

			var media = currentPhoto.media;

			var imageUrl = media.m;

			var myImage = document.createElement('img');
			myImage.src = imageUrl;
			myImage.style.width = 400 + "px";
			myImage.style.height = 300 + "px";
			myImage.style.margin = "auto;"

			strip.appendChild(myImage);
		};

		console.log("doIt");
	}


	function getFlickrData() {
	  var requestUrl = 'http://api.flickr.com/services/feeds/photos_public.gne?format=json';
	  console.log("getFlickrData");

	   var params = ({
	      url: requestUrl,
	      dataType: 'jsonp',
	      jsonpCallback: 'jsonFlickrFeed',
	      success: doIt
	    });

	    $.ajax(params);

	}


	init();