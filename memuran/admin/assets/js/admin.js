// Авторизация
$(() => {
    initAuth();
});

function initAuth() {
    const $form = $(".form-auth");

    $form.on("submit", function(event){
        event.preventDefault();
        const $this = $(this);

        $.ajax({
            url: $this.attr("action"),
            method: $this.attr("method"),
            data: $this.serialize(),
            dataType: "json",
            success: function (){
                location.reload();
            },
            error: function (error){
                console.error(error.responseJSON.message);
            }
        });
    });
}

// Дашборд
const navItems = $(".admin__nav-item");

navItems.on("click", function(e) {
    if(!$(this).hasClass("admin__nav-item--active")) {
        navItems.removeClass("admin__nav-item--active");
        $(this).addClass("admin__nav-item--active");
    }
})
