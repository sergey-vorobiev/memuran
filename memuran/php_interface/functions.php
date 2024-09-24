<?php

/** Функция отладки */
function debug(&$mxData, $bAccess = true)
{
    global $USER;
    if(!$bAccess && !$USER->IsAdmin()) return;
    echo '<div class="debugger">';
    echo "<pre>" . print_r($mxData, true) . "</pre>";
    echo "<div>";
    die();
}

/** Функция построения календарного месяца */
function getDaysOfMonth($iActiveDay, $sMonth, $sYear, $arActiveDay)
{
    // Получение количества дней в месяце и номер дня недели
    $iDaysInMonth = date("t", mktime(0, 0, 0, $sMonth, 1, $sYear));
    $iFirstDayOfWeek = date("w", mktime(0, 0, 0, $sMonth, 1, $sYear));
    if ($iFirstDayOfWeek == 0) $iFirstDayOfWeek = 7;

    // Получение количества дней в предыдущем и следующем месяцах
    $iPrevMonth = $sMonth - 1;
    $iPrevYear = $sYear;
    if ($iPrevMonth == 0) {
        $iPrevMonth = 12;
        $iPrevYear--;
    }
    $iNextMonth = $sMonth + 1;
    $iNextYear = $sYear;
    if ($iNextMonth == 13) {
        $iNextMonth = 1;
        $iNextYear++;
    }
    $daysInPrevMonth = date("t", mktime(0, 0, 0, $iPrevMonth, 1, $iPrevYear));
    $daysInNextMonth = date("t", mktime(0, 0, 0, $iNextMonth, 1, $iNextYear));

    // Считаем количество мест в календаре
    $iAllPlaces = ceil(($iDaysInMonth + $iFirstDayOfWeek - 1) / 7) * 7;

    // Получение текущей даты
    $iCurrentDayOfMonth = $iActiveDay;

    // Составляем календарь
    $sHTML = '<div class="weeks">';

    $iCurrentDay = 1;
    $iWeekCount = 1;

    for ($i = 1; $i <= $iAllPlaces; $i++) {
        if (($i % 7) == 1) {
            $sHTML .= '<div class="week-' . $iWeekCount . '">';
            $iWeekCount++;
        }

        $iDayOfWeek = $i % 7;
        if ($iDayOfWeek == 0) $iDayOfWeek = 7;

        if ($i < $iFirstDayOfWeek) {
            $sHTML .= '<div class="day last-month"><span>' . str_pad($daysInPrevMonth - ($iFirstDayOfWeek - $i - 1), 2, '0', STR_PAD_LEFT) . '</span></div >';
        } elseif ($iCurrentDay <= $iDaysInMonth) {
            $sClassActive = $iCurrentDay == $iCurrentDayOfMonth ? "active" : "";
            if ($iDayOfWeek == 6 || $iDayOfWeek == 7) {
                $sClassActive .= " weekend";
            }
            if (mb_substr($sYear, -2) == date("y") && str_pad($sMonth, 2, '0', STR_PAD_LEFT) === date("m") && $iCurrentDay < date("d")) {
                $sClassActive .= " last-day";
            }
            if (in_array($iCurrentDay, $arActiveDay) && !str_contains($sClassActive, "last-day")) {
                $sClassActive .= " event";
            }
            $sHTML .= '<div class="day' . $sClassActive . '"><span>' . $iCurrentDay . '</span>';
            $sHTML .= '</div >';
            $iCurrentDay++;
        } else {
            $sHTML .= '<div class="day next-month"><span>' . ($iCurrentDay - $iDaysInMonth) . '</span></div >';
            $iCurrentDay++;
        }

        if (($i % 7) == 0) {
            $sHTML .= '</div>';
        }
    }
    $sHTML .= '</div>';
    return $sHTML;
}