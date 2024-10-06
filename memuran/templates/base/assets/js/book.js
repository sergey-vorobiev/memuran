$(() => {
    initFlipBook();
});

function initFlipBook() {
    const $pages = $(".page");

    $pages.each(function(i) {
        const $this = $(this);

        if (i % 2 === 0) {
            $this.css("zIndex", $pages.length - i);
        }
    });

    $pages.each(function(i) {
        const $this = $(this);

        $this.data("pageNum", i + 1);

        $this.on("click", function() {
            if ($this.data("pageNum") % 2 === 0) {
                $this.removeClass("flipped");
                $this.prev().removeClass("flipped");
            } else {
                $this.addClass("flipped");
                $this.next().addClass("flipped");
            }
        });
    });
}