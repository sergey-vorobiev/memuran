<?php include_once "include/header.php"; ?>
<section class="calendar">
    <div class="container">
        <div class="calendar__header">
            <div class="group-input">
                <label for="select-year" id="select-year"><strong>Год</strong></label>
                <select class="js-select-year">
                    <?php for($iYear = 2001; $iYear <= date("Y"); $iYear++): ?>
                        <option value="<?=$iYear?>" <?php if ($iYear === (int)date("Y")) echo('selected="selected"');?>><?=$iYear?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="group-input">
                <label for="select-category" id="select-category"><strong>Категория</strong></label>
                <select class="js-select-category">
                    <option value="">Путешествие</option>
                    <option value="">Мероприятия</option>
                    <option value="">Проекты</option>
                    <option value="">Интересные истории</option>
                    <option value="">Значимые события</option>
                </select>
            </div>
        </div>
    </div>
    <div class="year-calendar"></div>
</section>
<?php include_once "include/footer.php"; ?>
