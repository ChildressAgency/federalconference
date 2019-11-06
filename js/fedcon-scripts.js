jQuery(document).ready(function ($) {
  $('#testimonial-slider .carousel-inner .carousel-item').carouselHeights();

  $('#hero-carousel').on('slide.bs.carousel', function (slide) {
    var oldSlideIndex = slide.from;
    var newSlideIndex = slide.to;

    var oldTitleId = '#slide-title-' + oldSlideIndex;
    var newTitleId = '#slide-title-' + newSlideIndex;

    $(oldTitleId).removeClass('slideInRight').addClass('slideOutLeft');
    $(newTitleId).removeClass('slideOutLeft').addClass('slideInRight');

    //var animationEndEvent = 'webkitAnimationEnd animationend';

    //$(oldTitleId).removeClass('slideInRight').addClass('slideOutLeft').one(animationEndEvent, function(){
    //  $(oldTitleId).removeClass('slideOutLeft title-show');
    //  $(newTitleId).addClass('slideInRight title-show').one(animationEndEvent, function(){
    //    $(newTitleId).removeClass('slideInRight');
    //  });
    //});

  });

  $('#testimonial-slider').on('slid.bs.carousel', function (slide) {
    var slidesCount = $('#testimonial-slider .carousel-item').length;
    var currentSlide = slide.to + 1;

    $('.slide-counter').text(currentSlide + ' / ' + slidesCount);
  });

  $('#team-modal').on('show.bs.modal', function (event) {
    var $teamMember = $(event.relatedTarget);
    var teamMemberName = $teamMember.data('member_name');
    var teamMemberPosition = $teamMember.data('member_position');
    var teamMemberBio = $teamMember.data('member_bio');

    var $modal = $(this);
    $modal.find('#team-member-name').text(teamMemberName);
    $modal.find('#team-member-position').text(teamMemberPosition);
    $modal.find('#team-member-bio').html(teamMemberBio);
  });

  $('.location-map').each(function () {
    map = new_map($(this));
  });
}); //end jQuery

$.fn.carouselHeights = function () {
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function () {
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};


/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map($el) {

  // var
  var $markers = $el.find('.marker');


  // vars
  var args = {
    zoom: 16,
    center: new google.maps.LatLng(0, 0),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };


  // create map	        	
  var map = new google.maps.Map($el[0], args);


  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function () {

    add_marker($(this), map);

  });


  // center map
  center_map(map);


  // return
  return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker($marker, map) {

  // var
  var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

  // create marker
  var marker = new google.maps.Marker({
    position: latlng,
    icon: mapMarker,
    map: map
  });

  // add to array
  map.markers.push(marker);

  // if marker contains HTML, add it to an infoWindow
  if ($marker.html()) {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content: $marker.html(),
      maxWidth: 300
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
    });
  }
}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map(map) {

  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each(map.markers, function (i, marker) {

    var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

    bounds.extend(latlng);

  });

  // only 1 marker?
  if (map.markers.length == 1) {
    // set center of map
    map.setCenter(bounds.getCenter());
    map.setZoom(16);
  }
  else {
    // fit to bounds
    map.fitBounds(bounds);
  }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;



