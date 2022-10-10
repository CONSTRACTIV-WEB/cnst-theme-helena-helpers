<?php

namespace Constractiv\Helena\Theme;

/**
 * View function for partials files
 * @return string
 */
function partials($fileName, $args = array()): string
{
    $themeDir = \get_template_directory();
    $partialsDir = apply_filters(
        'cnst_helena_theme_partials_dir',
        '/src/views/partials/'
    );
    $pathToFile = $themeDir . $partialsDir . $fileName . '.php';

    ob_start();
    require($pathToFile);
    return ob_get_clean();
}
