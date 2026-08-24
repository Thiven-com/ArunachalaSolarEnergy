@extends('layouts.website')

@section('content')

    <!-- =========================================================
         SOLAR PROJECTS PAGE
    ========================================================= -->

    <section class="solar-hero">

        <div class="solar-hero-grid"></div>

        <div class="solar-hero-orb"></div>

        <span class="solar-hero-dot"></span>
        <span class="solar-hero-dot"></span>
        <span class="solar-hero-dot"></span>
        <span class="solar-hero-dot"></span>


        <div class="container">

            <div class="solar-hero-content">

                <!-- Breadcrumb -->
                <div class="solar-breadcrumb">

                    <a href="{{ route('home') }}">
                        Home
                    </a>

                    <span>/</span>

                    <strong>
                        Projects
                    </strong>

                </div>


                <!-- Label -->
                <div class="solar-hero-label">

                    <i></i>

                    Solar Projects

                </div>


                <!-- Heading -->
                <h1>
                    Turning Sunlight
                    Into <span>Progress.</span>
                </h1>


                <!-- Description -->
                <p class="solar-hero-description">

                    Explore Arunachala Solar projects delivering
                    clean, reliable and efficient solar energy for
                    homes, businesses and industries.

                </p>

            </div>

        </div>


        <!-- =====================================================
             HERO STATS
        ====================================================== -->

        <div class="solar-stat-bar">

            <div class="container">

                <div class="solar-stats">


                    <!-- STAT 01 -->
                    <div class="solar-stat">

                        <strong class="solar-counter" data-target="100" data-suffix="+">
                            0
                        </strong>

                        <span>
                            Solar Installations
                        </span>

                    </div>


                    <!-- STAT 02 -->
                    <div class="solar-stat">

                        <strong class="solar-counter" data-target="1" data-suffix="+ MW">
                            0
                        </strong>

                        <span>
                            Installed Capacity
                        </span>

                    </div>


                    <!-- STAT 03 -->
                    <div class="solar-stat">

                        <strong class="solar-counter" data-target="500" data-suffix="+">
                            0
                        </strong>

                        <span>
                            Happy Customers
                        </span>

                    </div>


                    <!-- STAT 04 -->
                    <div class="solar-stat">

                        <strong class="solar-counter" data-target="25" data-suffix="+">
                            0
                        </strong>

                        <span>
                            Years Clean Energy
                        </span>

                    </div>


                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         PROJECTS SECTION
    ========================================================= -->

    <section class="solar-projects-section">

        <div class="container">


            <!-- SECTION HEADING -->

            <div class="solar-section-heading solar-reveal">

                <div>

                    <div class="solar-section-kicker">
                        Our Projects
                    </div>

                    <h2>
                        Clean Energy.
                        <br>
                        Real Impact.
                    </h2>

                </div>


                <p>

                    From residential rooftops to commercial and
                    industrial installations, Arunachala Solar
                    creates solutions designed around real energy
                    requirements.

                </p>

            </div>


            <!-- =====================================================
                 FILTER
            ====================================================== -->

            <div class="solar-filter-bar solar-reveal" role="tablist" aria-label="Project categories">

                <button class="solar-filter-button active" data-filter="all" type="button">
                    All Projects
                </button>


                <button class="solar-filter-button" data-filter="residential" type="button">
                    Residential
                </button>


                <button class="solar-filter-button" data-filter="commercial" type="button">
                    Commercial
                </button>


                <button class="solar-filter-button" data-filter="industrial" type="button">
                    Industrial
                </button>

            </div>


            <!-- =====================================================
                 PROJECT GRID
            ====================================================== -->

            <div class="solar-project-grid" id="solarProjectGrid">


                <!-- =================================================
                     PROJECT 01
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="residential">

                    <div class="solar-project-image">

                        <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1400&q=85"
                            alt="Residential rooftop solar installation" loading="lazy">

                        <div class="solar-project-number">
                            01
                        </div>

                        <div class="solar-project-type">
                            Residential
                        </div>

                        <div class="solar-project-capacity">
                            5 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            Andhra Pradesh
                        </div>

                        <h3>
                            Residential Rooftop Solar
                        </h3>

                        <p>
                            A modern rooftop solar installation
                            designed to reduce household electricity
                            costs and provide dependable clean energy.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


                <!-- =================================================
                     PROJECT 02
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="commercial">

                    <div class="solar-project-image">

                        <img src="https://images.unsplash.com/photo-1559302504-64aae6ca6b6d?auto=format&fit=crop&w=1400&q=85"
                            alt="Commercial rooftop solar project" loading="lazy">

                        <div class="solar-project-number">
                            02
                        </div>

                        <div class="solar-project-type">
                            Commercial
                        </div>

                        <div class="solar-project-capacity">
                            25 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            Chittoor
                        </div>

                        <h3>
                            Commercial Rooftop Installation
                        </h3>

                        <p>
                            A commercial solar solution designed to
                            lower operational energy costs and improve
                            long-term energy efficiency.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


                <!-- =================================================
                     PROJECT 03
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="industrial">

                    <div class="solar-project-image">

                        <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&w=1400&q=85"
                            alt="Industrial solar power plant" loading="lazy">

                        <div class="solar-project-number">
                            03
                        </div>

                        <div class="solar-project-type">
                            Industrial
                        </div>

                        <div class="solar-project-capacity">
                            100 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            Andhra Pradesh
                        </div>

                        <h3>
                            Industrial Solar Power Plant
                        </h3>

                        <p>
                            A high-capacity solar installation created
                            to support industrial energy requirements
                            while reducing conventional power usage.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


                <!-- =================================================
                     PROJECT 04
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="residential">

                    <div class="solar-project-image">

                        <img src="https://images.unsplash.com/photo-1613665813446-82a78c468a1d?auto=format&fit=crop&w=1400&q=85"
                            alt="Residential solar panel installation" loading="lazy">

                        <div class="solar-project-number">
                            04
                        </div>

                        <div class="solar-project-type">
                            Residential
                        </div>

                        <div class="solar-project-capacity">
                            3 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            Tirupati Region
                        </div>

                        <h3>
                            Home Solar Power System
                        </h3>

                        <p>
                            A compact and efficient rooftop solar
                            solution created for everyday residential
                            electricity requirements.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


                <!-- =================================================
                     PROJECT 05
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="commercial">

                    <div class="solar-project-image">

                        <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=1400&q=85"
                            alt="Commercial solar energy installation" loading="lazy">

                        <div class="solar-project-number">
                            05
                        </div>

                        <div class="solar-project-type">
                            Commercial
                        </div>

                        <div class="solar-project-capacity">
                            50 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            Chittoor District
                        </div>

                        <h3>
                            Business Solar Installation
                        </h3>

                        <p>
                            A scalable commercial solar project
                            delivering clean electricity while helping
                            businesses manage energy expenses.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


                <!-- =================================================
                     PROJECT 06
                ================================================= -->

                <article class="solar-project-card solar-reveal solar-show" data-category="industrial">

                    <div class="solar-project-image">

                        <img src="{{asset('website')}}/images/insolar.png"
                            alt="Large scale solar installation" loading="lazy">

                        <div class="solar-project-number">
                            06
                        </div>

                        <div class="solar-project-type">
                            Industrial
                        </div>

                        <div class="solar-project-capacity">
                            250 KW Solar System
                        </div>

                    </div>


                    <div class="solar-project-content">

                        <div class="solar-project-location">
                            South India
                        </div>

                        <h3>
                            Large Scale Solar Installation
                        </h3>

                        <p>
                            A large-scale renewable energy installation
                            designed to deliver dependable solar
                            generation for high-energy operations.
                        </p>

                        <a href="{{ route('contact') }}" class="solar-project-link">
                            Discuss Your Project
                            <span>→</span>
                        </a>

                    </div>

                </article>


            </div>


            <!-- =====================================================
                 FEATURED PROJECT
            ====================================================== -->

            <!-- <div class="solar-featured-project solar-reveal">

                <div class="solar-featured-copy">

                    <small>
                        Arunachala Solar
                    </small>

                    <h3>
                        Your Roof Can Generate Power.
                    </h3>

                    <p>
                        Whether you are planning a residential,
                        commercial or industrial solar project,
                        Arunachala Solar can help create a solution
                        around your energy requirements.
                    </p>

                    <a href="{{ route('contact') }}" class="solar-featured-button">
                        Start Your Solar Project

                        <span>
                            →
                        </span>
                    </a>

                </div>


                <div class="solar-panel"></div>

            </div> -->


        </div>

    </section>


    <!-- =========================================================
         CTA
    ========================================================= -->

    <section class="solar-cta-section">

        <div class="container">

            <div class="solar-cta-box solar-reveal">

                <h2>
                    Ready to Go Solar?
                </h2>

                <p>
                    Talk to Arunachala Solar and discover how a
                    professionally designed solar system can help
                    reduce your electricity costs.
                </p>

                <a href="{{ route('contact') }}" class="solar-cta-button">
                    Get a Free Consultation
                    →
                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
         JAVASCRIPT
    ========================================================= -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {


            /* ========================================================
               PRELOADER
            ======================================================== */

            const preloader =
                document.getElementById("preloader");

            if (preloader) {

                window.addEventListener("load", function () {

                    setTimeout(function () {

                        preloader.classList.add("hide");

                    }, 500);

                });

            }


            /* ========================================================
               HEADER SCROLL
            ======================================================== */

            const header =
                document.getElementById("header");


            function handleHeader() {

                if (!header) return;


                if (window.scrollY > 45) {

                    header.classList.add("scrolled");

                } else {

                    header.classList.remove("scrolled");

                }

            }


            window.addEventListener(
                "scroll",
                handleHeader,
                { passive: true }
            );


            handleHeader();


            /* ========================================================
               MOBILE MENU
            ======================================================== */

            const menuToggle =
                document.getElementById("menuToggle");

            const mainNav =
                document.getElementById("mainNav");


            if (menuToggle && mainNav) {


                menuToggle.addEventListener(
                    "click",
                    function () {

                        const open =
                            mainNav.classList.toggle("open");


                        document.body.classList.toggle(
                            "menu-open",
                            open
                        );


                        menuToggle.setAttribute(
                            "aria-expanded",
                            open
                        );


                        menuToggle.textContent =
                            open ? "×" : "☰";

                    }
                );


                mainNav
                    .querySelectorAll("a")
                    .forEach(function (link) {

                        link.addEventListener(
                            "click",
                            function () {

                                mainNav.classList.remove(
                                    "open"
                                );


                                document.body.classList.remove(
                                    "menu-open"
                                );


                                menuToggle.setAttribute(
                                    "aria-expanded",
                                    "false"
                                );


                                menuToggle.textContent =
                                    "☰";

                            }
                        );

                    });

            }


            /* ========================================================
               SCROLL REVEAL
            ======================================================== */

            const revealElements =
                document.querySelectorAll(
                    ".solar-reveal"
                );


            if ("IntersectionObserver" in window) {


                const revealObserver =
                    new IntersectionObserver(
                        function (entries) {

                            entries.forEach(
                                function (entry) {

                                    if (
                                        entry.isIntersecting
                                    ) {

                                        entry.target.classList.add(
                                            "active"
                                        );


                                        revealObserver.unobserve(
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

            } else {

                revealElements.forEach(
                    function (element) {

                        element.classList.add(
                            "active"
                        );

                    }
                );

            }


            /* ========================================================
               COUNTERS
            ======================================================== */

            const counters =
                document.querySelectorAll(
                    ".solar-counter"
                );


            let countersStarted = false;


            function animateCounters() {


                if (
                    countersStarted ||
                    counters.length === 0
                ) {
                    return;
                }


                const heroStats =
                    document.querySelector(
                        ".solar-stats"
                    );


                if (!heroStats) return;


                const rect =
                    heroStats.getBoundingClientRect();


                if (
                    rect.top >
                    window.innerHeight
                ) {
                    return;
                }


                countersStarted = true;


                counters.forEach(
                    function (counter) {


                        const target =
                            Number(
                                counter.dataset.target
                            );


                        const suffix =
                            counter.dataset.suffix || "";


                        const duration =
                            1400;


                        const startTime =
                            performance.now();


                        function updateCounter(
                            currentTime
                        ) {


                            const progress =
                                Math.min(
                                    (
                                        currentTime -
                                        startTime
                                    ) / duration,
                                    1
                                );


                            const eased =
                                1 -
                                Math.pow(
                                    1 - progress,
                                    3
                                );


                            const value =
                                Math.floor(
                                    eased * target
                                );


                            counter.textContent =
                                value + suffix;


                            if (
                                progress < 1
                            ) {

                                requestAnimationFrame(
                                    updateCounter
                                );

                            } else {

                                counter.textContent =
                                    target + suffix;

                            }

                        }


                        requestAnimationFrame(
                            updateCounter
                        );

                    }
                );

            }


            window.addEventListener(
                "scroll",
                animateCounters,
                { passive: true }
            );


            animateCounters();


            /* ========================================================
               PROJECT FILTER
            ======================================================== */

            const filterButtons =
                document.querySelectorAll(
                    ".solar-filter-button"
                );


            const projectCards =
                document.querySelectorAll(
                    ".solar-project-card"
                );


            filterButtons.forEach(
                function (button) {


                    button.addEventListener(
                        "click",
                        function () {


                            const filter =
                                button.dataset.filter;


                            /* Active button */

                            filterButtons.forEach(
                                function (btn) {

                                    btn.classList.remove(
                                        "active"
                                    );

                                }
                            );


                            button.classList.add(
                                "active"
                            );


                            /* Reset card transforms */

                            projectCards.forEach(
                                function (card) {

                                    card.style.transform =
                                        "";

                                }
                            );


                            /* Filter cards */

                            projectCards.forEach(
                                function (card) {


                                    const category =
                                        card.dataset.category;


                                    const shouldShow =
                                        filter === "all" ||
                                        category === filter;


                                    if (shouldShow) {


                                        card.classList.remove(
                                            "solar-hide"
                                        );


                                        requestAnimationFrame(
                                            function () {

                                                card.classList.add(
                                                    "solar-show"
                                                );

                                            }
                                        );


                                    } else {


                                        card.classList.remove(
                                            "solar-show"
                                        );


                                        card.classList.add(
                                            "solar-hide"
                                        );

                                    }

                                }
                            );

                        }
                    );

                }
            );


            /* ========================================================
               3D PROJECT CARD
            ======================================================== */

            const cards =
                document.querySelectorAll(
                    ".solar-project-card"
                );


            const supportsHover =
                window.matchMedia(
                    "(hover: hover)"
                ).matches;


            if (supportsHover) {


                cards.forEach(
                    function (card) {


                        card.addEventListener(
                            "mousemove",
                            function (event) {


                                if (
                                    card.classList.contains(
                                        "solar-hide"
                                    )
                                ) {
                                    return;
                                }


                                const rect =
                                    card.getBoundingClientRect();


                                const x =
                                    event.clientX -
                                    rect.left;


                                const y =
                                    event.clientY -
                                    rect.top;


                                const centerX =
                                    rect.width / 2;


                                const centerY =
                                    rect.height / 2;


                                const rotateX =
                                    (
                                        (y - centerY) /
                                        centerY
                                    ) * -1.2;


                                const rotateY =
                                    (
                                        (x - centerX) /
                                        centerX
                                    ) * 1.2;


                                card.style.transform =
                                    `perspective(1100px)
                                 rotateX(${rotateX}deg)
                                 rotateY(${rotateY}deg)
                                 translateY(-8px)`;

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

            }


            /* ========================================================
               MAGNETIC CTA
            ======================================================== */

            const ctaButtons =
                document.querySelectorAll(
                    ".solar-cta-button, .solar-featured-button"
                );


            if (supportsHover) {


                ctaButtons.forEach(
                    function (button) {


                        button.addEventListener(
                            "mousemove",
                            function (event) {


                                const rect =
                                    button.getBoundingClientRect();


                                const x =
                                    event.clientX -
                                    rect.left -
                                    rect.width / 2;


                                const y =
                                    event.clientY -
                                    rect.top -
                                    rect.height / 2;


                                button.style.transform =
                                    `translate(
                                    ${x * 0.08}px,
                                    ${y * 0.08}px
                                )`;

                            }
                        );


                        button.addEventListener(
                            "mouseleave",
                            function () {

                                button.style.transform =
                                    "";

                            }
                        );

                    }
                );

            }


            /* ========================================================
               SOLAR PANEL PARALLAX
            ======================================================== */

            const panel =
                document.querySelector(
                    ".solar-panel"
                );


            function updateSolarPanel() {


                if (!panel) return;


                const parent =
                    panel.parentElement;


                if (!parent) return;


                const rect =
                    parent.getBoundingClientRect();


                const offset =
                    (
                        window.innerHeight -
                        rect.top
                    ) * 0.025;


                const movement =
                    Math.max(
                        -30,
                        Math.min(30, offset)
                    );


                panel.style.transform =
                    `translateY(${movement}px)`;

            }


            window.addEventListener(
                "scroll",
                updateSolarPanel,
                { passive: true }
            );


            updateSolarPanel();


            /* ========================================================
               ESCAPE KEY - MOBILE MENU
            ======================================================== */

            document.addEventListener(
                "keydown",
                function (event) {


                    if (
                        event.key === "Escape" &&
                        mainNav &&
                        mainNav.classList.contains("open")
                    ) {


                        mainNav.classList.remove(
                            "open"
                        );


                        document.body.classList.remove(
                            "menu-open"
                        );


                        if (menuToggle) {

                            menuToggle.setAttribute(
                                "aria-expanded",
                                "false"
                            );


                            menuToggle.textContent =
                                "☰";

                        }

                    }

                }
            );


        });

    </script>



    <style>
        /* =========================================================
       ARUNACHALA SOLAR - PROJECTS PAGE
       UNIQUE SOLAR CLASS NAMES
    ========================================================= */

        :root {
            --blue: #063b68;
            --blue-light: #0879bb;
            --blue-dark: #03294b;

            --orange: #f47718;
            --orange-light: #ff9b35;

            --gold: #f3ad2d;

            --white: #ffffff;
            --black: #101820;

            --text: #172b3f;
            --muted: #65788a;

            --light: #f4f9fc;

            --border: #e5edf3;

            --shadow:
                0 20px 60px rgba(4, 49, 82, 0.12);

            --radius: 22px;

            --transition:
                all 0.4s cubic-bezier(.2, .8, .2, 1);
        }


        /* =========================================================
       GLOBAL
    ========================================================= */

        .solar-hero,
        .solar-projects-section,
        .solar-cta-section {
            width: 100%;
        }

        .solar-hero *,
        .solar-projects-section *,
        .solar-cta-section * {
            box-sizing: border-box;
        }

        .solar-hero a,
        .solar-projects-section a,
        .solar-cta-section a {
            text-decoration: none;
        }

        .solar-hero img,
        .solar-projects-section img,
        .solar-cta-section img {
            display: block;
            max-width: 100%;
        }


        /* =========================================================
       HERO
    ========================================================= */

        .solar-hero {
            position: relative;

            min-height: 680px;

            display: flex;
            align-items: center;

            overflow: hidden;

            color: var(--white);

            background:
                radial-gradient(circle at 82% 25%,
                    rgba(8, 121, 187, 0.25),
                    transparent 35%),
                linear-gradient(135deg,
                    var(--blue-dark) 0%,
                    var(--blue) 55%,
                    #075a8f 100%);
        }


        /* Grid */

        .solar-hero-grid {
            position: absolute;

            inset: 0;

            background-image:
                linear-gradient(rgba(255, 255, 255, 0.045) 1px,
                    transparent 1px),
                linear-gradient(90deg,
                    rgba(255, 255, 255, 0.045) 1px,
                    transparent 1px);

            background-size: 55px 55px;

            opacity: .55;

            pointer-events: none;

            mask-image:
                linear-gradient(to right,
                    black 0%,
                    transparent 85%);
        }


        /* Glow */

        .solar-hero-orb {
            position: absolute;

            width: 520px;
            height: 520px;

            right: -150px;
            top: 50%;

            transform: translateY(-50%);

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(244, 119, 24, .28) 0%,
                    rgba(243, 173, 45, .12) 32%,
                    transparent 70%);

            filter: blur(8px);

            pointer-events: none;
        }


        /* Decorative dots */

        .solar-hero-dot {
            position: absolute;

            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--gold);

            box-shadow:
                0 0 20px rgba(243, 173, 45, .8);

            opacity: .85;

            z-index: 2;
        }

        .solar-hero-dot:nth-of-type(1) {
            top: 18%;
            right: 25%;
        }

        .solar-hero-dot:nth-of-type(2) {
            top: 38%;
            right: 12%;
        }

        .solar-hero-dot:nth-of-type(3) {
            bottom: 25%;
            right: 30%;
        }

        .solar-hero-dot:nth-of-type(4) {
            bottom: 15%;
            left: 15%;
        }


        /* =========================================================
       HERO CONTENT
    ========================================================= */

        .solar-hero .container {
            position: relative;
            z-index: 4;
        }

        .solar-hero-content {
            max-width: 760px;

            padding:
                120px 0 170px;
        }


        /* Breadcrumb */

        .solar-breadcrumb {
            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 28px;

            color:
                rgba(255, 255, 255, .68);

            font-size: 14px;
        }

        .solar-breadcrumb a {
            color:
                rgba(255, 255, 255, .68);

            transition: var(--transition);
        }

        .solar-breadcrumb a:hover {
            color: var(--orange-light);
        }

        .solar-breadcrumb strong {
            color: var(--white);

            font-weight: 600;
        }


        /* Label */

        .solar-hero-label {
            display: inline-flex;

            align-items: center;

            gap: 10px;

            padding:
                8px 16px;

            margin-bottom: 22px;

            border:
                1px solid rgba(255, 255, 255, .16);

            border-radius: 50px;

            color: var(--orange-light);

            background:
                rgba(255, 255, 255, .07);

            backdrop-filter: blur(12px);

            font-size: 13px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }

        .solar-hero-label i {
            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: var(--gold);

            box-shadow:
                0 0 12px rgba(243, 173, 45, .9);
        }


        /* Hero heading */

        .solar-hero h1 {
            max-width: 800px;

            margin: 0 0 28px;

            color: var(--white);

            font-size:
                clamp(48px, 7vw, 82px);

            line-height: 1.02;

            letter-spacing: -3px;

            font-weight: 800;
        }

        .solar-hero h1 span {
            background:
                linear-gradient(90deg,
                    var(--orange),
                    var(--gold));

            -webkit-background-clip: text;
            background-clip: text;

            -webkit-text-fill-color: transparent;
        }


        /* Description */

        .solar-hero-description {
            max-width: 630px;

            margin: 0;

            color:
                rgba(255, 255, 255, .76);

            font-size: 18px;

            line-height: 1.8;
        }


        /* =========================================================
       HERO STATS
    ========================================================= */

        .solar-stat-bar {
            position: absolute;

            left: 0;
            right: 0;
            bottom: 0;

            z-index: 5;

            border-top:
                1px solid rgba(255, 255, 255, .12);

            background:
                rgba(3, 41, 75, .76);

            backdrop-filter: blur(16px);
        }

        .solar-stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            min-height: 120px;
        }

        .solar-stat {
            position: relative;

            display: flex;

            flex-direction: column;

            justify-content: center;

            padding:
                25px 30px;
        }

        .solar-stat:not(:last-child)::after {
            content: "";

            position: absolute;

            top: 28px;
            right: 0;

            width: 1px;
            height: 65px;

            background:
                rgba(255, 255, 255, .12);
        }

        .solar-counter {
            display: block;

            margin-bottom: 8px;

            color: var(--white);

            font-size: 32px;

            line-height: 1;

            font-weight: 800;
        }

        .solar-stat span {
            color:
                rgba(255, 255, 255, .60);

            font-size: 13px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        /* =========================================================
       PROJECT SECTION
    ========================================================= */

        .solar-projects-section {
            padding: 110px 0;

            background:
                linear-gradient(180deg,
                    var(--white) 0%,
                    var(--light) 100%);
        }


        /* Section heading */

        .solar-section-heading {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 50px;

            margin-bottom: 50px;
        }

        .solar-section-heading>div {
            flex: 1;
        }

        .solar-section-kicker {
            display: inline-flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 15px;

            color: var(--orange);

            font-size: 13px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.8px;
        }

        .solar-section-kicker::before {
            content: "";

            width: 30px;
            height: 3px;

            border-radius: 5px;

            background:
                linear-gradient(90deg,
                    var(--orange),
                    var(--gold));
        }

        .solar-section-heading h2 {
            margin: 0;

            color: var(--blue-dark);

            font-size:
                clamp(38px, 5vw, 58px);

            line-height: 1.08;

            letter-spacing: -2px;

            font-weight: 800;
        }

        .solar-section-heading>p {
            max-width: 480px;

            margin: 0;

            color: var(--muted);

            font-size: 16px;

            line-height: 1.8;
        }


        /* =========================================================
       FILTER
    ========================================================= */

        .solar-filter-bar {
            display: flex;

            align-items: center;

            flex-wrap: wrap;

            gap: 8px;

            width: fit-content;

            margin-bottom: 40px;

            padding: 8px;

            border:
                1px solid var(--border);

            border-radius: 60px;

            background: var(--white);

            box-shadow:
                0 10px 30px rgba(4, 49, 82, .06);
        }

        .solar-filter-button {
            border: 0;

            outline: none;

            padding:
                12px 22px;

            border-radius: 50px;

            color: var(--muted);

            background: transparent;

            cursor: pointer;

            font-size: 14px;

            font-weight: 700;

            transition: var(--transition);
        }

        .solar-filter-button:hover {
            color: var(--blue);

            background: var(--light);
        }

        .solar-filter-button.active {
            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--blue),
                    var(--blue-light));

            box-shadow:
                0 8px 20px rgba(6, 59, 104, .22);
        }


        /* =========================================================
       PROJECT GRID
    ========================================================= */

        .solar-project-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 28px;

            position: relative;
        }


        /* =========================================================
       PROJECT CARD
    ========================================================= */

        .solar-project-card {
            position: relative;

            overflow: hidden;

            border:
                1px solid var(--border);

            border-radius: var(--radius);

            background: var(--white);

            box-shadow:
                0 10px 35px rgba(4, 49, 82, .06);

            transition:
                opacity .35s ease,
                transform .45s cubic-bezier(.2, .8, .2, 1),
                box-shadow .4s ease,
                border-color .4s ease;

            transform-style: preserve-3d;
        }

        .solar-project-card:hover {
            border-color:
                rgba(8, 121, 187, .20);

            box-shadow:
                var(--shadow);
        }


        /* Hidden */

        .solar-project-card.solar-hide {
            opacity: 0;

            transform:
                translateY(25px) scale(.96);

            pointer-events: none;

            position: absolute;

            visibility: hidden;
        }


        /* Visible */

        .solar-project-card.solar-show {
            opacity: 1;

            visibility: visible;

            position: relative;
        }


        /* =========================================================
       PROJECT IMAGE
    ========================================================= */

        .solar-project-image {
            position: relative;

            height: 285px;

            overflow: hidden;

            background: var(--blue-dark);
        }

        .solar-project-image::after {
            content: "";

            position: absolute;

            inset: 0;

            z-index: 1;

            background:
                linear-gradient(180deg,
                    rgba(3, 41, 75, .03) 20%,
                    rgba(3, 41, 75, .80) 100%);
        }

        .solar-project-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            transition:
                transform .7s cubic-bezier(.2, .8, .2, 1);
        }

        .solar-project-card:hover .solar-project-image img {
            transform: scale(1.08);
        }


        /* Number */

        .solar-project-number {
            position: absolute;

            top: 18px;
            left: 18px;

            z-index: 3;

            display: flex;

            align-items: center;
            justify-content: center;

            width: 44px;
            height: 44px;

            border:
                1px solid rgba(255, 255, 255, .16);

            border-radius: 12px;

            color: var(--white);

            background:
                rgba(3, 41, 75, .72);

            backdrop-filter: blur(10px);

            font-size: 13px;

            font-weight: 800;
        }


        /* Type */

        .solar-project-type {
            position: absolute;

            top: 20px;
            right: 18px;

            z-index: 3;

            padding:
                7px 13px;

            border-radius: 50px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .8px;

            box-shadow:
                0 8px 20px rgba(244, 119, 24, .25);
        }


        /* Capacity */

        .solar-project-capacity {
            position: absolute;

            left: 20px;
            bottom: 18px;

            z-index: 3;

            color: var(--white);

            font-size: 15px;

            font-weight: 700;
        }


        /* =========================================================
       PROJECT CONTENT
    ========================================================= */

        .solar-project-content {
            padding: 28px;
        }

        .solar-project-location {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-bottom: 10px;

            color: var(--blue-light);

            font-size: 12px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        .solar-project-location::before {
            content: "";

            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--orange);
        }

        .solar-project-content h3 {
            margin:
                0 0 12px;

            color: var(--blue-dark);

            font-size: 22px;

            line-height: 1.3;

            font-weight: 800;

            transition: var(--transition);
        }

        .solar-project-card:hover .solar-project-content h3 {
            color: var(--blue-light);
        }

        .solar-project-content p {
            margin:
                0 0 22px;

            color: var(--muted);

            font-size: 14px;

            line-height: 1.75;
        }


        /* Project link */

        .solar-project-link {
            display: inline-flex;

            align-items: center;

            gap: 10px;

            color: var(--blue);

            font-size: 13px;

            font-weight: 800;

            transition: var(--transition);
        }

        .solar-project-link span {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 28px;
            height: 28px;

            border-radius: 50%;

            color: var(--white);

            background: var(--blue);

            transition: var(--transition);
        }

        .solar-project-link:hover {
            color: var(--orange);
        }

        .solar-project-link:hover span {
            background: var(--orange);

            transform: translateX(4px);
        }


        /* =========================================================
       FEATURED PROJECT
    ========================================================= */

        .solar-featured-project {
            position: relative;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            min-height: 360px;

            overflow: hidden;

            margin-top: 90px;

            border-radius: 30px;

            background:
                linear-gradient(135deg,
                    var(--blue-dark),
                    var(--blue));

            box-shadow:
                var(--shadow);
        }

        .solar-featured-copy {
            position: relative;

            z-index: 3;

            padding: 65px;
        }

        .solar-featured-copy small {
            display: block;

            margin-bottom: 15px;

            color: var(--orange-light);

            font-size: 12px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 2px;
        }

        .solar-featured-copy h3 {
            max-width: 500px;

            margin:
                0 0 20px;

            color: var(--white);

            font-size:
                clamp(32px, 4vw, 48px);

            line-height: 1.1;

            letter-spacing: -1.5px;
        }

        .solar-featured-copy p {
            max-width: 520px;

            margin:
                0 0 28px;

            color:
                rgba(255, 255, 255, .72);

            font-size: 15px;

            line-height: 1.8;
        }


        /* Featured button */

        .solar-featured-button {
            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding:
                14px 22px;

            border-radius: 50px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            font-size: 13px;

            font-weight: 800;

            box-shadow:
                0 12px 30px rgba(244, 119, 24, .22);

            transition: var(--transition);
        }

        .solar-featured-button span {
            font-size: 18px;

            transition: var(--transition);
        }

        .solar-featured-button:hover {
            box-shadow:
                0 18px 35px rgba(244, 119, 24, .30);
        }

        .solar-featured-button:hover span {
            transform: translateX(5px);
        }


        /* =========================================================
       SOLAR PANEL
    ========================================================= */

        .solar-panel {
            position: relative;

            min-height: 360px;

            overflow: hidden;

            background:
                linear-gradient(135deg,
                    #075487,
                    var(--blue-dark));

            transition:
                transform .4s ease;
        }

        .solar-panel::before {
            content: "";

            position: absolute;

            width: 430px;
            height: 280px;

            top: 50%;
            left: 50%;

            transform:
                translate(-35%, -50%) rotate(-12deg);

            border:
                2px solid rgba(255, 255, 255, .22);

            background:
                linear-gradient(135deg,
                    rgba(8, 121, 187, .45),
                    rgba(3, 41, 75, .95));

            box-shadow:
                0 30px 70px rgba(0, 0, 0, .35);

            clip-path:
                polygon(12% 0,
                    100% 0,
                    88% 100%,
                    0 100%);
        }

        .solar-panel::after {
            content: "";

            position: absolute;

            width: 360px;
            height: 360px;

            right: -100px;
            top: -100px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(243, 173, 45, .30),
                    transparent 65%);

            filter: blur(5px);
        }


        /* =========================================================
       CTA
    ========================================================= */

        .solar-cta-section {
            padding: 100px 0;

            background: var(--light);
        }

        .solar-cta-box {
            position: relative;

            overflow: hidden;

            padding:
                70px 60px;

            text-align: center;

            border-radius: 30px;

            background:
                linear-gradient(135deg,
                    var(--blue-dark),
                    var(--blue));

            box-shadow:
                var(--shadow);
        }

        .solar-cta-box::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            left: -150px;
            top: -180px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(8, 121, 187, .45),
                    transparent 70%);
        }

        .solar-cta-box::after {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            right: -120px;
            bottom: -160px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(244, 119, 24, .30),
                    transparent 70%);
        }

        .solar-cta-box h2 {
            position: relative;

            z-index: 2;

            margin:
                0 0 15px;

            color: var(--white);

            font-size:
                clamp(34px, 5vw, 52px);

            line-height: 1.1;

            letter-spacing: -1.5px;
        }

        .solar-cta-box p {
            position: relative;

            z-index: 2;

            max-width: 650px;

            margin:
                0 auto 30px;

            color:
                rgba(255, 255, 255, .72);

            font-size: 16px;

            line-height: 1.8;
        }


        /* CTA button */

        .solar-cta-button {
            position: relative;

            z-index: 2;

            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding:
                16px 26px;

            border-radius: 50px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            font-size: 14px;

            font-weight: 800;

            box-shadow:
                0 15px 35px rgba(244, 119, 24, .25);

            transition: var(--transition);
        }

        .solar-cta-button:hover {
            box-shadow:
                0 20px 45px rgba(244, 119, 24, .35);
        }


        /* =========================================================
       REVEAL ANIMATION
    ========================================================= */

        .solar-reveal {
            opacity: 0;

            transform:
                translateY(30px);

            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .solar-reveal.active {
            opacity: 1;

            transform:
                translateY(0);
        }


        /* =========================================================
       RESPONSIVE - TABLET
    ========================================================= */

        @media (max-width: 1000px) {

            .solar-hero {
                min-height: 650px;
            }

            .solar-hero-content {
                padding-top: 100px;
            }

            .solar-stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .solar-stat:nth-child(2)::after {
                display: none;
            }

            .solar-project-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .solar-section-heading {
                align-items: flex-start;

                flex-direction: column;

                gap: 20px;
            }

            .solar-featured-project {
                grid-template-columns: 1fr;
            }

            .solar-panel {
                min-height: 280px;
            }

            .solar-featured-copy {
                padding: 50px;
            }
        }


        /* =========================================================
       RESPONSIVE - MOBILE
    ========================================================= */

        @media (max-width: 700px) {

            .solar-hero {
                min-height: auto;
            }

            .solar-hero-content {
                padding:
                    100px 0 150px;
            }

            .solar-hero h1 {
                font-size: 48px;

                letter-spacing: -2px;
            }

            .solar-hero-description {
                font-size: 16px;
            }

            .solar-hero-orb {
                width: 300px;
                height: 300px;

                right: -150px;
            }


            /* Stats */

            .solar-stat-bar {
                position: relative;
            }

            .solar-stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .solar-stat {
                padding:
                    20px 15px;
            }

            .solar-stat:nth-child(2)::after {
                display: block;
            }

            .solar-counter {
                font-size: 26px;
            }

            .solar-stat span {
                font-size: 10px;
            }


            /* Projects */

            .solar-projects-section {
                padding: 75px 0;
            }

            .solar-section-heading h2 {
                font-size: 40px;

                letter-spacing: -1.5px;
            }


            /* Filter */

            .solar-filter-bar {
                width: 100%;

                justify-content: center;

                border-radius: 18px;
            }

            .solar-filter-button {
                padding:
                    10px 14px;

                font-size: 12px;
            }


            /* Grid */

            .solar-project-grid {
                grid-template-columns: 1fr;

                gap: 22px;
            }

            .solar-project-image {
                height: 250px;
            }


            /* Featured */

            .solar-featured-project {
                margin-top: 60px;

                border-radius: 24px;
            }

            .solar-featured-copy {
                padding:
                    40px 25px;
            }

            .solar-featured-copy h3 {
                font-size: 34px;
            }

            .solar-panel {
                min-height: 240px;
            }

            .solar-panel::before {
                width: 300px;
                height: 190px;
            }


            /* CTA */

            .solar-cta-section {
                padding: 70px 0;
            }

            .solar-cta-box {
                padding:
                    50px 25px;

                border-radius: 24px;
            }

            .solar-cta-box h2 {
                font-size: 36px;
            }
        }


        /* =========================================================
       RESPONSIVE - SMALL MOBILE
    ========================================================= */

        @media (max-width: 420px) {

            .solar-hero h1 {
                font-size: 42px;
            }


            .solar-stats {
                grid-template-columns: 1fr;
            }

            .solar-stat {
                border-bottom:
                    1px solid rgba(255, 255, 255, .10);
            }

            .solar-stat::after {
                display: none !important;
            }


            .solar-filter-bar {
                display: grid;

                grid-template-columns:
                    repeat(2, 1fr);

                border-radius: 18px;
            }

            .solar-filter-button {
                width: 100%;
            }


            .solar-project-content {
                padding: 23px;
            }

            .solar-project-content h3 {
                font-size: 20px;
            }
        }


        /* =========================================================
       ACCESSIBILITY
    ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            .solar-hero *,
            .solar-projects-section *,
            .solar-cta-section * {
                scroll-behavior: auto !important;

                animation-duration:
                    .01ms !important;

                animation-iteration-count:
                    1 !important;

                transition-duration:
                    .01ms !important;
            }

            .solar-project-card {
                transform: none !important;
            }

        }
    </style>

@endsection