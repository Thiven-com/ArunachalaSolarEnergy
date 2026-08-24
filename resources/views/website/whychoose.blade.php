@extends('layouts.website')
@section('content')


    <section class="hero">
        <div class="container hero-grid">

            <div class="hero-content reveal-left">
                <div class="eyebrow">Why Choose Arunachala</div>

                <h1>
                    Solar Built Around
                    <span>Your Future.</span>
                </h1>

                <p class="hero-text">
                    We combine reliable products, professional installation,
                    practical pricing and continued customer support to deliver
                    solar energy solutions designed for long-term value.
                </p>

                <div class="hero-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        <i class="fa-solid fa-bolt"></i>
                        Get a Free Quote
                    </a>
                    <a href="{{ route('projects') }}" class="btn btn-secondary">
                        <i class="fa-solid fa-solar-panel"></i>
                        View Projects
                    </a>
                </div>

                <div class="hero-points">
                    <div class="hero-point">
                        <i class="fa-solid fa-leaf"></i>
                        Clean Energy
                    </div>
                    <div class="hero-point">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        Smart Savings
                    </div>
                    <div class="hero-point">
                        <i class="fa-solid fa-shield-halved"></i>
                        Reliable Support
                    </div>
                </div>
            </div>

            <div class="hero-visual reveal-right">
                <div class="solar-circle">
                    <div class="solar-inner">
                        <div class="sun-core"></div>
                        <div class="mountain"></div>
                        <div class="solar-panel"></div>
                    </div>
                </div>

                <div class="floating-badge badge-one">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <strong>10+ Years</strong>
                        <span>Experience</span>
                    </div>
                </div>

                <div class="floating-badge badge-two">
                    <i class="fa-solid fa-headset"></i>
                    <div>
                        <strong>Customer First</strong>
                        <span>Support & Service</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-light">
        <div class="container">

            <div class="section-heading reveal">
                <div class="eyebrow">Our Advantage</div>
                <h2>Why Customers <span>Choose Us</span></h2>
                <p>
                    Arunachala Solar Energy is committed to providing reliable,
                    affordable and sustainable solar energy solutions with a
                    customer-first approach.
                </p>
            </div>

            <div class="why-grid">

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-star"></i></div>
                    <h3>Quality Products</h3>
                    <p>
                        Reliable solar panels and quality components selected
                        for dependable solar system performance.
                    </p>
                </div>

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-user-gear"></i></div>
                    <h3>Expert Installation</h3>
                    <p>
                        Professional technical installation support focused
                        on a safe and efficient solar setup.
                    </p>
                </div>

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-wallet"></i></div>
                    <h3>Affordable Pricing</h3>
                    <p>
                        Practical solar solutions designed around different
                        requirements and budgets.
                    </p>
                </div>

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h3>High Performance</h3>
                    <p>
                        Solar solutions designed to deliver efficient and
                        dependable energy generation.
                    </p>
                </div>

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-heart"></i></div>
                    <h3>Customer First</h3>
                    <p>
                        We focus on understanding your needs and recommending
                        practical solutions for your energy goals.
                    </p>
                </div>

                <div class="why-card reveal">
                    <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                    <h3>After-Sales Support</h3>
                    <p>
                        Continued support and maintenance assistance after
                        installation to keep your solar journey smooth.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container difference">

            <div class="difference-image reveal-left">
                <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=1200&q=90"
                    alt="Solar panels and renewable energy" loading="lazy">

                <div class="image-label">
                    <strong>10+</strong>
                    <span>Years of Experience</span>
                </div>
            </div>

            <div class="difference-content reveal-right">
                <div class="eyebrow">Our Difference</div>

                <h2>
                    Smart Solar.
                    <span>Honest Service.</span>
                </h2>

                <p>
                    We believe solar should be simple, dependable and valuable.
                    Our approach combines quality products with professional
                    installation and practical customer support.
                </p>

                <div class="check-list">

                    <div class="check-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <h4>Customized Solar Solutions</h4>
                            <p>Solutions tailored to your energy requirements.</p>
                        </div>
                    </div>

                    <div class="check-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <h4>Professional Installation</h4>
                            <p>Technical installation with attention to quality.</p>
                        </div>
                    </div>

                    <div class="check-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <h4>Reliable Components</h4>
                            <p>Quality products for dependable system performance.</p>
                        </div>
                    </div>

                    <div class="check-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <h4>Long-Term Support</h4>
                            <p>Installation, maintenance and after-sales assistance.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="section commitment">
        <div class="container">

            <div class="section-heading reveal">
                <div class="eyebrow">Our Commitment</div>
                <h2>Powering The Future <span>Sustainably</span></h2>
                <p>
                    Reliable, affordable and innovative solar energy solutions
                    built for a cleaner and smarter future.
                </p>
            </div>

            <div class="commitment-grid">

                <div class="commitment-card reveal">
                    <i class="fa-solid fa-leaf"></i>
                    <h3>Clean Energy</h3>
                    <p>Support a cleaner and more sustainable energy future.</p>
                </div>

                <div class="commitment-card reveal">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h3>Reliable Solutions</h3>
                    <p>Quality-focused solutions built around dependable performance.</p>
                </div>

                <div class="commitment-card reveal">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <h3>Smart Savings</h3>
                    <p>Practical solutions designed to help reduce electricity costs.</p>
                </div>

                <div class="commitment-card reveal">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Customer Support</h3>
                    <p>Guidance and support throughout your solar journey.</p>
                </div>

            </div>

            <div class="stats reveal">
                <div class="stat">
                    <strong data-count="10" data-suffix="+">0</strong>
                    <span>Years Experience</span>
                </div>
                <div class="stat">
                    <strong data-count="100" data-suffix="+">0</strong>
                    <span>Happy Customers</span>
                </div>
                <div class="stat">
                    <strong data-count="100" data-suffix="%">0</strong>
                    <span>Quality Focus</span>
                </div>
                <div class="stat">
                    <strong data-count="24" data-suffix="/7">0</strong>
                    <span>Support Mindset</span>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-light">
        <div class="container">

            <div class="section-heading reveal">
                <div class="eyebrow">Simple Process</div>
                <h2>From Idea To <span>Solar</span></h2>
                <p>
                    A straightforward journey from understanding your energy
                    needs to delivering a dependable solar solution.
                </p>
            </div>

            <div class="process-grid">

                <div class="process-card reveal">
                    <div class="process-number">01</div>
                    <div class="process-icon">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3>Consultation</h3>
                    <p>
                        Understand your electricity needs, goals and requirements.
                    </p>
                </div>

                <div class="process-card reveal">
                    <div class="process-number">02</div>
                    <div class="process-icon">
                        <i class="fa-solid fa-magnifying-glass-location"></i>
                    </div>
                    <h3>Assessment</h3>
                    <p>
                        Evaluate the site and determine the appropriate solar solution.
                    </p>
                </div>

                <div class="process-card reveal">
                    <div class="process-number">03</div>
                    <div class="process-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3>Installation</h3>
                    <p>
                        Professional installation and technical setup of your system.
                    </p>
                </div>

                <div class="process-card reveal">
                    <div class="process-number">04</div>
                    <div class="process-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>Support</h3>
                    <p>
                        Continued maintenance and after-sales support when you need it.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-box reveal">

                <div class="cta-content">
                    <div class="eyebrow">Start Your Solar Journey</div>
                    <h2>Ready To Switch To Solar?</h2>
                    <p>
                        Talk to Arunachala Solar Energy and discover a practical
                        solar solution for your home, business or industry.
                    </p>
                </div>

                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        <i class="fa-solid fa-phone"></i>
                        Get a Free Quote
                    </a>

                    <a href="{{ route('solutions') }}" class="btn btn-secondary">
                        <i class="fa-solid fa-solar-panel"></i>
                        Explore Solutions
                    </a>
                </div>

            </div>
        </div>
    </section>



    <style>
        :root {
            --blue: #063b68;
            --blue-dark: #032c4d;
            --blue-light: #0876b9;
            --orange: #f47718;
            --orange-light: #ffb52d;
            --gold: #f4b72b;
            --light: #f7fafc;
            --white: #ffffff;
            --text: #203548;
            --muted: #6b7d8c;
            --border: #e5edf2;
            --shadow: 0 18px 50px rgba(3, 48, 80, .10);
            --transition: .35s cubic-bezier(.2, .8, .2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
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

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: auto;
        }

        /* PRELOADER */
        /* .preloader {
            position: fixed;
            inset: 0;
            background: var(--white);
            display: grid;
            place-items: center;
            z-index: 9999;
            transition: opacity .6s ease, visibility .6s ease;
        }

        .preloader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .loader-content {
            text-align: center;
        }

        .sun-loader {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            margin: auto auto 20px;
            background: radial-gradient(circle, var(--orange-light) 0 28%, var(--orange) 29% 46%, transparent 47%);
            position: relative;
            animation: spin 3s linear infinite;
        }

        .sun-loader::before {
            content: "";
            position: absolute;
            inset: -14px;
            border: 3px dashed var(--gold);
            border-radius: 50%;
        }

        .loader-content h3 {
            font: 800 18px "Montserrat";
            color: var(--blue);
            letter-spacing: 1px;
        }

        .loader-content p {
            margin-top: 6px;
            color: var(--orange);
            font-size: 12px;
            font-weight: 600;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        } */

        /* TOPBAR */
        /* .topbar {
            background: var(--blue-dark);
            color: #fff;
            font-size: 12px;
        }

        .topbar-inner {
            min-height: 38px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .top-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .top-item i {
            color: var(--orange-light);
        } */

        /* NAVBAR */
        /* .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, .96);
            border-bottom: 1px solid transparent;
            transition: .35s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 8px 30px rgba(0, 0, 0, .08);
            border-color: var(--border);
            backdrop-filter: blur(12px);
        }

        .nav-inner {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand img {
            width: 68px;
            height: 68px;
            object-fit: contain;
        }

        .brand-text strong {
            display: block;
            color: var(--blue);
            font: 800 20px "Montserrat";
            letter-spacing: .5px;
        }

        .brand-text span {
            display: block;
            color: var(--orange);
            font: 700 10px "Montserrat";
            letter-spacing: 2px;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .menu>a {
            position: relative;
            color: var(--blue);
            font-size: 13px;
            font-weight: 600;
            padding: 8px 0;
        }

        .menu>a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: var(--orange);
            transition: width .3s ease;
        }

        .menu>a:hover::after,
        .menu>a.active::after {
            width: 100%;
        }

        .nav-contact {
            padding: 12px 17px !important;
            border-radius: 30px;
            background: linear-gradient(135deg, var(--orange), var(--orange-light));
            color: #fff !important;
            box-shadow: 0 8px 20px rgba(244, 119, 24, .25);
        }

        .nav-contact::after {
            display: none;
        }

        .mobile-btn {
            display: none;
            border: 0;
            background: var(--blue);
            color: #fff;
            width: 42px;
            height: 42px;
            border-radius: 10px;
            font-size: 18px;
        } */

        /* HERO */
        .hero {
            position: relative;
            min-height: 650px;
            overflow: hidden;
            background:
                radial-gradient(circle at 78% 35%, rgba(244, 183, 43, .22), transparent 25%),
                linear-gradient(135deg, #f8fcff 0%, #fff 52%, #fff5e8 100%);
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 620px;
            height: 620px;
            border: 1px solid rgba(244, 119, 24, .16);
            border-radius: 50%;
            right: -150px;
            top: 20px;
            animation: orbit 15s linear infinite;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 480px;
            height: 480px;
            border: 1px dashed rgba(6, 59, 104, .14);
            border-radius: 50%;
            right: -80px;
            top: 90px;
            animation: orbitReverse 11s linear infinite;
        }

        @keyframes orbit {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes orbitReverse {
            to {
                transform: rotate(-360deg);
            }
        }

        .hero-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 70px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--orange);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .eyebrow::before,
        .eyebrow::after {
            content: "";
            width: 28px;
            height: 2px;
            background: var(--orange);
        }

        .hero h1 {
            margin: 18px 0;
            font: 800 clamp(42px, 5vw, 66px)/1.06 "Montserrat";
            color: var(--blue);
        }

        .hero h1 span {
            display: block;
            color: var(--orange);
        }

        .hero-text {
            max-width: 570px;
            color: var(--muted);
            line-height: 1.85;
            font-size: 15px;
        }

        .hero-buttons {
            display: flex;
            gap: 14px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 14px 22px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            transition: var(--transition);
        }

        .btn-primary {
            color: #fff;
            background: linear-gradient(135deg, var(--orange), var(--orange-light));
            box-shadow: 0 12px 28px rgba(244, 119, 24, .28);
        }

        .btn-secondary {
            color: #fff;
            background: var(--blue);
            box-shadow: 0 12px 28px rgba(6, 59, 104, .18);
        }

        .btn:hover {
            transform: translateY(-4px);
        }

        .hero-points {
            display: flex;
            gap: 25px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .hero-point {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 12px;
            font-weight: 600;
        }

        .hero-point i {
            width: 31px;
            height: 31px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: var(--orange);
            background: #fff1df;
        }

        /* HERO VISUAL */
        .hero-visual {
            min-height: 500px;
            position: relative;
            display: grid;
            place-items: center;
        }

        .solar-circle {
            width: 390px;
            height: 390px;
            border-radius: 50%;
            background:
                radial-gradient(circle, #fff 0 28%, transparent 29%),
                conic-gradient(from 0deg, var(--orange), var(--gold), var(--blue), var(--orange));
            padding: 7px;
            box-shadow: 0 30px 80px rgba(6, 59, 104, .16);
            animation: solarFloat 5s ease-in-out infinite;
        }

        .solar-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(145deg, #fff, #eef7fb);
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
        }

        .sun-core {
            width: 125px;
            height: 125px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%, #ffe77a, #ffae19 55%, #f47718);
            box-shadow: 0 0 55px rgba(244, 183, 43, .55);
            animation: pulse 3s ease-in-out infinite;
        }

        .solar-panel {
            position: absolute;
            width: 210px;
            height: 120px;
            right: 45px;
            bottom: 62px;
            transform: skewY(-10deg) rotate(-12deg);
            background:
                linear-gradient(90deg, transparent 32%, rgba(255, 255, 255, .5) 33%, transparent 34%, transparent 65%, rgba(255, 255, 255, .5) 66%, transparent 67%),
                linear-gradient(0deg, transparent 32%, rgba(255, 255, 255, .5) 33%, transparent 34%, transparent 65%, rgba(255, 255, 255, .5) 66%, transparent 67%),
                linear-gradient(135deg, #0a5c91, #07375d);
            border: 4px solid #163e59;
            box-shadow: 0 20px 35px rgba(0, 0, 0, .15);
        }

        .mountain {
            position: absolute;
            bottom: 25px;
            left: 45px;
            width: 190px;
            height: 130px;
            clip-path: polygon(0 100%, 42% 30%, 59% 60%, 76% 5%, 100% 100%);
            background: linear-gradient(145deg, var(--blue), var(--blue-light));
            opacity: .96;
        }

        .floating-badge {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 11px;
            background: #fff;
            border: 1px solid var(--border);
            padding: 15px 18px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            animation: badgeFloat 4s ease-in-out infinite;
        }

        .badge-one {
            top: 60px;
            left: 10px;
        }

        .badge-two {
            right: 0;
            bottom: 55px;
            animation-delay: -2s;
        }

        .floating-badge i {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            display: grid;
            place-items: center;
            background: #fff1df;
            color: var(--orange);
        }

        .floating-badge strong {
            display: block;
            color: var(--blue);
            font: 800 15px "Montserrat";
        }

        .floating-badge span {
            display: block;
            color: var(--muted);
            font-size: 10px;
            margin-top: 2px;
        }

        @keyframes solarFloat {

            0%,
            100% {
                transform: translateY(0) rotate(0);
            }

            50% {
                transform: translateY(-12px) rotate(2deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.07);
            }
        }

        @keyframes badgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* SECTION */
        .section {
            padding: 100px 0;
        }

        .section-light {
            background: var(--light);
        }

        .section-heading {
            text-align: center;
            max-width: 720px;
            margin: 0 auto 55px;
        }

        .section-heading h2 {
            margin: 14px 0;
            color: var(--blue);
            font: 800 clamp(32px, 4vw, 45px)/1.15 "Montserrat";
        }

        .section-heading h2 span {
            color: var(--orange);
        }

        .section-heading p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
        }

        /* WHY CARDS */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .why-card {
            position: relative;
            padding: 32px 27px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(3, 48, 80, .05);
            transition: var(--transition);
        }

        .why-card::before {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            right: -35px;
            top: -35px;
            border-radius: 50%;
            background: rgba(244, 119, 24, .08);
            transition: .5s ease;
        }

        .why-card:hover {
            transform: translateY(-10px);
            border-color: rgba(244, 119, 24, .35);
            box-shadow: 0 25px 55px rgba(3, 48, 80, .12);
        }

        .why-card:hover::before {
            transform: scale(2.4);
        }

        .why-icon {
            position: relative;
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            color: var(--orange);
            background: linear-gradient(135deg, #fff5e8, #ffe8ca);
            font-size: 23px;
            margin-bottom: 22px;
            transition: var(--transition);
        }

        .why-card:hover .why-icon {
            transform: rotate(-5deg) scale(1.08);
            background: linear-gradient(135deg, var(--orange), var(--orange-light));
            color: #fff;
        }

        .why-card h3 {
            color: var(--blue);
            font: 800 18px "Montserrat";
            margin-bottom: 10px;
        }

        .why-card p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.75;
        }

        /* DIFFERENCE */
        .difference {
            display: grid;
            grid-template-columns: .95fr 1.05fr;
            align-items: center;
            gap: 80px;
        }

        .difference-image {
            position: relative;
        }

        .difference-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 28px;
            box-shadow: var(--shadow);
            transition: transform .8s ease;
        }

        .difference-image:hover img {
            transform: scale(1.025);
        }

        .image-label {
            position: absolute;
            left: -22px;
            bottom: 30px;
            background: #fff;
            padding: 20px 23px;
            border-radius: 18px;
            box-shadow: var(--shadow);
            animation: badgeFloat 4s ease-in-out infinite;
        }

        .image-label strong {
            display: block;
            color: var(--orange);
            font: 800 38px "Montserrat";
        }

        .image-label span {
            color: var(--blue);
            font-size: 11px;
            font-weight: 700;
        }

        .difference-content h2 {
            margin: 15px 0;
            color: var(--blue);
            font: 800 42px/1.15 "Montserrat";
        }

        .difference-content h2 span {
            color: var(--orange);
        }

        .difference-content>p {
            color: var(--muted);
            line-height: 1.8;
            font-size: 14px;
            margin-bottom: 27px;
        }

        .check-list {
            display: grid;
            gap: 16px;
        }

        .check-item {
            display: flex;
            align-items: flex-start;
            gap: 13px;
        }

        .check-item i {
            width: 34px;
            height: 34px;
            flex: 0 0 34px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: #fff;
            background: linear-gradient(135deg, var(--orange), var(--orange-light));
            font-size: 12px;
        }

        .check-item h4 {
            color: var(--blue);
            font-size: 14px;
            margin-bottom: 3px;
        }

        .check-item p {
            color: var(--muted);
            font-size: 12px;
        }

        /* COMMITMENT */
        .commitment {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #032d4e, #075b91);
            color: #fff;
        }

        .commitment::before {
            content: "";
            position: absolute;
            width: 550px;
            height: 550px;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 50%;
            right: -180px;
            top: -220px;
        }

        .commitment .section-heading h2 {
            color: #fff;
        }

        .commitment .section-heading p {
            color: rgba(255, 255, 255, .72);
        }

        .commitment-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .commitment-card {
            text-align: center;
            padding: 34px 20px;
            border: 1px solid rgba(255, 255, 255, .13);
            background: rgba(255, 255, 255, .06);
            border-radius: 20px;
            backdrop-filter: blur(8px);
            transition: var(--transition);
        }

        .commitment-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, .11);
        }

        .commitment-card i {
            color: var(--orange-light);
            font-size: 29px;
            margin-bottom: 18px;
        }

        .commitment-card h3 {
            font: 800 16px "Montserrat";
            margin-bottom: 7px;
        }

        .commitment-card p {
            color: rgba(255, 255, 255, .67);
            font-size: 11px;
            line-height: 1.6;
        }

        /* COUNTERS */
        .stats {
            margin-top: 65px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .16);
            overflow: hidden;
        }

        .stat {
            text-align: center;
            padding: 28px 15px;
            position: relative;
        }

        .stat:not(:last-child)::after {
            content: "";
            position: absolute;
            right: 0;
            top: 25%;
            width: 1px;
            height: 50%;
            background: var(--border);
        }

        .stat strong {
            display: block;
            color: var(--orange);
            font: 800 34px "Montserrat";
        }

        .stat span {
            color: var(--blue);
            font-size: 11px;
            font-weight: 700;
        }

        /* PROCESS */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .process-card {
            position: relative;
            padding: 30px 22px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(3, 48, 80, .05);
            transition: var(--transition);
        }

        .process-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow);
        }

        .process-number {
            color: var(--orange);
            font: 800 32px "Montserrat";
            opacity: .25;
        }

        .process-icon {
            width: 48px;
            height: 48px;
            margin: 10px 0 18px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: #fff2e1;
            color: var(--orange);
        }

        .process-card h3 {
            color: var(--blue);
            font: 800 16px "Montserrat";
            margin-bottom: 8px;
        }

        .process-card p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.7;
        }

        /* CTA */
        .cta {
            padding: 85px 0;
            background:
                radial-gradient(circle at 15% 50%, rgba(244, 183, 43, .2), transparent 24%),
                linear-gradient(135deg, #fff8ef, #f4faff);
        }

        .cta-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 35px;
            padding: 55px 60px;
            border-radius: 28px;
            background: linear-gradient(135deg, var(--blue), #075c93);
            box-shadow: 0 25px 60px rgba(3, 48, 80, .2);
            position: relative;
            overflow: hidden;
        }

        .cta-box::after {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 50%;
            right: -80px;
            top: -100px;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-content .eyebrow {
            color: var(--orange-light);
        }

        .cta-content h2 {
            color: #fff;
            font: 800 38px "Montserrat";
            margin: 12px 0;
        }

        .cta-content p {
            color: rgba(255, 255, 255, .7);
            font-size: 13px;
            max-width: 600px;
        }

        .cta-buttons {
            position: relative;
            z-index: 2;
            display: flex;
            gap: 12px;
            flex-shrink: 0;
        }

        .cta-buttons .btn-secondary {
            background: #fff;
            color: var(--blue);
        }

       
        /* FLOATING */
        .whatsapp {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #25d366;
            color: #fff;
            font-size: 25px;
            z-index: 1000;
            box-shadow: 0 12px 30px rgba(37, 211, 102, .3);
            animation: whatsappPulse 2s infinite;
        }

        @keyframes whatsappPulse {

            0%,
            100% {
                box-shadow: 0 12px 30px rgba(37, 211, 102, .3);
            }

            50% {
                box-shadow: 0 12px 40px rgba(37, 211, 102, .55);
            }
        }

        .scroll-top {
            position: fixed;
            right: 25px;
            bottom: 92px;
            width: 43px;
            height: 43px;
            border: 0;
            border-radius: 12px;
            background: var(--blue);
            color: #fff;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: .3s ease;
            z-index: 999;
            cursor: pointer;
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* REVEAL */
        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-45px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(45px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .menu {
                gap: 15px;
            }

            .hero-grid,
            .difference {
                gap: 45px;
            }

            .why-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .commitment-grid,
            .process-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 800px) {
            .topbar-inner {
                justify-content: center;
            }

            .top-item:first-child {
                display: none;
            }

            .mobile-btn {
                display: block;
            }

            .menu {
                position: absolute;
                left: 20px;
                right: 20px;
                top: calc(100% + 8px);
                background: #fff;
                padding: 18px;
                border-radius: 16px;
                box-shadow: var(--shadow);
                flex-direction: column;
                align-items: stretch;
                gap: 5px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-10px);
                transition: .3s ease;
            }

            .menu.open {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .menu>a {
                padding: 12px;
            }

            .nav-contact {
                text-align: center;
            }

            .hero {
                padding: 80px 0;
            }

            .hero-grid,
            .difference {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                min-height: 450px;
                order: -1;
            }

            .solar-circle {
                width: 330px;
                height: 330px;
            }

            .difference-image img {
                height: 420px;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .stat:nth-child(2)::after {
                display: none;
            }

            .cta-box {
                flex-direction: column;
                align-items: flex-start;
                padding: 40px 30px;
            }
        }

        @media (max-width: 560px) {
            .container {
                width: min(100% - 28px, 1180px);
            }

            .brand-text strong {
                font-size: 16px;
            }

            .brand img {
                width: 57px;
                height: 57px;
            }

            .hero h1 {
                font-size: 41px;
            }

            .hero-points {
                gap: 13px;
            }

            .why-grid,
            .commitment-grid,
            .process-grid,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .solar-circle {
                width: 285px;
                height: 285px;
            }

            .floating-badge {
                padding: 10px 12px;
            }

            .badge-one {
                left: 0;
                top: 40px;
            }

            .badge-two {
                right: 0;
                bottom: 30px;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .stat strong {
                font-size: 27px;
            }

            .cta-content h2 {
                font-size: 29px;
            }

            .cta-buttons {
                width: 100%;
                flex-direction: column;
            }

            .cta-buttons .btn {
                justify-content: center;
            }

            .image-label {
                left: 12px;
            }

            .difference-content h2 {
                font-size: 34px;
            }
        }
    </style>

@endsection