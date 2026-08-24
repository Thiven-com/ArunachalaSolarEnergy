@extends('layouts.website')
@section('content')




    <!-- =========================================================
                     HERO
                ========================================================= -->

    <section class="page-hero">


        <div class="particle p1"></div>

        <div class="particle p2"></div>

        <div class="particle p3"></div>

        <div class="particle p4"></div>


        <div class="container">

            <div class="page-hero-content">

                <div class="breadcrumb">

                    <a href="index.html">
                        Home
                    </a>

                    <i class="fa-solid fa-chevron-right"></i>

                    <span>
                        Services
                    </span>

                </div>


                <h1>

                    Complete Solar

                    <span>
                        Energy Solutions
                    </span>

                </h1>


                <p>

                    From consultation and system design
                    to installation and ongoing support,
                    Arunachala Solar Energy provides
                    dependable solar solutions designed
                    around your energy requirements.

                </p>

            </div>

        </div>


        <div class="hero-solar">

            <i class="fa-solid fa-sun"></i>

        </div>

    </section>


    <!-- =========================================================
                     INTRO
                ========================================================= -->

    <section class="section">

        <div class="container services-intro">


            <div class="intro-image reveal-left">

                <div class="intro-image-wrap">

                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1100&q=90"
                        alt="Solar panels">

                </div>


                <div class="experience-badge">

                    <i class="fa-solid fa-solar-panel"></i>

                    <strong>
                        Solar First
                    </strong>

                    <span>
                        Clean Energy Approach
                    </span>

                </div>

            </div>


            <div class="intro-content reveal-right">

                <div class="eyebrow">
                    What We Do
                </div>


                <h2>

                    Turning Sunlight Into

                    <span>
                        Smart Energy
                    </span>

                </h2>


                <p>

                    We provide end-to-end solar energy
                    services for residential, commercial,
                    industrial and agricultural requirements.

                </p>


                <p>

                    Our team focuses on understanding your
                    electricity needs first, then designing
                    a practical system that delivers
                    dependable performance and long-term
                    value.

                </p>


                <div class="intro-points">

                    <div class="intro-point">

                        <i class="fa-solid fa-circle-check"></i>

                        Professional Installation

                    </div>


                    <div class="intro-point">

                        <i class="fa-solid fa-circle-check"></i>

                        Quality Components

                    </div>


                    <div class="intro-point">

                        <i class="fa-solid fa-circle-check"></i>

                        Customized Solutions

                    </div>


                    <div class="intro-point">

                        <i class="fa-solid fa-circle-check"></i>

                        Customer Support

                    </div>

                </div>


                <a href="{{ route('contact') }}" class="btn btn-orange">

                    Discuss Your Requirement

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
                     SERVICES
                ========================================================= -->

    <section class="section services-section">

        <div class="container">


            <div class="section-heading reveal">

                <div class="eyebrow">
                    Our Services
                </div>

                <h2>

                    Solar Services Built Around

                    <span>
                        You
                    </span>

                </h2>

                <p>

                    Whether you are looking to power a
                    home, business, farm or larger facility,
                    we help you move confidently toward
                    solar energy.

                </p>

            </div>


            <div class="services-grid">


                <!-- 01 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                       <i class="fa-solid fa-solar-panel"></i>

                    </div>

                    <h3>
                        Residential Solar
                    </h3>

                    <p>

                        Solar power systems for homes designed
                        to reduce electricity expenses and
                        increase energy independence.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 02 -->

                <div class="service-card featured reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-building"></i>

                    </div>

                    <h3>
                        Commercial Solar
                    </h3>

                    <p>

                        Efficient solar solutions for offices,
                        shops, institutions and commercial
                        facilities looking to manage energy
                        costs.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 03 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-industry"></i>

                    </div>

                    <h3>
                        Industrial Solar
                    </h3>

                    <p>

                        Scalable solar systems for industrial
                        applications with a focus on reliable
                        generation and operational savings.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 04 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-tractor"></i>

                    </div>

                    <h3>
                        Agricultural Solar
                    </h3>

                    <p>

                        Solar solutions supporting agricultural
                        applications, including energy needs
                        for farms and irrigation systems.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 05 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-solar-panel"></i>

                    </div>

                    <h3>
                        Rooftop Solar
                    </h3>

                    <p>

                        Make productive use of your rooftop
                        with a carefully planned solar power
                        generation system.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 06 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-battery-full"></i>

                    </div>

                    <h3>
                        Solar & Energy Storage
                    </h3>

                    <p>

                        Explore solar systems combined with
                        energy storage solutions for improved
                        energy availability and flexibility.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 07 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-screwdriver-wrench"></i>

                    </div>

                    <h3>
                        Installation
                    </h3>

                    <p>

                        Professional installation focused on
                        safety, clean execution and dependable
                        system performance.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 08 -->

                <div class="service-card reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-chart-line"></i>

                    </div>

                    <h3>
                        Solar Consultation
                    </h3>

                    <p>

                        Get guidance on system sizing,
                        solar potential, energy requirements
                        and suitable installation options.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


                <!-- 09 -->

                <div class="service-card featured reveal">

                    <div class="service-icon">

                        <i class="fa-solid fa-headset"></i>

                    </div>

                    <h3>
                        Maintenance & Support
                    </h3>

                    <p>

                        Ongoing assistance and maintenance
                        support to help keep your solar system
                        performing efficiently.

                    </p>

                    <a href="{{ route('contact') }}" class="service-link">

                        Contact Our Service

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
                     TWO FEATURE CARDS
                ========================================================= -->

    <section class="section highlight-section">

        <div class="container">


            <div class="section-heading reveal">

                <div class="eyebrow">
                    Our Commitment
                </div>

                <h2>

                    More Than Just

                    <span>
                        Solar Panels
                    </span>

                </h2>

                <p>

                    We focus on the complete energy journey,
                    from understanding your requirements to
                    helping you get the most from your solar
                    investment.

                </p>

            </div>


            <div class="highlight-grid">


                <div class="highlight-card reveal-left">

                    <div class="highlight-icon">

                        <i class="fa-solid fa-chart-pie"></i>

                    </div>

                    <h3>
                        Designed for Your Energy Needs
                    </h3>

                    <p>

                        Every property has different energy
                        consumption, available space and
                        operating requirements. Our solutions
                        are planned around these factors rather
                        than using a one-size-fits-all approach.

                    </p>

                </div>


                <div class="highlight-card orange reveal-right">

                    <div class="highlight-icon">

                        <i class="fa-solid fa-leaf"></i>

                    </div>

                    <h3>
                        Clean Energy. Long-Term Value.
                    </h3>

                    <p>

                        Solar energy can help reduce dependence
                        on conventional electricity while
                        supporting a cleaner and more
                        sustainable energy future.

                    </p>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
                     PROCESS
                ========================================================= -->

    <section class="section process-section">

        <div class="container">


            <div class="section-heading reveal">

                <div class="eyebrow">
                    Our Process
                </div>

                <h2>

                    Simple Steps to

                    <span>
                        Solar
                    </span>

                </h2>

                <p>

                    We keep the process transparent and
                    straightforward from the first discussion
                    to system support.

                </p>

            </div>


            <div class="process-grid">


                <div class="process-item reveal">

                    <div class="process-number">
                        01
                    </div>

                    <h3>
                        Consultation
                    </h3>

                    <p>

                        Understand your electricity
                        requirements and goals.

                    </p>

                </div>


                <div class="process-item reveal">

                    <div class="process-number">
                        02
                    </div>

                    <h3>
                        Assessment
                    </h3>

                    <p>

                        Evaluate your site, roof,
                        energy usage and solar potential.

                    </p>

                </div>


                <div class="process-item reveal">

                    <div class="process-number">
                        03
                    </div>

                    <h3>
                        Installation
                    </h3>

                    <p>

                        Implement the selected solar
                        solution with attention to quality.

                    </p>

                </div>


                <div class="process-item reveal">

                    <div class="process-number">
                        04
                    </div>

                    <h3>
                        Support
                    </h3>

                    <p>

                        Continue supporting your system
                        after installation.

                    </p>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
                     STATS
                ========================================================= -->

    <section class="stats-section">

        <div class="container">

            <div class="stats reveal">


                <div class="stat">

                    <i class="fa-solid fa-users"></i>

                    <strong data-count="500">
                        0
                    </strong>

                    <span>
                        Happy Customers
                    </span>

                </div>


                <div class="stat">

                    <i class="fa-solid fa-solar-panel"></i>

                    <strong data-count="1000">
                        0
                    </strong>

                    <span>
                        Solar Projects
                    </span>

                </div>


                <div class="stat">

                    <i class="fa-solid fa-bolt"></i>

                    <strong data-count="10">
                        0
                    </strong>

                    <span>
                        Years Experience
                    </span>

                </div>


                <div class="stat">

                    <i class="fa-solid fa-leaf"></i>

                    <strong data-count="100">
                        0
                    </strong>

                    <span>
                        Clean Energy Focus
                    </span>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
                     CTA
                ========================================================= -->

    <section class="cta">

        <div class="container cta-inner">


            <div class="reveal-left">

                <div class="eyebrow" style="color:#ff9b35">

                    GO SOLAR TODAY

                </div>


                <h2>

                    Ready to Switch to

                    <span>
                        Solar Energy?
                    </span>

                </h2>


                <p>

                    Tell us about your energy requirements.
                    Our team can help you explore a solar
                    solution suitable for your home, business,
                    farm or facility.

                </p>

            </div>


            <div class="cta-buttons reveal-right">

                <a href="{{ route('contact') }}" class="btn btn-white">

                    <i class="fa-solid fa-calculator"></i>

                    Get a Free Quote

                </a>


                <a href="https://wa.me/919642093403" target="_blank" class="btn btn-orange">

                    <i class="fa-brands fa-whatsapp"></i>

                    WhatsApp Us

                </a>

            </div>


        </div>

    </section>

    <style>
        /* =========================================================
       ROOT
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
                0 20px 60px rgba(4, 49, 82, .12);

            --transition:
                all .4s cubic-bezier(.2, .8, .2, 1);

        }


        /* =========================================================
       RESET
    ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            font-family: "Inter", sans-serif;

            color: var(--text);

            background: #fff;

            overflow-x: hidden;

        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        button {
            font-family: inherit;
        }

        .container {

            width:
                min(1180px, 92%);

            margin:
                auto;

        }


       

        /* =========================================================
       PAGE HERO
    ========================================================= */

        .page-hero {

            min-height: 455px;

            position: relative;

            display: flex;

            align-items: center;

            overflow: hidden;

            background:
                linear-gradient(110deg,
                    #032f52,
                    #076495);

        }


        /* background circles */

        .page-hero::before {

            content: "";

            position: absolute;

            width: 650px;

            height: 650px;

            border:
                1px solid rgba(255, 255, 255, .08);

            border-radius: 50%;

            right: -260px;

            top: -220px;

            animation:
                rotateSlow 22s linear infinite;

        }

        .page-hero::after {

            content: "";

            position: absolute;

            width: 450px;

            height: 450px;

            border:
                1px solid rgba(244, 119, 24, .2);

            border-radius: 50%;

            left: -250px;

            bottom: -280px;

            animation:
                rotateSlow 16s linear infinite reverse;

        }

        @keyframes rotateSlow {

            to {
                transform: rotate(360deg);
            }

        }


        /* floating particles */

        .particle {

            position: absolute;

            width: 5px;

            height: 5px;

            border-radius: 50%;

            background:
                var(--orange);

            opacity: .7;

            animation:
                particleFloat 6s ease-in-out infinite;

        }

        .p1 {
            top: 20%;
            left: 15%;
        }

        .p2 {
            top: 65%;
            left: 35%;
            animation-delay: 1s;
        }

        .p3 {
            top: 25%;
            right: 35%;
            animation-delay: 2s;
        }

        .p4 {
            top: 75%;
            right: 18%;
            animation-delay: 3s;
        }

        @keyframes particleFloat {

            0%,
            100% {
                transform:
                    translateY(0) scale(1);
            }

            50% {
                transform:
                    translateY(-25px) scale(1.5);
            }

        }


        .page-hero-content {

            position: relative;

            z-index: 3;

            color: #fff;

            max-width: 700px;

        }

        .breadcrumb {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 12px;

            color:
                rgba(255, 255, 255, .7);

            margin-bottom: 20px;

            animation:
                slideDown .8s ease both;

        }

        .breadcrumb span {

            color:
                var(--orange);

        }

        .page-hero h1 {

            font:
                800 clamp(45px, 6vw, 70px)/1.05 Montserrat;

            letter-spacing: -2px;

            animation:
                slideUp .9s .1s ease both;

        }

        .page-hero h1 span {

            color:
                var(--orange);

        }

        .page-hero p {

            max-width: 650px;

            margin-top: 20px;

            font-size: 16px;

            line-height: 1.8;

            color:
                rgba(255, 255, 255, .76);

            animation:
                slideUp .9s .25s ease both;

        }

        @keyframes slideUp {

            from {

                opacity: 0;

                transform:
                    translateY(35px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }

        @keyframes slideDown {

            from {

                opacity: 0;

                transform:
                    translateY(-20px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }


        /* =========================================================
       HERO SOLAR GRAPHIC
    ========================================================= */

        .hero-solar {

            position: absolute;

            right: 9%;

            top: 50%;

            transform:
                translateY(-50%);

            width: 300px;

            height: 300px;

            z-index: 2;

        }

        .hero-solar::before {

            content: "";

            position: absolute;

            inset: 25px;

            border:
                1px solid rgba(255, 255, 255, .18);

            border-radius: 50%;

            animation:
                rotateSlow 12s linear infinite;

        }

        .hero-solar::after {

            content: "";

            position: absolute;

            inset: 0;

            border:
                1px dashed rgba(244, 119, 24, .3);

            border-radius: 50%;

            animation:
                rotateSlow 18s linear infinite reverse;

        }

        .hero-solar i {

            position: absolute;

            left: 50%;

            top: 50%;

            transform:
                translate(-50%, -50%);

            color:
                #ffb22f;

            font-size: 110px;

            filter:
                drop-shadow(0 0 25px rgba(255, 177, 47, .3));

            animation:
                sunPulse 4s ease-in-out infinite,
                rotateSun 15s linear infinite;

        }

        @keyframes sunPulse {

            0%,
            100% {
                scale: 1;
            }

            50% {
                scale: 1.1;
            }

        }


        /* =========================================================
       COMMON SECTION
    ========================================================= */

        .section {

            padding: 100px 0;

        }

        .section-heading {

            max-width: 720px;

            text-align: center;

            margin:
                0 auto 55px;

        }

        .eyebrow {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            color:
                var(--orange);

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 2px;

            text-transform: uppercase;

        }

        .eyebrow::before {

            content: "";

            width: 30px;

            height: 2px;

            background:
                var(--orange);

        }

        .section-heading h2 {

            color:
                var(--blue);

            font:
                800 42px Montserrat;

            margin:
                14px 0;

        }

        .section-heading h2 span {

            color:
                var(--orange);

        }

        .section-heading p {

            color:
                var(--muted);

            font-size: 14px;

            line-height: 1.8;

        }


        /* =========================================================
       SERVICES INTRO
    ========================================================= */

        .services-intro {

            display: grid;

            grid-template-columns:
                .9fr 1.1fr;

            gap: 70px;

            align-items: center;

        }

        .intro-image {

            position: relative;

        }

        .intro-image-wrap {

            overflow: hidden;

            border-radius: 28px;

            box-shadow:
                var(--shadow);

        }

        .intro-image-wrap img {

            width: 100%;

            height: 500px;

            object-fit: cover;

            transition:
                transform 1s ease;

        }

        .intro-image:hover img {

            transform:
                scale(1.08);

        }

        .experience-badge {

            position: absolute;

            right: -25px;

            bottom: 35px;

            padding: 20px 25px;

            background: #fff;

            border-radius: 18px;

            box-shadow:
                var(--shadow);

            animation:
                floating 4s ease-in-out infinite;

        }

        .experience-badge i {

            color:
                var(--orange);

            font-size: 25px;

            margin-bottom: 7px;

        }

        .experience-badge strong {

            display: block;

            color:
                var(--blue);

            font:
                800 19px Montserrat;

        }

        .experience-badge span {

            font-size: 11px;

            color:
                var(--muted);

        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

        }

        .intro-content h2 {

            margin:
                15px 0 18px;

            color:
                var(--blue);

            font:
                800 40px/1.15 Montserrat;

        }

        .intro-content h2 span {

            color:
                var(--orange);

        }

        .intro-content p {

            color:
                var(--muted);

            font-size: 14px;

            line-height: 1.85;

            margin-bottom: 17px;

        }

        .intro-points {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 13px;

            margin:
                25px 0;

        }

        .intro-point {

            display: flex;

            align-items: center;

            gap: 9px;

            font-size: 13px;

            color:
                var(--text);

            font-weight: 600;

        }

        .intro-point i {

            color:
                var(--orange);

        }


        /* =========================================================
       SERVICES SECTION
    ========================================================= */

        .services-section {

            background:
                var(--light);

        }


        /* service grid */

        .services-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 24px;

        }


        /* card */

        .service-card {

            position: relative;

            min-height: 350px;

            padding: 32px 30px;

            border-radius: 24px;

            background: #fff;

            border:
                1px solid var(--border);

            overflow: hidden;

            transition:
                transform .35s ease,
                box-shadow .35s ease,
                border-color .35s ease;

            transform-style:
                preserve-3d;

        }


        /* animated gradient */

        .service-card::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(244, 119, 24, .14),
                    transparent 70%);

            right: -70px;

            top: -70px;

            transition:
                var(--transition);

        }

        .service-card::after {

            content: "";

            position: absolute;

            width: 100%;

            height: 3px;

            left: 0;

            bottom: 0;

            background:
                linear-gradient(90deg,
                    var(--blue),
                    var(--orange));

            transform:
                scaleX(0);

            transform-origin:
                left;

            transition:
                transform .45s ease;

        }

        .service-card:hover {

            border-color:
                rgba(244, 119, 24, .35);

            box-shadow:
                0 25px 60px rgba(4, 49, 82, .14);

            transform:
                translateY(-10px);

        }

        .service-card:hover::before {

            transform:
                scale(2);

        }

        .service-card:hover::after {

            transform:
                scaleX(1);

        }


        /* icon */

        .service-icon {

            position: relative;

            z-index: 2;

            width: 70px;

            height: 70px;

            border-radius: 19px;

            display: grid;

            place-items: center;

            color:
                var(--orange);

            background:
                #fff1df;

            font-size: 27px;

            margin-bottom: 25px;

            transition:
                var(--transition);

        }

        .service-card:hover .service-icon {

            color: #fff;

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            transform:
                rotate(-7deg) scale(1.08);

            box-shadow:
                0 12px 25px rgba(244, 119, 24, .25);

        }


        /* content */

        .service-card h3 {

            position: relative;

            z-index: 2;

            color:
                var(--blue);

            font:
                700 20px Montserrat;

            margin-bottom: 12px;

        }

        .service-card p {

            position: relative;

            z-index: 2;

            color:
                var(--muted);

            font-size: 13px;

            line-height: 1.75;

        }

        .service-link {

            position: absolute;

            left: 30px;

            bottom: 28px;

            z-index: 3;

            display: flex;

            align-items: center;

            gap: 8px;

            color:
                var(--orange);

            font-size: 12px;

            font-weight: 800;

            transition:
                var(--transition);

        }

        .service-link i {

            transition:
                transform .3s ease;

        }

        .service-card:hover .service-link i {

            transform:
                translateX(6px);

        }


        /* featured card */

        .service-card.featured {

            background:
                linear-gradient(145deg,
                    #05345a,
                    #0879bb);

            border: none;

            color: #fff;

        }

        .service-card.featured h3 {

            color: #fff;

        }

        .service-card.featured p {

            color:
                rgba(255, 255, 255, .73);

        }

        .service-card.featured .service-icon {

            background:
                rgba(255, 255, 255, .12);

            color:
                var(--orange-light);

        }

        .service-card.featured::before {

            background:
                radial-gradient(circle,
                    rgba(255, 177, 47, .2),
                    transparent 70%);

        }


        /* =========================================================
       SERVICE HIGHLIGHT
    ========================================================= */

        .highlight-section {

            position: relative;

            overflow: hidden;

        }

        .highlight-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 25px;

        }

        .highlight-card {

            position: relative;

            min-height: 300px;

            padding: 38px;

            overflow: hidden;

            border-radius: 25px;

            color: #fff;

            background:
                linear-gradient(135deg,
                    #063b68,
                    #0879bb);

            box-shadow:
                0 20px 50px rgba(3, 49, 80, .16);

        }

        .highlight-card.orange {

            background:
                linear-gradient(135deg,
                    #d95f09,
                    #f47718);

        }

        .highlight-card::before {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            border:
                1px solid rgba(255, 255, 255, .12);

            border-radius: 50%;

            right: -180px;

            bottom: -180px;

            animation:
                rotateSlow 18s linear infinite;

        }

        .highlight-card h3 {

            position: relative;

            z-index: 2;

            font:
                700 25px Montserrat;

            margin-bottom: 13px;

        }

        .highlight-card p {

            position: relative;

            z-index: 2;

            max-width: 480px;

            color:
                rgba(255, 255, 255, .76);

            font-size: 14px;

            line-height: 1.8;

        }

        .highlight-icon {

            position: relative;

            z-index: 2;

            width: 65px;

            height: 65px;

            display: grid;

            place-items: center;

            border-radius: 17px;

            background:
                rgba(255, 255, 255, .12);

            font-size: 25px;

            margin-bottom: 25px;

        }


        /* =========================================================
       PROCESS
    ========================================================= */

        .process-section {

            background:
                var(--light);

        }

        .process-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 0;

            position: relative;

        }

        .process-grid::before {

            content: "";

            position: absolute;

            top: 44px;

            left: 12%;

            right: 12%;

            height: 2px;

            background:
                linear-gradient(90deg,
                    var(--orange),
                    var(--blue));

        }

        .process-item {

            position: relative;

            z-index: 2;

            text-align: center;

            padding: 0 15px;

        }

        .process-number {

            width: 88px;

            height: 88px;

            margin: auto;

            display: grid;

            place-items: center;

            border-radius: 50%;

            background:
                #fff;

            border:
                4px solid var(--light);

            box-shadow:
                0 10px 30px rgba(3, 49, 80, .12);

            color:
                var(--orange);

            font:
                800 23px Montserrat;

            transition:
                var(--transition);

        }

        .process-item:hover .process-number {

            color: #fff;

            background:
                var(--orange);

            transform:
                scale(1.12) rotate(8deg);

            box-shadow:
                0 15px 35px rgba(244, 119, 24, .3);

        }

        .process-item h3 {

            margin:
                22px 0 9px;

            color:
                var(--blue);

            font:
                700 17px Montserrat;

        }

        .process-item p {

            color:
                var(--muted);

            font-size: 12px;

            line-height: 1.7;

        }


        /* =========================================================
       STATS
    ========================================================= */

        .stats-section {

            padding:
                75px 0;

        }

        .stats {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            padding: 25px;

            background:
                #fff;

            border:
                1px solid var(--border);

            border-radius: 25px;

            box-shadow:
                var(--shadow);

        }

        .stat {

            position: relative;

            text-align: center;

            padding: 20px;

        }

        .stat:not(:last-child)::after {

            content: "";

            position: absolute;

            right: 0;

            top: 20%;

            height: 60%;

            width: 1px;

            background:
                var(--border);

        }

        .stat i {

            color:
                var(--orange);

            font-size: 23px;

            margin-bottom: 10px;

        }

        .stat strong {

            display: block;

            color:
                var(--blue);

            font:
                800 38px Montserrat;

        }

        .stat span {

            color:
                var(--muted);

            font-size: 12px;

        }


        /* =========================================================
       CTA
    ========================================================= */

        .cta {

            position: relative;

            overflow: hidden;

            padding: 90px 0;

            color: #fff;

            background:
                linear-gradient(120deg,
                    #042f53,
                    #075f94);

        }

        .cta::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border:
                1px solid rgba(255, 255, 255, .08);

            border-radius: 50%;

            right: -200px;

            top: -200px;

            animation:
                rotateSlow 20s linear infinite;

        }

        .cta::after {

            content: "";

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            background:
                rgba(244, 119, 24, .08);

            left: -100px;

            bottom: -120px;

        }

        .cta-inner {

            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;

        }

        .cta h2 {

            font:
                800 38px/1.15 Montserrat;

            margin:
                10px 0;

        }

        .cta h2 span {

            color:
                var(--orange);

        }

        .cta p {

            color:
                rgba(255, 255, 255, .72);

            max-width: 620px;

            line-height: 1.7;

        }

        .cta-buttons {

            display: flex;

            gap: 12px;

        }

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            padding: 15px 23px;

            border-radius: 10px;

            font-size: 13px;

            font-weight: 700;

            transition:
                var(--transition);

        }

        .btn-white {

            background: #fff;

            color:
                var(--blue);

        }

        .btn-orange {

            background:
                var(--orange);

            color: #fff;

        }

        .btn:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, .2);

        }


       


        /* =========================================================
       WHATSAPP
    ========================================================= */

        .whatsapp {

            position: fixed;

            right: 25px;

            bottom: 25px;

            z-index: 999;

            width: 58px;

            height: 58px;

            display: grid;

            place-items: center;

            border-radius: 50%;

            color: #fff;

            background:
                #25d366;

            font-size: 26px;

            box-shadow:
                0 10px 30px rgba(37, 211, 102, .35);

            animation:
                whatsappPulse 2s infinite;

        }

        @keyframes whatsappPulse {

            0% {
                box-shadow:
                    0 0 0 0 rgba(37, 211, 102, .5);
            }

            70% {
                box-shadow:
                    0 0 0 18px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow:
                    0 0 0 0 rgba(37, 211, 102, 0);
            }

        }


        /* =========================================================
       SCROLL TOP
    ========================================================= */

        .scroll-top {

            position: fixed;

            right: 25px;

            bottom: 95px;

            width: 42px;

            height: 42px;

            border: 0;

            border-radius: 10px;

            background:
                var(--blue);

            color: #fff;

            cursor: pointer;

            display: grid;

            place-items: center;

            opacity: 0;

            visibility: hidden;

            transition:
                var(--transition);

            z-index: 998;

        }

        .scroll-top.show {

            opacity: 1;

            visibility: visible;

        }


        /* =========================================================
       REVEAL ANIMATIONS
    ========================================================= */

        .reveal {

            opacity: 0;

            transform:
                translateY(50px);

            transition:
                opacity .8s ease,
                transform .8s cubic-bezier(.2, .8, .2, 1);

        }

        .reveal-left {

            opacity: 0;

            transform:
                translateX(-60px);

            transition:
                opacity .9s ease,
                transform .9s cubic-bezier(.2, .8, .2, 1);

        }

        .reveal-right {

            opacity: 0;

            transform:
                translateX(60px);

            transition:
                opacity .9s ease,
                transform .9s cubic-bezier(.2, .8, .2, 1);

        }

        .reveal.active,
        .reveal-left.active,
        .reveal-right.active {

            opacity: 1;

            transform:
                translate(0);

        }


        /* =========================================================
       RESPONSIVE
    ========================================================= */

        @media(max-width:1000px) {

            .menu {
                gap: 15px;
            }

            .menu a {
                font-size: 12px;
            }

            .services-intro {
                gap: 40px;
            }

            .hero-solar {
                opacity: .45;
                right: 2%;
            }

        }


        @media(max-width:800px) {

            .topbar {
                display: none;
            }

            .navbar {
                height: 72px;
            }

            .mobile-btn {
                display: grid;
                place-items: center;
            }

            .menu {

                position: absolute;

                left: 4%;

                right: 4%;

                top: 80px;

                padding: 20px;

                background: #fff;

                border-radius: 18px;

                box-shadow:
                    var(--shadow);

                flex-direction: column;

                align-items: stretch;

                gap: 4px;

                opacity: 0;

                visibility: hidden;

                transform:
                    translateY(-15px);

                transition:
                    var(--transition);

            }

            .menu.open {

                opacity: 1;

                visibility: visible;

                transform:
                    translateY(0);

            }

            .menu a {
                padding: 13px;
            }

            .nav-contact {
                justify-content: center;
            }

            .hero-solar {
                opacity: .25;
                right: -70px;
            }

            .services-intro {
                grid-template-columns: 1fr;
            }

            .intro-content {
                order: -1;
            }

            .services-grid {
                grid-template-columns:
                    1fr 1fr;
            }

            .highlight-grid {
                grid-template-columns: 1fr;
            }

            .process-grid {
                grid-template-columns:
                    1fr 1fr;

                gap: 40px 10px;
            }

            .process-grid::before {
                display: none;
            }

            .stats {
                grid-template-columns:
                    1fr 1fr;
            }

            .stat:nth-child(2)::after {
                display: none;
            }

            .cta-inner {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-grid {
                grid-template-columns:
                    1fr 1fr;
            }

        }


        @media(max-width:550px) {

            .container {
                width: 90%;
            }

            .brand-text strong {
                font-size: 16px;
            }

            .brand-text span {
                font-size: 8px;
            }

            .page-hero {
                min-height: 390px;
            }

            .page-hero h1 {
                font-size: 43px;
            }

            .hero-solar {
                display: none;
            }

            .section {
                padding: 70px 0;
            }

            .section-heading h2 {
                font-size: 34px;
            }

            .intro-content h2 {
                font-size: 34px;
            }

            .intro-image-wrap img {
                height: 380px;
            }

            .experience-badge {
                right: 10px;
            }

            .intro-points {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                min-height: 330px;
            }

            .highlight-card {
                min-height: 280px;
                padding: 30px;
            }

            .process-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .stats {
                padding: 10px;
            }

            .stat {
                padding: 15px 5px;
            }

            .stat strong {
                font-size: 28px;
            }

            .cta h2 {
                font-size: 31px;
            }

            .cta-buttons {
                width: 100%;
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .whatsapp {
                right: 18px;
                bottom: 18px;
            }

            .scroll-top {
                right: 18px;
                bottom: 88px;
            }

        }
    </style>


    <!-- <script>


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
           NAVBAR
        ========================================================= */

        const navbar =
            document.getElementById("navbar");

        const scrollTop =
            document.getElementById("scrollTop");


        window.addEventListener(
            "scroll",
            function () {

                if (window.scrollY > 50) {

                    navbar.classList.add(
                        "scrolled"
                    );

                } else {

                    navbar.classList.remove(
                        "scrolled"
                    );

                }


                if (window.scrollY > 500) {

                    scrollTop.classList.add(
                        "show"
                    );

                } else {

                    scrollTop.classList.remove(
                        "show"
                    );

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

                menu.classList.toggle(
                    "open"
                );


                const icon =
                    mobileBtn.querySelector("i");


                if (
                    menu.classList.contains("open")
                ) {

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

                            menu.classList.remove(
                                "open"
                            );

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
                    threshold: .12
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
           SERVICE CARD 3D EFFECT
        ========================================================= */

        document
            .querySelectorAll(".service-card")
            .forEach(
                function (card) {

                    card.addEventListener(
                        "mousemove",
                        function (e) {

                            if (
                                window.innerWidth < 800
                            ) return;


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
                                    centerY) * -4;


                            const rotateY =
                                ((x - centerX) /
                                    centerX) * 4;


                            card.style.transform =
                                `
                                perspective(1000px)
                                rotateX(${rotateX}deg)
                                rotateY(${rotateY}deg)
                                translateY(-10px)
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
           COUNTERS
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
                    threshold: .4
                }

            );


        if (counters.length) {

            counterObserver.observe(
                counters[0]
            );

        }


        /* =========================================================
           PROCESS NUMBER HOVER
        ========================================================= */

        document
            .querySelectorAll(".process-number")
            .forEach(
                function (number) {

                    number.addEventListener(
                        "mouseenter",
                        function () {

                            number.style.boxShadow =
                                `
                                0 0 0 8px
                                rgba(244,119,24,.10),
                                0 15px 35px
                                rgba(244,119,24,.25)
                                `;

                        }
                    );


                    number.addEventListener(
                        "mouseleave",
                        function () {

                            number.style.boxShadow =
                                "";

                        }
                    );

                }
            );


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
           YEAR
        ========================================================= */

        document
            .getElementById("year")
            .textContent =
            new Date().getFullYear();


        /* =========================================================
           IMAGE PARALLAX
        ========================================================= */

        window.addEventListener(
            "scroll",
            function () {

                const image =
                    document.querySelector(
                        ".intro-image-wrap img"
                    );


                if (!image) return;


                const rect =
                    image.getBoundingClientRect();


                if (
                    rect.top < window.innerHeight &&
                    rect.bottom > 0
                ) {

                    const offset =
                        (window.innerHeight / 2 -
                            (rect.top + rect.height / 2))
                        * .025;


                    image.style.transform =
                        `scale(1.04) translateY(${offset}px)`;

                }

            }
        );

    </script> -->

@endsection