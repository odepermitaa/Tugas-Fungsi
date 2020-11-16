<?php

function kelipatan($a) {
    if ($a <= 50) {
        echo "$a\n";
        kelipatan($a + 4);
    }
}

kelipatan(4);

?>