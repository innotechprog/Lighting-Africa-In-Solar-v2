<?php
$page_title = 'Our Products | Lighting Africa In Solar';
$page_description = 'Quality-tested solar panels, inverters, batteries, solar lights, and complete solar kits.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';

$products = [
    [
        'image' => 'product-solar-panels.jpg',
        'title' => t('home_products_cat_panels_title'),
        'desc' => t('home_products_cat_panels_desc'),
        'specs' => [
            t('products_panels_spec1'),
            t('products_panels_spec2'),
            t('products_panels_spec3'),
        ],
    ],
    [
        'image' => 'product-inverters.jpg',
        'title' => t('home_products_cat_inverters_title'),
        'desc' => t('home_products_cat_inverters_desc'),
        'specs' => [
            t('products_inverters_spec1'),
            t('products_inverters_spec2'),
            t('products_inverters_spec3'),
        ],
    ],
    [
        'image' => 'product-batteries.jpg',
        'title' => t('home_products_cat_batteries_title'),
        'desc' => t('home_products_cat_batteries_desc'),
        'specs' => [
            t('products_batteries_spec1'),
            t('products_batteries_spec2'),
            t('products_batteries_spec3'),
        ],
    ],
    [
        'image' => 'product-solar-lights.jpg',
        'title' => t('home_products_cat_lights_title'),
        'desc' => t('home_products_cat_lights_desc'),
        'specs' => [
            t('products_lights_spec1'),
            t('products_lights_spec2'),
            t('products_lights_spec3'),
        ],
    ],
    [
        'image' => 'product-solar-kits.jpg',
        'title' => t('home_products_cat_kits_title'),
        'desc' => t('home_products_cat_kits_desc'),
        'specs' => [
            t('products_kits_spec1'),
            t('products_kits_spec2'),
            t('products_kits_spec3'),
        ],
    ],
];
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('products_page_title'), t('products_page_subtitle'), true); ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($products as $p): ?>
                <div class="bg-card rounded-lg overflow-hidden glow-border hover:shadow-solar-sm transition-all group">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo asset('images/' . $p['image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-xl font-bold text-foreground mb-2"><?php echo htmlspecialchars($p['title']); ?></h3>
                        <p class="text-muted-foreground text-sm mb-4"><?php echo htmlspecialchars($p['desc']); ?></p>
                        <ul class="space-y-1.5 mb-6">
                            <?php foreach ($p['specs'] as $s): ?>
                            <li class="text-sm text-muted-foreground flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-primary shrink-0"></span> <?php echo htmlspecialchars($s); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="quote" class="inline-flex items-center justify-center rounded-md border border-primary text-primary bg-transparent h-10 px-4 py-2 w-full hover:bg-primary hover:text-primary-foreground text-sm font-medium">
                            <?php echo htmlspecialchars(t('products_btn_request_quote')); ?>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
