<?php
$page_title = 'Our Services | Lighting Africa In Solar';
$page_description = 'Solar system consultation, installation guidance, sizing, and after-sales support.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';

$services = [
    ['title' => t('home_services_item1_title'), 'desc' => t('home_services_item1_desc')],
    ['title' => t('home_services_item2_title'), 'desc' => t('home_services_item2_desc')],
    ['title' => t('home_services_item3_title'), 'desc' => t('home_services_item3_desc')],
    ['title' => t('home_services_item4_title'), 'desc' => t('home_services_item4_desc')],
];
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('services_page_title'), t('services_page_subtitle'), true); ?>
            <div class="grid sm:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <?php foreach ($services as $s): ?>
                <div class="bg-card rounded-lg p-8 glow-border hover:shadow-solar-sm transition-shadow">
                    <svg class="h-10 w-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <h3 class="font-heading text-xl font-bold text-foreground mb-2"><?php echo htmlspecialchars($s['title']); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars($s['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
