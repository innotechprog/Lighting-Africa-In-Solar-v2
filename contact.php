<?php
$page_title = 'Contact Us | Lighting Africa In Solar';
$page_description = 'Get in touch for solar solutions. Email, phone, WhatsApp, and business hours.';
$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && $email && $message) {
        // In production: send email or save to DB
        $message_sent = true;
    }
}
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('contact_heading'), t('contact_subheading'), true); ?>
            <?php if ($message_sent): ?>
            <div class="max-w-2xl mx-auto mb-6 p-4 rounded-lg bg-primary/20 text-primary border border-primary/30">
                <?php echo htmlspecialchars(t('contact_success')); ?>
            </div>
            <?php endif; ?>
            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-card rounded-lg p-6 glow-border flex items-start gap-4">
                        <svg class="h-6 w-6 text-primary mt-1 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <div>
                            <h4 class="font-heading font-semibold text-foreground"><?php echo htmlspecialchars(t('contact_email_label')); ?></h4>
                            <a href="mailto:infolightingafricainsolar@gmail.com" class="text-muted-foreground text-sm hover:text-primary transition-colors">infolightingafricainsolar@gmail.com</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg p-6 glow-border flex items-start gap-4">
                        <svg class="h-6 w-6 text-primary mt-1 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <div>
                            <h4 class="font-heading font-semibold text-foreground"><?php echo htmlspecialchars(t('contact_phone_whatsapp_label')); ?></h4>
                            <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars(t('contact_phone_primary')); ?></p>
                            <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars(t('contact_phone_secondary')); ?></p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg p-6 glow-border flex items-start gap-4">
                        <svg class="h-6 w-6 text-primary mt-1 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <div>
                            <h4 class="font-heading font-semibold text-foreground"><?php echo htmlspecialchars(t('contact_hours_label')); ?></h4>
                            <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars(t('contact_hours_mon_fri')); ?></p>
                            <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars(t('contact_hours_sat')); ?></p>
                            <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars(t('contact_hours_sun')); ?></p>
                        </div>
                    </div>
                <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-md text-sm font-semibold h-10 px-4 bg-gradient-solar text-primary-foreground hover:opacity-90">
                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <?php echo htmlspecialchars(t('contact_btn_whatsapp')); ?>
                </a>
                </div>

                <form method="post" class="bg-card rounded-lg p-8 glow-border space-y-4">
                    <input type="text" name="name" placeholder="<?php echo htmlspecialchars(t('contact_form_name')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                    <input type="email" name="email" placeholder="<?php echo htmlspecialchars(t('contact_form_email')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                    <input type="tel" name="phone" placeholder="<?php echo htmlspecialchars(t('contact_form_phone')); ?>" class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                    <textarea name="message" placeholder="<?php echo htmlspecialchars(t('contact_form_message')); ?>" required rows="5" class="flex min-h-[80px] w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm"></textarea>
                    <button type="submit" class="w-full inline-flex items-center justify-center rounded-md text-sm font-semibold h-10 bg-gradient-solar text-primary-foreground hover:opacity-90">
                        <?php echo htmlspecialchars(t('contact_form_submit')); ?>
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
