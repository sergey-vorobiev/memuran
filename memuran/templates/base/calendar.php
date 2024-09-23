<?php include_once "include/header.php"; ?>
<?php
function draw_calendar($month, $year) {
    $daysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $daysInMonth = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'] == 0 ? 7 : $dateComponents['wday']; // коррекция на понедельник
    $calendar = '<div class="calendar"><table>';
    $calendar .= '<caption>' . $monthName . ' ' . $year . '</caption>';
    $calendar .= '<tr>';

    // Заголовок с днями недели
    foreach ($daysOfWeek as $day) {
        $calendar .= '<th>' . $day . '</th>';
    }
    $calendar .= '</tr><tr>';

    // Пустые ячейки до первого дня месяца
    if ($dayOfWeek > 1) {
        $calendar .= str_repeat('<td></td>', $dayOfWeek - 1);
    }

    $currentDay = 1;
    while ($currentDay <= $daysInMonth) {
        // Если неделя полная (7 дней), начинаем новую строку
        if ($dayOfWeek > 7) {
            $calendar .= '</tr><tr>';
            $dayOfWeek = 1;
        }
        $calendar .= '<td>' . $currentDay . '</td>';
        $currentDay++;
        $dayOfWeek++;
    }

    // Заполняем оставшиеся ячейки в конце месяца
    if ($dayOfWeek != 1) {
        $remainingDays = 7 - $dayOfWeek + 1;
        $calendar .= str_repeat('<td></td>', $remainingDays);
    }

    $calendar .= '</tr>';
    $calendar .= '</table></div>';
    return $calendar;
}

$year = date('Y');
for ($month = 1; $month <= 12; $month++) {
    echo draw_calendar($month, $year);
}
?>
<?php include_once "include/footer.php"; ?>
