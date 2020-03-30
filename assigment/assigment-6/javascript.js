var i = 4;
var timer = setInterval(function () {
    if (i == 0) {
        $("#time").show();
        clearInterval(timer);
    }
    i--;
}, 1)