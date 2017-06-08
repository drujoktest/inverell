// JavaScript Document

// Weather
$(document).ready(function() {
  $.simpleWeather({
    location: 'Inverell, NSW',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<span class="cityname">'+weather.city+', '+weather.region+'</span>';
	  html += ''+weather.temp+'&deg;'+weather.units.temp+'<i class="icon-'+weather.code+'"></i>';
      

  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});

// Slider

$(document).ready(function(){
	$('.bxslider').bxSlider({
		mode: 'fade',
		infiniteLoop: true,
		auto: true,
		autoStart: true,
		autoDirection: 'next',
		autoHover: true,
		pause: 3000,
		autoControls: false,
		pager: true,
		pagerType: 'full',
		controls: true,
		captions: true,
		speed: 500
	});
	$('.prslider').bxSlider({
	  minSlides: 2,
	  maxSlides: 5,
	  slideWidth: 184,
	  slideMargin: 20,
	  auto: true,
	  pager: false,
	  controls: true
	});
	$('.testislider').bxSlider({
	  mode: 'horizontal',
	  captions: false,
	  pager: true,
	  auto: true,
	  autoControls: false,
	  slideMargin: 0,
	  controls: false
	});
	$('.testislider2').bxSlider({
	  mode: 'horizontal',
	  captions: false,
	  pager: false,
	  auto: true,
	  autoControls: false,
	  slideMargin: 0,
	  controls: false
	});
				
});

// Tabs

$(document).ready(function () {
	/*  jQuery activation and setting options. Visit docs.zozoui.com/tabs for 
		complete documentation, option list, public methods, callback events.*/
	$("#tabbed-nav").zozoTabs({
		theme: "silver",
		orientation: "horizontal",
		position: "top-left",
		size: "medium",
		animation: {
			easing: "easeInOutExpo",
			duration: 400,
			effects: "slideH"
		},
		defaultTab: "tab1"
	});
	$("#tabbed-nav2").zozoTabs({
		theme: "silver",
		orientation: "horizontal",
		position: "top-left",
		size: "medium",
		animation: {
			easing: "easeInOutExpo",
			duration: 400,
			effects: "slideH"
		},
		defaultTab: "tab1"
	});
});

// Menu

$(function() {
	cbpHorizontalMenu.init();
});

// Text Resize with Cookie Support

textResizer = $(function (){
	
	// Set Cookie
	var docCookies = {
	  getItem: function (sKey) {
	    if (!sKey) { return null; }
	    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
	  },
	  setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
	    if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
	    var sExpires = "";
	    if (vEnd) {
	      switch (vEnd.constructor) {
	        case Number:
	          sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
	          break;
	        case String:
	          sExpires = "; expires=" + vEnd;
	          break;
	        case Date:
	          sExpires = "; expires=" + vEnd.toUTCString();
	          break;
	      }
	    }
	    document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
	    return true;
	  },
	  removeItem: function (sKey, sPath, sDomain) {
	    if (!this.hasItem(sKey)) { return false; }
	    document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
	    return true;
	  },
	  hasItem: function (sKey) {
	    if (!sKey) { return false; }
	    return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
	  },
	  keys: function () {
	    var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
	    for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
	    return aKeys;
	  }
	};

	function changeSize(element, size) {
	    var current = parseInt(docCookies.getItem("FontSize"));
	    var newSize;
	    if (current !== "") {
	        current = parseInt(element.css('font-size'));
	    }
	    if (size === 'decrease') {
	        if (current > 12) {
	            newSize = current - 2;
	        }
	    } else if (size === 'increase') {
	        if (current < 22) {
	            newSize = current + 2;
	        }
	    }
	    
	    element.css('font-size', newSize + 'px');
	    docCookies.setItem("FontSize", newSize, Infinity);
	}

	$('#decreaseFont').click(function (e) {
		
		changeSize(text, 'decrease');
		e.preventDefault();
	});

	$('#increaseFont').click(function (e) {
	   changeSize(text, 'increase');
	   e.preventDefault();
	});

	var text = $("p"),
		 fontSize = docCookies.getItem("FontSize");
	if (fontSize) {
	    text.css('font-size', fontSize + 'px');
	}
});
