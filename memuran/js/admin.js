$(() => {
    initAuth();
});

function initAuth() {
    const $form = $(".form-auth");

    $form.on("submit", function(event){
        event.preventDefault();
        let $thisForm = $(this),
            formData = new FormData(this),
            showMore = $thisForm.attr("data-show-more");

        console.log(formData);

        $.ajax({
            method: "POST",
            data: {
                IS_AJAX: "Y",
                MONTH_ID: monthId,
                YEAR: year,
                DISPLAY_TYPE: displayType,
                IS_RELOAD_CALENDAR: isCalendarReload,
            },
            success: function (response){
                $contentChange.html(response);
                if(isCalendarReload) initDays();
                initHoverAllLink();
                initTableItemClick();
                initOpenBadge();
            },
            error: function (){
                console.log("Не удалось загрузить данные для календаря!");
            }
        });
    });
}