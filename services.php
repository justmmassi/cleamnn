<?php
declare(strict_types=1);

$pricing = require __DIR__ . '/config/pricing.php';
$service_details = [
    'residential' => [
        'image' => 'residential-cleaning.jpg',
        'alt' => 'Cleaners caring for a living room floor',
        'description' => 'Routine cleaning for houses and apartments, with the areas of focus agreed with you before the visit.',
        'best_for' => 'Homes and apartments that need a fresh, comfortable reset.',
    ],
    'deep' => [
        'image' => 'deep-cleaning.jpg',
        'alt' => 'A gloved hand scrubbing a bathroom fixture',
        'description' => 'A more detailed clean for spaces or areas that need extra attention. Tell us what needs the most focus when you request an estimate.',
        'best_for' => 'A seasonal refresh or a home that needs more detailed attention.',
    ],
    'commercial' => [
        'image' => 'commercial-cleaning.jpg',
        'alt' => 'A team cleaning a commercial dining space',
        'description' => 'Cleaning for offices and other commercial spaces. Share the areas, timing, and workplace requirements so the service can be discussed around your needs.',
        'best_for' => 'Offices, workplaces, and other business spaces.',
    ],
    'move' => [
        'image' => 'move-cleaning.jpg',
        'alt' => 'A cleaner vacuuming a bright interior',
        'description' => 'Cleaning requested before moving into a property or after moving out. Describe the space and any priorities so the scope can be confirmed.',
        'best_for' => 'Tenants, homeowners, and property managers preparing for a changeover.',
    ],
    'rental' => [
        'image' => 'rental-cleaning.jpg',
        'alt' => 'Fresh bedding being prepared for a guest',
        'description' => 'Cleaning for short-term rental properties between guest stays. Discuss the property, expected timing, and turnover needs when you send your request.',
        'best_for' => 'Short-term rental hosts who need cleaning between stays.',
    ],
    'maintenance' => [
        'image' => 'regular-maintenance.jpg',
        'alt' => 'A cleaner wiping a kitchen surface',
        'description' => 'Recurring cleaning visits to help keep your home or workplace in good shape. Share your preferred schedule and areas of focus for discussion.',
        'best_for' => 'Customers looking for ongoing weekly or monthly upkeep.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#e7ebef">
    <meta name="description" content="Explore Bexxy's residential, deep, commercial, move, rental, and regular maintenance cleaning services in Ottawa and Gatineau.">
    <title>Cleaning services — Bexxy Care and Clean</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="index.php" aria-label="Bexxy Care and Clean home">
            <img src="image/download.png" alt="Bexxy Care and Clean" width="480" height="140">
        </a>
        <nav class="primary-nav" aria-label="Main navigation">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php" aria-current="page">Services</a>
            <a href="pricing.php">Pricing</a>
            <a href="index.php#contact">Contact</a>
            <a class="nav-cta" href="booking.php">Book now <span aria-hidden="true">↗</span></a>
        </nav>
    </header>

    <main class="services-page page-shell">
        <section class="services-intro">
            <div class="eyebrow"><span class="eyebrow-star" aria-hidden="true">✳</span> Ottawa &amp; Gatineau</div>
            <h1>Find the clean<br><span class="headline-accent">that fits your space.</span></h1>
            <p>Explore what each service is for, see its starting estimate, and request the option that fits. Share the details of your space so Bexxy can confirm the scope, availability, and final price with you.</p>
            <div class="services-intro-actions">
                <a class="button button-primary" href="booking.php">Request a clean <span aria-hidden="true">↗</span></a>
                <a class="text-link" href="pricing.php">How pricing works <span aria-hidden="true">↗</span></a>
            </div>
        </section>

        <section class="service-details" aria-labelledby="service-details-heading">
            <div class="service-details-heading">
                <div class="eyebrow">Our cleaning services</div>
                <h2 id="service-details-heading">Clear options.<br><span class="headline-accent">A clean that suits you.</span></h2>
            </div>
            <div class="service-detail-grid">
                <?php foreach ($service_details as $slug => $detail): ?>
                    <?php $service = $pricing['services'][$slug]; ?>
                    <article class="service-detail-card">
                        <img
                            class="service-detail-image"
                            src="image/services/<?= escape_html($detail['image']) ?>"
                            alt="<?= escape_html($detail['alt']) ?>"
                            loading="lazy"
                        >
                        <div class="service-detail-body">
                            <div class="service-detail-title">
                                <span class="service-number"><?= sprintf('%02d', array_search($slug, array_keys($service_details), true) + 1) ?></span>
                                <h3><?= escape_html($service['label']) ?></h3>
                            </div>
                            <p class="service-detail-description"><?= escape_html($detail['description']) ?></p>
                            <div class="service-best-for">
                                <strong>Good for</strong>
                                <p><?= escape_html($detail['best_for']) ?></p>
                            </div>
                            <div class="service-detail-footer">
                                <div class="service-detail-rate">
                                    <strong><?= escape_html($pricing['currency_label']) ?> <?= number_format($service['per_room'], 0) ?></strong>
                                    <span>per room</span>
                                    <small><?= $service['base'] > 0
                                        ? escape_html($pricing['currency_label'] . ' ' . number_format($service['base'], 0) . ' base fee')
                                        : 'No additional base fee' ?></small>
                                </div>
                                <a class="button button-dark" href="booking.php?service=<?= rawurlencode((string) $slug) ?>">Request this service <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="services-next-step" aria-labelledby="services-next-step-heading">
            <div>
                <div class="eyebrow">What happens next</div>
                <h2 id="services-next-step-heading">Your request is a<br><span class="headline-accent">conversation starter.</span></h2>
            </div>
            <div class="services-next-copy">
                <p>Choose a service, tell us how many rooms or areas need attention, and share any priorities. Bexxy will follow up to confirm the work, availability, and final price.</p>
                <p>The per-room amount is an estimate, not a final quote. Optional extras are discussed and quoted separately. Sending the form does not confirm an appointment.</p>
                <a class="button button-primary" href="booking.php">Start a request <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-bottom page-shell">
            <p>© <span id="copyright-year">2026</span> Bexxy Care and Clean</p>
            <a href="privacy.php">Privacy notice</a>
        </div>
    </footer>
</body>
</html>
