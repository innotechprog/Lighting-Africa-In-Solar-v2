<footer class="bg-secondary border-t border-border">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="flex items-center justify-center rounded-lg bg-white/95 p-1.5 shadow-sm ring-1 ring-black/5 shrink-0">
                        <img src="<?php echo htmlspecialchars(asset('images/logo.png')); ?>" alt="Lighting Africa In Solar" class="h-9 w-auto sm:h-10" width="40" height="40">
                    </span>
                    <span class="font-heading font-bold text-foreground">LIGHTING AFRICA <span class="text-primary">IN SOLAR</span></span>
                </div>
                <p class="text-muted-foreground text-sm">Making renewable energy affordable, reliable, and easy to access across Africa.</p>
            </div>
            <div>
                <h4 class="font-heading font-semibold text-foreground mb-3"><?php echo htmlspecialchars(t('footer_quick_links')); ?></h4>
                <div class="flex flex-col gap-2 text-sm">
                    <a href="products.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_products')); ?></a>
                    <a href="services.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_services')); ?></a>
                    <a href="how-solar-works.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_how_solar_works')); ?></a>
                    <a href="quote.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_request_quote')); ?></a>
                </div>
            </div>
            <div>
                <h4 class="font-heading font-semibold text-foreground mb-3"><?php echo htmlspecialchars(t('footer_policies')); ?></h4>
                <div class="flex flex-col gap-2 text-sm">
                    <a href="policies.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_shipping_policy')); ?></a>
                    <a href="policies.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_returns_policy')); ?></a>
                    <a href="policies.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_privacy_policy')); ?></a>
                    <a href="policies.php" class="text-muted-foreground hover:text-primary transition-colors"><?php echo htmlspecialchars(t('footer_terms')); ?></a>
                </div>
            </div>
            <div>
                <h4 class="font-heading font-semibold text-foreground mb-3"><?php echo htmlspecialchars(t('footer_contact')); ?></h4>
                <div class="flex flex-col gap-2 text-sm text-muted-foreground">
                    <a href="mailto:infolightingafricainsolar@gmail.com" class="flex items-center gap-2 hover:text-primary transition-colors"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> infolightingafricainsolar@gmail.com</a>
                    <a href="tel:+27603967999" class="flex items-center gap-2 hover:text-primary transition-colors"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +27 603 967 999</a>
                    <p class="mt-2">Mon–Fri: 8AM – 5PM<br>Sat: 9AM – 1PM<br>Sun: Closed</p>
                </div>
            </div>
        </div>
        <div class="border-t border-border mt-8 pt-6 text-center text-sm text-muted-foreground">
            &copy; <?php echo date('Y'); ?> Lighting Africa In Solar. All rights reserved.
        </div>
    </div>
</footer>

<?php if (empty($_COOKIE['cookie_consent'])): ?>
<div id="cookie-banner" class="fixed inset-x-0 bottom-0 z-40 bg-background/95 border-t border-border">
    <div class="container mx-auto px-4 py-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-xs sm:text-sm text-muted-foreground max-w-2xl"><?php echo htmlspecialchars(t('cookie_message')); ?></p>
        <button id="cookie-accept-btn" class="inline-flex items-center justify-center rounded-md text-xs sm:text-sm font-semibold h-9 px-4 bg-gradient-solar text-primary-foreground hover:opacity-90">
            <?php echo htmlspecialchars(t('cookie_accept')); ?>
        </button>
    </div>
</div>
<script>
(function() {
  var btn = document.getElementById('cookie-accept-btn');
  if (!btn) return;
  btn.addEventListener('click', function() {
    var d = new Date();
    d.setTime(d.getTime() + 365 * 24 * 60 * 60 * 1000);
    document.cookie = 'cookie_consent=1; expires=' + d.toUTCString() + '; path=/; SameSite=Lax';
    var banner = document.getElementById('cookie-banner');
    if (banner) banner.style.display = 'none';
  });
})();
</script>
<?php endif; ?>

<a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg transition hover:scale-110 hover:shadow-xl" aria-label="Chat on WhatsApp">
    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
