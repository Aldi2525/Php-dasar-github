<?php
$grade = 20;
if (($grade >= 90) && ($grade >= 100)) {
    echo " $grade = A";
} elseif ($grade >= 80) {
        echo " $grade = B";

    } elseif ( $grade >= 70) {
        echo " $grade = C";

    } elseif ( $grade >= 60) {
        echo " $grade = D";

    } elseif (( $grade >= 0) && ($grade < 60)) {
        echo " $grade = E";

} else {
    echo "Tidak dapat nilai";
}