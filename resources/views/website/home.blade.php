@extends('layouts.website')
@section('content')


<!-- =========================================================
     HERO
========================================================= -->

<section class="hero">

    <div class="container hero-grid">


        <div class="hero-content">

            <div class="hero-badge">

                <i class="fa-solid fa-sun"></i>

                CLEAN • SMART • SUSTAINABLE ENERGY

            </div>


            <h1>

                Powering The Future

                <span>
                    Sustainably
                </span>

            </h1>


            <p class="hero-description">

                High-efficiency solar energy solutions for
                homes, businesses and industries.

                Save energy.
                Save money.
                Save the planet.

            </p>


            <div class="hero-buttons">

                <a
                    href="{{ route('solutions') }}"
                    class="btn btn-primary">

                    <i class="fa-solid fa-bolt"></i>

                    Explore Solutions

                </a>


                <a
                    href="{{ route('contact') }}"
                    class="btn btn-secondary">

                    <i class="fa-solid fa-phone"></i>

                    Get a Free Quote

                </a>

            </div>


            <div class="hero-features">

                <div class="hero-feature">

                    <i class="fa-solid fa-leaf"></i>

                    Clean Energy

                </div>


                <div class="hero-feature">

                    <i class="fa-solid fa-indian-rupee-sign"></i>

                    Save on Electricity

                </div>


                <div class="hero-feature">

                    <i class="fa-solid fa-shield-halved"></i>

                    Quality Solutions

                </div>

            </div>

        </div>


        <!-- HERO VISUAL -->

        <div class="hero-visual">

            <div class="hero-image">

                <img
                    src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=90"
                    alt="Solar panels">

            </div>


            <div class="floating-card card-one">

                <i class="fa-solid fa-solar-panel"></i>

                <div>

                    <strong>
                        Solar Power
                    </strong>

                    <small>
                        Clean & Renewable
                    </small>

                </div>

            </div>


            <div class="floating-card card-two">

                <i class="fa-solid fa-bolt"></i>

                <div>

                    <strong>
                        Smart Energy
                    </strong>

                    <small>
                        Efficient Solutions
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SERVICE BAR
========================================================= -->

<div class="service-wrapper">

    <div class="container">

        <div class="service-bar">


            <a href="solutions.html"
               class="service-item">

                <div class="service-icon">

                    <i class="fa-solid fa-solar-panel"></i>

                </div>

                <strong>
                    ON-GRID
                </strong>

                <span>
                    Solar Solutions
                </span>

            </a>


            <a href="solutions.html"
               class="service-item">

                <div class="service-icon">

                    <i class="fa-solid fa-battery-full"></i>

                </div>

                <strong>
                    OFF-GRID
                </strong>

                <span>
                    Solar Solutions
                </span>

            </a>


            <a href="solutions.html"
               class="service-item">

                <div class="service-icon">

                    <i class="fa-solid fa-sun"></i>

                </div>

                <strong>
                    HYBRID
                </strong>

                <span>
                    Solar Solutions
                </span>

            </a>


            <a href="services.html"
               class="service-item">

                <div class="service-icon">

                    <i class="fa-solid fa-screwdriver-wrench"></i>

                </div>

                <strong>
                    INSTALLATION
                </strong>

                <span>
                    & Maintenance
                </span>

            </a>


            <a href="contact.html"
               class="service-item">

                <div class="service-icon">

                    <i class="fa-solid fa-headset"></i>

                </div>

                <strong>
                    AFTER SALES
                </strong>

                <span>
                    Support
                </span>

            </a>


        </div>

    </div>

</div>


<!-- =========================================================
     ABOUT
========================================================= -->

