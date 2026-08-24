@extends('layouts.website')
@section('content')



    <section class="hero">
        <div class="container hero-grid">

            <div class="reveal-left">
                <div class="eyebrow">Our Solar Projects</div>

                <h1>
                    Powering Real
                    <span>Solar Success.</span>
                </h1>

                <p class="hero-description">
                    Explore solar applications designed for homes, businesses,
                    industries, agriculture and independent energy needs.
                    Every project is built around efficiency, reliability and
                    long-term value.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('projects') }}" class="btn btn-primary">
                        <i class="fa-solid fa-solar-panel"></i>
                        Explore Projects
                    </a>
                    <a href="#solar-contact-section" class="btn btn-secondary">
                        <i class="fa-solid fa-phone"></i>
                        Start Your Project
                    </a>
                </div>

                <div class="hero-meta">
                    <div class="meta">
                        <i class="fa-solid fa-house"></i>
                        Residential
                    </div>
                    <div class="meta">
                        <i class="fa-solid fa-building"></i>
                        Commercial
                    </div>
                    <div class="meta">
                        <i class="fa-solid fa-industry"></i>
                        Industrial
                    </div>
                </div>
            </div>

            <div class="hero-visual reveal-right">
                <div class="hero-glow"></div>

                <div class="hero-photo">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=90"
                        alt="Solar panels project">
                </div>

                <div class="hero-card one">
                    <i class="fa-solid fa-solar-panel"></i>
                    <div>
                        <strong>Solar Power</strong>
                        <small>Clean & Renewable</small>
                    </div>
                </div>

                <div class="hero-card two">
                    <i class="fa-solid fa-bolt"></i>
                    <div>
                        <strong>Smart Energy</strong>
                        <small>Efficient Solutions</small>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section   id="solar-contact-section" class="solar-contact-section">

        <div class="container solar-contact-grid">

            <!-- =====================================================
                                             CONTACT INFORMATION
                                        ====================================================== -->

            <div class="solar-contact-info solar-reveal">

                <div class="solar-kicker">
                    GET IN TOUCH
                </div>

                <h2>
                    Let's Go Solar Together
                </h2>

                <!-- <p>
                                    Looking for a reliable solar energy partner?
                                    Arunachala Solar Energy provides professional
                                    solar solutions for homes, businesses,
                                    industries and agricultural requirements.
                                </p> -->


                <!-- ADDRESS -->

                <div class="solar-info-item">

                    <div class="solar-info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="solar-info-content">

                        <strong>
                            Head Office
                        </strong>

                        <a href="https://www.google.com/maps/search/?api=1&query=%235-94+Punganur+Pulicherla+Chinnagottigallu+Opposite+to+Santha+Gate+Somala+Chittor+Andhra+Pradesh+517257"
                            target="_blank">
                            # 5-94, Punganur Pulicherla
                            Chinnagottigallu,<br>
                            Opposite to Santha Gate,<br>
                            Somala, Chittor,<br>
                            Andhra Pradesh – 517257
                        </a>

                    </div>

                </div>


                <!-- PHONE -->

                <div class="solar-info-item">

                    <div class="solar-info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div class="solar-info-content">

                        <strong>
                            Mobile
                        </strong>

                        <a href="tel:+91 9642093403">
                           9642093403
                        </a>

                        <!-- <a href="tel:+919399915011">
                                            93999 15011
                                        </a> -->

                    </div>

                </div>


                <!-- EMAIL -->

                <div class="solar-info-item">

                    <div class="solar-info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="solar-info-content">

                        <strong>
                            Email
                        </strong>

                        <a href="mailto:sureshmannuri@gmail.com">
                            sureshmannuri@gmail.com
                        </a>

                    </div>

                </div>


                <!-- SERVICES -->

                <div class="solar-services-box">

                    <strong>
                        Our Solar Services
                    </strong>

                    <div class="solar-service-tags">

                        <span>
                            Residential Solar
                        </span>

                        <span>
                            Commercial Solar
                        </span>

                        <span>
                            Industrial Solar
                        </span>

                        <span>
                            Agricultural Solar
                        </span>

                        <span>
                            Rooftop Solar
                        </span>

                        <span>
                            Solar & Energy Storage
                        </span>

                        <span>
                            Installation
                        </span>

                        <span>
                            Solar Consultation
                        </span>

                        <span>
                            Maintenance & Support
                        </span>

                    </div>

                </div>


                <!-- SOCIAL -->

                <div class="solar-socials">

                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="mailto:arunachalasolarenergy@gmail.com" aria-label="Email">
                        <i class="fa-solid fa-envelope"></i>
                    </a>

                </div>

            </div>


            <!-- =====================================================
                                             ENQUIRY FORM
                                        ====================================================== -->

            <div class="solar-form-card solar-reveal">

                <div class="solar-kicker">
                    SOLAR ENQUIRY
                </div>

                <h2>
                    Get Your Solar Quote
                </h2>

                <p>
                    Tell us about your solar requirements and
                    our team will contact you with a suitable
                    solution.
                </p>


                <!-- SWEET ALERT -->

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                @if(session('success'))

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {

                            Swal.fire({
                                icon: 'success',
                                title: 'Enquiry Submitted!',
                                text: '{{ session('success') }}',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#f47718',
                                background: '#ffffff',
                                color: '#172b3f',
                                customClass: {
                                    popup: 'solar-swal-popup',
                                    title: 'solar-swal-title',
                                    confirmButton: 'solar-swal-button'
                                }
                            });

                        });
                    </script>

                @endif


                <!-- FORM -->

                <form id="solarContactForm" action="{{ route('contact.store') }}" method="POST" novalidate>

                    @csrf




                    <div class="solar-form-grid">


                        <!-- FULL NAME -->

                        <div class="solar-field">

                            <label for="solar_name">
                                FULL NAME *
                            </label>

                            <input required type="text" name="name" id="solar_name" placeholder="Your name" minlength="3"
                                maxlength="100">

                            <small class="solar-error" id="solar_nameError"></small>

                        </div>


                        <!-- PHONE -->

                        <div class="solar-field">

                            <label for="solar_phone">
                                PHONE NUMBER *
                            </label>

                            <input required type="tel" name="phone" id="solar_phone" placeholder="Your phone number"
                                maxlength="10" inputmode="numeric">

                            <small class="solar-error" id="solar_phoneError"></small>

                        </div>


                        <!-- EMAIL -->

                        <div class="solar-field">

                            <label for="solar_email">
                                EMAIL ADDRESS *
                            </label>

                            <input required type="email" name="email" id="solar_email" placeholder="Your email address">

                            <small class="solar-error" id="solar_emailError"></small>

                        </div>


                        <!-- COMPANY -->

                        <div class="solar-field">

                            <label for="solar_company">
                                COMPANY / ORGANIZATION
                            </label>

                            <input type="text" name="company" id="solar_company" placeholder="Company name" maxlength="150">

                            <small class="solar-error" id="solar_companyError"></small>

                        </div>


                        <!-- SERVICE -->

                        <div class="solar-field">

                            <label for="solar_service">
                                SERVICE REQUIRED *
                            </label>

                            <select required name="service" id="solar_service">

                                <option value="">
                                    Select a service
                                </option>

                                <option value="Residential Solar">
                                    Residential Solar
                                </option>

                                <option value="Commercial Solar">
                                    Commercial Solar
                                </option>

                                <option value="Industrial Solar">
                                    Industrial Solar
                                </option>

                                <option value="Agricultural Solar">
                                    Agricultural Solar
                                </option>

                                <option value="Rooftop Solar">
                                    Rooftop Solar
                                </option>

                                <option value="Solar & Energy Storage">
                                    Solar & Energy Storage
                                </option>

                                <option value="Installation">
                                    Installation
                                </option>

                                <option value="Solar Consultation">
                                    Solar Consultation
                                </option>

                                <option value="Maintenance & Support">
                                    Maintenance & Support
                                </option>

                            </select>

                            <small class="solar-error" id="solar_serviceError"></small>

                        </div>


                        <!-- SYSTEM SIZE -->

                        <div class="solar-field">

                            <label for="solar_capacity">
                                REQUIRED CAPACITY
                            </label>

                            <select name="capacity" id="solar_capacity">

                                <option value="">
                                    Select capacity
                                </option>

                                <option value="1-3 KW">
                                    1 – 3 KW
                                </option>

                                <option value="3-5 KW">
                                    3 – 5 KW
                                </option>

                                <option value="5-10 KW">
                                    5 – 10 KW
                                </option>

                                <option value="10-25 KW">
                                    10 – 25 KW
                                </option>

                                <option value="25-50 KW">
                                    25 – 50 KW
                                </option>

                                <option value="50-100 KW">
                                    50 – 100 KW
                                </option>

                                <option value="100+ KW">
                                    100+ KW
                                </option>

                                <option value="Not Sure">
                                    Not Sure
                                </option>

                            </select>

                            <small class="solar-error" id="solar_capacityError"></small>

                        </div>


                        <!-- LOCATION -->

                        <div class="solar-field full">

                            <label for="solar_location">
                                PROJECT LOCATION *
                            </label>

                            <input required type="text" name="location" id="solar_location"
                                placeholder="Where will the solar system be installed?" maxlength="200">

                            <small class="solar-error" id="solar_locationError"></small>

                        </div>


                        <!-- REQUIREMENT -->

                        <div class="solar-field full">

                            <label for="solar_message">
                                YOUR REQUIREMENT *
                            </label>

                            <textarea required name="message" id="solar_message" minlength="10" maxlength="1000"
                                placeholder="Tell us about your solar requirement, electricity usage, roof area, project type, etc."></textarea>

                            <small class="solar-error" id="solar_messageError"></small>

                        </div>


                        <!-- SUBMIT -->

                        <div class="solar-field full">

                            <button class="solar-submit-button" type="submit">

                                GET SOLAR QUOTE

                                <i class="fa-solid fa-paper-plane"></i>

                            </button>

                        </div>


                    </div>


                    <!-- SUCCESS MESSAGE -->

                    <div class="solar-success" id="solar_success">
                        Thank you! Your solar enquiry has
                        been submitted successfully.
                    </div>


                    <!-- FORM NOTE -->

                    <div class="solar-form-note">

                        Your information is used only to respond
                        to your solar enquiry.

                    </div>

                </form>

            </div>

        </div>

    </section>



    <section class="solar-map-section">

        <div class="container solar-location-grid">

            <!-- LOCATION INFORMATION -->
            <div class="solar-location-card solar-reveal">

                <div class="solar-kicker">
                    VISIT US
                </div>

                <h3>
                    Arunachala Solar Energy
                </h3>

                <p>
                    Visit Arunachala Solar Energy to discuss your
                    residential, commercial, industrial and
                    agricultural solar requirements. Our team is
                    ready to help you choose the right solar solution.
                </p>

                <div class="solar-address">

                    <div class="solar-address-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <p>
                        # 5-94, Punganur Pulicherla
                        Chinnagottigallu,<br>
                        Opposite to Santha Gate,<br>
                        Somala, Chittor,<br>
                        Andhra Pradesh – 517257
                    </p>

                </div>

                <a class="solar-map-button"
                    href="https://www.google.com/maps/search/?api=1&query=%235-94+Punganur+Pulicherla+Chinnagottigallu+Opposite+to+Santha+Gate+Somala+Chittor+Andhra+Pradesh+517257"
                    target="_blank" rel="noopener">
                    OPEN MAP

                    <i class="fa-solid fa-arrow-up-right-from-square"></i>

                </a>

            </div>


            <!-- GOOGLE MAP -->
            <div class="solar-map-frame solar-reveal">

                <iframe
                    src="https://www.google.com/maps?q=%235-94+Punganur+Pulicherla+Chinnagottigallu+Opposite+to+Santha+Gate+Somala+Chittor+Andhra+Pradesh+517257&output=embed"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

        </div>

    </section>


    <style>
        /* =========================================================
                               SOLAR CONTACT SECTION
                            ========================================================= */

        .solar-contact-section {
            position: relative;

            padding: 110px 0;

            background:
                linear-gradient(180deg,
                    var(--white) 0%,
                    var(--light) 100%);
        }


        /* Grid */

        .solar-contact-grid {
            display: grid;

            grid-template-columns:
                .85fr 1.15fr;

            gap: 60px;

            align-items: start;
        }


        /* =========================================================
                               CONTACT INFORMATION
                            ========================================================= */

        .solar-contact-info {
            position: relative;

            padding: 45px;

            overflow: hidden;

            border:
                1px solid var(--border);

            border-radius: 28px;

            background:
                linear-gradient(145deg,
                    var(--blue-dark),
                    var(--blue));

            box-shadow:
                var(--shadow);

            color: var(--white);
        }

        .solar-contact-info::before {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            top: -160px;
            right: -120px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(243, 173, 45, .28),
                    transparent 70%);
        }

        .solar-contact-info::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            bottom: -130px;
            left: -100px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(8, 121, 187, .35),
                    transparent 70%);
        }


        /* Kicker */

        .solar-kicker {
            position: relative;

            z-index: 2;

            display: inline-flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 15px;

            color: var(--orange-light);

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 1.8px;

            text-transform: uppercase;
        }

        .solar-kicker::before {
            content: "";

            width: 28px;
            height: 3px;

            border-radius: 10px;

            background:
                linear-gradient(90deg,
                    var(--orange),
                    var(--gold));
        }


        /* Heading */

        .solar-contact-info h2 {
            position: relative;

            z-index: 2;

            margin:
                0 0 18px;

            color: var(--white);

            font-size: 42px;

            line-height: 1.1;

            letter-spacing: -1.5px;
        }

        .solar-contact-info>p {
            position: relative;

            z-index: 2;

            margin:
                0 0 35px;

            color:
                rgba(255, 255, 255, .70);

            font-size: 15px;

            line-height: 1.8;
        }


        /* =========================================================
                               INFO ITEM
                            ========================================================= */

        .solar-info-item {
            position: relative;

            z-index: 2;

            display: flex;

            gap: 16px;

            padding:
                18px 0;

            border-bottom:
                1px solid rgba(255, 255, 255, .10);
        }

        .solar-info-icon {
            flex: 0 0 48px;

            width: 48px;
            height: 48px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            box-shadow:
                0 8px 20px rgba(244, 119, 24, .18);
        }

        .solar-info-icon i {
            font-size: 17px;
        }


        .solar-info-content {
            display: flex;

            flex-direction: column;

            min-width: 0;
        }

        .solar-info-content strong {
            margin-bottom: 5px;

            color: var(--white);

            font-size: 14px;

            font-weight: 800;
        }

        .solar-info-content a {
            width: fit-content;

            color:
                rgba(255, 255, 255, .68);

            font-size: 14px;

            line-height: 1.8;

            transition: var(--transition);
        }

        .solar-info-content a:hover {
            color: var(--orange-light);
        }


        /* =========================================================
                               SERVICES
                            ========================================================= */

        .solar-services-box {
            position: relative;

            z-index: 2;

            padding-top: 30px;
        }

        .solar-services-box>strong {
            display: block;

            margin-bottom: 15px;

            color: var(--white);

            font-size: 15px;
        }

        .solar-service-tags {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .solar-service-tags span {
            padding:
                7px 11px;

            border:
                1px solid rgba(255, 255, 255, .12);

            border-radius: 50px;

            color:
                rgba(255, 255, 255, .72);

            background:
                rgba(255, 255, 255, .06);

            font-size: 11px;

            transition: var(--transition);
        }

        .solar-service-tags span:hover {
            color: var(--white);

            border-color:
                rgba(244, 119, 24, .45);

            background:
                rgba(244, 119, 24, .15);

            transform: translateY(-2px);
        }


        /* =========================================================
                               SOCIAL
                            ========================================================= */

        .solar-socials {
            position: relative;

            z-index: 2;

            display: flex;

            gap: 10px;

            margin-top: 28px;
        }

        .solar-socials a {
            display: flex;

            align-items: center;
            justify-content: center;

            width: 40px;
            height: 40px;

            border:
                1px solid rgba(255, 255, 255, .14);

            border-radius: 50%;

            color: var(--white);

            background:
                rgba(255, 255, 255, .06);

            transition: var(--transition);
        }

        .solar-socials a:hover {
            color: var(--white);

            border-color: var(--orange);

            background: var(--orange);

            transform: translateY(-3px);
        }


        /* =========================================================
                               FORM CARD
                            ========================================================= */

        .solar-form-card {
            padding: 45px;

            border:
                1px solid var(--border);

            border-radius: 28px;

            background: var(--white);

            box-shadow:
                var(--shadow);
        }

        .solar-form-card .solar-kicker {
            color: var(--orange);
        }

        .solar-form-card h2 {
            margin:
                0 0 12px;

            color: var(--blue-dark);

            font-size: 40px;

            line-height: 1.1;

            letter-spacing: -1.5px;
        }

        .solar-form-card>p {
            margin:
                0 0 30px;

            color: var(--muted);

            font-size: 15px;

            line-height: 1.7;
        }


        /* =========================================================
                               FORM GRID
                            ========================================================= */

        .solar-form-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 20px;
        }

        .solar-field {
            min-width: 0;
        }

        .solar-field.full {
            grid-column: 1 / -1;
        }


        /* Labels */

        .solar-field label {
            display: block;

            margin-bottom: 8px;

            color: var(--text);

            font-size: 11px;

            font-weight: 800;

            letter-spacing: .8px;
        }


        /* Inputs */

        .solar-field input,
        .solar-field select,
        .solar-field textarea {
            width: 100%;

            border:
                1px solid var(--border);

            outline: none;

            border-radius: 12px;

            color: var(--text);

            background:
                #fbfdff;

            font-family: inherit;

            font-size: 14px;

            transition: var(--transition);
        }

        .solar-field input,
        .solar-field select {
            height: 52px;

            padding:
                0 15px;
        }

        .solar-field textarea {
            min-height: 145px;

            padding: 14px 15px;

            resize: vertical;
        }

        .solar-field input::placeholder,
        .solar-field textarea::placeholder {
            color:
                #9aa9b5;
        }


        /* Focus */

        .solar-field input:focus,
        .solar-field select:focus,
        .solar-field textarea:focus {
            border-color:
                var(--blue-light);

            background: var(--white);

            box-shadow:
                0 0 0 4px rgba(8, 121, 187, .08);
        }


        /* Select */

        .solar-field select {
            cursor: pointer;

            appearance: auto;
        }


        /* =========================================================
                               ERROR
                            ========================================================= */

        .solar-error {
            display: block;

            min-height: 18px;

            margin-top: 5px;

            color: #dc3545;

            font-size: 11px;
        }


        /* =========================================================
                               SUBMIT
                            ========================================================= */

        .solar-submit-button {
            width: 100%;

            min-height: 54px;

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 12px;

            border: 0;

            border-radius: 12px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            cursor: pointer;

            font-size: 13px;

            font-weight: 800;

            letter-spacing: .5px;

            box-shadow:
                0 12px 28px rgba(244, 119, 24, .20);

            transition: var(--transition);
        }

        .solar-submit-button:hover {
            transform: translateY(-3px);

            box-shadow:
                0 18px 35px rgba(244, 119, 24, .28);
        }

        .solar-submit-button i {
            font-size: 14px;

            transition: var(--transition);
        }

        .solar-submit-button:hover i {
            transform:
                translateX(4px) rotate(-5deg);
        }


        /* =========================================================
                               SUCCESS
                            ========================================================= */

        .solar-success {
            display: none;

            margin-top: 18px;

            padding: 14px 16px;

            border:
                1px solid rgba(25, 135, 84, .20);

            border-radius: 10px;

            color: #146c43;

            background:
                rgba(25, 135, 84, .08);

            font-size: 13px;
        }


        /* =========================================================
                               FORM NOTE
                            ========================================================= */

        .solar-form-note {
            margin-top: 20px;

            color:
                var(--muted);

            font-size: 11px;

            text-align: center;
        }


        /* =========================================================
                               REVEAL
                            ========================================================= */

        /* Contact cards are visible by default.
                               The previous version kept them at opacity: 0
                               unless JavaScript added .active. */
        .solar-contact-info.solar-reveal,
        .solar-form-card.solar-reveal {
            opacity: 1 !important;
            visibility: visible !important;
            transform: none !important;
            transition:
                opacity .8s ease,
                transform .8s ease;
        }


        /* =========================================================
                               TABLET
                            ========================================================= */

        @media (max-width: 1000px) {

            .solar-contact-grid {
                grid-template-columns: 1fr;

                gap: 30px;
            }

            .solar-contact-info {
                padding: 40px;
            }

            .solar-form-card {
                padding: 40px;
            }

        }


        /* =========================================================
                               MOBILE
                            ========================================================= */

        @media (max-width: 700px) {

            .solar-contact-section {
                padding: 75px 0;
            }

            .solar-contact-grid {
                gap: 25px;
            }

            .solar-contact-info,
            .solar-form-card {
                padding: 28px 22px;

                border-radius: 22px;
            }

            .solar-contact-info h2 {
                font-size: 34px;
            }

            .solar-form-card h2 {
                font-size: 32px;
            }

            .solar-form-grid {
                grid-template-columns: 1fr;

                gap: 15px;
            }

            .solar-field.full {
                grid-column: auto;
            }

            .solar-info-item {
                gap: 12px;
            }

            .solar-info-icon {
                flex-basis: 43px;

                width: 43px;
                height: 43px;
            }

        }


        /* =========================================================
                               SMALL MOBILE
                            ========================================================= */

        @media (max-width: 420px) {

            .solar-contact-info,
            .solar-form-card {
                padding: 25px 18px;
            }

            .solar-contact-info h2 {
                font-size: 30px;
            }

            .solar-form-card h2 {
                font-size: 29px;
            }

            .solar-service-tags span {
                font-size: 10px;

                padding:
                    6px 9px;
            }

        }
    </style>


    <style>
        /* =========================================================
               SOLAR LOCATION / MAP SECTION
            ========================================================= */

        .solar-map-section {
            position: relative;

            padding: 100px 0;

            background:
                linear-gradient(180deg,
                    var(--light) 0%,
                    var(--white) 100%);
        }


        /* =========================================================
               LOCATION GRID
            ========================================================= */

        .solar-location-grid {
            display: grid;

            grid-template-columns:
                .85fr 1.15fr;

            gap: 40px;

            align-items: stretch;
        }


        /* =========================================================
               LOCATION CARD
            ========================================================= */

        .solar-location-card {
            position: relative;

            overflow: hidden;

            padding: 45px;

            border:
                1px solid var(--border);

            border-radius: var(--radius);

            background:
                linear-gradient(145deg,
                    var(--blue-dark),
                    var(--blue));

            box-shadow:
                var(--shadow);

            color: var(--white);
        }

        .solar-location-card::before {
            content: "";

            position: absolute;

            width: 320px;
            height: 320px;

            top: -170px;
            right: -130px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(243, 173, 45, .28),
                    transparent 70%);

            pointer-events: none;
        }

        .solar-location-card::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            bottom: -130px;
            left: -100px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(8, 121, 187, .35),
                    transparent 70%);

            pointer-events: none;
        }


        /* =========================================================
               KICKER
            ========================================================= */

        .solar-location-card .solar-kicker {
            position: relative;

            z-index: 2;

            margin-bottom: 15px;

            color: var(--orange-light);
        }


        /* =========================================================
               HEADING
            ========================================================= */

        .solar-location-card h3 {
            position: relative;

            z-index: 2;

            margin:
                0 0 18px;

            color: var(--white);

            font-size:
                clamp(30px, 4vw, 42px);

            line-height: 1.1;

            letter-spacing: -1.2px;

            font-weight: 800;
        }


        /* =========================================================
               DESCRIPTION
            ========================================================= */

        .solar-location-card>p {
            position: relative;

            z-index: 2;

            margin:
                0 0 30px;

            color:
                rgba(255, 255, 255, .72);

            font-size: 15px;

            line-height: 1.8;
        }


        /* =========================================================
               ADDRESS
            ========================================================= */

        .solar-address {
            position: relative;

            z-index: 2;

            display: flex;

            align-items: flex-start;

            gap: 15px;

            padding:
                20px 0;

            border-top:
                1px solid rgba(255, 255, 255, .10);

            border-bottom:
                1px solid rgba(255, 255, 255, .10);
        }

        .solar-address-icon {
            flex: 0 0 48px;

            width: 48px;
            height: 48px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            box-shadow:
                0 10px 25px rgba(244, 119, 24, .20);
        }

        .solar-address-icon i {
            font-size: 17px;
        }

        .solar-address p {
            margin: 0;

            color:
                rgba(255, 255, 255, .78);

            font-size: 14px;

            line-height: 1.8;
        }


        /* =========================================================
               OPEN MAP BUTTON
            ========================================================= */

        .solar-map-button {
            position: relative;

            z-index: 2;

            display: inline-flex;

            align-items: center;

            gap: 12px;

            margin-top: 28px;

            padding:
                14px 22px;

            border-radius: 50px;

            color: var(--white);

            background:
                linear-gradient(135deg,
                    var(--orange),
                    var(--orange-light));

            font-size: 12px;

            font-weight: 800;

            letter-spacing: .6px;

            box-shadow:
                0 12px 28px rgba(244, 119, 24, .22);

            transition: var(--transition);
        }

        .solar-map-button:hover {
            color: var(--white);

            transform:
                translateY(-3px);

            box-shadow:
                0 18px 35px rgba(244, 119, 24, .32);
        }

        .solar-map-button i {
            transition: var(--transition);
        }

        .solar-map-button:hover i {
            transform:
                translate(3px, -2px);
        }


        /* =========================================================
               MAP FRAME
            ========================================================= */

        .solar-map-frame {
            position: relative;

            min-height: 100%;

            overflow: hidden;

            border:
                1px solid var(--border);

            border-radius: var(--radius);

            background: var(--white);

            box-shadow:
                var(--shadow);
        }

        .solar-map-frame::before {
            content: "";

            position: absolute;

            inset: 0;

            z-index: 1;

            pointer-events: none;

            border-radius: var(--radius);

            box-shadow:
                inset 0 0 0 1px rgba(255, 255, 255, .35);
        }

        .solar-map-frame iframe {
            display: block;

            width: 100%;

            height: 100%;

            min-height: 450px;

            border: 0;
        }


        /* =========================================================
               REVEAL
            ========================================================= */

        .solar-location-card.solar-reveal,
        .solar-map-frame.solar-reveal {
            opacity: 1;

            visibility: visible;

            transform: none;

            transition:
                opacity .8s ease,
                transform .8s ease;
        }


        /* =========================================================
               TABLET
            ========================================================= */

        @media (max-width: 1000px) {

            .solar-location-grid {
                grid-template-columns: 1fr;

                gap: 30px;
            }

            .solar-location-card {
                padding: 40px;
            }

            .solar-map-frame iframe {
                min-height: 400px;
            }

        }


        /* =========================================================
               MOBILE
            ========================================================= */

        @media (max-width: 700px) {

            .solar-map-section {
                padding: 75px 0;
            }

            .solar-location-grid {
                gap: 25px;
            }

            .solar-location-card {
                padding: 30px 24px;

                border-radius: 22px;
            }

            .solar-location-card h3 {
                font-size: 32px;
            }

            .solar-address {
                gap: 12px;
            }

            .solar-address-icon {
                flex-basis: 43px;

                width: 43px;
                height: 43px;
            }

            .solar-map-frame {
                border-radius: 22px;
            }

            .solar-map-frame iframe {
                min-height: 350px;
            }

        }


        /* =========================================================
               SMALL MOBILE
            ========================================================= */

        @media (max-width: 420px) {

            .solar-location-card {
                padding: 25px 20px;
            }

            .solar-location-card h3 {
                font-size: 29px;
            }

            .solar-address p {
                font-size: 13px;
            }

            .solar-map-button {
                width: 100%;

                justify-content: center;
            }

            .solar-map-frame iframe {
                min-height: 320px;
            }

        }
    </style>



@endsection