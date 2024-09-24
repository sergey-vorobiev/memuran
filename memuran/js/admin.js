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
const navItems = document.querySelectorAll(".admin__nav-item");

console.log(navItems);

navItems.forEach((navItem, i) => {
    navItem.addEventListener("click", () => {
        navItems.forEach((item, j) => {
            item.className = "admin__nav-item";
        });
        navItem.className = "admin__nav-item--active";
    });
});

