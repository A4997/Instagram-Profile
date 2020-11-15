$('document').ready(function () {
function IsValidImageUrl(url) {
$("$uaer", {
    src: url,
    error: function() { alert(url + ': ' + false); },
    load: function() { alert(url + ': ' + true); }
});
}
});
