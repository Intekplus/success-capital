$(function() {
  /**
   * Menu
   */
  $('.menu-burger').click(e => {
    e.stopPropagation();
    let container = $('.menu-container');
    container.toggleClass('active');
    $('.menu-item-has-children').removeClass('active');
    $('body').toggleClass('noScrolling');
  });
  $('.menu-item-has-children > a').click(function(e) {
    e.preventDefault();
    $(this)
      .parent('.menu-item-has-children')
      .toggleClass('active');
  });
  /**
   * Carousel
   */
  $(".partner-banner-wrapper .partner-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    navText: [
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>",
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>",
    ],
    dots: false,
    responsive: {
      600: {
        items: 3,
      },
    },
  });
  $(".flat-partners-wrapper .partner-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 2,
    navText: [
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>",
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>"
    ],
    dots: false,
    responsive: {
      600: {
        items: 4,
        navText: [
          "<div class='arrow'><i class='fas fa-angle-right'></i></div>",
          "<div class='arrow'><i class='fas fa-angle-right'></i></div>"
        ]
      },
      1200: {
        items: 6,
        navText: [
          "<div class='arrow'><i class='fas fa-angle-right'></i></div>",
          "<div class='arrow'><i class='fas fa-angle-right'></i></div>"
        ]
      }
    }
  });

  $('.quotes-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    items: 1,
    dots: true,
  });

  $(".news-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    autoWidth: true,
  });

  $(".transactions-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    autoWidth: true,
  });

  $('.global-carousel').owlCarousel({
    loop: true,

    nav: true,
    navText: [
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>",
      "<div class='arrow'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.129 11.561'><defs><style>.cls-1 {fill: #333;}</style></defs><path id='Tracé_10' data-name='Tracé 10' class='cls-1' d='M1.722,0,.671,1.051,4.65,5.03H-14.626v1.5H4.65L.671,10.51l1.051,1.051L7.5,5.78Z' transform='translate(14.627)'/></svg></div>",
    ],
    responsive: {
      300: {
        items: 1,
        margin: 5,
      },
      800: {
        items: 2,
        margin: 10,
      },
      1200: {
        items: 3,
      },
      1600: {
        items: 4,
      },
    },
    dots: false,
  });

  $('.image-preview-carousel').owlCarousel({
    loop: false,
    margin: 20,
    nav: false,
    dots: false,
    autoWidth: true,
  });

  $('.discover-carousel').owlCarousel({
    loop: false,
    margin: 20,
    nav: false,
    dots: false,
    autoWidth: true,
  });

  /**
   * Image preview
   */

  $('.image-preview-item').click(function(e) {
    e.preventDefault();
    $('.image-preview-item').removeClass('active');
    $(this).addClass('active');
    var nextImage = $(this).attr('src');
    $('.image-section').css('background-image', 'url(' + nextImage + ')');
  });

  /**
   * Accordion
   */
  $('.accordion-wrapper .title').click(function(e) {
    e.preventDefault();
    $(this)
      .parent('.accordion-wrapper')
      .toggleClass('active');
  });

  /**
   * Dropdown
   */
  $('.dropdown-label').click(function(e) {
    $('.dropdown-content')
      .not($(this).next())
      .slideUp();
    $('.dropdown-content')
      .parent()
      .removeClass('active');
    $(this)
      .next()
      .slideToggle()
      .parent()
      .addClass('active');
  });

  // Click away listener
  $(document).on('click', function(event) {
    if (
      event.target.className !== 'dropdown-content' &&
      event.target.className !== 'dropdown-label' &&
      event.target.className !== 'dropdown-item' &&
      event.target.className !== 'dropdown-wrapper'
    ) {
      $('.dropdown-content').slideUp();
      $('.dropdown-content')
        .parent()
        .removeClass('active');
    }
  });

  /**
   * Transaction filters
   */
  $('.properties_filters').submit(function(e) {
    e.preventDefault();
    var formData = 'action=ajax_filtered_properties&' + $(this).serialize();

    $.ajax({
      url: ajaxurl,
      data: formData,
      method: 'POST',
      success: function(data) {
        $('.transactions--ajax').html(data);
      },
      error: function(err) {
        console.log(err); // TODO: Error handling
      },
    });
  });

  $('.dropdown-item input').click(function(e) {
    $(this)
      .parents('.dropdown-wrapper')
      .addClass('selection');
    $(this)
      .parents('.dropdown-wrapper')
      .find('.dropdown-label')
      .text($(this).attr('value'));
  });
  $('.search-button-wrapper a').click(function(e) {
    e.preventDefault();
    $(this)
      .parents('.properties_filters')
      .submit();
  });

  /**
   * Google maps banner
   */
  var geocoder;
  var map;
  function center_map(map) {
    // vars
    var bounds = new google.maps.LatLngBounds();
    // loop through all markers and create bounds
    $.each(map.markers, function(i, marker) {
      var latlng = new google.maps.LatLng(
        marker.position.lat(),
        marker.position.lng(),
      );
      bounds.extend(latlng);
    });
    // only 1 marker?
    if (map.markers.length === 1) {
      // set center of map
      map.panTo(bounds.getCenter());
      map.setZoom(16);
    } else {
      // fit to bounds
      map.fitBounds(bounds);
    }
  }
  function add_marker($marker, map) {
    var latlng = new google.maps.LatLng(
      $marker.attr('data-lat'),
      $marker.attr('data-lng'),
    );

    var iconUrl =
      '/wp-content/themes/success-capital/assets/img/images/map-icon.svg';

    var icon = {
      url: iconUrl,
      scaledSize: new google.maps.Size(60, 60),
    };

    // create marker
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      animation: google.maps.Animation.DROP,
      icon: icon,
    });
    map.markers.push(marker);
    // if marker contains HTML, add it to an infoWindow
    if ($marker.html()) {
      // create info window
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });
      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
        map.panTo(marker.position);
        map.setZoom(16);
      });
    }
  }
  function new_map($el) {
    // var
    geocoder = new google.maps.Geocoder();
    var styledMap = [
      { elementType: 'geometry', stylers: [{ color: '#f5f5f5' }] },
      { elementType: 'labels.icon', stylers: [{ visibility: 'off' }] },
      { elementType: 'labels.text.fill', stylers: [{ color: '#616161' }] },
      { elementType: 'labels.text.stroke', stylers: [{ color: '#f5f5f5' }] },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#bdbdbd' }],
      },
      {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [{ color: '#eeeeee' }],
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#757575' }],
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{ color: '#e5e5e5' }],
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#9e9e9e' }],
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{ color: '#ffffff' }],
      },
      {
        featureType: 'road.arterial',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#757575' }],
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{ color: '#dadada' }],
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#616161' }],
      },
      {
        featureType: 'road.local',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#9e9e9e' }],
      },
      {
        featureType: 'transit.line',
        elementType: 'geometry',
        stylers: [{ color: '#e5e5e5' }],
      },
      {
        featureType: 'transit.station',
        elementType: 'geometry',
        stylers: [{ color: '#eeeeee' }],
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{ color: '#c9c9c9' }],
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#9e9e9e' }],
      },
    ];
    var styledMapType = new google.maps.StyledMapType(styledMap);
    // vars
    var args = {
      zoom: 16,
      center: new google.maps.LatLng(0, 0),
      //mapTypeId: google.maps.MapTypeId.ROADMAP
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map'],
      },
    };
    // create map
    var map = new google.maps.Map($el[0], args);

    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
    return map;
  }
  $('.map').each(function() {
    // create map
    map = new_map($(this));
    map.markers = [];
    var $marker = $('.marker');
    add_marker($($marker[0]), map);
    center_map(map);
  });
});