<section class="section">

    <div class="container about-grid">


        <div class="about-image reveal-left">

            <div class="about-image-main">

                <img
                    src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=1000&q=90"
                    alt="Solar energy">

            </div>


            <div class="experience-card">

                <strong>
                    10+
                </strong>

                <span>
                    Years of Experience
                </span>

            </div>

        </div>


        <div class="about-content reveal-right">

            <div class="eyebrow">
                About Us
            </div>


            <h2>

                Your Trusted Partner

                <span>
                    in Solar Energy
                </span>

            </h2>


            <p>

                Arunachala Solar Energy is committed
                to providing reliable, affordable and
                sustainable solar energy solutions.

                We design and install high-performance
                solar systems tailored to your needs.

            </p>


            <div class="about-points">


                <div class="about-point">

                    <div class="about-point-icon">

                        <i class="fa-solid fa-star"></i>

                    </div>

                    <div>

                        <h4>
                            Quality Products
                        </h4>

                        <p>
                            Reliable solar panels and
                            quality components.
                        </p>

                    </div>

                </div>


                <div class="about-point">

                    <div class="about-point-icon">

                        <i class="fa-solid fa-user-gear"></i>

                    </div>

                    <div>

                        <h4>
                            Expert Installation
                        </h4>

                        <p>
                            Professional technical
                            installation support.
                        </p>

                    </div>

                </div>


                <div class="about-point">

                    <div class="about-point-icon">

                        <i class="fa-solid fa-wallet"></i>

                    </div>

                    <div>

                        <h4>
                            Affordable Pricing
                        </h4>

                        <p>
                            Practical solutions for
                            different budgets.
                        </p>

                    </div>

                </div>


                <div class="about-point">

                    <div class="about-point-icon">

                        <i class="fa-solid fa-heart"></i>

                    </div>

                    <div>

                        <h4>
                            Customer Satisfaction
                        </h4>

                        <p>
                            Your satisfaction is our
                            priority.
                        </p>

                    </div>

                </div>


            </div>


            <div style="margin-top:30px">

                <a
                    href="{{ route('about') }}"
                    class="btn btn-secondary">

                    Discover More

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>


    <!-- STATS -->

    <div class="container">

        <div class="stats reveal">


            <div class="stat">

                <i class="fa-solid fa-users"></i>

                <strong
                    data-count="500">
                    0
                </strong>

                <span>
                    Happy Customers
                </span>

            </div>


            <div class="stat">

                <i class="fa-solid fa-solar-panel"></i>

                <strong
                    data-count="1000">
                    0
                </strong>

                <span>
                    Projects Completed
                </span>

            </div>


            <div class="stat">

                <i class="fa-solid fa-award"></i>

                <strong
                    data-count="25">
                    0
                </strong>

                <span>
                    Years Warranty
                </span>

            </div>


            <div class="stat">

                <i class="fa-solid fa-calendar-check"></i>

                <strong
                    data-count="10">
                    0
                </strong>

                <span>
                    Years Experience
                </span>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     SERVICES
========================================================= -->

<section class="section section-light">

    <div class="container">

        <div class="section-heading reveal">

            <div class="eyebrow">
                Our Services
            </div>

            <h2>
                Complete Solar Energy Solutions
            </h2>

            <p>
                From consultation and design to
                installation and support, we provide
                practical solar solutions for every need.
            </p>

        </div>


        <div class="cards">


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-house"></i>

                </div>

                <h3>
                    Residential Solar
                </h3>

                <p>
                    Reduce household electricity
                    costs with efficient rooftop
                    solar solutions.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Service

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-building"></i>

                </div>

                <h3>
                    Commercial Solar
                </h3>

                <p>
                    Scalable solar systems for offices,
                    shops, warehouses and businesses.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Service

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-wheat-awn"></i>

                </div>

                <h3>
                    Agricultural Solar
                </h3>

                <p>
                    Solar power solutions for farms,
                    irrigation and agricultural needs.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Service

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-plug-circle-bolt"></i>

                </div>

                <h3>
                    On-Grid Solar
                </h3>

                <p>
                    Grid-connected solar systems designed
                    around your electricity requirements.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Solution

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-battery-three-quarters"></i>

                </div>

                <h3>
                    Hybrid Solar
                </h3>

                <p>
                    Solar combined with battery storage
                    for improved energy resilience.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Solution

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="service-card reveal">

                <div class="service-card-icon">

                    <i class="fa-solid fa-screwdriver-wrench"></i>

                </div>

                <h3>
                    Maintenance
                </h3>

                <p>
                    System maintenance, troubleshooting
                    and ongoing technical support.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="service-link">

                    Explore Service

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     CTA
========================================================= -->

<section class="cta-section">

    <div class="container cta-grid">


        <div class="cta-content reveal-left">

            <div class="eyebrow"
                 style="color:#ff9b35">

                GO SOLAR TODAY

            </div>


            <h2>

                Make the smart choice for a

                <span>
                    brighter tomorrow!
                </span>

            </h2>


            <p>

                Switch to clean renewable energy
                and enjoy long-term savings with
                a professionally designed solar system.

            </p>

        </div>


        <div class="cta-buttons reveal-right">

            <a
                href="tel:+919642093403"
                class="btn btn-white">

                <i class="fa-solid fa-phone"></i>

                +91 9642093403

            </a>


            <a
                href="https://wa.me/919642093403"
                target="_blank"
                class="btn btn-whatsapp">

                <i class="fa-brands fa-whatsapp"></i>

                Chat on WhatsApp

            </a>

        </div>


    </div>

</section>

@endsection
