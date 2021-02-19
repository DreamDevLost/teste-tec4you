require("./bootstrap");
var $ = require("jquery");
window.$ = $;
window.jQuery = $;
require("bootstrap/dist/js/bootstrap.bundle");

window.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        jQuery(".alert").alert("close");
    }, 2000);
});
