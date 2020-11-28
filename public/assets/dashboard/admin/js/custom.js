$('#manual-ajax').click(function(event) {
    event.preventDefault();
    this.blur(); // Manually remove focus from clicked link.
    $.get(this.href, function(html) {
        $(html).appendTo('body').modal();
    });
});

//appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$(".open").on("click", function() {
    $(".popup-overlay, .popup-content").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close, .popup-overlay").on("click", function() {
    $(".popup-overlay, .popup-content").removeClass("active");
});