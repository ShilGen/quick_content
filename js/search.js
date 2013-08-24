if (!document.head) document.head = document.getElementsByTagName('head')[0];
var css = document.createElement("style");
document.head.appendChild(css);

function search() {
    Time = new Date().getTime();
    var selector = '';
    var keywords = document.getElementById('searchBox').value.toLowerCase().split(' ').filter(Boolean);
    for (var i = 0; i < keywords.length; i++)
    selector += (i ? ',' : '') + 'div:not([index*="' + keywords[i] + '"])';
    if (selector) css.innerHTML = selector + '{display: none;}';
    else css.innerHTML = "";
    ms.innerHTML = new Date().getTime() - Time + 'ms';
}

$(document).ready(function () {
    ms = document.getElementById('time');
    $('div').each(function (key, value) {
        $(value).attr('index', $(this).text().toLowerCase());
    });
    $("#searchBox").keyup(search);
});
