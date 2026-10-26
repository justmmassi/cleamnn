<?php
declare(strict_types=1);

$pricing = require __DIR__ . '/config/pricing.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#e7ebef">
    <meta name="description" content="Bexxy Care and Clean offers residential, deep, commercial, move-in and move-out, short-term rental, and regular cleaning in Ottawa and Gatineau.">
    <title>Bexxy Care and Clean — Ottawa &amp; Gatineau</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#home" aria-label="Bexxy Care and Clean home">
            <img src="image/download.png" alt="Bexxy Care and Clean" width="480" height="140">
        </a>
        <nav class="primary-nav" aria-label="Main navigation">
            <a href="#home" aria-current="page">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="pricing.php">Pricing</a>
            <a href="#contact">Contact</a>
            <a class="nav-cta" href="booking.php">Book now <span aria-hidden="true">↗</span></a>
        </nav>
    </header>

    <main>
        <section class="hero page-shell" id="home">
            <div class="hero-copy">
                <div class="eyebrow"><span class="eyebrow-star" aria-hidden="true">✳</span>Clean and bright · Ottawa &amp; Gatineau</div>
                <h1>Your space,<br><span class="headline-accent">your priority.</span></h1>
                <p class="hero-description">Reliable cleaning for homes, offices, and short-term rentals. Tell us what you need and we’ll help plan the right clean.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="booking.php">Book now <span aria-hidden="true">↗</span></a>
                    <a class="text-link" href="services.php">Explore all services <span aria-hidden="true">↗</span></a>
                </div>
            </div>
            <div class="hero-art">
                <div class="art-orbit orbit-one" aria-hidden="true"></div>
                <div class="art-orbit orbit-two" aria-hidden="true"></div>
                <div class="sparkle sparkle-one" aria-hidden="true">✳</div>
                <div class="sparkle sparkle-two" aria-hidden="true">✦</div>
                <div class="sparkle sparkle-three" aria-hidden="true">✧</div>
                <div class="art-label"><span class="label-dot"></span> A little care goes a long way</div>
                <img class="room-photo" src="image/bexxy-room.png" alt="Bexxy cleaning team member carefully cleaning a bright window" width="768" height="1160" fetchpriority="high">
                <div class="clean-card">
                    <span class="clean-card-icon" aria-hidden="true">✧</span>
                    <span><strong>That just-cleaned feeling</strong><small>It’s a Bexxy kind of day</small></span>
                    <span class="clean-card-check" aria-hidden="true">✓</span>
                </div>
            </div>
        </section>

        <section class="trust-bar page-shell" aria-label="Our promises">
            <p>Fast, flexible service.<br><strong>Available seven days a week.</strong></p>
            <div class="trust-item"><span aria-hidden="true">✓</span> Ottawa &amp; Gatineau</div>
            <div class="trust-item"><span aria-hidden="true">7</span> Days a week</div>
            <div class="trust-item"><span aria-hidden="true">✓</span> Homes and businesses</div>
        </section>

        <section class="services-section page-shell" id="services">
            <div class="section-heading">
                <div>
                    <div class="eyebrow">Our services</div>
                    <h2>Good work.<br><span class="headline-accent">Clean spaces.</span></h2>
                </div>
                <p>Homes, offices, rentals, and regular upkeep — explore each service and what it includes.</p>
            </div>
            <div class="service-grid">
                <article class="service-card service-pink">
                    <span class="service-number">01</span>
                    <div class="service-copy">
                        <h3>Residential cleaning</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['residential']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">Cleaning tailored to your home or apartment.</p>
                    </div>
                    <a href="booking.php?service=residential" aria-label="Book residential cleaning"><span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-green">
                    <span class="service-number">02</span>
                    <div class="service-copy">
                        <h3>Deep cleaning</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['deep']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">A detailed clean for areas needing extra attention.</p>
                    </div>
                    <a href="booking.php?service=deep" aria-label="Book deep cleaning"><span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-blue">
                    <span class="service-number">03</span>
                    <div class="service-copy">
                        <h3>Commercial cleaning</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['commercial']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">Cleaning for offices and commercial spaces.</p>
                    </div>
                    <a href="booking.php?service=commercial" aria-label="Book commercial cleaning"><span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-pink">
                    <span class="service-number">04</span>
                    <div class="service-copy">
                        <h3>Move-in / move-out cleaning</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['move']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">Prepare a home for a move-in or move-out.</p>
                    </div>
                    <a href="booking.php?service=move" aria-label="Book move-in or move-out cleaning"><span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-green">
                    <span class="service-number">05</span>
                    <div class="service-copy">
                        <h3>Short-term rental cleaning</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['rental']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">Turnover cleaning for short-term rental properties.</p>
                    </div>
                    <a href="booking.php?service=rental" aria-label="Book short-term rental cleaning"><span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-blue">
                    <span class="service-number">06</span>
                    <div class="service-copy">
                        <h3>Regular maintenance</h3>
                        <p class="service-price"><?= escape_html($pricing['currency_label'] . ' ' . number_format($pricing['services']['maintenance']['per_room'], 0)) ?> per room</p>
                        <p class="service-summary">Scheduled visits to keep your space in good shape.</p>
                    </div>
                    <a href="booking.php?service=maintenance" aria-label="Book regular maintenance cleaning"><span aria-hidden="true">↗</span></a>
                </article>
            </div>
            <a class="services-more-link" href="services.php">See full service details <span aria-hidden="true">↗</span></a>
        </section>

        <section class="how-section page-shell" id="about">
            <div class="how-intro">
                <div class="eyebrow">How it works</div>
                <h2>Simple from<br><span class="headline-accent">the start.</span></h2>
                <p>Tell us about your home, office, or rental. We’ll talk through the details and help you choose the right service.</p>
                <a class="button button-dark" href="about.php">About Bexxy <span aria-hidden="true">↗</span></a>
            </div>
            <div class="steps">
                <a class="step" href="about.php" aria-label="Learn about Bexxy and the cleaning services it offers">
                    <span class="step-number">01</span>
                    <div><h3>About Bexxy</h3><p>Learn about the company and the spaces we clean.</p></div>
                    <span class="step-symbol" aria-hidden="true">↗</span>
                </a>
                <a class="step" href="booking.php" aria-label="Choose a service and send a booking request">
                    <span class="step-number">02</span>
                    <div><h3>Choose your service</h3><p>Tell us what you need and request a preferred date.</p></div>
                    <span class="step-symbol" aria-hidden="true">↗</span>
                </a>
                <a class="step" href="pricing.php" aria-label="See cleaning prices and how estimates are calculated">
                    <span class="step-number">03</span>
                    <div><h3>Review the estimate</h3><p>See per-room pricing and how extras are quoted.</p></div>
                    <span class="step-symbol" aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

    </main>

    <footer class="site-footer" id="contact">
        <div class="footer-content page-shell">
            <div class="footer-intro">
                <a class="brand footer-brand" href="#home" aria-label="Bexxy Care and Clean home"><img src="image/download.png" alt="" width="480" height="140"></a>
                <p>Reliable home, office, and rental cleaning in Ottawa and Gatineau. From regular upkeep to deep and move-related cleans, Bexxy helps keep your space fresh.</p>
            </div>
            <section class="footer-column" aria-labelledby="footer-contact-heading">
                <h2 id="footer-contact-heading">Contact</h2>
                <a href="mailto:bexxycare.and.clean26@gmail.com">bexxycare.and.clean26@gmail.com</a>
            </section>
            <section class="footer-column" aria-labelledby="footer-hours-heading">
                <h2 id="footer-hours-heading">Opening hours</h2>
                <p>Every day</p>
                <p><time datetime="06:00">6:00 a.m.</time> – <time datetime="19:00">7:00 p.m.</time></p>
                <p>Ottawa &amp; Gatineau</p>
            </section>
        </div>
        <div class="footer-bottom page-shell">
            <p>© <span id="copyright-year">2026</span> Bexxy Care and Clean</p>
            <a href="privacy.php">Privacy notice</a>
        </div>
    </footer>
</body>
</html>
