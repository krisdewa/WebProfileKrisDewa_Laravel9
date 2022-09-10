<!--
Copyright 2021 By: KrisDewa
Author/Pembuat   : Krisna Dewa Pratama
Instagram        : @kris_dewa

  *NOTE*
   Ngintip Yaaa, Izin dulu for respect :p
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('favicon/logo.jpg') }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}" />

    <!-- CSS flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

    <!-- TITLE -->
    <title>{{ $title }}</title>
    <!-- END TITLE -->
</head>

<body>
    <!-- Warna efek -->
    <div class="blur"></div>
    <!--  -->

    @include('partials.navbar')

    @yield('container')

    <!-- Tombol Scroll Atas -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <!--  -->

    <!-- JS TYPING -->
    <script>
        var typed = new Typed(".typing", {
            strings: ["Web Developer", "Content Creator", " Junior Cyber Security"],
            typeSpeed: 70,
            backSpeed: 40,
            loop: true,
        });

        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });

        // //Click event handler for nav-items
        // $(".nav-link").on("click", function () {
        //   //Remove any previous active classes
        //   $(".nav-link").removeClass("active");

        //   //Add active class to the clicked item
        //   $(this).addClass("active");
        // });
    </script>

    <!-- Scroll to Top -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                "use strict";

                var progressPath = document.querySelector(".progress-wrap path");
                var pathLength = progressPath.getTotalLength();
                progressPath.style.transition = progressPath.style.WebkitTransition = "none";
                progressPath.style.strokeDasharray = pathLength + " " + pathLength;
                progressPath.style.strokeDashoffset = pathLength;
                progressPath.getBoundingClientRect();
                progressPath.style.transition = progressPath.style.WebkitTransition =
                    "stroke-dashoffset 10ms linear";
                var updateProgress = function() {
                    var scroll = $(window).scrollTop();
                    var height = $(document).height() - $(window).height();
                    var progress = pathLength - (scroll * pathLength) / height;
                    progressPath.style.strokeDashoffset = progress;
                };
                updateProgress();
                $(window).scroll(updateProgress);
                var offset = 50;
                var duration = 550;
                jQuery(window).on("scroll", function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery(".progress-wrap").addClass("active-progress");
                    } else {
                        jQuery(".progress-wrap").removeClass("active-progress");
                    }
                });
                jQuery(".progress-wrap").on("click", function(event) {
                    event.preventDefault();
                    jQuery("html, body").animate({
                        scrollTop: 0
                    }, duration);
                    return false;
                });
            });
        })(jQuery);
    </script>
    <!-- end JQuery -->
</body>

</html>
