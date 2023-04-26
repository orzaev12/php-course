<?php

require_once "utlis.php";
echo "Test function compareFloats." . "\n";
echo compareFloats(1.35, 1.35) . "\n";
echo compareFloats(1.35, 1.36) . "\n";
echo compareFloats(2, 2.35) . "\n";
echo compareFloats(3.567, 2.567) . "\n";
echo "Test function arrayEquals." . "\n";
echo arrayEquals(["a"], ["b"]) . "\n";
echo arrayEquals(["a", "b"], ["b", "a"]) . "\n";
echo arrayEquals([], []) . "\n";
echo arrayEquals(["a", "b", "c"], ["b", "a"]) . "\n";
echo "Test function arrayNumberFilter" . "\n";
print_r(arrayNumberFilter([]));
print_r(arrayNumberFilter(["hello", 123, -5]));