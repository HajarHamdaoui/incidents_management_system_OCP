<?php
function extractSubstrings($inputString) {
    $delimiter = "__";
    $substrings = explode($delimiter, $inputString);
    $substrings = array_map('trim', $substrings);
    $substrings = array_filter($substrings);

    return $substrings;
}
function hasIntersection($array1, $array2) {
    $intersection = array_intersect($array1, $array2);
    return !empty($intersection);
}


?>
