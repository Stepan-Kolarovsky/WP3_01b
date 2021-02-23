<?php

function getCarInfo(int $year):void {

    if ($year <= 1960) {
        echo "To je veterán!";
    } elseif ($year <= 1990) {
        echo "Auto by na silnici už být nemělo";
    } elseif ($year <= 2000) {
        echo "Budete platit velkou silniční daň i povinné ručení";
    } elseif ($year <= 2010) {
        echo "Navštěvujte servis pravidelně";
    } else {
        echo "Auto je způsobilé";
        }
}