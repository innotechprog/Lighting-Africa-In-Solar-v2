<?php
$page_title = 'How Solar Energy Works | Lighting Africa In Solar';
$page_description = 'Understand how solar power works: capture sunlight, convert power, store energy, save money.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';

$steps = [
    ['title' => t('how_steps_1_title'), 'desc' => t('how_steps_1_desc')],
    ['title' => t('how_steps_2_title'), 'desc' => t('how_steps_2_desc')],
    ['title' => t('how_steps_3_title'), 'desc' => t('how_steps_3_desc')],
    ['title' => t('how_steps_4_title'), 'desc' => t('how_steps_4_desc')],
];

$faqs = [
    ['q' => t('how_faq_q1'), 'a' => t('how_faq_a1')],
    ['q' => t('how_faq_q2'), 'a' => t('how_faq_a2')],
    ['q' => t('how_faq_q3'), 'a' => t('how_faq_a3')],
    ['q' => t('how_faq_q4'), 'a' => t('how_faq_a4')],
];
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('how_title'), t('how_subtitle'), true); ?>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
                <?php foreach ($steps as $s): ?>
                <div class="bg-card rounded-lg p-6 glow-border text-center">
                    <svg class="h-12 w-12 text-primary mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
                    <h3 class="font-heading font-bold text-foreground mb-2"><?php echo htmlspecialchars($s['title']); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars($s['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <?php section_heading(t('how_faq_title')); ?>
            <div class="max-w-2xl mx-auto space-y-3">
                <?php foreach ($faqs as $i => $faq): ?>
                <div class="bg-card rounded-lg glow-border px-6">
                    <button type="button" class="accordion-trigger w-full py-4 text-left text-foreground font-heading font-semibold hover:text-primary flex items-center justify-between" data-accordion>
                        <?php echo htmlspecialchars($faq['q']); ?>
                    </button>
                    <div class="accordion-content">
                        <p class="pb-4 text-muted-foreground"><?php echo htmlspecialchars($faq['a']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<script>
document.querySelectorAll('[data-accordion]').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var open = this.classList.contains('active');
        document.querySelectorAll('.accordion-trigger.active').forEach(function(b) { b.classList.remove('active'); });
        if (!open) this.classList.add('active');
    });
});
</script>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
