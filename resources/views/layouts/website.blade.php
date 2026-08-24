<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Arunachala Solar Energy provides reliable residential, commercial, industrial, agricultural and rooftop solar solutions, including solar installation, energy storage, consultation, maintenance and support.">

    <meta name="keywords"
        content="Arunachala Solar Energy, solar energy, solar panels, residential solar, commercial solar, industrial solar, agricultural solar, rooftop solar, solar installation, solar energy storage, solar consultation, solar maintenance">

    <meta name="author" content="Arunachala Solar Energy">

    <meta name="robots" content="index, follow">

    <title>
        Arunachala Solar Energy | Solar Solutions & Installation
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('website/css/website.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/home.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('website/css/about.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('website/css/services.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('website/css/solutions.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('website/css/projects.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('website/css/whychoose.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('website/css/contact.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website')}}/images/solarlogo.png">







</head>

<body>


    <!-- =========================================================
     PRELOADER
========================================================= -->

    <div class="preloader" id="preloader">

        <div class="loader-content">

            <div class="sun-loader"></div>

            <h3>
                ARUNACHALA SOLAR ENERGY
            </h3>

            <p>
                Powering the Future Sustainably
            </p>

        </div>

    </div>


    <!-- =========================================================
     TOP BAR
========================================================= -->

    <div class="topbar">

        <div class="container topbar-inner">

            <div class="top-item">

                <i class="fa-solid fa-location-dot"></i>

                <span>
                    Somala, Chittoor, Andhra Pradesh - 517257
                </span>

            </div>

            <div class="top-item">

                <i class="fa-solid fa-sun sun-mini"></i>

                <span>
                    Powering the Future Sustainably
                </span>

            </div>

        </div>

    </div>


    <!-- =========================================================
     NAVBAR
========================================================= -->

    <nav class="navbar" id="navbar">

        <div class="container nav-inner">

            <a href="{{ route('home') }}" class="brand">

                <img src="{{ asset('website') }}/images/solarlogo.png" alt="Arunachala Solar Energy">

                <div class="brand-text">

                    <strong>
                        ARUNACHALA
                    </strong>

                    <span>
                        SOLAR ENERGY
                    </span>

                </div>

            </a>


            <div class="menu" id="menu">

                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    HOME
                </a>

                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                    ABOUT US
                </a>

                <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">
                    SERVICES
                </a>

                <a class="nav-link {{ request()->routeIs('solutions') ? 'active' : '' }}"
                    href="{{ route('solutions') }}">
                    SOLUTIONS
                </a>

                <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">
                    PROJECTS
                </a>

                <a class="nav-link {{ request()->routeIs('whychoose') ? 'active' : '' }}"
                    href="{{ route('whychoose') }}">
                    WHY CHOOSE US
                </a>

                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                    CONTACT
                </a>
            </div>


            <button class="mobile-btn" id="mobileBtn">

                <i class="fa-solid fa-bars"></i>

            </button>

        </div>

    </nav>

    @yield('content')

    <!-- =========================================================
          FOOTER
    ========================================================= -->

    <footer>

        <div class="container footer-grid">


            <div class="footer-about">

                <div class="footer-brand">

                    <img src="{{ asset('website') }}/images/solarlogo.png" alt="Logo">

                    <div>

                        <strong>
                            ARUNACHALA
                        </strong>

                        <span>
                            SOLAR ENERGY
                        </span>

                    </div>

                </div>


                <p>

                    Powering the future sustainably
                    through reliable, affordable and
                    innovative solar energy solutions.

                </p>

            </div>


            <div class="footer-links">

                <h3>
                    Quick Links
                </h3>

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('about') }}">
                    About Us
                </a>

                <a href="{{ route('services') }}">
                    Services
                </a>

                <a href="{{ route('solutions') }}">
                    Solutions
                </a>

                <a href="{{ route('projects') }}">
                    Projects
                </a>

                <a href="{{ route('contact') }}">
                    Contact
                </a>

            </div>


            <div class="footer-contact">

                <h3>
                    Contact Us
                </h3>


                <p>

                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        5-94, Punganur Pulicherla
                        Chinnagottigallu Road,
                        Opposite to Santha Gate,
                        Somala, Andhra Pradesh -
                        517257
                    </span>

                </p>


                <p>

                    <i class="fa-solid fa-phone"></i>

                    <span>
                        +91 9642093403
                    </span>

                </p>


                <p>

                    <i class="fa-solid fa-envelope"></i>

                    <span>
                        sureshmannuri@gmail.com
                    </span>

                </p>

            </div>

        </div>


        <div class="container copyright">

            © <span id="year"></span>
            Arunachala Solar Energy.
            All Rights Reserved. Developed By <a href="https://www.thiven.com/" target="_blank"
                style="text-decoration: none;color: #fbfbfb;">ThiVen</a>

        </div>

    </footer>


    <!-- =========================================================
     WHATSAPP
========================================================= -->

    <a href="https://wa.me/919642093403" target="_blank" class="whatsapp">

        <i class="fa-brands fa-whatsapp"></i>

    </a>


    <!-- =========================================================
     SCROLL TOP
========================================================= -->

    <button class="scroll-top" id="scrollTop">

        <i class="fa-solid fa-arrow-up"></i>

    </button>






    <!-- =========================================================
     JAVASCRIPT
