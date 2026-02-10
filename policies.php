<?php
$page_title = 'Our Policies | Lighting Africa In Solar';
$page_description = 'Shipping, returns, privacy, and terms & conditions.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';

$policies = [
    ['title' => t('policy_shipping_title'), 'content' => t('policy_shipping_text')],
    ['title' => t('policy_returns_title'), 'content' => t('policy_returns_text')],
    ['title' => t('policy_privacy_title'), 'content' => t('policy_privacy_text')],
    ['title' => t('policy_terms_title'), 'content' => t('policy_terms_text')],
];
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('policies_heading'), null, true); ?>
            <div class="max-w-3xl mx-auto space-y-6">
                <?php foreach ($policies as $p): ?>
                <div class="bg-card rounded-lg p-8 glow-border">
                    <h3 class="font-heading text-xl font-bold text-foreground mb-3"><?php echo htmlspecialchars($p['title']); ?></h3>
                    <p class="text-muted-foreground"><?php echo htmlspecialchars($p['content']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
