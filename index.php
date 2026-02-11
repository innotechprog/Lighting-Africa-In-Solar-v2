<?php
$page_title = 'Lighting Africa In Solar | Solar Energy Solutions';
$page_description = 'High-quality solar products for homes, businesses, and industrial use. Affordable, reliable solar energy solutions across Africa.';
require_once __DIR__ . '/includes/header.php';
?>
<div class="min-h-screen">
    <section class="relative min-h-[90vh] flex items-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo asset('images/hero-solar.jpg'); ?>" alt="Solar panels at golden hour in Africa" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-background via-background/90 to-background/40"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-heading font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars(t('home_hero_title_prefix')); ?> <span class="text-gradient-solar"><?php echo htmlspecialchars(t('home_hero_title_highlight')); ?></span>
                </h1>
                <p class="text-lg text-muted-foreground mb-8 max-w-lg">
                    <?php echo htmlspecialchars(t('home_hero_subtitle')); ?>
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="products" class="inline-flex items-center justify-center rounded-md text-sm font-semibold h-11 px-8 bg-gradient-solar text-primary-foreground hover:opacity-90 shadow-solar">
                        <?php echo htmlspecialchars(t('home_hero_btn_products')); ?>
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="quote" class="inline-flex items-center justify-center rounded-md text-sm font-medium h-11 px-8 border border-primary text-primary hover:bg-primary hover:text-primary-foreground">
                        <?php echo htmlspecialchars(t('home_hero_btn_quote')); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-secondary">
        <div class="container mx-auto px-4">
            <?php require __DIR__ . '/includes/section_heading.php'; section_heading(t('home_why_title'), t('home_why_subtitle'), true); ?>
            <?php
            $benefits = [
                ['title' => t('home_why_benefit1_title'), 'desc' => t('home_why_benefit1_desc')],
                ['title' => t('home_why_benefit2_title'), 'desc' => t('home_why_benefit2_desc')],
                ['title' => t('home_why_benefit3_title'), 'desc' => t('home_why_benefit3_desc')],
                ['title' => t('home_why_benefit4_title'), 'desc' => t('home_why_benefit4_desc')],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($benefits as $b): ?>
                <div class="bg-card rounded-lg p-6 glow-border hover:shadow-solar-sm transition-shadow">
                    <svg class="h-10 w-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <h3 class="font-heading font-semibold text-foreground mb-2"><?php echo htmlspecialchars($b['title']); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars($b['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('home_products_title'), t('home_products_subtitle')); ?>
            <?php
            $categories = [
                ['title' => t('home_products_cat_panels_title'), 'desc' => t('home_products_cat_panels_desc')],
                ['title' => t('home_products_cat_inverters_title'), 'desc' => t('home_products_cat_inverters_desc')],
                ['title' => t('home_products_cat_batteries_title'), 'desc' => t('home_products_cat_batteries_desc')],
                ['title' => t('home_products_cat_lights_title'), 'desc' => t('home_products_cat_lights_desc')],
                ['title' => t('home_products_cat_kits_title'), 'desc' => t('home_products_cat_kits_desc')],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php foreach ($categories as $c): ?>
                <div class="bg-card rounded-lg p-6 text-center glow-border hover:shadow-solar-sm transition-all hover:-translate-y-1">
                    <svg class="h-10 w-10 text-primary mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
                    <h3 class="font-heading font-semibold text-foreground mb-1"><?php echo htmlspecialchars($c['title']); ?></h3>
                    <p class="text-muted-foreground text-xs"><?php echo htmlspecialchars($c['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-10">
                <a href="products" class="inline-flex items-center justify-center rounded-md text-sm font-semibold h-10 px-4 bg-gradient-solar text-primary-foreground hover:opacity-90">
                    <?php echo htmlspecialchars(t('home_products_btn_view_all')); ?>
                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-secondary">
        <div class="container mx-auto px-4">
            <?php section_heading(t('home_services_title'), t('home_services_subtitle'), true); ?>
            <?php
            $services = [
                ['title' => t('home_services_item1_title'), 'desc' => t('home_services_item1_desc')],
                ['title' => t('home_services_item2_title'), 'desc' => t('home_services_item2_desc')],
                ['title' => t('home_services_item3_title'), 'desc' => t('home_services_item3_desc')],
                ['title' => t('home_services_item4_title'), 'desc' => t('home_services_item4_desc')],
            ];
            ?>
            <div class="grid sm:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <?php foreach ($services as $s): ?>
                <div class="bg-card rounded-lg p-8 glow-border hover:shadow-solar-sm transition-shadow">
                    <svg class="h-10 w-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <h3 class="font-heading text-xl font-bold text-foreground mb-2"><?php echo htmlspecialchars($s['title']); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars($s['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-10">
                <a href="services" class="inline-flex items-center justify-center rounded-md text-sm font-semibold h-10 px-4 bg-gradient-solar text-primary-foreground hover:opacity-90">
                    <?php echo htmlspecialchars(t('home_services_btn_view_all')); ?>
                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-secondary">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-foreground mb-4">
                <?php echo htmlspecialchars(t('home_cta_title')); ?>
            </h2>
            <p class="text-muted-foreground mb-8 max-w-lg mx-auto">
                <?php echo htmlspecialchars(t('home_cta_text')); ?>
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="quote" class="inline-flex items-center justify-center rounded-md text-sm font-semibold h-11 px-8 bg-gradient-solar text-primary-foreground hover:opacity-90 shadow-solar">
                    <?php echo htmlspecialchars(t('home_cta_btn_quote')); ?>
                </a>
                <a href="contact" class="inline-flex items-center justify-center rounded-md text-sm font-medium h-11 px-8 border border-primary text-primary hover:bg-primary hover:text-primary-foreground">
                    <?php echo htmlspecialchars(t('home_cta_btn_contact')); ?>
                </a>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
