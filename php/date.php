<?php
/**
 * Format an interval to show all existing components.
 * If the interval doesn't have a time component (years, months, etc)
 * That component won't be displayed.
 *
 * @param DateInterval $interval The interval
 *
 * @return string Formatted interval string.
 */
function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y anos "); }
    if ($interval->m) { $result .= $interval->format("%m meses "); }
    if ($interval->d) { $result .= $interval->format("%d dias "); }
    if ($interval->h) { $result .= $interval->format("%h horas "); }
    if ($interval->i) { $result .= $interval->format("%i minutos "); }
    if ($interval->s) { $result .= $interval->format("%s segundos "); }

    return $result;
}
?>