========================================================= -->

    <script>

        /* =========================================================
           PRELOADER
        ========================================================= */

        window.addEventListener(
            "load",
            function () {

                setTimeout(
                    function () {

                        document
                            .getElementById("preloader")
                            .classList
                            .add("hide");

                    },
                    700
                );

            }
        );


        /* =========================================================
           NAVBAR SCROLL
        ========================================================= */

        const navbar =
            document.getElementById("navbar");

        const scrollTop =
            document.getElementById("scrollTop");


        window.addEventListener(
            "scroll",
            function () {

                if (window.scrollY > 50) {

                    navbar.classList.add("scrolled");

                } else {

                    navbar.classList.remove("scrolled");

                }


                if (window.scrollY > 500) {

                    scrollTop.classList.add("show");

                } else {

                    scrollTop.classList.remove("show");

                }

            }
        );


        /* =========================================================
           MOBILE MENU
        ========================================================= */

        const mobileBtn =
            document.getElementById("mobileBtn");

        const menu =
            document.getElementById("menu");


        mobileBtn.addEventListener(
            "click",
            function () {

                menu.classList.toggle("open");

                const icon =
                    mobileBtn.querySelector("i");

                if (menu.classList.contains("open")) {

                    icon.className =
                        "fa-solid fa-xmark";

                } else {

                    icon.className =
                        "fa-solid fa-bars";

                }

            }
        );


        /* =========================================================
           CLOSE MOBILE MENU
        ========================================================= */

        document
            .querySelectorAll(".menu a")
            .forEach(
                function (link) {

                    link.addEventListener(
                        "click",
                        function () {

                            menu.classList.remove("open");

                            mobileBtn
                                .querySelector("i")
                                .className =
                                "fa-solid fa-bars";

                        }
                    );

                }
            );


        /* =========================================================
           SCROLL REVEAL
        ========================================================= */

        const revealElements =
            document.querySelectorAll(
                ".reveal, .reveal-left, .reveal-right"
            );


        const revealObserver =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add("active");

                                revealObserver
                                    .unobserve(
                                        entry.target
                                    );

                            }

                        }
                    );

                },

                {
                    threshold: 0.12
                }

            );


        revealElements.forEach(
            function (element) {

                revealObserver.observe(
                    element
                );

            }
        );


        /* =========================================================
           COUNTER ANIMATION
        ========================================================= */

        const counters =
            document.querySelectorAll(
                "[data-count]"
            );


        let counterStarted = false;


        const counterObserver =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting &&
                                !counterStarted
                            ) {

                                counterStarted = true;

                                counters.forEach(
                                    function (counter) {

                                        const target =
                                            Number(
                                                counter.dataset.count
                                            );

                                        let current = 0;

                                        const increment =
                                            Math.max(
                                                1,
                                                Math.ceil(
                                                    target / 60
                                                )
                                            );


                                        const timer =
                                            setInterval(
                                                function () {

                                                    current +=
                                                        increment;

                                                    if (
                                                        current >=
                                                        target
                                                    ) {

                                                        current =
                                                            target;

                                                        clearInterval(
                                                            timer
                                                        );

                                                    }


                                                    counter.textContent =
                                                        current + "+";

                                                },
                                                25
                                            );

                                    }
                                );

                            }

                        }
                    );

                },

                {
                    threshold: 0.4
                }

            );


        if (counters.length) {

            counterObserver.observe(
                counters[0]
            );

        }


        /* =========================================================
           SCROLL TOP
        ========================================================= */

        scrollTop.addEventListener(
            "click",
            function () {

                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

            }
        );


        /* =========================================================
           3D CARD EFFECT
        ========================================================= */

        document
            .querySelectorAll(".service-card")
            .forEach(
                function (card) {

                    card.addEventListener(
                        "mousemove",
                        function (e) {

                            const rect =
                                card.getBoundingClientRect();

                            const x =
                                e.clientX -
                                rect.left;

                            const y =
                                e.clientY -
                                rect.top;

                            const centerX =
                                rect.width / 2;

                            const centerY =
                                rect.height / 2;

                            const rotateX =
                                ((y - centerY) /
                                    centerY) * -3;

                            const rotateY =
                                ((x - centerX) /
                                    centerX) * 3;


                            card.style.transform =
                                `
                            perspective(900px)
                            rotateX(${rotateX}deg)
                            rotateY(${rotateY}deg)
                            translateY(-8px)
                            `;
                        }
                    );


                    card.addEventListener(
                        "mouseleave",
                        function () {

                            card.style.transform =
                                "";

                        }
                    );

                }
            );


        /* =========================================================
           CURRENT YEAR
        ========================================================= */

        document
            .getElementById("year")
            .textContent =
            new Date().getFullYear();


        /* =========================================================
           HERO MOUSE PARALLAX
        ========================================================= */

        const heroVisual =
            document.querySelector(
                ".hero-image"
            );


        if (
            heroVisual &&
            window.innerWidth > 900
        ) {

            document.addEventListener(
                "mousemove",
                function (e) {

                    const x =
                        (window.innerWidth / 2 -
                            e.clientX) / 80;

                    const y =
                        (window.innerHeight / 2 -
                            e.clientY) / 100;


                    heroVisual.style.transform =
                        `
                    translate(${x}px,${y}px)
                    `;
                }
            );

        }


    </script>

</body>

</html>