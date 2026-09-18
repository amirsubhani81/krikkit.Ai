<?php
    use App\Support\Ui\ThemePalette;

    $savedTheme = ThemePalette::normalize(auth()->user()?->appearance);
?>
<style id="krikkit-theme"><?php echo ThemePalette::runtimeCss($savedTheme['accent'] ?? 'base', $savedTheme['base'] ?? 'neutral'); ?></style>
<?php /**PATH C:\Users\Aamir Khan\Downloads\krikkit-120\codecanyon-65055559-krikkit-ai-website-builder-saas-platform-for-promptbased-site-generation\ServerFiles\Krikkit\resources\views/components/layouts/partials/themeStyle.blade.php ENDPATH**/ ?>