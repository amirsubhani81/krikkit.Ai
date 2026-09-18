<?php
    $site = app(\App\Support\Site\SiteSettings::class);
    $favicon = $site->faviconUrl();
    $apple = $site->appleTouchUrl();
?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($favicon): ?>
    <link rel="icon" href="<?php echo e($favicon); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($apple): ?>
    <link rel="apple-touch-icon" href="<?php echo e($apple); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Aamir Khan\Downloads\krikkit-120\codecanyon-65055559-krikkit-ai-website-builder-saas-platform-for-promptbased-site-generation\ServerFiles\Krikkit\resources\views/components/layouts/partials/brand.blade.php ENDPATH**/ ?>