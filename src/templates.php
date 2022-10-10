<?php

namespace Constractiv\Helena\Theme;

/**
 * View function for template files
 * @return string
 */
function template($templateName = '', $args = array()): string
{
    $themeDir = \get_template_directory();
    $templateDir = apply_filters(
        'cnst_helena_theme_templates_dir',
        '/src/views/templates/'
    );
    $template = is_archive() || is_home() ? 'archive' : 'singular';
    $pathToFile = $themeDir . $templateDir . $templateName . '.php';

    if (!file_exists($pathToFile)) {
        $pathToFile = $themeDir . $templateDir . $template . '.php';
    }

    include($pathToFile);
    return ob_get_clean();
}
