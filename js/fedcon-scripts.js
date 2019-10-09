jQuery(document).ready(function($){
  $('#testimonial-slider .carousel-inner .carousel-item').carouselHeights();

  $('#hero-carousel').on('slide.bs.carousel', function(slide){
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

  $('#testimonial-slider').on('slid.bs.carousel', function(slide){
    var slidesCount = $('#testimonial-slider .carousel-item').length;
    var currentSlide = slide.to + 1;

    $('.slide-counter').text(currentSlide + ' / ' + slidesCount);
  });

  $('#team-modal').on('show.bs.modal', function(event){
    var $teamMember = $(event.relatedTarget);
    var teamMemberName = $teamMember.data('member_name');
    var teamMemberPosition = $teamMember.data('member_position');
    var teamMemberBio = $teamMember.data('member_bio');

    var $modal = $(this);
    $modal.find('#team-member-name').text(teamMemberName);
    $modal.find('#team-member-position').text(teamMemberPosition);
    $modal.find('#team-member-bio').html(teamMemberBio);
  });
});

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