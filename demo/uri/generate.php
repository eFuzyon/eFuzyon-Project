<?php
    // Include the efuzyon bootstrap
    include "../../lib/efuzyon.init.php";

    // Add the raw value to a variable
    $value = "<strong>H'i! Thîs ís ä tëst.</strong>";

    // Generate URI from the raw value
    $newValue = eFuzyon\URI::Generate($value, array(
        "clean" => true, // Default: false
        "separator" => "-" // Default: "-"
    ));

    // Output the URI
    echo $newValue;