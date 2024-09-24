<?php
$arMonth = ["янв", "фев", "мар", "апр", "май", "июн", "июл", "авг", "сен", "окт", "ноя", "дек"];
?>
<?php include_once "include/header.php"; ?>
<div class="year-calendar">
    <?php for ($iMonth = 1; $iMonth <= 4; $iMonth++): ?>
    <ul class="day-week">
        <li>Пн</li>
        <li>Вт</li>
        <li>Ср</li>
        <li>Чт</li>
        <li>Пт</li>
        <li>Сб</li>
        <li>Вс</li>
    </ul>
    <?php endfor; ?>
    <?php for ($iMonth = 1; $iMonth <= 12; $iMonth++): ?>
        <div class="month-calendar">
            <div class="month-title">
                <?= $arMonth[$iMonth - 1]?>
            </div>
            <?= getDaysOfMonth("", $iMonth, "2024", array()) ?>
        </div>
    <?php endfor; ?>
</div>
<?php include_once "include/footer.php"; ?>
