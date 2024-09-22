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
