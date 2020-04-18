<?php

function calculateInterest($value, $days, $percent)
{
    return round($value * (1 + ((($percent / 30) * $days) / 100)), 2);
}

function calculatePaymentOfLine($value, $percent)
{
    return round($value * (1 + ($percent / 100)), 2);
}
