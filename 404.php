<?php
http_response_code(404);
$page_title = 'Page Not Found | Lighting Africa In Solar';
require_once __DIR__ . '/includes/header.php';
?>
<div class="flex min-h-screen items-center justify-center bg-muted pt-[74px]">
    <div class="text-center">
        <h1 class="mb-4 text-4xl font-bold">404</h1>
        <p class="mb-4 text-xl text-muted-foreground"><?php echo htmlspecialchars(t('404_message')); ?></p>
        <a href="index" class="text-primary underline hover:text-primary/90">
            <?php echo htmlspecialchars(t('404_back_home')); ?>
        </a>
    </div>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
