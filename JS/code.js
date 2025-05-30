$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#change');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $('.nav-cust').css('background-color', 'rgba(0, 64, 123, 0.9)');
            } else {
                $('.nav-cust').css('background-color', 'red');
            }
        })
    }
})

const setLabel = (lbl, val) => {
    const label = $(`#slider-${lbl}-label`);
    label.text(val);
    const slider = $(`#slider-div .${lbl}-slider-handle`);
    const rect = slider[0].getBoundingClientRect();
    label.offset({
        top: rect.top - 30,
        left: rect.left
    });
}

const setLabels = (values) => {
    setLabel("min", values[0]);
    setLabel("max", values[1]);
}


$('#ex2').slider().on('slide', function (ev) {
    setLabels(ev.value);
});
setLabels($('#ex2').attr("data-value").split(","));

