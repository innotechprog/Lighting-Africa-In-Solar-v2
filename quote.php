<?php
$page_title = 'Request a Quote | Lighting Africa In Solar';
$page_description = 'Get a free solar quote. Tell us your energy needs for a tailored solution.';
$quote_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    if ($name && $email && $phone) {
        $quote_sent = true;
    }
}
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/section_heading.php';
?>
<div class="min-h-screen pt-[74px]">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <?php section_heading(t('quote_heading'), t('quote_subheading'), true); ?>
            <?php if ($quote_sent): ?>
            <div class="max-w-2xl mx-auto mb-6 p-4 rounded-lg bg-primary/20 text-primary border border-primary/30">
                <?php echo htmlspecialchars(t('quote_success')); ?>
            </div>
            <?php endif; ?>
            <form method="post" class="bg-card rounded-lg p-8 glow-border max-w-2xl mx-auto space-y-4">
                <div class="grid sm:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="<?php echo htmlspecialchars(t('quote_form_full_name')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                    <input type="tel" name="phone" placeholder="<?php echo htmlspecialchars(t('quote_form_phone')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                </div>
                <input type="email" name="email" placeholder="<?php echo htmlspecialchars(t('quote_form_email')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                <input type="text" name="location" placeholder="<?php echo htmlspecialchars(t('quote_form_location')); ?>" required class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                <select name="property_type" class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                    <option value=""><?php echo htmlspecialchars(t('quote_form_property_type')); ?></option>
                    <option value="home"><?php echo htmlspecialchars(t('quote_form_property_home')); ?></option>
                    <option value="business"><?php echo htmlspecialchars(t('quote_form_property_business')); ?></option>
                    <option value="farm"><?php echo htmlspecialchars(t('quote_form_property_farm')); ?></option>
                    <option value="other"><?php echo htmlspecialchars(t('quote_form_property_other')); ?></option>
                </select>
                <input type="text" name="power_needs" placeholder="<?php echo htmlspecialchars(t('quote_form_power_needs')); ?>" class="flex h-10 w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm">
                <textarea name="message" placeholder="<?php echo htmlspecialchars(t('quote_form_message')); ?>" rows="4" class="flex min-h-[80px] w-full rounded-md border border-border bg-secondary px-3 py-2 text-sm"></textarea>
                <button type="submit" class="w-full inline-flex items-center justify-center rounded-md text-sm font-semibold h-10 bg-gradient-solar text-primary-foreground hover:opacity-90 shadow-solar">
                    <?php echo htmlspecialchars(t('quote_form_submit')); ?>
                </button>
            </form>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
