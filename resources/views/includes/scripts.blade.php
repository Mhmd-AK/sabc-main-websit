
<!-- Vendor -->
<script src="{{asset('frontend/vendor/plugins/js/plugins.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('frontend/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('frontend/js/views/view.contact.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('frontend/js/theme.init.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    function initializeGoogleMaps() {
        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Markers
        var mapMarkers = [{
            latitude: initLatitude,
            longitude: initLongitude,
            html: "<strong>Porto Business Consulting 3</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "{{asset('frontend/img/demos/business-consulting-3/map-pin.png')}}",
                iconsize: [26, 27],
                iconanchor: [12, 27]
            }
        }];

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: false,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 14
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
    }

    // Initialize Google Maps when element enter on browser view
    theme.fn.intObs( '#googlemaps', 'initializeGoogleMaps()', {} );

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    $(document).ready(function () {
        $('html').css('scroll-behavior', 'smooth')
    })

</script>
