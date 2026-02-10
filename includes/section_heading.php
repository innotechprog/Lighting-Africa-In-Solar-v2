<?php
function section_heading($title, $subtitle = null, $gradient = false) {
    $titleClass = $gradient ? 'text-gradient-solar' : 'text-foreground';
    ?>
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-heading font-bold mb-3 <?php echo $titleClass; ?>"><?php echo htmlspecialchars($title); ?></h2>
        <?php if ($subtitle) { ?><p class="text-muted-foreground max-w-2xl mx-auto"><?php echo htmlspecialchars($subtitle); ?></p><?php } ?>
    </div>
    <?php
}
