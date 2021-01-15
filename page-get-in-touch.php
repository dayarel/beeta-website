<?php get_header(); ?>
<script>
    // OLD 
    //lat: 53.477290
    //lng: -2.243725
function initMap() {
    var beeta = {
        lat: 53.4850932,
        lng: -2.2369304
    }
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 16, 
            center: beeta,
            disableDefaultUI: true,
            styles: [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": "14"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f8c200"
            },
            {
                "lightness": 17
            }
        ]
    }
]
        }
    );
    var icon = {
        url: "<?php bloginfo('template_url'); ?>/assets/images/map_marker.svg",
        scaledSize: new google.maps.Size(50, 50), 
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(0, 0)
    }
    var marker = new google.maps.Marker(
        {
            position: beeta, 
            map: map,
            icon: icon
        }
    );
    
}
</script>
<section id="contact-map" class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<section id="contact-info">
    <h1 class="section-title">Let's get started</h1>

    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="164" title="Get in touch"]'); ?>
    </div>
</section>
<?php get_footer(); ?>