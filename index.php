<?php
$result = 8;

if ($result >= 90 && $result <= 100) {
    echo "Grade: A+";
} elseif ($result >= 85) {
    echo "Grade: A";
} elseif ($result >= 70) {
    echo "Grade: B+";
} elseif ($result >= 75) {
    echo "Grade: B";
} elseif ($result >= 70) {
    echo "Grade: C";
} elseif ($result >= 65) {
    echo "Grade: C+";
} elseif ($result >= 60) {
    echo "Grade: D";
} elseif ($result >= 50) {
    echo "Grade: D+";
} elseif ($result < 50) {
    echo "Grade: F (Fail)";
} else {
    echo "Invalid Score";
}
?></50>