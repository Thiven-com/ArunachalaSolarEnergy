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

        <div class="particle p5"></div>


        <div class="container">

            <div class="page-hero-content">

                <div class="breadcrumb">

                    <a href="{{ route('home') }}">
                        Home
                    </a>

                    <i class="fa-solid fa-chevron-right"></i>

                    <span>
                        Solutions
                    </span>

                </div>


                <h1>

                    Smart Energy

                    <span>
                        Solutions
                    </span>

                </h1>


                <p>

                    Discover solar energy solutions designed
                    for homes, businesses, industries and
                    agricultural applications — built around
                    your energy requirements and long-term
                    goals.

                </p>

            </div>

        </div>


        <div class="hero-orbit">

            <div class="orbit-ring"></div>

            <div class="orbit-ring"></div>

            <div class="orbit-ring"></div>


            <div class="sun-core">

                <i class="fa-solid fa-sun"></i>

            </div>


            <div class="orbit-dot dot-one"></div>

            <div class="orbit-dot dot-two"></div>

            <div class="orbit-dot dot-three"></div>

        </div>

    </section>


    <!-- =========================================================
             INTRO
        ========================================================= -->

    <section class="section">

        <div class="container solution-intro">


            <div class="intro-visual reveal-left">

                <div class="visual-box">

                    <div class="visual-sun">

                        <i class="fa-solid fa-sun"></i>

                    </div>


                    <div class="energy-line"></div>


                    <div class="panel-graphic"></div>


                    <div class="visual-label">

                        <strong>
                            Intelligent Solar Solutions
                        </strong>

                        <span>
                            Harness sunlight. Generate clean
                            energy. Build a sustainable future.
                        </span>

                    </div>

                </div>

            </div>


            <div class="intro-content reveal-right">

                <div class="eyebrow">
                    Our Approach
                </div>


                <h2>

                    The Right Solar Solution

                    <span>
                        For Every Need
                    </span>

                </h2>


                <p>

                    Solar energy is not a one-size-fits-all
                    solution. Your energy consumption,
                    available space, budget and future
                    requirements all matter.

                </p>


                <p>

                    Arunachala Solar Energy focuses on
                    creating practical solar solutions that
                    align with your property and energy
                    objectives.

                </p>


                <div class="solution-checks">

                    <div class="check">

                        <i class="fa-solid fa-circle-check"></i>

                        Customized System Design

                    </div>


                    <div class="check">

                        <i class="fa-solid fa-circle-check"></i>

                        Quality Solar Components

                    </div>


                    <div class="check">

                        <i class="fa-solid fa-circle-check"></i>

                        Efficient Installation

                    </div>


                    <div class="check">

                        <i class="fa-solid fa-circle-check"></i>

                        Long-Term Support

                    </div>

                </div>


                <a href="{{ route('contact') }}" class="btn btn-orange">

                    Find Your Solar Solution

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
             SOLUTION CARDS
        ========================================================= -->

    <section class="section solutions-section">

        <div class="container">


            <div class="section-heading reveal">

                <div class="eyebrow">
                    Solutions We Offer
                </div>

                <h2>

                    Powering Different

                    <span>
                        Energy Requirements
                    </span>

                </h2>

                <p>

                    From a small residential rooftop to
                    large-scale commercial and industrial
                    applications, we help you choose an
                    appropriate solar energy approach.

                </p>

            </div>


            <div class="solution-grid">


                <!-- HOME -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-house"></i>

                    </div>

                    <h3>
                        Home Solar Solutions
                    </h3>

                    <p>

                        Make your home more energy independent
                        with a solar power system planned around
                        your household electricity consumption.

                    </p>

                    <ul>

                        <li>
                            Rooftop Solar
                        </li>

                        <li>
                            Energy Savings
                        </li>

                        <li>
                            Home Power
                        </li>

                    </ul>

                </div>


                <!-- COMMERCIAL -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-store"></i>

                    </div>

                    <h3>
                        Commercial Solutions
                    </h3>

                    <p>

                        Help businesses manage electricity
                        costs with solar solutions suitable for
                        offices, shops, institutions and
                        commercial properties.

                    </p>

                    <ul>

                        <li>
                            Business
                        </li>

                        <li>
                            Rooftop
                        </li>

                        <li>
                            Cost Control
                        </li>

                    </ul>

                </div>


                <!-- INDUSTRIAL -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-industry"></i>

                    </div>

                    <h3>
                        Industrial Solutions
                    </h3>

                    <p>

                        Scalable solar systems for industrial
                        facilities designed to support
                        significant energy requirements and
                        long-term operational efficiency.

                    </p>

                    <ul>

                        <li>
                            Large Scale
                        </li>

                        <li>
                            High Demand
                        </li>

                        <li>
                            Solar Power
                        </li>

                    </ul>

                </div>


                <!-- AGRICULTURE -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-seedling"></i>

                    </div>

                    <h3>
                        Agricultural Solutions
                    </h3>

                    <p>

                        Solar energy solutions for agricultural
                        applications, helping farms make use of
                        clean and dependable power.

                    </p>

                    <ul>

                        <li>
                            Agriculture
                        </li>

                        <li>
                            Farm Power
                        </li>

                        <li>
                            Irrigation
                        </li>

                    </ul>

                </div>


                <!-- ROOFTOP -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-solar-panel"></i>

                    </div>

                    <h3>
                        Rooftop Solar
                    </h3>

                    <p>

                        Convert unused rooftop space into a
                        productive clean-energy asset with
                        carefully planned solar installation.

                    </p>

                    <ul>

                        <li>
                            Roof Utilization
                        </li>

                        <li>
                            Clean Energy
                        </li>

                        <li>
                            Grid Support
                        </li>

                    </ul>

                </div>


                <!-- STORAGE -->

                <div class="solution-card reveal">

                    <div class="solution-icon">

                        <i class="fa-solid fa-battery-half"></i>

                    </div>

                    <h3>
                        Solar + Storage
                    </h3>

                    <p>

                        Combine solar generation with energy
                        storage to improve energy availability
                        and provide greater flexibility.

                    </p>

                    <ul>

                        <li>
                            Battery
                        </li>

                        <li>
                            Backup
                        </li>

                        <li>
                            Energy Storage
                        </li>

                    </ul>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
             SOLUTION TYPES
        ========================================================= -->

    <section class="section types-section">

        <div class="container">


            <div class="section-heading reveal">

                <div class="eyebrow">
                    Energy Applications
                </div>

                <h2>

                    Solar That Works

                    <span>
                        Where You Need It
                    </span>

                </h2>

                <p>

                    Flexible solar applications designed to
                    support different types of properties and
                    energy requirements.

                </p>

            </div>


            <div class="types-grid">


                <div class="type-card reveal">

                    <div class="type-icon">

                        <i class="fa-solid fa-house-chimney"></i>

                    </div>

                    <h3>
                        Residential
                    </h3>

                    <p>

                        Efficient clean energy solutions for
                        households and residential properties.

                    </p>

                </div>


                <div class="type-card reveal">

                    <div class="type-icon">

                        <i class="fa-solid fa-building"></i>

                    </div>

                    <h3>
                        Commercial
                    </h3>

                    <p>

                        Solar systems for businesses seeking
                        better energy management.

                    </p>

                </div>


                <div class="type-card reveal">

                    <div class="type-icon">

                        <i class="fa-solid fa-tractor"></i>

                    </div>

                    <h3>
                        Agriculture
                    </h3>

                    <p>

                        Solar energy applications designed for
                        agricultural and farm requirements.

                    </p>

                </div>


                <div class="type-card reveal">

                    <div class="type-icon">

                        <i class="fa-solid fa-industry"></i>

                    </div>

                    <h3>
                        Industrial
                    </h3>

                    <p>

                        Scalable renewable energy solutions for
                        larger facilities and operations.

                    </p>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================================
             ENERGY JOURNEY
        ========================================================= -->

    <section class="section journey-section">

        <div class="container journey">


            <div class="journey-content reveal-left">

                <div class="eyebrow">
                    From Sun To Power
                </div>


                <h2>

                    Your Energy Journey,

                    <span>
                        Simplified
                    </span>

                </h2>


                <p>

                    We make the transition toward solar
                    energy easier by guiding you through
                    every important stage of the process.

                </p>


                <div class="journey-list">


                    <div class="journey-item">

                        <div class="journey-number">
                            01
                        </div>

                        <div>

                            <h3>
                                Understand
                            </h3>

                            <p>

                                We understand your energy
                                consumption and objectives.

                            </p>

                        </div>

                    </div>


                    <div class="journey-item">

                        <div class="journey-number">
                            02
                        </div>

                        <div>

                            <h3>
                                Design
                            </h3>

                            <p>

                                We plan a suitable solar
                                configuration around your needs.

                            </p>

                        </div>

                    </div>


                    <div class="journey-item">

                        <div class="journey-number">
                            03
                        </div>

                        <div>

                            <h3>
                                Install
                            </h3>

                            <p>

                                Our team implements the selected
                                solution with quality and care.

                            </p>

                        </div>

                    </div>


                    <div class="journey-item">

                        <div class="journey-number">
                            04
                        </div>

                        <div>

                            <h3>
                                Support
                            </h3>

                            <p>

                                We remain available to support
                                your solar journey.

                            </p>

                        </div>

                    </div>


                </div>

            </div>


            <div class="journey-visual reveal-right">


                <div class="energy-wave wave-one"></div>

                <div class="energy-wave wave-two"></div>


                <div class="house">

                    <div class="house-roof"></div>

                    <div class="house-panel"></div>

                    <div class="window"></div>

                    <div class="door"></div>

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

                    FIND YOUR SOLUTION

                </div>


                <h2>

                    Let's Build Your

                    <span>
                        Solar Future
                    </span>

                </h2>


                <p>

                    Have a home, business, farm or industrial
                    facility? Talk to Arunachala Solar Energy
                    about a solar solution designed around
                    your energy needs.

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

            margin: auto;

        }


        


        /* =========================================================
       HERO
    ========================================================= */

        .page-hero {

            min-height: 480px;

            position: relative;

            display: flex;

            align-items: center;

            overflow: hidden;

            background:
                linear-gradient(110deg,
                    #032f52,
                    #076495);

        }

        .page-hero::before {

            content: "";

            position: absolute;

            width: 700px;

            height: 700px;

            border:
                1px solid rgba(255, 255, 255, .08);

            border-radius: 50%;

            right: -300px;

            top: -250px;

            animation:
                rotateSlow 25s linear infinite;

        }

        .page-hero::after {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border:
                1px solid rgba(244, 119, 24, .18);

            border-radius: 50%;

            left: -300px;

            bottom: -300px;

            animation:
                rotateSlow 18s linear infinite reverse;

        }

        @keyframes rotateSlow {

            to {
                transform: rotate(360deg);
            }

        }


        /* =========================================================
       HERO PARTICLES
    ========================================================= */

        .particle {

            position: absolute;

            width: 5px;

            height: 5px;

            border-radius: 50%;

            background:
                var(--orange);

            opacity: .75;

            animation:
                particleFloat 6s ease-in-out infinite;

        }

        .p1 {
            top: 18%;
            left: 12%;
        }

        .p2 {
            top: 72%;
            left: 28%;
            animation-delay: 1s;
        }

        .p3 {
            top: 28%;
            right: 32%;
            animation-delay: 2s;
        }

        .p4 {
            top: 78%;
            right: 18%;
            animation-delay: 3s;
        }

        .p5 {
            top: 48%;
            left: 48%;
            animation-delay: 1.5s;
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


        /* =========================================================
       HERO CONTENT
    ========================================================= */

        .page-hero-content {

            position: relative;

            z-index: 5;

            color: #fff;

            max-width: 680px;

        }

        .breadcrumb {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 12px;

            color:
                rgba(255, 255, 255, .68);

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
                800 clamp(44px, 6vw, 70px)/1.06 Montserrat;

            letter-spacing:
                -2px;

            animation:
                slideUp .9s .1s ease both;

        }

        .page-hero h1 span {

            display: block;

            color:
                var(--orange);

        }

        .page-hero p {

            max-width: 640px;

            margin-top: 22px;

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
       HERO SOLAR ORBIT
    ========================================================= */

        .hero-orbit {

            position: absolute;

            right: 9%;

            top: 50%;

            width: 360px;

            height: 360px;

            transform:
                translateY(-50%);

            z-index: 3;

        }

        .orbit-ring {

            position: absolute;

            inset: 0;

            border:
                1px solid rgba(255, 255, 255, .17);

            border-radius: 50%;

            animation:
                rotateSlow 16s linear infinite;

        }

        .orbit-ring:nth-child(2) {

            inset: 35px;

            border:
                1px dashed rgba(244, 119, 24, .4);

            animation:
                rotateSlow 11s linear infinite reverse;

        }

        .orbit-ring:nth-child(3) {

            inset: 75px;

            border:
                1px solid rgba(255, 255, 255, .1);

            animation:
                rotateSlow 9s linear infinite;

        }

        .sun-core {

            position: absolute;

            left: 50%;

            top: 50%;

            transform:
                translate(-50%, -50%);

            width: 120px;

            height: 120px;

            display: grid;

            place-items: center;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    #ffd267,
                    #f47718);

            box-shadow:
                0 0 45px rgba(255, 177, 47, .35);

            animation:
                sunPulse 3.5s ease-in-out infinite;

        }

        .sun-core i {

            color: #fff;

            font-size: 55px;

            animation:
                rotateSun 12s linear infinite;

        }

        .orbit-dot {

            position: absolute;

            width: 15px;

            height: 15px;

            border-radius: 50%;

            background:
                var(--orange-light);

            box-shadow:
                0 0 18px rgba(244, 119, 24, .6);

        }

        .dot-one {

            top: 18px;
            left: 50%;

        }

        .dot-two {

            bottom: 30px;
            right: 35px;

        }

        .dot-three {

            left: 30px;
            bottom: 75px;

        }

        @keyframes sunPulse {

            0%,
            100% {
                transform:
                    translate(-50%, -50%) scale(1);
            }

            50% {
                transform:
                    translate(-50%, -50%) scale(1.1);
            }

        }


        /* =========================================================
       SECTION
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
       SOLUTION INTRO
    ========================================================= */

        .solution-intro {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 70px;

            align-items: center;

        }

        .intro-visual {

            position: relative;

        }

        .visual-box {

            position: relative;

            min-height: 480px;

            border-radius: 30px;

            overflow: hidden;

            background:
                linear-gradient(145deg,
                    #063b68,
                    #0879bb);

            box-shadow:
                var(--shadow);

        }

        .visual-box::before {

            content: "";

            position: absolute;

            width: 420px;

            height: 420px;

            border:
                1px solid rgba(255, 255, 255, .15);

            border-radius: 50%;

            top: -170px;

            right: -170px;

            animation:
                rotateSlow 20s linear infinite;

        }

        .visual-box::after {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border:
                1px dashed rgba(244, 119, 24, .35);

            border-radius: 50%;

            bottom: -140px;

            left: -100px;

            animation:
                rotateSlow 13s linear infinite reverse;

        }

        .panel-graphic {

            position: absolute;

            left: 50%;

            top: 48%;

            width: 270px;

            height: 180px;

            transform:
                translate(-50%, -50%) skewY(-8deg);

            background:
                linear-gradient(135deg,
                    #152f42,
                    #0b658f);

            border:
                4px solid rgba(255, 255, 255, .55);

            box-shadow:
                0 25px 50px rgba(0, 0, 0, .25);

        }

        .panel-graphic::before {

            content: "";

            position: absolute;

            inset: 0;

            background:
                repeating-linear-gradient(90deg,
                    transparent 0 52px,
                    rgba(255, 255, 255, .45) 53px 55px),
                repeating-linear-gradient(0deg,
                    transparent 0 42px,
                    rgba(255, 255, 255, .35) 43px 45px);

        }

        .energy-line {

            position: absolute;

            width: 180px;

            height: 180px;

            border:
                3px solid var(--orange);

            border-left-color:
                transparent;

            border-bottom-color:
                transparent;

            border-radius: 50%;

            left: 50%;

            top: 48%;

            transform:
                translate(-50%, -50%) rotate(45deg);

            animation:
                energySpin 5s linear infinite;

        }

        @keyframes energySpin {

            to {
                transform:
                    translate(-50%, -50%) rotate(405deg);
            }

        }

        .visual-sun {

            position: absolute;

            top: 45px;

            left: 50px;

            width: 85px;

            height: 85px;

            display: grid;

            place-items: center;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    #ffe08a,
                    #f47718);

            color: #fff;

            font-size: 35px;

            box-shadow:
                0 0 45px rgba(244, 119, 24, .35);

            animation:
                sunPulse 3s ease-in-out infinite;

        }

        .visual-label {

            position: absolute;

            left: 35px;

            bottom: 35px;

            right: 35px;

            padding: 18px 20px;

            border-radius: 15px;

            background:
                rgba(255, 255, 255, .1);

            border:
                1px solid rgba(255, 255, 255, .15);

            backdrop-filter:
                blur(10px);

            color: #fff;

        }

        .visual-label strong {

            display: block;

            font:
                700 16px Montserrat;

            margin-bottom: 5px;

        }

        .visual-label span {

            color:
                rgba(255, 255, 255, .68);

            font-size: 11px;

        }

        .intro-content h2 {

            color:
                var(--blue);

            font:
                800 40px/1.15 Montserrat;

            margin:
                15px 0 18px;

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

        .solution-checks {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 13px;

            margin:
                25px 0;

        }

        .check {

            display: flex;

            align-items: center;

            gap: 9px;

            color:
                var(--text);

            font-size: 13px;

            font-weight: 600;

        }

        .check i {

            color:
                var(--orange);

        }


        /* =========================================================
       SOLUTION CARDS
    ========================================================= */

        .solutions-section {

            background:
                var(--light);

        }

        .solution-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 25px;

        }

        .solution-card {

            position: relative;

            min-height: 285px;

            padding: 32px;

            border-radius: 24px;

            background: #fff;

            border:
                1px solid var(--border);

            overflow: hidden;

            transition:
                transform .4s ease,
                box-shadow .4s ease,
                border-color .4s ease;

            transform-style:
                preserve-3d;

        }

        .solution-card::before {

            content: "";

            position: absolute;

            width: 230px;

            height: 230px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(244, 119, 24, .13),
                    transparent 70%);

            right: -100px;

            top: -100px;

            transition:
                var(--transition);

        }

        .solution-card::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: 0;

            height: 4px;

            width: 100%;

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

        .solution-card:hover {

            transform:
                translateY(-10px);

            box-shadow:
                0 25px 60px rgba(4, 49, 82, .14);

            border-color:
                rgba(244, 119, 24, .3);

        }

        .solution-card:hover::before {

            transform:
                scale(1.7);

        }

        .solution-card:hover::after {

            transform:
                scaleX(1);

        }

        .solution-icon {

            position: relative;

            z-index: 2;

            width: 65px;

            height: 65px;

            display: grid;

            place-items: center;

            border-radius: 18px;

            background:
                #fff1df;

            color:
                var(--orange);

            font-size: 25px;

            margin-bottom: 22px;

            transition:
                var(--transition);

        }

        .solution-card:hover .solution-icon {

            color: #fff;

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            transform:
                rotate(-7deg) scale(1.08);

        }

        .solution-card h3 {

            position: relative;

            z-index: 2;

            color:
                var(--blue);

            font:
                700 20px Montserrat;

            margin-bottom: 10px;

        }

        .solution-card p {

            position: relative;

            z-index: 2;

            color:
                var(--muted);

            font-size: 13px;

            line-height: 1.75;

        }

        .solution-card ul {

            position: relative;

            z-index: 2;

            display: flex;

            flex-wrap: wrap;

            gap: 8px;

            margin-top: 17px;

            list-style: none;

        }

        .solution-card li {

            padding:
                7px 10px;

            border-radius: 20px;

            background:
                #f2f7fa;

            color:
                var(--blue);

            font-size: 10px;

            font-weight: 700;

        }


        /* =========================================================
       SOLUTION TYPES
    ========================================================= */

        .types-section {

            background: #fff;

        }

        .types-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

        }

        .type-card {

            position: relative;

            min-height: 250px;

            padding: 28px 23px;

            border-radius: 20px;

            overflow: hidden;

            color: #fff;

            background:
                linear-gradient(145deg,
                    #063b68,
                    #0879bb);

            transition:
                var(--transition);

        }

        .type-card:nth-child(2) {

            background:
                linear-gradient(145deg,
                    #e45f08,
                    #f47718);

        }

        .type-card:nth-child(3) {

            background:
                linear-gradient(145deg,
                    #164d55,
                    #0d8a79);

        }

        .type-card:nth-child(4) {

            background:
                linear-gradient(145deg,
                    #4a3d7b,
                    #7762bd);

        }

        .type-card::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            border:
                1px solid rgba(255, 255, 255, .15);

            border-radius: 50%;

            right: -90px;

            bottom: -90px;

            transition:
                var(--transition);

        }

        .type-card:hover {

            transform:
                translateY(-10px);

            box-shadow:
                0 25px 50px rgba(4, 49, 82, .18);

        }

        .type-card:hover::before {

            transform:
                scale(1.5);

        }

        .type-icon {

            position: relative;

            z-index: 2;

            width: 55px;

            height: 55px;

            display: grid;

            place-items: center;

            border-radius: 15px;

            background:
                rgba(255, 255, 255, .12);

            font-size: 22px;

            margin-bottom: 25px;

        }

        .type-card h3 {

            position: relative;

            z-index: 2;

            font:
                700 18px Montserrat;

            margin-bottom: 9px;

        }

        .type-card p {

            position: relative;

            z-index: 2;

            color:
                rgba(255, 255, 255, .72);

            font-size: 12px;

            line-height: 1.7;

        }


        /* =========================================================
       ENERGY JOURNEY
    ========================================================= */

        .journey-section {

            background:
                var(--light);

        }

        .journey {

            display: grid;

            grid-template-columns:
                1fr 1.1fr;

            gap: 65px;

            align-items: center;

        }

        .journey-content h2 {

            color:
                var(--blue);

            font:
                800 39px/1.15 Montserrat;

            margin:
                14px 0 18px;

        }

        .journey-content h2 span {

            color:
                var(--orange);

        }

        .journey-content p {

            color:
                var(--muted);

            font-size: 14px;

            line-height: 1.8;

        }

        .journey-list {

            margin-top: 28px;

        }

        .journey-item {

            display: flex;

            gap: 17px;

            position: relative;

            padding-bottom: 25px;

        }

        .journey-item:not(:last-child)::before {

            content: "";

            position: absolute;

            left: 19px;

            top: 42px;

            bottom: 0;

            width: 2px;

            background:
                linear-gradient(var(--orange),
                    var(--blue));

        }

        .journey-number {

            position: relative;

            z-index: 2;

            flex-shrink: 0;

            width: 40px;

            height: 40px;

            display: grid;

            place-items: center;

            border-radius: 50%;

            color: #fff;

            background:
                var(--orange);

            font:
                700 12px Montserrat;

            box-shadow:
                0 8px 20px rgba(244, 119, 24, .25);

            transition:
                var(--transition);

        }

        .journey-item:hover .journey-number {

            transform:
                scale(1.15);

            background:
                var(--blue);

        }

        .journey-item h3 {

            color:
                var(--blue);

            font:
                700 16px Montserrat;

            margin-bottom: 5px;

        }

        .journey-item p {

            font-size: 12px;

        }

        .journey-visual {

            position: relative;

            min-height: 490px;

            border-radius: 30px;

            overflow: hidden;

            background:
                linear-gradient(135deg,
                    #eaf5fb,
                    #fff);

            border:
                1px solid var(--border);

        }

        .house {

            position: absolute;

            left: 50%;

            top: 52%;

            width: 300px;

            height: 200px;

            transform:
                translate(-50%, -50%);

            background: #fff;

            border-radius:
                8px 8px 5px 5px;

            box-shadow:
                0 30px 50px rgba(3, 49, 80, .15);

        }

        .house-roof {

            position: absolute;

            left: -30px;

            top: -100px;

            width: 360px;

            height: 150px;

            background:
                var(--blue);

            clip-path:
                polygon(50% 0,
                    100% 70%,
                    100% 100%,
                    0 100%,
                    0 70%);

        }

        .house-panel {

            position: absolute;

            top: -70px;

            left: 72px;

            width: 155px;

            height: 80px;

            transform:
                skewY(-8deg) rotate(-2deg);

            background:
                linear-gradient(135deg,
                    #173e57,
                    #0879bb);

            border:
                3px solid #fff;

        }

        .house-panel::after {

            content: "";

            position: absolute;

            inset: 0;

            background:
                repeating-linear-gradient(90deg,
                    transparent 0 28px,
                    rgba(255, 255, 255, .45) 29px 31px),
                repeating-linear-gradient(0deg,
                    transparent 0 25px,
                    rgba(255, 255, 255, .35) 26px 28px);

        }

        .window {

            position: absolute;

            left: 45px;

            top: 65px;

            width: 70px;

            height: 55px;

            background:
                #0879bb;

            border:
                5px solid var(--blue);

        }

        .door {

            position: absolute;

            right: 45px;

            bottom: 0;

            width: 55px;

            height: 105px;

            background:
                var(--orange);

            border-radius:
                7px 7px 0 0;

        }

        .door::after {

            content: "";

            position: absolute;

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #fff;

            right: 9px;

            top: 52px;

        }

        .energy-wave {

            position: absolute;

            width: 80px;

            height: 80px;

            border-radius: 50%;

            border:
                2px solid var(--orange);

            opacity: .5;

            animation:
                wave 3s infinite;

        }

        .wave-one {

            left: 55px;

            top: 80px;

        }

        .wave-two {

            right: 60px;

            bottom: 90px;

            animation-delay: 1s;

        }

        @keyframes wave {

            0% {

                transform:
                    scale(.6);

                opacity: .7;

            }

            100% {

                transform:
                    scale(1.8);

                opacity: 0;

            }

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
       REVEAL
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

        @media(max-width:1050px) {

            .menu {
                gap: 16px;
            }

            .menu a {
                font-size: 12px;
            }

            .hero-orbit {
                right: -40px;
                opacity: .45;
            }

            .solution-intro {
                gap: 40px;
            }

            .types-grid {
                grid-template-columns:
                    1fr 1fr;
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

            .hero-orbit {
                opacity: .2;
                right: -100px;
            }

            .solution-intro {

                grid-template-columns:
                    1fr;

            }

            .solution-grid {

                grid-template-columns:
                    1fr;

            }

            .journey {

                grid-template-columns:
                    1fr;

            }

            .journey-content {
                order: -1;
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
                min-height: 410px;
            }

            .page-hero h1 {
                font-size: 43px;
            }

            .hero-orbit {
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

            .visual-box {
                min-height: 390px;
            }

            .panel-graphic {
                width: 220px;
                height: 145px;
            }

            .solution-checks {
                grid-template-columns:
                    1fr;
            }

            .types-grid {
                grid-template-columns:
                    1fr;
            }

            .journey-visual {
                min-height: 400px;
            }

            .house {
                transform:
                    translate(-50%, -50%) scale(.8);
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
                grid-template-columns:
                    1fr;
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

@endsection