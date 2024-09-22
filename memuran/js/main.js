$(() => {
    initTableWrapper();
});

// Функции для оборачивания таблиц
function initTableWrapper(){
    $("table").each(function (){
        const $table = $(this);

        $table.addClass("table");

        if($table.parent().is("div") && $table.parent().attr("class") === undefined){
            $table.unwrap();
        }

        if(!$table.parent().hasClass("table-wrapper")){
            $table.wrap('<div class="table-wrapper"></div>');
        }
    });
}