<?php
function displayCurrentTime() {
    echo "Current time is now 1111: " . date("Y-m-d H:i:s");
}

function displayOnlyTime() {
    echo "Current time is 3333: " . date("H:i:s");
}

function displayCurrentMonth() {
    echo "Current month is: " . date("F");
}

displayCurrentTime();
displayOnlyTime();
displayCurrentMonth();
?>