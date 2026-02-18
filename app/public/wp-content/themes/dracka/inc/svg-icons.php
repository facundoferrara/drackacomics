<?php
// Icons acquired from https://www.svgrepo.com/collection/jam-interface-icons/
function dracka_get_svg($name)
{

    $file = get_template_directory() . '/assets/icons/' . $name . '.svg';

    if (file_exists($file)) {
        return file_get_contents($file);
    }

    return '';
}
