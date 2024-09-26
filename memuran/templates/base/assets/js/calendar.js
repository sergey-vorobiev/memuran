$(() => {
    initCalendar();
});

function initCalendar() {
    const $selectYear = $(".js-select-year"),
        $calendar = $(".year-calendar");

    $selectYear.on("change", function(){
        const $this = $(this);

        $.ajax({
            url: "/api/calendar.php",
            method: "POST",
            data: {year: $this.val()},
            success: function (response){
                $calendar.html(response);
            },
            error: function (error){
                console.error(error.responseJSON.message);
            }
        });
    });

    $selectYear.change();
}