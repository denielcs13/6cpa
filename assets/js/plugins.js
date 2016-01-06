// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


(function ($, window, undefined) {
    
    // Apply focus properly when accessing internal links with keyboard in WebKit browsers.
    // https://code.google.com/p/chromium/issues/detail?id=262171
    $("a[href^='#']").not("a[href='#']").click(function() {
        $("#"+$(this).attr("href").slice(1)+"").attr("tabindex","-1").focus();
    });
    
})(jQuery, window);