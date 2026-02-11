<?php
$nav_links = [
    ['url' => 'index', 'label' => t('nav_home')],
    ['url' => 'about', 'label' => t('nav_about')],
    ['url' => 'products', 'label' => t('nav_products')],
    ['url' => 'services', 'label' => t('nav_services')],
    ['url' => 'how-solar-works', 'label' => t('nav_how_solar_works')],
    ['url' => 'contact', 'label' => t('nav_contact')],
];
$current = current_page();
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-xl border-b border-border">
    <div class="container mx-auto flex items-center justify-between h-[74px] px-4">
        <a href="index.php" class="flex items-center gap-3">
            <span class="flex items-center justify-center rounded-lg bg-white/95 p-1.5 shadow-sm ring-1 ring-black/5">
                <img src="<?php echo htmlspecialchars(asset('images/logo.png')); ?>" alt="Lighting Africa In Solar" class="h-10 w-auto sm:h-11" width="44" height="44">
            </span>
            <span class="font-heading font-bold text-lg text-foreground">LIGHTING AFRICA <span class="text-primary">IN SOLAR</span></span>
        </a>

        <div class="hidden lg:flex items-center gap-1">
            <?php foreach ($nav_links as $link): ?>
                <?php $page = $link['url']; $active = ($page === 'index' && $current === 'index') || ($page !== 'index' && $current === $page); ?>
                <a href="<?php echo htmlspecialchars($page === 'index' ? 'index' : $page); ?>" class="px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo $active ? 'text-primary' : 'text-muted-foreground hover:text-foreground'; ?>"><?php echo htmlspecialchars($link['label']); ?></a>
            <?php endforeach; ?>
        </div>

        <div class="hidden lg:flex items-center gap-3">
            <div class="flex items-center gap-1 text-xs rounded-full border border-border px-2 py-0.5 bg-background/80">
                <a href="?lang=en" class="px-1.5 py-0.5 rounded-full <?php echo LANG_CODE === 'en' ? 'bg-primary text-primary-foreground' : 'text-muted-foreground hover:text-foreground'; ?>">EN</a>
                <span class="text-muted-foreground/60">|</span>
                <a href="?lang=fr" class="px-1.5 py-0.5 rounded-full <?php echo LANG_CODE === 'fr' ? 'bg-primary text-primary-foreground' : 'text-muted-foreground hover:text-foreground'; ?>">FR</a>
            </div>
            <a href="quote.php"><span class="inline-flex items-center justify-center rounded-md text-sm font-semibold bg-gradient-solar text-primary-foreground h-10 px-4 py-2 hover:opacity-90"><?php echo htmlspecialchars(t('btn_get_quote')); ?></span></a>
        </div>

        <button type="button" class="lg:hidden text-foreground mobile-menu-toggle" aria-label="Toggle menu">
            <svg class="menu-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            <svg class="close-icon h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>

    <div class="lg:hidden mobile-menu hidden bg-background border-b border-border overflow-hidden">
        <div class="px-4 py-4 flex flex-col gap-2">
            <?php foreach ($nav_links as $link): ?>
                <?php $page = $link['url']; $active = ($page === 'index' && $current === 'index') || ($page !== 'index' && $current === $page); ?>
                <a href="<?php echo htmlspecialchars($page === 'index' ? 'index' : $page); ?>" class="px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo $active ? 'text-primary bg-secondary' : 'text-muted-foreground hover:text-foreground'; ?>"><?php echo htmlspecialchars($link['label']); ?></a>
            <?php endforeach; ?>
            <a href="quote" class="inline-flex items-center justify-center rounded-md text-sm font-semibold bg-gradient-solar text-primary-foreground h-10 px-4 py-2 mt-2 w-full">Get a Quote</a>
        </div>
    </div>
</nav>
<script>
document.querySelector('.mobile-menu-toggle')?.addEventListener('click', function() {
    var menu = document.querySelector('.mobile-menu');
    var menuIcon = document.querySelector('.menu-icon');
    var closeIcon = document.querySelector('.close-icon');
    menu?.classList.toggle('hidden');
    menuIcon?.classList.toggle('hidden');
    closeIcon?.classList.toggle('hidden');
});
</script>
