<?php
require_once __DIR__ . '/config.php';
if (!isset($page_title)) $page_title = 'Lighting Africa In Solar | Solar Energy Solutions';
if (!isset($page_description)) $page_description = 'High-quality solar products for homes, businesses, and industrial use. Affordable, reliable solar energy solutions across Africa.';
if (!isset($page_keywords)) $page_keywords = 'solar energy, solar panels, solar power, solar solutions Africa, solar inverters, solar batteries, solar lights, solar kits, renewable energy, off-grid solar, Lighting Africa In Solar, solar panels South Africa, solar installation';
if (!isset($page_og_image)) $page_og_image = 'images/logo.png';
$canonical_url = full_page_url();
$og_image_url = (isset($page_og_image) && strpos($page_og_image, '://') !== false) ? $page_og_image : full_asset_url($page_og_image);
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars(LANG_CODE); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="author" content="Lighting Africa In Solar">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <link rel="icon" href="<?php echo htmlspecialchars(asset('images/logo.png')); ?>" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo htmlspecialchars(asset('images/logo.png')); ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Lighting Africa In Solar">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image_url); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { heading: ['Outfit', 'sans-serif'], body: ['Space Grotesk', 'sans-serif'] },
                    colors: {
                        background: 'hsl(220, 20%, 7%)',
                        foreground: 'hsl(40, 20%, 95%)',
                        card: 'hsl(220, 18%, 11%)',
                        primary: { DEFAULT: 'hsl(38, 95%, 55%)', foreground: 'hsl(220, 20%, 7%)' },
                        secondary: 'hsl(220, 15%, 18%)',
                        muted: { DEFAULT: 'hsl(220, 15%, 15%)', foreground: 'hsl(220, 10%, 55%)' },
                        border: 'hsl(220, 15%, 20%)',
                    },
                    borderRadius: { lg: '0.75rem', md: 'calc(0.75rem - 2px)', sm: 'calc(0.75rem - 4px)' }
                }
            }
        }
    </script>
    <link href="<?php echo asset('css/custom.css'); ?>" rel="stylesheet">
</head>
<body class="bg-background text-foreground font-body antialiased">
<?php include __DIR__ . '/navbar.php'; ?>
