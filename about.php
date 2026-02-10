<?php
$page_title = 'About Us | Lighting Africa In Solar';
$page_description = 'Learn about LIGHTING AFRICA IN SOLAR – affordable and reliable solar energy solutions.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';
?>
<div class="min-h-screen pt-[74px]">
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo asset('images/solar-about.jpg'); ?>" alt="Solar installation in Africa" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-background/85"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-heading font-bold mb-4">
                <span class="text-gradient-solar"><?php echo htmlspecialchars(t('about_title')); ?></span>
            </h1>
            <p class="text-muted-foreground max-w-2xl mx-auto">
                <?php echo htmlspecialchars(t('about_hero_text')); ?>
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-card rounded-lg p-8 glow-border">
                    <svg class="h-10 w-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    <h3 class="font-heading text-2xl font-bold text-foreground mb-3"><?php echo htmlspecialchars(t('about_mission_title')); ?></h3>
                    <p class="text-muted-foreground"><?php echo htmlspecialchars(t('about_mission_text')); ?></p>
                </div>
                <div class="bg-card rounded-lg p-8 glow-border">
                    <svg class="h-10 w-10 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                    <h3 class="font-heading text-2xl font-bold text-foreground mb-3"><?php echo htmlspecialchars(t('about_vision_title')); ?></h3>
                    <p class="text-muted-foreground"><?php echo htmlspecialchars(t('about_vision_text')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-secondary">
        <div class="container mx-auto px-4">
            <?php section_heading(t('about_why_title'), null, true); ?>
            <?php $why_us = [
                t('about_why_item1'),
                t('about_why_item2'),
                t('about_why_item3'),
                t('about_why_item4'),
            ]; ?>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($why_us as $item): ?>
                <div class="bg-card rounded-lg p-6 glow-border flex items-start gap-3">
                    <svg class="h-5 w-5 text-primary mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    <span class="text-foreground font-medium"><?php echo htmlspecialchars($item); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <?php section_heading(t('about_values_title')); ?>
            <?php $values = [
                t('about_value_quality'),
                t('about_value_reliability'),
                t('about_value_sustainability'),
                t('about_value_customer_satisfaction'),
            ]; ?>
            <div class="flex flex-wrap justify-center gap-4">
                <?php foreach ($values as $v): ?>
                <span class="bg-gradient-solar text-primary-foreground px-6 py-3 rounded-full font-heading font-semibold"><?php echo htmlspecialchars($v); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
